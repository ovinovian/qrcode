<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Peserta;
use Illuminate\Http\Request;
use App\Notifications\RegistrationTicket;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function landing_page() 
    {
        return view('landing_page');
    }

    public function registrasi(Request $request) 
    {
        // dd($request->all());
        $this->validate($request, [
            'nama' => 'required',
            'nik' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'id_provinsi' => 'required',
            'id_opd' => 'required',
        ]);

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
        $pdf = PDF::loadview('cetak_tiket_registrasi', [
            'peserta' => $peserta,
            'qrcode' => $qrcode,
        ]);
        return $pdf->stream();
    }
}
