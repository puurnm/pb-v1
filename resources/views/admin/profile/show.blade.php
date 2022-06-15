@extends('layouts.app')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            <a>Profile</a>
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
                        <i class="c-icon mfe-2 cil-user"></i>
                        <strong>Profile</strong>
                        <a class="float-right" href="{{ route('profile.edit') }}"><i class="fa fa-edit fa-lg"></i></a>
                    </div>

                    <div class="card-body">
                        <!-- Name Field -->
                        <div class="form-group">
                            {!! Form::label('name', 'Name :') !!}
                            <p>{{ $user->name }}</p>
                        </div>

                        <!-- Email Field -->
                        <div class="form-group">
                            {!! Form::label('email', 'Email :') !!}
                            <p>{{ $user->email }}</p>
                        </div>

                        <div class="card-footer">
                            <div>
                                <a class="float-left" href="{{ route('dashboard') }}"><i class="fa fa-arrow-left fa-lg" style="color: black"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
