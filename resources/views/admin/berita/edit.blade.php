@extends('layouts.admin')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('berita.index') }}">Berita</a>
        </li>
        <li class="breadcrumb-item active">
            <a>Edit</a>
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
                        <i class="fa fa-edit fa-lg"></i>
                        <strong>Edit Role</strong>
                    </div>

                    <div class="card-body">
                        {!! Form::model($berita, ['route' => ['berita.update', $berita->id_berita], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

                        <!-- Judul Field -->
                        <div class="form-group col-sm-10">
                            {!! Form::label('judul', 'Judul :') !!}
                            {!! Form::text('judul', null, ['placeholder' => 'Judul', 'class' => 'form-control']) !!}
                        </div>

                        <!-- Isi Field -->
                        <div class="form-group col-sm-10">
                            {!! Form::label('isi', 'Isi :') !!}
                            {!! Form::textarea('isi', null, ['placeholder' => 'Isi', 'class' => 'form-control']) !!}
                        </div>

                        <!-- Gambar Field -->
                        <div class="form-group col-sm-10">
                            {!! Form::label('image', 'Gambar :') !!}
                            {!! Form::file('image', ['placeholder' => 'Gambar', 'class' => 'form-control-file']) !!}
                        </div>

                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{{ route('berita.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
