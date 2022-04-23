<div class="col-12 col-lg-4 border-start" id="sidebarColumn">
    <div class="position-sticky" style="top: 100px">
        <div class="mb-5 sidebar">


            <div id="search" class="mb-5">
                <form action="" method="get">
                    <div class="d-flex search-box">
                        <input type="search" name="search" value="{{ request()->search }}" class="form-control flex-shrink-1 me-2 search-input"
                               placeholder="Search Anything">
                        <button class="btn btn-primary search-btn">
                            <i class="feather-search d-block d-xl-none"></i>
                            <span class="d-none d-xl-block">Search</span>
                        </button>
                    </div>

                </form>

            </div>

            <div id="category" class="mb-5">
                <h4 class="fw-bolder">Category Lists</h4>
                <ul class="list-group">
                    @foreach($categories as $cat)
                        <li class="list-group-item">
                            <a href="{{ route('blog.category',$cat->id) }}" class="{{ request()->url() == route('blog.category',$cat->id)? 'active' : '' }}">{{ $cat->title }}</a>
                        </li>
                    @endforeach

                </ul>
            </div>
                @yield('pagination-place')

        </div>

    </div>
</div>

