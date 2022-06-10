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
        <div class="row" data-aos="fade-up">
            <div class="col-xl-8 stretch-card grid-margin">
                @foreach ($main as $e => $utama)
                    <div class="position-relative">
                        <img src="{{ $utama->image }}" alt="banner" class="img-fluid" />
                        <div class="banner-content">
                            <h1 class="mb-0">
                                <a href="{{ route('berita.show', [$utama->slug]) }}"
                                    style="color: white">{{ $utama->judul }}</a>
                            </h1>
                            <div class="fs-12">
                                <?php
                                echo Carbon\Carbon::parse($utama->created_at)->isoFormat('D MMM Y');
                                ?>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-xl-4 stretch-card grid-margin">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        <h2>Latest news</h2>

                        @foreach ($latest as $data => $latest)
                            <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                                <div class="pr-3">
                                    <h6>
                                        <a href="{{ route('berita.show', [$latest->slug]) }}"
                                            style="color: white">{{ $latest->judul }}</a>
                                    </h6>
                                    <div class="fs-12">
                                        <span class="mr-2">{{ $latest->nama_kategori }} </span>
                                        <?php
                                        echo Carbon\Carbon::parse($latest->created_at)->diffForHumans();
                                        ?>
                                    </div>
                                </div>
                                <div class="rotate-img">
                                    <img src="{{ $latest->image }}" alt="thumb" style="width: 75px"
                                        class="img-fluid img-lg">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-lg-3 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h2>Kategori</h2>
                        <ul class="vertical-menu">
                            @foreach ($kategori as $e => $kategori)
                                <li><a
                                        href="{{ route('kategoriShow', [$kategori->id_kategori]) }}">{{ $kategori->nama_kategori }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                        @foreach ($berita as $e => $berita)
                            <div class="row">
                                <div class="col-sm-4 grid-margin">
                                    <div class="position-relative">
                                        <div class="rotate-img">
                                            <img src="{{ $berita->image }}" alt="thumb" class="img-fluid" />
                                        </div>
                                        <!-- <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold">
                                Flash news
                            </span>
                        </div> -->
                                    </div>
                                </div>
                                <div class="col-sm-8  grid-margin">
                                    <h2 class="mb-2 font-weight-600">
                                        <a
                                            href="{{ route('berita.show', [$berita->slug]) }}">{{ $berita->judul }}</a>
                                    </h2>
                                    <div class="fs-13 mb-2">
                                        <span class="mr-2">{{ $berita->nama_kategori }} </span>
                                        <?php
                                        echo Carbon\Carbon::parse($berita->created_at)->isoFormat('D MMM Y');
                                        ?>
                                    </div>
                                    <p class="mb-0">
                                        {!! substr(strip_tags($berita->isi), 0, 200) !!}
                                        @if (strlen(strip_tags($berita->isi)) > 200)
                                            ... <a href="{{ route('berita.show', [$berita->slug]) }}">Read More</a>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card-title">
                                    Sport light
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-8 col-sm-6">
                                        <div class="rotate-img">
                                            <img src="assets/images/dashboard/home_16.jpg" alt="thumb"
                                                class="img-fluid" />
                                        </div>
                                        <h2 class="mt-3 text-primary mb-2">
                                            Newsrooms exercise..
                                        </h2>
                                        <p class="fs-13 mb-1 text-muted">
                                            <span class="mr-2">Photo </span>10 Minutes ago
                                        </p>
                                        <p class="my-3 fs-15">
                                            Lorem Ipsum has been the industry's standard dummy
                                            text ever since the 1500s, when an unknown printer
                                            took
                                        </p>
                                        <a href="#" class="font-weight-600 fs-16 text-dark">Read more</a>
                                    </div>
                                    <div class="col-xl-6 col-lg-4 col-sm-6">
                                        <div class="border-bottom pb-3 mb-3">
                                            <h3 class="font-weight-600 mb-0">
                                                Social distancing is ..
                                            </h3>
                                            <p class="fs-13 text-muted mb-0">
                                                <span class="mr-2">Photo </span>10 Minutes ago
                                            </p>
                                            <p class="mb-0">
                                                Lorem Ipsum has been the industry's
                                            </p>
                                        </div>
                                        <div class="border-bottom pb-3 mb-3">
                                            <h3 class="font-weight-600 mb-0">
                                                Panic buying is forcing..
                                            </h3>
                                            <p class="fs-13 text-muted mb-0">
                                                <span class="mr-2">Photo </span>10 Minutes ago
                                            </p>
                                            <p class="mb-0">
                                                Lorem Ipsum has been the industry's
                                            </p>
                                        </div>
                                        <div class="border-bottom pb-3 mb-3">
                                            <h3 class="font-weight-600 mb-0">
                                                Businesses ask hundreds..
                                            </h3>
                                            <p class="fs-13 text-muted mb-0">
                                                <span class="mr-2">Photo </span>10 Minutes ago
                                            </p>
                                            <p class="mb-0">
                                                Lorem Ipsum has been the industry's
                                            </p>
                                        </div>
                                        <div>
                                            <h3 class="font-weight-600 mb-0">
                                                Tesla's California factory..
                                            </h3>
                                            <p class="fs-13 text-muted mb-0">
                                                <span class="mr-2">Photo </span>10 Minutes ago
                                            </p>
                                            <p class="mb-0">
                                                Lorem Ipsum has been the industry's
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card-title">
                                            Sport light
                                        </div>
                                        <div class="border-bottom pb-3">
                                            <div class="rotate-img">
                                                <img src="assets/images/dashboard/home_17.jpg" alt="thumb"
                                                    class="img-fluid" />
                                            </div>
                                            <p class="fs-16 font-weight-600 mb-0 mt-3">
                                                Kaine: Trump Jr. may have
                                            </p>
                                            <p class="fs-13 text-muted mb-0">
                                                <span class="mr-2">Photo </span>10 Minutes ago
                                            </p>
                                        </div>
                                        <div class="pt-3 pb-3">
                                            <div class="rotate-img">
                                                <img src="assets/images/dashboard/home_18.jpg" alt="thumb"
                                                    class="img-fluid" />
                                            </div>
                                            <p class="fs-16 font-weight-600 mb-0 mt-3">
                                                Kaine: Trump Jr. may have
                                            </p>
                                            <p class="fs-13 text-muted mb-0">
                                                <span class="mr-2">Photo </span>10 Minutes ago
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-title">
                                            Celebrity news
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="border-bottom pb-3">
                                                    <div class="row">
                                                        <div class="col-sm-5 pr-2">
                                                            <div class="rotate-img">
                                                                <img src="assets/images/dashboard/home_19.jpg"
                                                                    alt="thumb" class="img-fluid w-100" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-7 pl-2">
                                                            <p class="fs-16 font-weight-600 mb-0">
                                                                Online shopping ..
                                                            </p>
                                                            <p class="fs-13 text-muted mb-0">
                                                                <span class="mr-2">Photo </span>10
                                                                Minutes ago
                                                            </p>
                                                            <p class="mb-0 fs-13">
                                                                Lorem Ipsum has been
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="border-bottom pb-3 pt-3">
                                                    <div class="row">
                                                        <div class="col-sm-5 pr-2">
                                                            <div class="rotate-img">
                                                                <img src="assets/images/dashboard/home_20.jpg"
                                                                    alt="thumb" class="img-fluid w-100" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-7 pl-2">
                                                            <p class="fs-16 font-weight-600 mb-0">
                                                                Online shopping ..
                                                            </p>
                                                            <p class="fs-13 text-muted mb-0">
                                                                <span class="mr-2">Photo </span>10
                                                                Minutes ago
                                                            </p>
                                                            <p class="mb-0 fs-13">
                                                                Lorem Ipsum has been
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="border-bottom pb-3 pt-3">
                                                    <div class="row">
                                                        <div class="col-sm-5 pr-2">
                                                            <div class="rotate-img">
                                                                <img src="assets/images/dashboard/home_21.jpg"
                                                                    alt="thumb" class="img-fluid w-100" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-7 pl-2">
                                                            <p class="fs-16 font-weight-600 mb-0">
                                                                Online shopping ..
                                                            </p>
                                                            <p class="fs-13 text-muted mb-0">
                                                                <span class="mr-2">Photo </span>10
                                                                Minutes ago
                                                            </p>
                                                            <p class="mb-0 fs-13">
                                                                Lorem Ipsum has been
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pt-3">
                                                    <div class="row">
                                                        <div class="col-sm-5 pr-2">
                                                            <div class="rotate-img">
                                                                <img src="assets/images/dashboard/home_22.jpg"
                                                                    alt="thumb" class="img-fluid w-100" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-7 pl-2">
                                                            <p class="fs-16 font-weight-600 mb-0">
                                                                Online shopping ..
                                                            </p>
                                                            <p class="fs-13 text-muted mb-0">
                                                                <span class="mr-2">Photo </span>10
                                                                Minutes ago
                                                            </p>
                                                            <p class="mb-0 fs-13">
                                                                Lorem Ipsum has been
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
