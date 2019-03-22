@extends('layouts.app')
@section('content')
    <div class="container"><div class="row">
            <div class="col-md-12">
            <h3>Akademik:Tabel Mahasiwa</h3>
                <div class="panel panel-default"><div class="panel-body">
                        <form action="{{route('mhs.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group{{ $errors->has('nrp') ? ' has-error' : '' }}">
                                <input type="text" name="nrp" class="form-control" placeholder="Nrp">
                                {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group{{ $errors->has('namamhs') ? ' has-error' : '' }}">
                                <input type="text" name="namamhs" class="form-control" placeholder="Nama">
                                {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('nipdosenwali', 'Dosen Wali') !!}
                                {!! Form::select('nipdosenwali', $dsn ,null , array('class' => 'form-control')) !!}
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Simpan"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
