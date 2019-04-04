@extends('app')
@section('title')
    Edit MahaSiswa
@endsection
@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <h4><i class="fa fa-check-square">
                </i> EDIT KELAS</h4><hr>
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            <i class="fa fa-cogs"></i> MENU MAHASISWA
                        </a>
                        <a href="/kelas" class="list-group-item">
                            <i class="fa fa-refresh"></i> Tampilkan Semua</a>
                        <a href="/" class="list-group-item">
                            <i class="fa fa-home"></i> Home</a>
                    </div>
                </div>
                {!!Form::model($kelasnya,['method'=>'PATCH',
                  'action'=>['KelasController@update',$kelasnya->kode_kelas]]) !!}
                <div class="form-group">
                    {!! Form::label('kode_kelas', 'kode_kelas') !!}
                    {!! Form::text('kode_kelas',null, array('class' => 'form-control','placeholder'=>'kode_kelas')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('nama', 'Nama Kelas') !!}
                    {!! Form::text('nama', null, array('class' => 'form-control','placeholder'=>'Nama kelas')) !!}
                </div><div class="form-group">
                {!! Form::label('nip_dosen', 'Dosen Pengajar') !!}
                {!! Form::select('nip_dosen', $dosennya ,null ,
                    array('class' => 'form-control')) !!}
                </div>
            </div>
            {!! Form::button('<i class="fa fa-check-square"></i>'. ' Update', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
            {!! Form::close()!!}
        </div></div></div></div></div></div>
@endsection
