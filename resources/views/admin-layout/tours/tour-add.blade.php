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
    
        <form action="{{ route('tours.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label>{{ trans('language.columnName') }}</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>{{ trans('language.columnTypeId') }}</label>
                <select name="type">
                    @foreach ($type as $t)
                        <option value="{{ $t->id }}">{{ $t->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>{{ trans('language.columnPrice') }}</label>
                <input type="text" name="price" class="form-control">
            </div>
            <div class="form-group">
                <label>{{ trans('language.columnDiscount') }}</label>
                <input type="text" name="discount" class="form-control">
            </div>
            <div class="form-group">
                <label>{{ trans('language.columnDescription') }}</label>
                <input type="text" name="description" class="form-control">
            </div>
            <div class="form-group">
                <label>{{ trans('language.columnContent') }}</label>
                <textarea name="content" id="editor1"></textarea>
            </div>
            <div class="form-group">
                <label>{{ trans('language.columnAddress') }}</label>
                <input type="text" name="address" class="form-control">
            </div>
            <div class="form-group">
                <label>{{ trans('language.columnImage') }}</label>
                <br>
                <input type="file" name="image" id="fileToUpload">
            </div>
            <button type="submit" class="btn btn-primary">{{ trans('language.typeAddButton') }}</button>
        </form>
    </div>
@endsection
