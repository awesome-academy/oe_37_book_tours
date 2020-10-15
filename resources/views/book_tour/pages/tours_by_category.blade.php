@extends('book_tour/layout/master')
@section('title')
@lang('langviews.tours') | {{ $type->name }}
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
                                <a href="{{ route('home.index') }}">
                                    @lang('langviews.home')
                                </a>
                            </li>
                            <li aria-current="page" class="breadcrumb-item active">
                                <a href="{{ route('home.tours') }}">
                                    @lang('langviews.tours')
                                </a>
                            </li>
                        <li aria-current="page" class="breadcrumb-item active">
                            {{ $type->name }}
                        </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-12">
                    <div class="row products">
                        <div class="col-12">
                            <p class="breadcrumb-item active">
                                {{ count($tours) }} @lang('langviews.tour_was_found')
                            </p>
                        </div>
                        @foreach ($tours as $tour)
                        <div class="col-lg-4 col-md-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="back">
                                            <a href="{{ route('tour.detail', $tour['id']) }}">
                                                <img src="upload_image/{{ $tour['image'] }}" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                    <a href="" class="invisible">
                                        <img src="upload_image/{{ $tour['image'] }}" alt="" class="img-fluid">
                                    </a>
                                <div class="text">
                                    <h3><a href="{{ route('tour.detail', $tour['id']) }}">{{ $tour['name'] }}</a></h3>
                                    <p class="price"> 
                                        <del></del>{{ number_format($tour['price']) }} VNĐ
                                    </p>
                                    <p class="buttons">
                                        <a href="{{ route('tour.detail', $tour['id']) }}" class="btn btn-outline-secondary">
                                            @lang('langviews.shows_details')
                                        </a>
                                    </p>
                                </div>
                              <!-- /.text-->
                            </div>
                          <!-- /.product-->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
