@extends('blog.master')
@section('content')
        <div class="py-3">

            <div class="small post-category mb-3">
                <a href="#" rel="category tag">{{ $article->category->title  }}</a>
            </div>

            <h2 class="fw-bolder">{{ $article->title }}</h2>
            <div class="my-3 feature-image-box">
{{--                <img width="1024" height="682" src="assets/images/de0d23dd-86f6-3ee1-a871-6325fb45bd06-1024x682.jpg">--}}
                <div class="d-block d-md-flex justify-content-between align-items-center my-3">

                    <div class="">
                        @if($article->user->photo)
                            <img alt="" src="{{ asset('storage/profile/').$article->user->photo }}"
                                 class="avatar avatar-30 photo rounded-circle" height="30" width="30" loading="lazy"> <a
                                href="{{ route('blog.user',$article->user->title) }}" title="Visit admin’s website"
                                rel="author external">{{ $article->user->name }}</a></div>
                        @else
                        <img alt="" src="{{ asset('dashboard/img/user-default-photo.png').$article->user->photo }}"
                             class="avatar avatar-30 photo rounded-circle" height="30" width="30" loading="lazy"> <a
                            href="{{ route('blog.user',$article->user->id) }}" title="Visit admin’s website"
                            rel="author external">{{ $article->user->name }}</a></div>
                        @endif


                    <div class="text-primary">
                        <i class="feather-calendar"></i>
                        {{ $article->created_at->format('d M Y h:i A') }}
                    </div>
                </div>

                <p class="text-black-50" style="white-space: pre-line">
                    {{ $article->description }}
                </p>

                @php
                    $preArticle = \App\Article::where('id', '<', $article->id)->latest('id')->first();
                    $nextArticle = \App\Article::where('id', '>', $article->id)->first()
                @endphp


                <div class="nav d-flex justify-content-between p-3">
                    <a href="{{ isset($preArticle->slug)? route('blog.detail',$preArticle->slug) : '#' }}"
                       class="btn btn-outline-primary page-mover rounded-circle @empty($preArticle->slug) d-none @endempty">
                        <i class="feather-chevron-left"></i>
                    </a>

                    <a class="btn btn-outline-primary px-3 rounded-pill" href="{{ route('blog.index') }}">
                        Read All
                    </a>

                    <a href="{{ isset($nextArticle->slug)? route('blog.detail',$nextArticle->slug) : '#' }}"
                       class="btn btn-outline-primary page-mover rounded-circle @empty($nextArticle->slug) d-none @endempty">
                        <i class="feather-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>

@endsection
