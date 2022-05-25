@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box-body">
            <a class="btn btn-flat btn-primary" style="margin: bottom 10px;" href="{{ route('berita.create') }}">Tambah Berita</a>
            <table class="table table-stripped myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Gambar</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $e=>$dt)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $dt->judul }}</td>
                        <td>{{ $dt->isi }}</td>
                        <td>{{ $dt->gambar }}</td>
                        <td>{{ $dt->created_at }}</td>
                    </th>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
