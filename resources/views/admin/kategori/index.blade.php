@extends('layouts.app')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            <a>Kategori</a>
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
                        Kategori
                        @can('kategori-create')
                            <a class="float-right" href="{{ route('kategori.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                        @endcan
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-sm">
                            <table class="table table-striped" id="kategori-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kategori</th>
                                        <th colspan="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_kategori as $kategori)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $kategori->nama_kategori }}</td>
                                            <td>
                                                {!! Form::open(['route' => ['kategori.destroy', $kategori->id_kategori], 'method' => 'delete']) !!}
                                                <div class='btn-group'>
                                                    @can('kategori-edit')
                                                        <a href="{{ route('kategori.edit', [$kategori->id_kategori]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                                                    @endcan
                                                    @can('kategori-delete')
                                                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger show_confirm']) !!}
                                                    @endcan
                                                </div>
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $data_kategori->render() !!}
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
