@extends('book_tour.layout.master')
@section('title')
@lang('langviews.error')
@endsection
@section('content')

<div id="all">
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <!-- breadcrumb-->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home.index') }}">@lang('langviews.home') </a>
                            </li>
                            <li aria-current="page" class="breadcrumb-item active">@lang('langviews.page_not_found') </li>
                        </ol>
                    </nav>
                    <div id="error-page" class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="box text-center py-5">
                                <h3>@lang('langviews.we_are_sorry') </h3>
                                <h4 class="text-muted">@lang('langviews.404') </h4>
                                <p class="buttons">
                                    <a href="{{ route('home.index') }}" class="btn btn-primary"><i class="fa fa-home"></i>@lang('langviews.go_to_homepage') </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
