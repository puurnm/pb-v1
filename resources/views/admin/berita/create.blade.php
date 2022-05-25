@extends('layouts.admin')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('berita.index') }}">Berita</a>
        </li>
        <li class="breadcrumb-item active">
            <a>Create</a>
        </li>
    </ol>
</nav>
@endsection

@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-plus-square fa-lg"></i>
                        <strong>Create New Berita</strong>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'berita.store', 'class' => 'needs-validation']) !!}

                        <!-- Nama Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('judul', 'Judul :') !!}
                            {!! Form::text('judul', null, ['placeholder' => 'Judul', 'class' => 'form-control', 'required']) !!}
                        </div>

                        <!-- Email Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('isi', 'Isi :') !!}
                            {!! Form::text('isi', null, ['placeholder' => 'Isi', 'class' => 'form-control', 'required']) !!}
                        </div>

                        <!-- Gambar Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('gambar', 'Gambar :') !!}
                            {!! Form::file('gambar', null, ['placeholder' => 'Gambar', 'class' => 'form-control', 'required']) !!}
                        </div>

                        <div class="card-footer">
                            <!-- Submit Field -->
                            <div class="form-group col-sm-12">
                                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                <a href="{{ route('berita.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>

                          {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
