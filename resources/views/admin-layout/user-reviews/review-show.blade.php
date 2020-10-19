@extends('admin-layout.master-layout')

@section('container')
    <div class="container">
        <div class="form-group">
            <label>{{ trans('language.columnUserId') }}</label>
            <input type="text" name="name" class="form-control" value="{{ $review->user->name }}" readonly>
        </div>
        <div class="form-group">
            <label>{{ trans('language.columnTourName') }}</label>
            <input type="text" name="name" class="form-control" value="{{ $review->tour->name }}" readonly>
        </div>
        <div class="form-group">
            <label>{{ trans('language.columnContent') }}</label>
            <p class="border border-info p-2">
                {!! $review->content !!}
            </p>
        </div>
    </div>
@endsection
