@extends('admin-layout.master-layout')

@section('container')
    <div class="container">
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label>{{ trans('language.columnName') }}</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label>{{ trans('language.columnEmail') }}</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}">
            </div>
            <div class="form-group">
                <label>{{ trans('language.columnPassword') }}</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label>{{ trans('language.columnPhone') }}</label>
                <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
            </div>
            <div class="form-group">
                <label>{{ trans('language.columnAddress') }}</label>
                <input type="text" name="address" class="form-control" value="{{ $user->address }}">
            </div>
            <button type="submit" class="btn btn-primary">{{ trans('language.updateButton') }}</button>
        </form>
    </div>
@endsection
