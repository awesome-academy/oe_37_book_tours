@extends('admin-layout.master-layout')

@section('container')
    <div class="container">
        <div class="form-group">
            <label>{{ trans('language.columnFromDate') }}</label>
            <input type="text" name="from_date" class="form-control" value="{{ $revenue->from_date }}" readonly>
        </div>
        <div class="form-group">
            <label>{{ trans('language.columnToDate') }}</label>
            <input type="text" name="to_date" class="form-control" value="{{ $revenue->to_date }}" readonly>
        </div>
        @if (count($tourBookings) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">{{ trans('language.columnTourName') }}</th>
                        <th scope="col">{{ trans('language.columnPrice') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tourBookings as $tourBooking)
                        <tr>
                            <th>{{ $tourBooking->tour->name }}</th>
                            <th>{{ number_format($tourBooking->price) }}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        <div class="form-group">
            <label>{{ trans('language.columnTotalTour') }}</label>
            <input type="text" name="total_tour" class="form-control" value="{{ $revenue->total_tour }}" readonly>
        </div>
        <div class="form-group">
            <label>{{ trans('language.columnTotalIncome') }}</label>
            <input type="text" name="total_income" class="form-control" value="{{ number_format($revenue->total_income) }}" readonly>
        </div>
    </div>
@endsection
