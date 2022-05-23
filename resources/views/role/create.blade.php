@extends('layouts.admin')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('role.index') }}">Role</a>
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
                        <strong>Create New Role</strong>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'role.store', 'class' => 'needs-validation']) !!}

                        <!-- Nama Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('name', 'Name :') !!}
                            {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                        </div>

                        <!-- Email Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('permission', 'Permission :') !!}
                            <br>
                            @foreach ($permission as $value)
                                {!! Form::checkbox('permission[]', $value->id, false, ['class' => 'name']) !!}
                                {{ $value->name }}
                                <br>
                            @endforeach
                        </div>

                        <div class="card-footer">
                            <!-- Submit Field -->
                            <div class="form-group col-sm-12">
                                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                <a href="{{ route('role.index') }}" class="btn btn-secondary">Cancel</a>
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
