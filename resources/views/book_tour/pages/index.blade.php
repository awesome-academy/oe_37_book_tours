@extends('book_tour.layout.master')
@section('title')
@lang('langviews.home')
@endsection
@section('content')

<div id="all">
    <div id="content">
        <div id="hot">
            <div class="box py-4">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h2 class="mb-0">@lang('langviews.tours') </h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="container">
                <div class="product-slider owl-carousel owl-theme">
                    @foreach ($tours as $tour)
                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="{{ route('tour.detail', $tour->id) }}">
                                            <img src="upload_image/{{ $tour->image }}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('tour.detail', $tour->id) }}" class="invisible">
                                <img src="upload_image/{{ $tour->image }}" alt="" class="img-fluid">
                            </a>
                            <div class="text">
                              <h3><a href="{{ route('tour.detail', $tour->id) }}">{{ $tour->name }}</a></h3>
                              <p class="price"> 
                                <del></del>{{ number_format($tour->price) }} VNĐ
                              </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="box text-center">
            <div class="container">
                <div class="col-md-12">
                    <h3 class="text-uppercase">@lang('langviews.latest_tour') </h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-12">
                <div id="blog-homepage" class="row">
                    @foreach ($newTour as $new)
                    <div class="col-sm-6">
                        <div class="post">
                            <h4>
                                <a href="{{ route('tour.detail', $tour->id) }}"><img src="upload_image/{{ $new->image }}" alt=""></a>
                            </h4>
                            <p class="author-category">{{ $new->name }}
                            </p>
                            <hr>
                            <p class="intro">{{ $new->description }}</p>
                            <p class="read-more">
                                <a href="{{ route('tour.detail', $tour->id) }}" class="btn btn-primary">@lang('langviews.shows_details') </a>
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
