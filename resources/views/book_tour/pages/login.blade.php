@extends('book_tour.layout.master')
@section('title')
@lang('langviews.sign_in')
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
                                <a href="#">@lang('langviews.home') </a>
                            </li>
                            <li aria-current="page" class="breadcrumb-item active"> @lang('langviews.sign_in') </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-8 m-auto">
                    <div class="box">
                        <h1>@lang('langviews.sign_in') </h1>
                        <p class="lead">@lang('langviews.already_our_customer') </p>
                        @include('book_tour/pages.message')

                        <hr>
                        <form action="{{ route('login.post') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email">@lang('langviews.email') </label>
                                <input id="email" name="email" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">@lang('langviews.password') </label>
                                <input id="password" name="password" type="password" class="form-control">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> @lang('langviews.sign_in') </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
