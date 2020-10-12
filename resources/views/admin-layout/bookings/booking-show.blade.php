@extends('admin-layout.master-layout')

@section('container')
    <div class="container">
        <div class="form-group">
            <label>{{ trans('language.columnName') }}</label>
            <p class="border border-info p-2">
                {{ $tourBooking->tour->name }}
            </p>
        </div>
        <div class="form-group">
            <label>{{ trans('language.columnPrice') }}</label>
            <p class="border border-info p-2">
                {{ number_format($tourBooking->price) }}
            </p>
        </div>
        <div class="form-group">
            <label>{{ trans('language.columnPayment') }}</label>
            <p class="border border-info p-2">
                {{ $tourBooking->payment }}
            </p>
        </div>
        <div class="form-group">
            <label>{{ trans('language.columnPeopleNum') }}</label>
            <p class="border border-info p-2">
                {{ $tourBooking->people_num  }}
            </p>
        </div>
        <div class="form-group">
            <label>{{ trans('language.columnContactName') }}</label>
            <p class="border border-info p-2">
                {{ $tourBooking->contact_name }}
            </p>
        </div>
        <div class="form-group">
            <label>{{ trans('language.columnPhone') }}</label>
            <p class="border border-info p-2">
                {{ $tourBooking->phone }}
            </p>
        </div>
        <div class="form-group">
            <label>{{ trans('language.columnEmail') }}</label>
            <p class="border border-info p-2">
                {{ $tourBooking->email }}
            </p>
        </div>
        <div class="form-group">
            <label>{{ trans('language.columnStatus') }}</label>
            <p class="border border-info p-2">
                @if ($tourBooking->status == Config::get('booking-status.pending'))
                    <span class="text text-warning">{{ trans('language.statusPending') }}</span>
                @elseif ($tourBooking->status == Config::get('booking-status.accepted'))
                    <span class="text text-success">{{ trans('language.statusAccepted') }}</span>
                @else
                    <span class="text text-danger">{{ trans('language.statusCancelled') }}</span>
                @endif
            </p>
        </div>
        <form action="{{ route('bookings.update', $tourBooking->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <button class="btn btn-success" type="submit" name="action" value="acceptBooking"
                @if ($tourBooking->status == Config::get('booking-status.accepted'))
                    {{ "disabled" }}
                @endif
            >
                <span class="text text-dark">
                    {{ trans('language.acceptButton') }}
                </span>
            </button>
            <button class="btn btn-danger" type="submit" name="action" value="cancelBooking"
                @if ($tourBooking->status == Config::get('booking-status.cancelled'))
                    {{ "disabled" }}
                @endif
            >
                <span class="text text-light">
                    {{ trans('language.cancelButton') }}
                </span>
            </button>
        </form>
    </div>
@endsection
