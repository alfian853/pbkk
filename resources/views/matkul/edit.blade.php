@extends('layouts.app')
@section('content')
    <div class="container">	<div class="row"><div class="col-md-12">
                <h3>Tabel Mahasiswa Edit</h3>
                <div class="panel panel-default"><div class="panel-body">
                        <form action="{{route('matkul.update', $m->id)}}" method="post">
                            <input name="_method" type="hidden" value="PATCH">
                            {{csrf_field()}}
                            <div class="form-group{{ $errors->has('kode_matkul') ? ' has-error' : '' }}">
                                <input type="text" name="kode_matkul" class="form-control" placeholder="kode_matkul" value="{{$m->kode_matkul}}">
                                {!! $errors->first('kode_matkul', '<p class="help-block">:message</p>') !!}
                            </div>

                            <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{$m->nama}}">
                                {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                                <input type="text" name="deskripsi" class="form-control" placeholder="deskripsi" value="{{$m->deskripsi}}">
                                {!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Simpan"></div>
                        </form>
                    </div></div></div></div></div>
@endsection
