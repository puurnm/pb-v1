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
                        <strong>Edit Berita</strong>
                    </div>

                    <div class="card-body">
                        <form class="needs-validation" action="{{ route('news.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-sm-10">
                                <label for="judul">Judul :</label>
                                <input type="hidden" id="id" name="id" value="{{ $berita->id_berita }}">
                                <input type="text" class="form-control" id="judul" name="judul" value="{{ $berita->judul }}" placeholder="Judul">
                            </div>
                            <div class="form-group col-sm-10">
                                <label for="isi">Isi :</label>
                                <textarea class="form-control" name="isi" id="summernote" rows="10" value="{{ $berita->isi }}" placeholder="Isi">{{ $berita->isi }}</textarea>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="image">Gambar :</label>
                                <input type="file" class="form-control-file" id="image" name="image" value="{{ $berita->image }}">
                            </div>
                            <div class="form-group col-sm-10">
                                <label for="id_kategori">Kategori Berita :</label>
                                <select name="id_kategori" id="id_kategori" class="form-control">
                                    <option value="" selected disabled>Pilih Kategori</option>
                                    @foreach($kategori as $kategori)
                                    <option value="{{ $kategori->id_kategori }}">{{ $kategori->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="card-footer">
                                <div class="form-group col-sm-12">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="{{ route('berita.index') }}" class="btn btn-secondary">Cancel</a>
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
