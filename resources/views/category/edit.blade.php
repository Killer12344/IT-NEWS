@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            @component('components.bread-crumb')
                <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Category Manager</a></li>
                <li class="breadcrumb-item active">Category </li>
            @endcomponent
        </div>
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="m-0">
                            <i class="feather-layers mr-1"></i>
                            <span class="font-weight-bolder">Category Manager</span>
                    </h4>
                    <form method="post" action="{{ route('category.update',$category->id) }}" class="my-3">
                        @csrf
                        @method('put')
                        <input type="hidden" value="{{ $category->id }}" name="user_id">
                        <div class="form-inline mb-1">
                                <input type="text" name="title" class="form-control mb-3 mb-md-0 mr-md-3 @error('title') is-invalid @enderror" value="{{ old('title',$category->title) }}" required  placeholder="Enter New Category">
                                <button type="submit" class="btn btn-outline-primary"> Update Category </button>
                        </div>
                        @error('title')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </form>
                    @include('category.list')
                </div>
            </div>
        </div>
    </div>
@endsection
