@extends('admin-layout.master-layout')

@section('container')
    <div class="container">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @include('notice')

        <form action="{{ route('revenues.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label>{{ trans('language.columnFromDate') }}</label>
                <input type="date" name="from_date">
            </div>
            <div class="form-group">
                <label>{{ trans('language.columnToDate') }}</label>
                <input type="date" name="to_date">
            </div>
            <button type="submit" class="btn btn-primary">{{ trans('language.typeAddButton') }}</button>
        </form>
    </div>
@endsection
