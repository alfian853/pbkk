@extends('layouts.app')
@section('content')
    <div class="container"><div class="row"><div class="col-md-12">
        <h3>Akademik:Tabel Matkul</h3>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="{{route('matkul.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group{{ $errors->has('kode') ? ' has-error' : '' }}">
                            <input type="text" name="kode" class="form-control" placeholder="kode">
                            {!! $errors->first('kode', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <input type="text" name="nama" class="form-control" placeholder="Nama">
                            {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="form-group{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                            <input type="text" name="deskripsi" class="form-control" placeholder="deskripsi">
                            {!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
