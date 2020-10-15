@extends('book_tour.layout.master')
@section('title')
@lang('langviews.sign_up')
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
                            <li aria-current="page" class="breadcrumb-item active">@lang('langviews.new_account') / @lang('langviews.sign_up') </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-8 m-auto">
                    <div class="box">
                        <h1>@lang('langviews.new_account')</h1>
                        <p class="lead">@lang('langviews.not_registered') </p>
                        @include('book_tour/pages.message')
                        <hr>
                        <form action="{{ route('register.post') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">@lang('langviews.name') </label>
                                <input id="name" name="name" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">@lang('langviews.email') </label>
                                <input id="email" name="email" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">@lang('langviews.password') </label>
                                <input id="password" name="password" type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">@lang('langviews.password_again') </label>
                                <input id="password" name="re_password" type="password" class="form-control">
                            </div>            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> @lang('langviews.sign_up') </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
