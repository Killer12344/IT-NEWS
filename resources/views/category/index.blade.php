@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            @component('components.bread-crumb')
                <li class="breadcrumb-item active">Category Manager</li>
            @endcomponent
        </div>
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="m-0">
                            <i class="feather-layers mr-1"></i>
                            <span class="font-weight-bolder">Category Manager</span>
                        </h4>
                    <form method="post" action="{{ route('category.store') }}" class="my-3">
                        @csrf
                        <div class="form-inline mb-1">
                            <input type="text" name="title" class="form-control mb-3 mb-md-0 mr-md-3 @error('title') is-invalid @enderror" value="{{ old('title') }}" required autofocus placeholder="Enter New Category">
                            <button type="submit" class="btn btn-outline-primary"> Add Category </button>
                        </div>
                        @error('title')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                        @if(session('message'))
                                <small class="text-success">
                                    {{ session('message') }}
                                </small>
                            @endif
                        @if(session('messageUp'))
                            <small class="text-success">
                                {{ session('messageUp') }}
                            </small>
                        @endif
                    </form>
                    @include('category.list')
                </div>
            </div>
        </div>
    </div>
@endsection
