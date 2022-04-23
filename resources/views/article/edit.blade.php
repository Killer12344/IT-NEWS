@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="col-12">
            @component('components.bread-crumb')
                <li class="breadcrumb-item"><a href="{{ route('article.index') }}">Article List</a></li>
                <li class="breadcrumb-item active">Edit Article</li>
            @endcomponent
        </div>
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="m-0 font-weight-bolder">
                        <i class="feather-plus-circle"></i> Edit Article
                    </h4>
                    <form action="{{ route('article.update',$article->id) }}" method="post" id="articleEdit">
                        @csrf
                        @method('put')
                        <input type="hidden" value="{{ $article->user_id }}" name="user_id">
                    </form>
                </div>
            </div>
        </div>

        {{--        category_select_start--}}
        <div class="col-12 col-lg-3">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="form-group mb-0">
                        <label for="select" class="font-weight-bolder"> Select Category </label>
                        <select name="category" class="custom-select @error('category') is-invalid @enderror" form="articleEdit">
                            <option selected disabled value="0"> Select One </option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category',$article->category_id) == $category->id? 'selected' : '' }}> {{ $category->title }} </option>
                            @endforeach
                        </select>
                        @error('category')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        {{--        category_select_end--}}

        {{--    article_start    --}}
        <div class="col-12 col-lg-6">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="form-group">
                        <label for="title" class="font-weight-bolder"> Title </label>
                        <input type="text" class="form-control form-control-lg @error('title') is-invalid @enderror" form="articleEdit" value="{{ old('title',$article->title) }}" name="title" id="title">
                        @error('title')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description" class="font-weight-bolder"> Description </label>
                        <textarea name="description" class="form-control form-control-lg @error('description') is-invalid @enderror" form="articleEdit" id="" cols="30" rows="10">{{ old('description',$article->description) }}</textarea>
                        @error('description')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>
            </div>

        </div>
        {{--    article_end   --}}
        <div class="col-12 col-lg-3">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-lg btn-outline-primary w-100" form="articleEdit"> Update Article </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
