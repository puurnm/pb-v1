@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mx-4">
                <div class="card-body p-4">
                    <form method="post" action="{{ route('register') }}">
                        @csrf
                        <h1>Register</h1>
                        <p class="text-muted">Create your account</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="cil-user"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}"
                                   placeholder="Full Name">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="cil-envelope-open"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" placeholder="Email">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="cil-lock-locked"></i>
                              </span>
                            </div>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                   name="password" placeholder="Password">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="cil-lock-locked"></i>
                              </span>
                            </div>
                            <input type="password" name="password_confirmation" class="form-control"
                                   placeholder="Confirm password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                        <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
