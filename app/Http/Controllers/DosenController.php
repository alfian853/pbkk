<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;

class DosenController extends Controller
{
    function index(){
        $dsn = dosen::all();
        return view('dosen.index',compact('dsn'));
    }

    public function create(){
        return view('dosen.create');
    }
    public function store(Request $request){
        Dosen::create($request->all());
        return redirect('/dosen');
    }
    public function show($id){}

    public function edit($id){
        $m = Dosen::findOrFail($id);
        return view('dosen.edit', compact('m'));
    }
    public function update(Request $request, $id){
        $m = Dosen::findOrFail($id);
        $m->nip = $request->nip;
        $m->nama = $request->nama;
        $m->alamat = $request->alamat;
        $m->save();
        return redirect()->route('dosen.index')->with('alert-success', 'Data Berhasil Diubah.');

    }
    public function destroy($id){
        $m = Dosen::findOrFail($id);
        $m->delete();
        return redirect()
            ->route('dosen.index')
            ->with('alert-success', 'Data Berhasil Dihapus.');
    }

}
