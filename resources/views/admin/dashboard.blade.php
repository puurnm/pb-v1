@extends('layouts.app')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item active">
            <span>Dashboard</span>
        </li>
    </ol>
</nav>
@endsection

@section('content')
<div class="container-fluid">
    <div class="animated fadeIn">
        @include('flash::message')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>{{ __('Dashboard') }}</strong>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h2>Welcome Back, {{ Auth::user()->name }} !</h2>
                        {{ __('You are logged in!') }}

                        <div class="body flex-grow-1 px-3 mt-3">
                            <div class="container-lg">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card mb-4 border-primary">
                                            <div class="card-body text-primary">
                                                <h5 class="card-title">{{ $user }}</h5>
                                                <h6 class="card-text">User Terdaftar</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card mb-4 border-success">
                                            <div class="card-body text-success">
                                                <h5 class="card-title">{{ $berita }}</h5>
                                                <h6 class="card-text">Berita Dibuat</h6>
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
