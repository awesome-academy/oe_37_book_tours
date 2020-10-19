@extends('admin-layout.master-layout')

@section('container')
    <div class="container mt-2">
        @include('notice')

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">{{ trans('language.columnId') }}</th>
                    <th scope="col">{{ trans('language.columnFromDate') }}</th>
                    <th scope="col">{{ trans('language.columnToDate') }}</th>
                    <th scope="col">{{ trans('language.columnSeeMore') }}</th>
                    <th scope="col">{{ trans('language.typeListDelete') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($revenues as $revenue)
                    <tr>
                        <th>{{ $revenue->id }}</th>
                        <th>{{ $revenue->from_date }}</th>
                        <th>{{ $revenue->to_date }}</th>
                        <th>
                            <a class="btn btn-info" href="{{ route('revenues.show', $revenue->id) }}"><i class="fa fa-info"> {{ trans('language.infoButton') }}</i></a>
                        </th>
                        <th>  
                            <form action="{{ route('revenues.destroy', $revenue->id) }}" method="POST">
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
    {{ $revenues->links() }}
@endsection
