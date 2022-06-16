@extends('layouts.app')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            <a>Berita</a>
        </li>
    </ol>
</nav>
@endsection

@section('content')
<div class="container-fluid">
    <div class="animated fadeIn">
        @include('flash::message')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i>
                        Berita
                        @can('berita-create')
                            <a class="float-right" href="{{ route('news.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                        @endcan
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-sm">
                            <table class="table table-striped" id="beritas-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Penulis</th>
                                        <th colspan="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $e => $berita)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $berita->judul }}</td>
                                            <td>{{ $berita->nama_kategori }}</td>
                                            <td>{{ $berita->penulis }}</td>
                                            <td>
                                                {!! Form::open(['route' => ['news.destroy', $berita->id_berita], 'method' => 'delete']) !!}
                                                <div class='btn-group'>
                                                    <a href="{{ route('news.show', [$berita->id_berita]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                                                    @can('berita-edit')
                                                        <a href="{{ route('news.edit', [$berita->id_berita]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                                                    @endcan
                                                    @can('berita-delete')
                                                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger show_confirm']) !!}
                                                    @endcan
                                                </div>
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $data->render() !!}
                        </div>
                        <div class="pull-right mr-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
