<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    public function index()
    {
      return view('qrcode');
    }

    public function scan_qr()
    {
      return view('scan_qr');
    }
}
