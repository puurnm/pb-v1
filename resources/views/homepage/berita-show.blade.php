@extends('layouts.homepage')

@section('content')
<div class="flash-news-banner">
    <div class="container">
        <div class="d-lg-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <span class="badge badge-dark mr-3">Export Go</span>
                <p class="mb-0">
                    Be the first, youngest, and foremost.
                </p>
            </div>
            <div class="d-flex">
                <span class="mr-3 text-danger">
                    @php
                        echo Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y');
                    @endphp
                </span>
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
                                        <span class="mr-2">{{ $berita->nama_kategori }}
                                        @php
                                            echo Carbon\Carbon::parse($berita->created_at)->isoFormat('D MMM Y');
                                        @endphp
                                    </p>
                                    <p class="fs-15">
                                        {!! $berita->isi !!}
                                    </p>
                                    <div class="sharethis-inline-share-buttons"></div>
                                    <div class="row">
                                        <div class="col-lg-12 mb-5 mb-sm-2" style="margin-top: 10px">
                                            <div id="disqus_thread"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <h2 class="mb-4 text-primary font-weight-600">
                                Latest News
                            </h2>
                            @foreach ($latests as $e => $latest)
                                <div class="mb-4">
                                    <div class="rotate-img">
                                        <img src="{{ $latest->image }}" alt="banner" class="img-fluid" />
                                    </div>
                                    <h4 class="mt-3 font-weight-600">
                                        {{ $latest->judul }}
                                    </h4>
                                    <p class="fs-13 text-muted mb-0">
                                        <span class="mr-2">{{ $latest->nama_kategori }} </span>
                                        <?php
                                        echo Carbon\Carbon::parse($latest->created_at)->diffForHumans();;
                                        ?>
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
@endsection
