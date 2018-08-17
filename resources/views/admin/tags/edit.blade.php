@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="text-center">Edit tag: {{ $tag->name }}</h1>
        </div>

        @include('admin.layouts.errors')

        <div class="panel-body">
            <form action="{{ route('tag.update', ['id' => $tag->id ]) }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Name of tag</label>
                    <input type="text" name="name" class="form-control" value="{{ $tag->name }}">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update Tag</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@stop