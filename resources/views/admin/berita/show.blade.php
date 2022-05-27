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
                        <div class="col-lg-9 stretch-card grid-margin">
                            <div class="card">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-sm-4 grid-margin">
                                    <div class="position-relative">
                                      <div class="rotate-img">
                                        <img
                                          src="{{ $berita->image }}"
                                          alt="thumb"
                                          class="img-fluid"
                                        />
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-8  grid-margin">
                                    <h2 class="mb-2 font-weight-600">
                                        {{ $berita->judul }}
                                    </h2>
                                    <div class="fs-13 mb-2">
                                      <span class="mr-2">Photo </span>10 Minutes ago
                                    </div>
                                    <p class="mb-0">
                                        {{ $berita->isi }}
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
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
