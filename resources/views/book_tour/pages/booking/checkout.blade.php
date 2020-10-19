@extends('book_tour.layout.master')
@section('title')
@lang('langviews.checkout') | {{ $tour->name }}
@endsection
@section('content')

<div id="all">
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">@lang('langviews.home') </a></li>
                            <li aria-current="page" class="breadcrumb-item active">@lang('langviews.checkout_address') </li>
                        </ol>
                    </nav>
                </div>
                <div id="checkout" class="col-lg-12">
                    <div class="box">
                        <form method="post" action="{{ route('checkout.post', $tour->id) }}">
                            @csrf
                            <div class="nav flex-column flex-md-row nav-pills text-center">
                                <a href="checkout1.html" class="nav-link flex-sm-fill text-sm-center active">
                                    <i class="fa fa-map-marker"></i>@lang('langviews.address')
                                </a>
                                <a href="#" class="nav-link flex-sm-fill text-sm-center disabled">
                                    <i class="fa fa-eye"></i>@lang('langviews.order_review') 
                                </a>
                            </div>
                            <div class="content py-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">@lang('langviews.name') <span class="text-danger">* </span> </label>
                                            <input id="name" name="name" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">@lang('langviews.email') <span class="text-danger">* </span> </label>
                                            <input id="email" name="email" type="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">@lang('langviews.phone_number') <span class="text-danger">* </span> </label>
                                            <input id="phone" name="phone_number" type="number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                              <label for="fromDate">@lang('langviews.start_date'): <span class="text-danger">* </span> </label>
                                              <input type="datetime-local" id="fromDate" name="fromDate" class="form-control">
                                        </div>
                                        <div class="form-group">
                                              <label for="toDate">@lang('langviews.end_date'): <span class="text-danger">* </span> </label>
                                              <input type="datetime-local" id="toDate" name="toDate" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="city">@lang('langviews.city') <span class="text-danger">* </span> </label>
                                            <select  name="city" class="form-control " id="eexampleSelect11">
                                                <option value="">-- @lang('langviews.select_city') --</option>
                                                @foreach ($provinces as $province_code => $name)
                                                <option value="{{ $province_code }}">{{ $name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="district">@lang('langviews.district') <span class="text-danger">* </span> </label>
                                            <select  name="district" class="form-control " id="eexampleSelect11">
                                                <option value="">--@lang('langviews.not_select_city') --</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="ward">@lang('langviews.ward') <span class="text-danger">* </span> </label>
                                            <select  name="ward" class="form-control " id="eexampleSelect11">
                                                <option value="">--@lang('langviews.not_select_district') --</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="house_street">@lang('langviews.house_street') <span class="text-danger">* </span> </label>
                                            <input id="house_street" name="house_street" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="people">@lang('langviews.people_optional'): <span class="text-danger">*</span></label>
                                                <input type="number" id="toDate" name="people_num" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="box payment-method">
                                            <h4>@lang('langviews.cash_payment') </h4>
                                            <p>@lang('langviews.after_pay_tour') </p>
                                            <div class="box-footer text-center">
                                                <input type="radio" name="payment" value="cod">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box payment-method">
                                            <h4>@lang('langviews.transfer') </h4>
                                            <p>@lang('langviews.whenever') </p>
                                            <div class="box-footer text-center">
                                                <input type="radio" name="payment" value="atm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer d-flex justify-content-between">
                                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">
                                    <i class="fa fa-chevron-left"></i>@lang('langviews.back')
                                </a>
                                <button type="submit" class="btn btn-primary">@lang('langviews.continue')
                                    <i class="fa fa-chevron-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
