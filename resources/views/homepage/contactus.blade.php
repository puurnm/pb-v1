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
        <div class="row">
            <div class="col-sm-12">
                <div class="card" data-aos="fade-up">
                    <div class="card-body">
                        <div class="aboutus-wrapper">
                            <h1 class="mt-5 text-center mb-5">
                                Contact Us
                            </h1>
                            <div class="col-log-12 col-xl-12 text-center">
                                <br>
                                <img src="{{ asset('images/sekolahekspor.png') }}"
                                    style="width:400px;height:250px;" /><br>
                                <span class="text-light">Sosial Media</span>
                                <div>
                                    <a href="https://www.youtube.com/"><i class="mdi mdi-youtube"
                                            style="font-size: 50px"></i></a>
                                    <a href="https://www.instagram.com/"><i class="mdi mdi-instagram"
                                            style="font-size: 50px"></i></a>
                                    <a href="https://www.facebook.com/"><i class="mdi mdi-facebook"
                                            style="font-size: 50px"></i></a>
                                    <a href="https://www.twitter.com/"><i class="mdi mdi-twitter"
                                            style="font-size: 50px"></i></a><br><br><br><br>
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
