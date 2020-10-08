@extends('admin-layout.master-layout')

@section('container')
    <div class="container">
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                    {{ $err }}
                @endforeach
            </div>
        @endif

        @include('notice')
        
        <h4>{{ trans('language.typeAdd') }}</h4>
        <form action="{{ route('types.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label>{{ trans('language.typeAddName') }}</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="parentType">{{ trans('language.typeAddSelect') }}</label>
                <select name="parentType">
                    <option value="">-------------------</option>
                    @foreach($type as $t)
                        <option value="{{ $t->id }}">{{ $t->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">{{ trans('language.typeAddButton') }}</button>
        </form>
    </div>
@endsection
