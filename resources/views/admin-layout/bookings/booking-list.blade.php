@extends('admin-layout.master-layout')

@section('container')
    <div class="container mt-2">
        @include('notice')

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">{{ trans('language.columnUserId') }}</th>
                    <th scope="col">{{ trans('language.columnTourName') }}</th>
                    <th scope="col">{{ trans('language.columnContactName') }}</th>
                    <th scope="col">{{ trans('language.columnPhone') }}</th>
                    <th scope="col">{{ trans('language.columnEmail') }}</th>
                    <th scope="col">{{ trans('language.columnStatus') }}</th>
                    <th scope="col">{{ trans('language.columnSeeMore') }}</th>
                    <th scope="col">{{ trans('language.typeListDelete') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tourBookings as $tourBook)
                    <tr>
                        <th>{{ $tourBook->user->name }}</th>
                        <th>{{ $tourBook->tour->name }}</th>
                        <th>{{ $tourBook->contact_name }}</th>
                        <th>{{ $tourBook->phone }}</th>
                        <th>{{ $tourBook->email }}</th>
                        <th>
                            @if ($tourBook->status == Config::get('booking-status.pending'))
                                <span class="text text-warning">{{ trans('language.statusPending') }}</span>
                            @elseif ($tourBook->status == Config::get('booking-status.accepted'))
                                <span class="text text-success">{{ trans('language.statusAccepted') }}</span>
                            @else
                                <span class="text text-danger">{{ trans('language.statusCancelled') }}</span>
                            @endif
                        </th>
                        <th>
                            <a class="btn btn-info" href="{{ route('bookings.show', $tourBook->id) }}"><i class="fa fa-info"> {{ trans('language.infoButton') }}</i></a>
                        </th>
                        <th>  
                            <form action="{{ route('bookings.destroy', $tourBook->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"> {{ trans('language.deleteButton') }}</i></button>
                            </form>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $tourBookings->links() }}
@endsection
