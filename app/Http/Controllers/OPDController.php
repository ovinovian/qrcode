<?php

namespace App\Http\Controllers;

use App\Models\Opd;
use Illuminate\Http\Request;

class OpdController extends Controller
{
    public function index()
    {
        $opds = Opd::all();
        $i = 0;
        return view('opds.index', compact('opds'));
    }

    public function create()
    {
        return view('opds.create');
    }

    public function store(Request $request)
    {
        $validasi = request()->validate([
            'nama_opd' => 'required',
        ]);

        Opd::create($validasi);
        return redirect()->route('opds.index')
                        ->with('success','OPD berhasil ditambahkan.');
    }

    public function show(Opd $opd)
    {
        return view('opds.show',compact('opd'));
    }

    public function edit(Opd $opd)
    {
        return view('opds.edit',compact('opd'));
    }

    public function update(Request $request, Opd $opd)
    {
        request()->validate([
            'nama_opd' => 'required',
        ]);
        
        $opd->fill($request->post())->save();
        return redirect()->route('opds.index')
                        ->with('success','OPD berhasil diubah');
    }

    public function destroy(Opd $opd)
    {
        $opd->delete();

        return redirect()->route('opds.index')
                        ->with('success','OPD berhasil dihapus');
    }
}
