@extends('app')
@section('title')
    Data Kelas
@endsection
@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <h4><i class="fa fa-user"></i></h4><hr>
            <div class=row><div class="col-md-6">
                    <a href="/kelas/create" class="btn btn-primary">
                        <i class="fa fa-plus-circle"></i> Tambah Data</a>
                </div><div class="col-md-2"></div><div class="col-md-4">
                </div>
            </div>
            <br>
            @if(count($data))
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover table-condensed tfix">
                        <thead align="center">
                        <tr>
                            <td><b>Kode Kelas</b></td><td><b>Nilai Mahasiswa</b></td>
                            <td><b>NRP Mahasiswa</b></td>
                            <td colspan="2"><b>MENU</b></td>
                        </tr>
                        </thead>
                            @foreach($data as $k)
                            <tr>
                                <td>{{ $k->kode_kelas }}</td>
                                <td>{{ $k->nilai }}</td>
                                <td>{{ $k->nrp_mhs}}</td><td align="center" width="30px">
                                    <a href="/kelas/{{$k->kode_kelas}}/isinilai/{{$k->nrp_mhs}}" class="btn btn-warning btn-sm" role="button"><i class="fa fa-pencil-square"></i> Edit</a>
                                </td>
                                <td align="center" width="30px">
                                    {!! Form::open(array('route' => array('mhs.destroy', $k->kode_kelas),
                                             'method' => 'delete','style' => 'display:inline')) !!}
                                    <button class='btn btn-sm btn-danger delete-btn' type='submit'>
                                        <i class='fa fa-times-circle'></i> Delete </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                    </table>
                </div>
            @else
                <div class="alert alert-warning">
                    <i class="fa fa-exclamation-triangle"></i> Data Mahasiswa belum ada
                </div>
            @endif
        </div></div>
@endsection
