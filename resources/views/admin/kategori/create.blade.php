@extends('layouts.admin')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">Dashboard</a>
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
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-plus-square fa-lg"></i>
                        <strong>Create New Kategori</strong>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'kategori.store', 'class' => 'needs-validation']) !!}

                        <!-- Nama Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('nama_kategori', 'Nama Kategori :') !!}
                            {!! Form::text('nama_kategori', null, ['placeholder' => 'Nama Kategori', 'class' => 'form-control', 'required']) !!}
                        </div>

                        <div class="card-footer">
                            <!-- Submit Field -->
                            <div class="form-group col-sm-12">
                                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Cancel</a>
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
