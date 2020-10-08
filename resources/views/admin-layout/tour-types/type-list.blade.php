@extends('admin-layout.master-layout')

@section('container')
    <div class="container mt-2">
        @include('notice')
        
        <h4>{{ trans('language.typeList') }}</h4>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">{{ trans('language.typeListId') }}</th>
                    <th scope="col">{{ trans('language.typeListName') }}</th>
                    <th scope="col">{{ trans('language.typeListParentId') }}</th>
                    <th scope="col">{{ trans('language.typeListUpdate') }}</th>
                    <th scope="col">{{ trans('language.typeListDelete') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($type as $t)
                    <tr>
                        <th scope="row">{{ $t->id }}</th>
                        <th>{{ $t->name }}</th>
                        <th>{{ $t->parent_id }}</th>
                        <th>
                            <a class="btn btn-warning" href="{{ route('types.edit', $t->id) }}"><i class="fa fa-pen"> {{ trans('language.updateButton') }}</i></a>
                        </th>
                        <th>  
                            <form action="{{ route('types.destroy', $t->id) }}" method="POST">
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
@endsection
