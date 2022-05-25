@extends('layouts.admin')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('user.index') }}">User</a>
        </li>
        <li class="breadcrumb-item active">
            <a>Create</a>
        </li>
    </ol>
</nav>
@endsection

@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-plus-square fa-lg"></i>
                        <strong>Create New User</strong>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'user.store', 'class' => 'needs-validation']) !!}

                        <!-- Name Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('name', 'Name :') !!}
                            {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control', 'required']) !!}
                        </div>

                        <!-- Email Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('email', 'Email :') !!}
                            {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control', 'required']) !!}
                        </div>

                        <!-- Password Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('password', 'Password :') !!}
                            {!! Form::text('password', null, ['placeholder' => 'Password', 'class' => 'form-control', 'required']) !!}
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('confirm-password', 'Confirm Password :') !!}
                            {!! Form::text('confirm-password', null, ['placeholder' => 'Confirm Password', 'class' => 'form-control', 'required']) !!}
                        </div>

                        <!-- Role Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('roles[]', 'Role :') !!}
                            {!! Form::select('roles[]', $roles, null, ['placeholder' => 'Select Role', 'class' => 'form-control', 'required']) !!}
                        </div>

                        <div class="card-footer">
                            <!-- Submit Field -->
                            <div class="form-group col-sm-12">
                                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                <a href="{{ route('user.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>

                          {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
