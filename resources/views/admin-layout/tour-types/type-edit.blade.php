@extends('admin-layout.master-layout')

@section('container')
    <div class="container">
        <form action="{{ route('types.update', $type->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label>{{ trans('language.typeAddName') }}</label>
                <input type="text" name="name" class="form-control" value="{{ $type->name }}">
            </div>
            <div class="form-group">
                <label for="parentType">{{ trans('language.typeAddSelect') }}</label>
                <select name="parentType">
                    <option value="">-------------------</option>
                    @foreach($parentType as $par)
                        <option value="{{ $par->id }}">{{ $par->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">{{ trans('language.updateButton') }}</button>
        </form>
    </div>
@endsection
