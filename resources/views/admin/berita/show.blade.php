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
            <a>Detail</a>
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
                        <i class="fa fa-info"></i>
                        <strong>Detail</strong>
                    </div>

                    <div class="card-body">
                        <!-- Name Field -->
                        <div class="form-group">
                            {!! Form::label('judul', 'Judul :') !!}
                            <p>{{ $berita->judul }}</p>
                        </div>

                        <!-- Email Field -->
                        <div class="form-group">
                            {!! Form::label('isi', 'Isi :') !!}
                            <p>{{ $berita->isi }}</p>
                        </div>

                        <!-- Role Field -->
                        <div class="form-group">
                            {!! Form::label('image', 'Gambar :') !!}
                            <p>
                                <img src="{{ $berita->image }}" width="150px">
                            </p>
                        </div>

                        <div>
                            <a class="float-left" href="{{ route('berita.index') }}"><i class="fa fa-arrow-left fa-lg" style="color: black"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
