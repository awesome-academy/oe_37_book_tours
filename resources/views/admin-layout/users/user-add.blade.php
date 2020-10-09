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
        
        <h4>{{ trans('language.userAdd') }}</h4>
        <form action="{{ route('users.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label>{{ trans('language.columnName') }}</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>{{ trans('language.columnEmail') }}</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>{{ trans('language.columnPassword') }}</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label>{{ trans('language.columnPhone') }}</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group">
                <label>{{ trans('language.columnAddress') }}</label>
                <input type="text" name="address" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">{{ trans('language.typeAddButton') }}</button>
        </form>
    </div>
@endsection
