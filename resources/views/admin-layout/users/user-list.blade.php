@extends('admin-layout.master-layout')

@section('container')
    <div class="container mt-2">
        @include('notice')
        
        <h4>{{ trans('language.userPage') }}</h4>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">{{ trans('language.columnName') }}</th>
                    <th scope="col">{{ trans('language.columnEmail') }}</th>
                    <th scope="col">{{ trans('language.columnPhone') }}</th>
                    <th scope="col">{{ trans('language.columnAddress') }}</th>
                    <th scope="col">{{ trans('language.typeListUpdate') }}</th>
                    <th scope="col">{{ trans('language.typeListDelete') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th>{{ $user->name }}</th>
                        <th>{{ $user->email }}</th>
                        <th>{{ $user->phone }}</th>
                        <th>{{ $user->address }}</th>
                        <th>
                            <a class="btn btn-warning" href="{{ route('users.edit', $user->id) }}"><i class="fa fa-pen"> {{ trans('language.updateButton') }}</i></a>
                        </th>
                        <th>  
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
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
