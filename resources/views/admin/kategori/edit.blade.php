@extends('layouts.admin')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('user.index') }}">Users</a>
        </li>
        <li class="breadcrumb-item active">
            <a>Edit</a>
        </li>
    </ol>
</nav>
@endsection

@section('content')
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                @if (count($errors) > 0)
                    <div class="alert alert-danger col-lg-12" role="alert">
                        <h4 class="alert-heading">Whoops!</h4>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-edit fa-lg"></i>
                        <strong>Edit Kategori</strong>
                    </div>

                    <div class="card-body">
                        {!! Form::model($kategori, ['route' => ['kategori.update', $kategori->id_kategori], 'method' => 'patch']) !!}

                        <!-- Nama Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('nama_kategori', 'Nama Kategori :') !!}
                            {!! Form::text('nama_kategori', null, ['placeholder' => 'Nama Kategori', 'class' => 'form-control', 'required']) !!}
                        </div>

                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
