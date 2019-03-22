<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matkul;

class MatkulController extends Controller
{
    function index(){
        $data['matkul'] = Matkul::all();
        return view('matkul.index',$data);
    }

    public function create(){
        return view('matkul.create');
    }
    public function store(Request $request){
        $m = new Matkul();
        $m->kode = $request->kode;
        $m->nama = $request->nama;
        $m->deskripsi = $request->deskripsi;
        $m->save();
        return redirect()->route('matkul.index')->with('alert-success', 'Data Berhasil Disimpan.');
    }
    public function show($id){}

    public function edit($id){
        $m = Matkul::findOrFail($id);
        return view('matkul.edit', compact('m'));
    }
    public function update(Request $request, $id){
        $m = Matkul::findOrFail($id);
        $m->kode = $request->kode;
        $m->nama = $request->nama;
        $m->deskripsi = $request->deskripsi;
        $m->save();
        return redirect()->route('matkul.index')->with('alert-success', 'Data Berhasil Diubah.');

    }
    public function destroy($id){
        $m = Matkul::findOrFail($id);
        $m->delete();
        return redirect()
            ->route('matkul.index')
            ->with('alert-success', 'Data Berhasil Dihapus.');
    }
}
