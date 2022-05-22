@extends('layouts.admin')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('users.index') }}">User</a>
        </li>
        <li class="breadcrumb-item active">
            <a>Create</a>
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
                        {!! Form::open(['route' => 'users.store', 'class' => 'needs-validation']) !!}

                        <!-- Nama Field -->
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
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" required>
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="form-group col-sm-6">
                            <label for="confirm-password">Confirm Password :</label>
                            <input type="password" class="form-control" id="confirm-password" placeholder="Confirm Password" required>
                        </div>

                        <!-- Role Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('role', 'Role :') !!}
                            {!! Form::select('roles[]', $roles, null, ['placeholder' => 'Select Role', 'class' => 'form-control', 'required']) !!}
                        </div>

                        <div class="card-footer">
                            <!-- Submit Field -->
                            <div class="form-group col-sm-12">
                                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
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
