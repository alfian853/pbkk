@extends('layouts.app')
@section('content')
    <div class="container"><div class="row"><div class="col-md-12">
                <h3>Tabel Matkul</h3>
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if(Session::has('alert-success'))
                            <div class="alert alert-success">
                                {{ Session::get('alert-success') }}
                            </div>
                        @endif
                        <a href="{{route('matkul.create')}}" class="btn btn-info pull-right">Tambah Data</a><br><br>
                            <table class="table table-striped">
                                <tr><th>NO</th><th>kode</th><th>Nama</th><th>deskripsi</th><th>Action</th></tr>
                                <?php $no=1; ?>
                                @foreach($matkul as $m)
                                    <tr><td>{{$no++}}</td><td>{{$m->kode}}</td><td>{{$m->nama}}</td><td>{{$m->deskripsi}}</td><td>
                                        <form method="POST" action="{{ route('matkul.destroy', $m->id) }}" accept-charset="UTF-8">
                                            <input name="_method" type="hidden" value="DELETE">
                                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                            <a href="{{route('matkul.edit', $m->id)}}" class="btn btn-primary">Edit</a>
                                            <input type="submit" class="btn btn-danger"
                                                   onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
                                        </form></td></tr>
                                @endforeach
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
