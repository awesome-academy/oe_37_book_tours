@extends('admin-layout.master-layout')

@section('container')
    <div class="container">
        <form action="{{ route('tours.update', $tours->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group">
                <label>{{ trans('language.columnName') }}</label>
                <input type="text" name="name" class="form-control" value="{{ $tours->name }}">
            </div>
            <div class="form-group">
                <label>{{ trans('language.columnTypeId') }}</label>
                <select name="type">
                    @foreach ($types as $type)
                        <option 
                            @if ($tours->type->id == $type->id)
                                {{ "selected" }}
                            @endif
                            value="{{ $type->id }}">{{ $type->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>{{ trans('language.columnPrice') }}</label>
                <input type="text" name="price" class="form-control" value="{{ $tours->price }}">
            </div>
            <div class="form-group">
                <label>{{ trans('language.columnDiscount') }}</label>
                <input type="text" name="discount" class="form-control" value="{{ $tours->discount }}">
            </div>
            <div class="form-group">
                <label>{{ trans('language.columnDescription') }}</label>
                <input type="text" name="description" class="form-control" value="{{ $tours->description }}">
            </div>
            <div class="form-group">
                <label>{{ trans('language.columnContent') }}</label>
                <textarea name="content" id="editor1"></textarea>
            </div>
            <div class="form-group">
                <label>{{ trans('language.columnAddress') }}</label>
                <input type="text" name="address" class="form-control" value="{{ $tours->address }}">
            </div>
            <div class="form-group">
                <label>{{ trans('language.columnImage') }}</label>
                <br>
                <input type="file" name="image" id="fileToUpload">
            </div>
            <button type="submit" class="btn btn-primary">{{ trans('language.updateButton') }}</button>
        </form>
    </div>
@endsection
