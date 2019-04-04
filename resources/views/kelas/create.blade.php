@extends('layouts.app')
@section('content')
    <div class="container"><div class="row">
            <div class="col-md-12">
            <h3>Akademik: Create Kelas</h3>
                <div class="panel panel-default"><div class="panel-body">
                        <form action="{{route('kelas.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group{{ $errors->has('kode_kelas') ? ' has-error' : '' }}">
                                <input type="text" name="kode_kelas" class="form-control" placeholder="Kode">
                                {!! $errors->first('kode_kelas', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group{{ $errors->has('namamhs') ? ' has-error' : '' }}">
                                <input type="text" name="nama" class="form-control" placeholder="Nama">
                                {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('kode_matkul', 'Dosen Wali') !!}
                                {!! Form::select('kode_matkul', $matkul ,null , array('class' => 'form-control')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('nipdosen', 'Dosen Wali') !!}
                                {!! Form::select('nip_dosen', $dsn ,null , array('class' => 'form-control')) !!}
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Simpan"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
