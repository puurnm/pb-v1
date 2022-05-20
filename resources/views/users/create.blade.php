@extends('layouts.admin')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item">
            <!-- if breadcrumb is single-->
            <span>Home</span>
        </li>
        <li class="breadcrumb-item">
            <span>User</span>
        </li>
        <li class="breadcrumb-item active">
            <span>Create</span>
        </li>
    </ol>
</nav>
@endsection

@section('content')
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
                        {!! Form::open(['route' => 'users.store']) !!}

                        <!-- Nama Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('name', 'Name :') !!}
                            {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                        </div>

                        <!-- Email Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('email', 'Email :') !!}
                            {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
                        </div>

                        <!-- Password Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('password', 'Password :') !!}
                            {!! Form::text('password', null, ['placeholder' => 'Password', 'class' => 'form-control']) !!}
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('confirm-password', 'Confirm Password :') !!}
                            {!! Form::text('confirm-password', null, ['placeholder' => 'Confirm Password', 'class' => 'form-control']) !!}
                        </div>

                        <!-- Role Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('role', 'Role :') !!}
                            {!! Form::select('roles[]', $roles, null, ['placeholder' => 'Select Role', 'class' => 'form-control',]) !!}
                        </div>

                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>

                          {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
