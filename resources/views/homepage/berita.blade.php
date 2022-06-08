@extends('layouts.homepage')

@section('content')
<div class="flash-news-banner">
    <div class="container">
      <div class="d-lg-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
          <span class="badge badge-dark mr-3">Flash news</span>
          <p class="mb-0">
            Lorem Ipsum has been the industry's standard dummy text ever
            since the 1500s.
          </p>
        </div>
        <div class="d-flex">
            <span class="mr-3 text-danger">
                <?php
                echo date('l, F d, Y');
                ?>
            </span>
          <span class="text-danger">30°C,London</span>
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
                        <span class="mr-2">{{ $berita->nama_kategori }} </span>{{ date('M j, Y', strtotime($berita->created_at)) }}
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
              <div class="col-lg-4">
                <h2 class="mb-4 text-primary font-weight-600">
                  Kategori
                </h2>
                <ul class="vertical-menu">
                    @foreach ($kategori as $e => $kategori)
                    <li>
                        <a href="{{ route('kategoriShow', [$kategori->id_kategori]) }}">{{ $kategori->nama_kategori }}</a>
                    </li>
                    @endforeach
                </ul>
                <div class="trending">
                  <h2 class="mb-4 text-primary font-weight-600">
                    Latest News
                  </h2>
                  @foreach ($latests as $e => $latest)
                  <div class="mb-4">
                    <div class="rotate-img">
                      <img
                        src="{{ $latest->image }}"
                        alt="banner"
                        class="img-fluid"
                      />
                    </div>
                    <h3 class="mt-3 font-weight-600">
                        <a href="{{ route('berita.show', [$berita->slug]) }}" style="color: black">{{ $latest->judul }}</a>
                    </h3>
                    <p class="fs-13 text-muted mb-0">
                      <span class="mr-2">{{ $latest->nama_kategori }} </span>{{ date('M j, Y', strtotime($berita->created_at)) }}
                    </p>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
