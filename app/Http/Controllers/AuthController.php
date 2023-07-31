<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $users = User::all();
        $i = 0;
        return view('opds.index', compact('opds'));
    }
}
