@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            @component('components.bread-crumb')
                <li class="breadcrumb-item">Simple2</li>
            @endcomponent
        </div>
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <h4 class="m-0">
                            <i class="feather-feather"></i>
                            <span class="font-weight-bolder">Simple</span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
