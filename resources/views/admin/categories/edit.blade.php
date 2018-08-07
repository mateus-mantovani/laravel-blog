@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="text-center">Edit Category: {{ $category->name }}</h1>
        </div>

        @include('admin.layouts.errors')

        <div class="panel-body">
            <form action="{{ route('category.update', ['id' => $category->id ]) }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Name of Category</label>
                    <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@stop