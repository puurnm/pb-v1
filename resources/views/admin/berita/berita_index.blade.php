@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box-body">

        <a href="{{ url(" class="btn btn-flat btn-primary" style="
        margin: bottom 10px;">Tambah Berita</a>

        <table class="table table-stripped myTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $e=>$dt)
                <tr>
                    <td>{{ $e+1 }}</td>
                    <td>{{ $dt->judul }}</td>
                    <td>{{ $dt->name }}</td>
                    <td>{{ $dt->created_at }}</td>
                </th>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
</div>
</dic>

@endsection