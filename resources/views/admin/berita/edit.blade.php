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

                        <!-- Name Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('judul', 'Name :') !!}
                            {!! Form::text('judul', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                        </div>

                        <!-- Name Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('isi', 'Name :') !!}
                            {!! Form::text('isi', null, ['placeholder' => 'Name', 'class' => 'form-control', 'id' => 'summernote']) !!}
                        </div>

                        <!-- Name Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('image', 'Name :') !!}
                            {!! Form::file('image', ['placeholder' => 'Name', 'class' => 'form-control']) !!}
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
