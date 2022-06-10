@extends('layouts.homepage')

@section('content')
<div class="flash-news-banner">
    <div class="container">
        <div class="d-lg-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <span class="badge badge-dark mr-3">Export Go</span>
                <span class="badge badge-info mr-3">Be the first, youngest, and foremost.</span>
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
            <div class="col-sm-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="aboutus-wrapper">
                            <h1 class="mt-5 text-center mb-5">
                                About Us
                            </h1>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-sm-6 grid-margin">
                                            <div>
                                                <img src="{{ asset('images/about.png') }}" style="width:700px;"
                                                    alt="logo" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 grid-margin">
                                            <h2 class="font-weight-600">
                                                Berawal dari Studi Independen
                                            </h2>
                                            <p class="fs-15">
                                                Export Go terlahir dari program Merdeka Belajar Kampus Merdeka
                                                melalui mitra Yayasan Sekolah Ekspor Nasional bekerjasama dengan Eudeka.
                                                Portal Berita ini menyajikan edukasi dan berita seputar dunia ekspor
                                                secara nasional.
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
        <div class="row" data-aos="fade-up">
            <div class="col-sm-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="aboutus-wrapper">
                            <h1 class="mt-5 text-center mb-5">
                                Contact
                            </h1>
                            <div class="col-log-12 col-xl-12 text-center">
                                <img src="{{ asset('images/sekolahekspor.png') }}" style="width:400px;height:250px;"
                                    class="img-fluid">
                                <h4 class="mt-5 text-center mb-3">
                                    Social Media
                                </h4>
                                <div class="grid-margin">
                                    <a href="https://wa.me/6289504477478" target="_blank"><i class="mdi mdi-whatsapp"
                                            style="font-size: 50px"></i></a>
                                    <a href="https://instagram.com/exgo.id?igshid=YmMyMTA2M2Y=" target="_blank"><i
                                            class="mdi mdi-instagram" style="font-size: 50px"></i></a>
                                    <a href="mailto:id.exportgo@gmail.com"><i class="mdi mdi-gmail"
                                            style="font-size: 50px"></i></a>
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
