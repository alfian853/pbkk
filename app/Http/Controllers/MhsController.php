<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mhs;
use App\Dosen;
use Illuminate\Support\Facades\DB;
class mhsController extends Controller
{
    public function index()
    {
        $mhs = Mhs::all();//DB::table('mhs')->join('dosens','mhs.nipdosenwali','=','dosens.nip')->get();
        return view ('mhs.index',compact('mhs'));
    }

    public function create()
    {
        $dsn = dosen::pluck('namadosen','nip');
        return view ('mhs.create',compact('dsn'));

    }

    public function store(Request $request)
    {
        mhs::create($request->all());
        return redirect('/mhs');
    }


    public function show($id){}

    public function edit($id)
    {

        $mhsnya    = Mhs::findorfail($id);
        $dosennya  = Dosen::pluck('namadosen','nip');
        return view('mhs.edit',compact('mhsnya','dosennya'));
    }

    public function update(Request $request, $id)
    {
        $mhsnya = mhs::findorfail($id);
        $mhsnya->update($request->all());
        return redirect('/mhs');

    }
    public function destroy($id){
        $m = Mhs::findOrFail($id);
        $m->delete();
        return redirect()
            ->route('mhs.index')
            ->with('alert-success', 'Data Berhasil Dihapus.');
    }


}
