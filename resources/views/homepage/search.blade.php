@extends('layouts.homepage')

@section('content')
<div class="flash-news-banner">
    <div class="container">
      <div class="d-lg-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <span class="mr-3 text-danger">
                <?php
                echo Carbon\Carbon::now()->isoFormat('dddd, D MMM Y');
                ?>
            </span>
        </div>
        <div class="d-flex">
            <!-- Start kode untuk form pencarian -->
            <form class="form" method="get" action="{{ route('search') }}">
                <div class="form-group w-100 mb-3">
                    <label for="search" class="d-block mr-2">Pencarian</label>
                    <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
                    <button type="submit" class="btn btn-primary mb-1">Cari</button>
                </div>
            </form>
            <!-- Start kode untuk form pencarian -->
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
        </div>
      </div>
    </div>
</div>
  <div class="content-wrapper">
    <div class="container">
      <div class="col-sm-12">
        <div class="card" data-aos="fade-up">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <h1 class="font-weight-600 mb-4">
                  BERITA
                </h1>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8">
                  @foreach ($beritas as $e => $berita)
                  <div class="row">
                    <div class="col-sm-4 grid-margin">
                      <div class="rotate-img">
                        <img
                          src="{{ $berita->image }}"
                          alt="banner"
                          class="img-fluid"
                        />
                      </div>
                    </div>
                    <div class="col-sm-8 grid-margin">
                      <h2 class="font-weight-600 mb-2">
                        <a href="{{ route('berita.show', [$berita->slug]) }}">{{ $berita->judul }}</a>
                      </h2>
                      <p class="fs-13 text-muted mb-0">
                        <span class="mr-2"></span>{{ date('M j, Y', strtotime($berita->created_at)) }}
                      </p>
                      <p class="fs-15">
                        <strong>{{ $berita->penulis }}</strong> - {{ substr(strip_tags($berita->isi), 0, 200) }}
                        @if (strlen(strip_tags($berita->isi)) > 200)
                          ... <a href="{{ route('berita.show', [$berita->slug]) }}">Read More</a>
                        @endif
                      </p>
                    </div>
                  </div>
                  @endforeach
                  <div class="text-center">
                    {!! $beritas->render() !!}
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
