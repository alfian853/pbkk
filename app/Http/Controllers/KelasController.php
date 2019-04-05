<?php

namespace App\Http\Controllers;

use App\Matkul;
use Illuminate\Http\Request;
use App\Kelas;
use App\Dosen;
use App\MhsKelas;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function index()
    {
//        $kelas = DB::table('kelases')->get();//->join('dosens','mhs.nipdosenwali','=','dosens.nip')->get();
        $kelas = Kelas::all();//DB::table('mhs')->join('dosens','mhs.nipdosenwali','=','dosens.nip')->get();
//            dd($kelas);
        return view ('kelas.index',compact('kelas'));
    }

    public function create()
    {
        $dsn = Dosen::pluck('namadosen','nip');
        $matkul = Matkul::pluck('nama','kode_matkul');
        return view ('kelas.create',compact('dsn','matkul'));
    }

    public function isikelas($kode_kelas)
    {
        $data = DB::table('mhs_kelas')->where('kode_kelas', '=', $kode_kelas)->get( );
        //dd($data);
        return view ('kelas.isikls',compact('data'));
    }

    public function isinilai(Request $request,$kode_kelas, $nrp_mhs)
    {
        $data = DB::table('mhs_kelas')->where('kode_kelas', '=', $kode_kelas)
                ->where('nrp_mhs', '=', $nrp_mhs)->get();

        return view ('kelas.isinilai',compact('data'));
    }

    public function updatenilai(Request $request,$kode_kelas, $nrp_mhs)
    {
        $data = DB::table('mhs_kelas')->where('kode_kelas', '=', $kode_kelas)
                ->where('nrp_mhs', '=', $nrp_mhs)->update(['nilai'=>$request['nilai']]);
        return view ('kelas.isinilai',compact('data'));
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
