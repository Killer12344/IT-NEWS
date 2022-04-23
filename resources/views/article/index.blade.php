@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            @component('components.bread-crumb')
                <li class="breadcrumb-item active">Article List</li>
            @endcomponent
        </div>
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="m-0">
                        <i class="feather-list"></i>
                        <span class="font-weight-bolder">Article List</span>
                    </h4>
                    <div class="d-flex justify-content-between align-items-baseline">
                        <div class="">
                            <a href="{{ route('article.create') }}" class="btn btn-outline-primary mr-2">
                                <h5 class="m-0">
                                    <i class="feather-plus-circle"></i>
                                    <span class=""> Create Article</b>
                                </h5>
                            </a>
                            @isset(request()->search)
                                <a href="{{ route('article.index') }}" class="btn btn-outline-primary mr-2">
                                    <h5 class="m-0">
                                        <i class="feather-list"></i>
                                        <span class=""> Show All</b>
                                    </h5>
                                </a>
                                <h5 class="font-weight-lighter mt-3">
                                    Search By : "{{ request()->search }}"
                                </h5>
                            @endisset
                        </div>
                        <form method="get"  class="my-3">
                            <div class="form-inline mb-1">
                                <input type="text" name="search" class="form-control mb-3 mb-md-0 mr-md-2" value="{{ request()->search }}" required  placeholder="Search">
                                <button type="submit" class="btn btn-outline-primary px-3"><i class="feather-search"></i></button>
                            </div>
                        </form>
                    </div>
                    @if(session('message'))
                        <p class="alert alert-success">
                            {{ session('message') }}
                        </p>
                        @endif
                    <table class="table table-hover table-bordered table-responsive-sm">
                        <thead class="active text-nowrap text-center table-active">
                        <th>ID</th>
                        <th>Article</th>
                        <th>CATEGORY</th>
                        <th>OWNER</th>
                        <th>CONTROL</th>
                        <th>DATE & TIME</th>
                        </thead>
                        <tbody>
                        @forelse($articles as $article)
                            <tr>
                                <td class="text-center">{{ $article->id }}</td>
                                <td>
                                    {{ substr($article->title,0,25) }}....
                                    <br>
                                    <small class="text-black-50">
                                        {{ substr($article->description,0,100) }}....
                                    </small>
                                </td>
                                <td class="text-center">{{ $article->category->title }}</td>
                                <td class="text-nowrap text-center">{{ $article->user->name }}</td>
                                <td class="text-nowrap">
                                    <a href="{{ route('article.show',$article->id) }}" class="btn btn-sm btn-outline-success"><i class="feather-info"></i></a>
                                    <a href="{{ route('article.edit',$article->id) }}" class="btn btn-sm btn-outline-warning"><i class="feather-edit"></i></a>
                                    <form action="{{ route('article.destroy',$article->id) }}" class="d-inline-block" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm btn-outline-danger" onclick="return confirm(`Are you sure to Delete this article`)">
                                            <i class="feather-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                <td class="text-left text-nowrap">
                                    <i class="feather-calendar"></i>
                                    {{ $article->created_at->format('d M Y') }}
                                    <br>
                                    <small class="">
                                        <i class="feather-clock"></i>
                                        {{ $article->created_at->format('h:i a') }}
                                    </small>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">
                                    <p class="alert alert-danger text-center"> There is no result?</p>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-between align-items-baseline">
                        {{ $articles->appends(request()->all())->links() }}
                        <span class="h5 m-0 font-weight-bolder">
                            Total : {{ $articles->total() }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



