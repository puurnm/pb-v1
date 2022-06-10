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
                        <div class="col-sm-12">
                            <h1 class="font-weight-600 mb-4">
                                {{ $kategori->nama_kategori }}
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            @foreach ($berita as $e => $data)
                                <div class="row">
                                    <div class="col-sm-4 grid-margin">
                                        <div class="rotate-img">
                                            <img src="{{ $data->image }}" alt="banner" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="col-sm-8 grid-margin">
                                        <h2 class="font-weight-600 mb-2">
                                            <a
                                                href="{{ route('berita.show', [$data->slug]) }}">{{ $data->judul }}</a>
                                        </h2>
                                        <p class="fs-13 text-muted mb-0">
                                            <span class="mr-2">{{ $data->nama_kategori }} </span>
                                            @php
                                                echo Carbon\Carbon::parse($data->created_at)->isoFormat('D MMM Y');
                                            @endphp
                                        </p>
                                        <p class="fs-15">
                                            <strong>{{ $data->penulis }}</strong> - {!! substr(strip_tags($data->isi), 0, 200) !!}
                                            @if (strlen(strip_tags($data->isi)) > 200)
                                                ... <a href="{{ route('berita.show', [$data->slug]) }}">Read More</a>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                            <div class="text-center">
                                {!! $berita->render() !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <h2 class="mb-4 text-primary font-weight-600">
                                Latest news
                            </h2>
                            @foreach ($latest as $key => $latest)
                                <div class="mb-4">
                                    <div class="rotate-img">
                                        <img src="{{ $latest->image }}" alt="banner"
                                            class="img-fluid" />
                                    </div>

                                    <h3 class="mt-3 font-weight-600">
                                        <a href="{{ route('berita.show', [$latest->slug]) }}"
                                            style="color: black">{{ $latest->judul }}</a>
                                    </h3>
                                    <p class="fs-13 text-muted mb-0">
                                        <span class="mr-2">{{ $latest->nama_kategori }} </span>
                                        @php
                                            echo Carbon\Carbon::parse($latest->created_at)->diffForHumans();
                                        @endphp
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
