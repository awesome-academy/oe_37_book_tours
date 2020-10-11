@extends('admin-layout.master-layout')

@section('container')
    <div class="container mt-2">
        @include('notice')
        
        <h4>{{ trans('language.userPage') }}</h4>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">{{ trans('language.columnTypeId') }}</th>
                    <th scope="col">{{ trans('language.columnName') }}</th>
                    <th scope="col">{{ trans('language.columnAddress') }}</th>
                    <th scope="col">{{ trans('language.columnSeeMore') }}</th>
                    <th scope="col">{{ trans('language.typeListUpdate') }}</th>
                    <th scope="col">{{ trans('language.typeListDelete') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tours as $tour)
                    <tr>
                        <th>{{ $tour->type->name }}</th>
                        <th>{{ $tour->name }}</th>
                        <th>{{ $tour->address }}</th>
                        <th>
                            <a class="btn btn-info" href="{{ route('tours.show', $tour->id) }}"><i class="fa fa-info"> {{ trans('language.infoButton') }}</i></a>
                        </th>
                        <th>
                            <a class="btn btn-warning" href="{{ route('tours.edit', $tour->id) }}"><i class="fa fa-pen"> {{ trans('language.updateButton') }}</i></a>
                        </th>
                        <th>  
                            <form action="{{ route('tours.destroy', $tour->id) }}" method="POST">
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
    {{ $tours->links() }}
@endsection
