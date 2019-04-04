<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Dosen;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();//DB::table('mhs')->join('dosens','mhs.nipdosenwali','=','dosens.nip')->get();
//            dd($kelas);
        return view ('kelas.index',compact('kelas'));
    }

    public function create()
    {
        $dsn = Dosen::pluck('namadosen','nip');
        $matkul = Dosen::pluck('nama','kode');
        return view ('kelas.create',compact('dsn','matkul'));

    }

    public function store(Request $request)
    {
        kelas::create($request->all());
        return redirect('/kelas');
    }


    public function show($id){}

    public function edit($id)
    {

        $kelasnya    = kelas::findorfail($id);
        $dosennya  = Dosen::pluck('namadosen','nip');
        return view('kelas.edit',compact('kelasnya','dosennya'));
    }

    public function update(Request $request, $id)
    {
        $kelasnya = kelas::findorfail($id);
        $kelasnya->update($request->all());
        return redirect('/kelas');

    }
    public function destroy($id){
        $m = kelas::findOrFail($id);
        $m->delete();
        return redirect()
            ->route('kelas.index')
            ->with('alert-success', 'Data Berhasil Dihapus.');
    }


}
