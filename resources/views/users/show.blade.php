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
            <span>Detail</span>
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
                            <p>{{ $user->name }}</p>
                        </div>

                        <!-- Email Field -->
                        <div class="form-group">
                            {!! Form::label('email', 'Email :') !!}
                            <p>{{ $user->email }}</p>
                        </div>

                        <!-- Role Field -->
                        <div class="form-group">
                            {!! Form::label('role', 'Role :') !!}
                            <p>
                                @if(!empty($user->getRoleNames()))
                                    @foreach($user->getRoleNames() as $v)
                                        <label class="badge badge-success">{{ $v }}</label>
                                    @endforeach
                                @endif
                            </p>
                        </div>

                        <div class="card-footer">
                            <a class="float-left" href="{{ route('users.create') }}"><i class="fa fa-arrow-left fa-lg" style="color: black"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
