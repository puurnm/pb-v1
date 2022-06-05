@extends('layouts.admin')

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

                        <div class="card" style="width: 15rem; margin-top: 15px">
                            <div class="card-header">
                                Jumlah User Terdaftar
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $user }}</h5>
                            </div>
                        </div>

                        <div class="card" style="width: 15rem; margin-top: -145px; margin-left: 250px">
                            <div class="card-header">
                                Jumlah Berita Dibuat
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $berita }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
