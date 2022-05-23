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
            <a>Detail</a>
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
                        <i class="fa fa-info"></i>
                        <strong>Detail</strong>
                    </div>

                    <div class="card-body">
                        <!-- Name Field -->
                        <div class="form-group">
                            {!! Form::label('name', 'Name :') !!}
                            <p>{{ $role->name }}</p>
                        </div>

                        <!-- Role Field -->
                        <div class="form-group">
                            {!! Form::label('permission', 'Permission :') !!}
                            <p>
                                @if(!empty($rolePermissions))
                                    @foreach($rolePermissions as $v)
                                        <label class="badge badge-success">{{ $v->name }}</label>
                                    @endforeach
                                @endif
                            </p>
                        </div>

                        <div>
                            <a class="float-left" href="{{ route('role.index') }}"><i class="fa fa-arrow-left fa-lg" style="color: black"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
