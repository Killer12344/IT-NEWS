@extends('layouts.app')
@section('head')
    <style>
        .description{
            white-space: pre-line;
        }
    </style>
    @endsection
@section('content')
    <div class="row">
        <div class="col-12">
            @component('components.bread-crumb')
                <li class="breadcrumb-item active"><a href="{{ route('article.index') }}">Article List</a></li>
                <li class="breadcrumb-item active">Article Detail</li>
            @endcomponent
        </div>
        <div class="col-12 col-md-7">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="m-0">
                            <i class="feather-info"></i>
                            <span class="font-weight-bolder">Detail</span>
                        </h4>
                    </div>
                    <h4 class="font-weight-bolder m-0">
                        {{ $article->title }}
                    </h4>
                    <div class="small mt-1 text-primary">
                        <span class="font-weight-bolder">
                            <i class="feather-user"></i> : {{$article->user->name}} |
                        </span>
                        <span class="font-weight-bolder">
                            <i class="feather-layers"></i>  : {{$article->category->title}} |
                        </span>
                        <span class="font-weight-bolder">
                            <i class="feather-calendar"></i> : {{ $article->created_at->format('d M Y') }}
                        </span>
                    </div>
                    <p class="h6 description text-black-50">
                        {{ $article->description }}
                    </p>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>
                            <form action="{{ route('article.destroy',$article->id) }}" class="d-inline-block" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-outline-danger" onclick="return confirm(`Are you sure to Delete this article`)">
                                    Delete
                                </button>
                            </form>
                            <a href="{{ route('article.index') }}" class="btn btn-outline-dark"> Show All </a>
                            <a href="{{ route('article.edit',$article->id) }}" class="btn btn-outline-warning"> Edit </a>
                        </span>
                        <span>
                            {{ $article->created_at->diffForHumans() }}
                        </span>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection
