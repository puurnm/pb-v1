@extends('layouts.app')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('role.index') }}">Role</a>
        </li>
        <li class="breadcrumb-item active">
            <a>Edit</a>
        </li>
    </ol>
</nav>
@endsection

@section('content')
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                @if (count($errors) > 0)
                    <div class="alert alert-danger col-lg-12" role="alert">
                        <h4 class="alert-heading">Whoops!</h4>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-edit fa-lg"></i>
                        <strong>Edit Role</strong>
                    </div>

                    <div class="card-body">
                        {!! Form::model($role, ['route' => ['role.update', $role->id], 'method' => 'patch']) !!}

                        <!-- Name Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('name', 'Name :') !!}
                            {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                        </div>

                        <!-- Permission Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('permission', 'Permission :') !!}
                            <br>
                            @foreach($permission as $value)
                                <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                {{ $value->name }}</label>
                                <br/>
                            @endforeach
                        </div>

                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{{ route('role.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
