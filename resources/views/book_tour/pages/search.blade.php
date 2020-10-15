@extends('book_tour.layout.master')
@section('title')
@lang('langviews.result') | {{ $result }}
@endsection
@section('content')
<div id="all">
    <div id="content">
        <div class="container">
            <div class="row">                       
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home.index') }}">@lang('langviews.home') </a>
                            </li>
                            <li aria-current="page" class="breadcrumb-item active">@lang('langviews.tours') </li>
                        </ol>
                    </nav>
                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-md-12 col-lg-4 products-showing">
                                <strong>{{ count($tours) }}</strong> @lang('langviews.tour_was_found') {{ $result }}
                            </div>
                        </div>
                    </div>
                    <div class="row products">
                        @foreach($tours as $tour)
                        <div class="col-lg-3 col-md-4">
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
                                    <h3>
                                        <a href="detail.html">{{ $tour->name }}
                                        </a>
                                    </h3>
                                    <p class="price"> 
                                        <del></del>{{ number_format($tour->price) }}
                                    </p>
                                    <p class="buttons">
                                        <a href="{{ route('tour.detail', $tour->id) }}" class="btn btn-outline-secondary">
                                            @lang('langviews.shows_details')
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    <div class="pages">
                        {{ $tours->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
