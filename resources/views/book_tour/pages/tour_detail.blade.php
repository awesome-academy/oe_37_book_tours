@extends('book_tour.layout.master')
@section('title')
@lang('langviews.tour') | {{ $tour->name }}
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
                            <li class="breadcrumb-item">
                                <a href="{{ route('home.tours') }}">@lang('langviews.tour') </a>
                            </li>
                            <li aria-current="page" class="breadcrumb-item active">{{ $tour->name }}</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-12 order-1 order-lg-2">
                    <div id="productMain" class="row">
                        <div class="col-md-6">
                            <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                                <div class="item">
                                    <img src="upload_image/{{ $tour->image }}" alt="" class="img-fluid">
                                </div>
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box">
                                <h1 class="text-center">{{ $tour->name }}</h1>
                                <p class="goToDescription">{{ $tour->description }}</p>
                                <p class="price">{{ number_format($tour->price) }} VNĐ</p>
                                <p class="text-center buttons">
                                    <a href="{{ route('checkout.get', $tour->id) }}" class="btn btn-primary">
                                        @lang('langviews.reservations')
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="details" class="box">
                        <h5 class="text-dark" >@lang('langviews.detail') </h5>
                        {!! $tour->content !!}
                    </div>
                    <div class="row same-height-row">
                        <div class="col-md-3 col-sm-6">
                            <div class="box same-height">
                                <h3>@lang('langviews.like_tour') </h3>
                            </div>
                        </div>
                        @foreach ($similarTours as $similar)
                        <div class="col-md-3 col-sm-6">
                            <div class="product same-height">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="{{ route('tour.detail', $similar['id']) }}">
                                                <img src="upload_image/{{ $similar['image'] }}" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="upload_image/{{ $similar['image'] }}" alt="" class="img-fluid">
                                </a>
                                <div class="text">
                                    <h3>{{ $similar['name'] }}</h3>
                                    <p class="price">{{ number_format($similar['price']) }} VNĐ</p>
                                </div>
                            </div>
                            <!-- /.product-->
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- /.col-md-9-->
            </div>
        </div>
    </div>
</div>

@endsection
