@extends('admin-layout.master-layout')

@section('container')
    <div class="container">
        <div class="form-group">
            <label>{{ trans('language.columnName') }}</label>
            <p class="border border-info p-2">
                <span class="text text-dark">{{ $tour->name }}</span>
            </p>
        </div>
        <div class="form-group">
            <label>{{ trans('language.columnTypeId') }}</label>
            <p class="border border-info p-2">
                <span class="text text-dark">{{ $tour->type->name }}</span>
            </p>
        </div>
        <div class="form-group">
            <label>{{ trans('language.columnAddress') }}</label>
            <p class="border border-info p-2">
                <span class="text text-dark">{{ $tour->address}}</span>
            </p>
        </div>
        <div class="form-group">
            <label>{{ trans('language.columnPrice') }}</label>
            <p class="border border-info p-2">
                <span class="text text-dark">{{ number_format($tour->price) }}</span>
            </p>
        </div>
        <div class="form-group">
            <label>{{ trans('language.columnDiscount') }}</label>
            <p class="border border-info p-2">
                <span class="text text-dark">{{ $tour->discount }}</span>
            </p>
        </div>
        <div class="form-group">
            <label>{{ trans('language.columnDescription') }}</label>
            <p>
                {!! $tour->content !!}
            </p>
        </div>
    </div>
@endsection
