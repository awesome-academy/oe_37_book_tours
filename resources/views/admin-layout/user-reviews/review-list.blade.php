@extends('admin-layout.master-layout')

@section('container')
    <div class="container mt-2">
        @include('notice')

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">{{ trans('language.columnUserId') }}</th>
                    <th scope="col">{{ trans('language.columnTourName') }}</th>
                    <th scope="col">{{ trans('language.columnSeeMore') }}</th>
                    <th scope="col">{{ trans('language.typeListDelete') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reviews as $review)
                    <tr>
                        <th>{{ $review->user->name }}</th>
                        <th>{{ $review->tour->name }}</th>
                        <th>
                            <a class="btn btn-info" href="{{ route('reviews.show', $review->id) }}"><i class="fa fa-info"> {{ trans('language.infoButton') }}</i></a>
                        </th>
                        <th>  
                            <form action="{{ route('reviews.destroy', $review->id) }}" method="POST">
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
    {{ $reviews->links() }}
@endsection
