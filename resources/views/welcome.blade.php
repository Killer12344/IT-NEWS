@extends('blog.master')

@section('content')
    <div>
        @forelse($articles as $article)
            <div class="border-bottom mb-4 pb-4 article-preview">
                <div class="p-0 p-md-3">
                    <a class="fw-bold h4 d-block text-decoration-none"
                       href="http://localhost:9090/2021/09/15/et-omnis-eum-ab-non/">
                        {{ \Illuminate\Support\Str::words($article->title, '10') }} </a>
                    <div class="small post-category">
                        <a href="{{ route('blog.category',$article->category->slug) }}" rel="category tag">{{ $article->category->title }}</a>
                    </div>
                    <div class="my-3 feature-image-box">
                        {{--                    <img width="1024" height="682"--}}
                        {{--                         src="{{ asset('dashboard/img/user-default-photo.png') }}"--}}
                        {{--                         class="attachment-large size-large wp-post-image" alt="">--}}
                    </div>

                    <div class="text-black-50 the-excerpt">
                        <p>
                            {{ \Illuminate\Support\Str::words($article->description, '40') }}..
                        </p>
                    </div>

                    <div class="d-flex justify-content-between align-items-center see-more-group">
                        <div class="d-flex align-items-center">
                            <img alt="" src="{{ asset('dashboard/img/user-default-photo.png') }}"
                                 class="avatar avatar-50 photo rounded-circle" height="50" width="50"
                                 loading="lazy">
                            <div class="ms-3">
                                    <span class="small">
                                        <i class="feather-user"></i>
                                        <a href="{{ route('blog.user',$article->user->id) }}" class="text-black text-decoration-none">
                                        {{ $article->user->name }}
                                        </a>
                                    </span>
                                <br>
                                <span class="small">
                                {{ $article->created_at->format('d M Y') }}
                            </span>
                            </div>
                        </div>

                        <a href="{{ route('blog.detail',$article->slug) }}" class="btn btn-outline-primary rounded-pill px-3">Read More</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="mb-4 pb-4">
                <div class="py-5 my-5 text-center text-lg-start">
                    <p class="fw-bold text-primary">Dear Viewer</p>
                    <h1 class="fw-bold">
                        There is no article 😔 ...
                    </h1>
                    <p>Please go back to Home Page</p>
                    <a class="btn btn-outline-primary rounded-pill px-3" href="{{ route('blog.index') }}">
                        <i class="feather-home"></i>
                        Blog Home
                    </a>

                </div>
            </div>
        @endforelse

            <div class="d-block d-lg-none" id="pagination">
                {{ $articles->appends(request()->all())->onEachSide(1)->links() }}
            </div>
    </div>


    @section('pagination-place')
        <div class="d-none d-lg-block" id="pagination">
            {{ $articles->appends(request()->all())->onEachSide(1)->links() }}
        </div>
    @endsection

@endsection
