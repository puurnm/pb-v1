@extends('layouts.app')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('news.index') }}">Berita</a>
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
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-sm-10 grid-margin text-center">
                                        <img src="{{ $berita->image }}" alt="banner" class="img-fluid" />
                                    </div>
                                    <div class="col-sm-10 grid-margin">
                                        <h2 class="font-weight-600 mb-2">
                                            {{ $berita->judul }}
                                        </h2>
                                        <p class="fs-13 text-muted mb-0">
                                            <span class="mr-2">
                                            @php
                                                echo Carbon\Carbon::parse($berita->created_at)->isoFormat('D MMM Y');
                                            @endphp
                                        </p>
                                        <p class="fs-15">
                                            {!! $berita->isi !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <a class="float-left" href="{{ route('news.index') }}"><i class="fa fa-arrow-left fa-lg" style="color: black"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
