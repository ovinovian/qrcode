<?php

namespace App\Http\Controllers;

use App\Models\Opd;
use Illuminate\Support\Facades\DB;
use PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Peserta;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use App\Notifications\RegistrationTicket;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function landing_page() 
    {
        $provinsis = Provinsi::all();
        $opds = Opd::all();
        $sumPeserta = DB::table('pesertas')->count();
        $sumAbsen = DB::table('absens')->count();
        $sumTidakHadir = $sumPeserta - $sumAbsen;

        return view('landing_page', [
            'provinsis' => $provinsis,
            'opds' => $opds,
            'sumPeserta' => $sumPeserta,
            'sumAbsen' => $sumAbsen,
            'sumTidakHadir' => $sumTidakHadir
        ]);
    }

    public function registrasi(Request $request) 
    {
        // dd($request->all());
        $this->validate($request, [
            'nama' => 'required',
            'nik' => 'required',
            'email' => 'required|email:rfc,dns',
            'no_hp' => 'required',
            'id_provinsi' => 'required',
            'id_opd' => 'required',
        ],
        [
            'email.email' => 'Format Email harus sesuai'
        ]
        );

        $cek_nik = Peserta::where('nik', $request->nik)->count();
        $cek_email = Peserta::where('email', $request->email)->count();

        if($cek_email == 1 || $cek_nik == 1) {
            return redirect()->route('home')->with('error', 'Email atau NIK telah digunakan !');
        } else {
            $uuid_generate = Str::uuid();

            $save = Peserta::create([
                    'uuid' => $uuid_generate,
                    'nama' => $request->nama,
                    'nik' => $request->nik,
                    'email' => $request->email,
                    'no_hp' => $request->no_hp,
                    'id_provinsi' => $request->id_provinsi,
                    'id_opd' => $request->id_opd,
                    
            ]);

            if ($save) {
                $save->notify(new RegistrationTicket($save));
                return redirect()->route('home')->with('success', 'Mohon Cek Email Untuk e-Tiket Peserta');
            } else {
                return redirect()->route('home')->with('error', 'Data gagal disimpan');
            }

        }

        
    }

    public function tiket_registrasi($uuid)
    {
        $peserta = Peserta::where('uuid', $uuid)->first();
        $qrcode = base64_encode(QrCode::format('svg')->size(90)->errorCorrection('H')->generate($peserta->uuid));

        $provinsi = Provinsi::where('id', $peserta->id_provinsi)->first();
        $nama_provinsi = Str::title($provinsi->nama_provinsi);

        $opd = Opd::where('id', $peserta->id_opd)->first();

        $pdf = PDF::loadview('cetak_tiket_registrasi', [
            'peserta' => $peserta,
            'qrcode' => $qrcode,
            'nama_provinsi' => $nama_provinsi,
            'opd' => $opd
        ]);
        return $pdf->stream();
    }
}
