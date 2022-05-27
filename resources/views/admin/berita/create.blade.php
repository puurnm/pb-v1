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
                        <form class="needs-validation" action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-sm-6">
                                <label for="judul">Judul :</label>
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="isi">Isi :</label>
                                <textarea class="form-control" name="isi" id="summernote" rows="10" placeholder="Isi"></textarea>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="image">Gambar :</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                            <div class="card-footer">
                                <div class="form-group col-sm-12">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="{{ route('role.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
