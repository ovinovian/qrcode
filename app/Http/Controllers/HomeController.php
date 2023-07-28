<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use PDF;

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

        $save = Peserta::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'id_provinsi' => $request->id_provinsi,
            'id_opd' => $request->id_opd,
        ]);

        if ($save) {
            return redirect()->route('home')->with('success', 'Data registrasi berhasil disimpan');
        } else {
            return redirect()->route('home')->with('error', 'Data gagal disimpan');
        }

        
    }

    public function tiket_registrasi()
    {
        $pdf = PDF::loadview('cetak_tiket_registrasi', [
        ]);
        return $pdf->stream();
    }
}
