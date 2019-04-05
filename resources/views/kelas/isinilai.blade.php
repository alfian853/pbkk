@extends('layouts.app')
@section('title')
    Ambil Matkul
@endsection
@section('content')
<div class="panel panel-default">
    <div class="panel-body">
        <h4><i class="fa fa-check-square">
        </i> Isi Nilai </h4><hr>
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
            <form action="{{Request::url()}}" method="post">
              {{csrf_field()}}
              <div class="form-group">
                {!! Form::label('nilai', 'Nilai') !!}
                {!! Form::text('nilai',null, array('class' => 'form-control','placeholder'=>'Nilai')) !!}
              </div>
              {!! Form::button('<i class="fa fa-check-square"></i>'. ' Update', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}

            </form>
        </div>
    </div></div></div></div></div></div>
@endsection
