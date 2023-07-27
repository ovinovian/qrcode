<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OPDController extends Controller
{
    public function index()
    {
      return view('opds.index');
    }
}
