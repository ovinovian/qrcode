<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class HomeController extends Controller
{
    public function landing_page() 
    {
        return view('landing_page');
    }

    public function tiket_registrasi()
    {
        $pdf = PDF::loadview('cetak_tiket_registrasi', [
        ]);
        return $pdf->stream();
    }
}
