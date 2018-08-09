@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="text-center">List of trashed posts</h1>
        </div>

        <div class="panel-body">
            <table class="table">
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Restore</th>
                    <th>Destroy</th>
                </tr>
                @foreach($posts as $post)
                    <tr>
                        <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="100px" height="50px"></td>
                        <td>{{ $post->title }}</td>
                        <td><a href="{{ route('post.restore', ['id' => $post->id]) }}" class="btn btn-sm btn-success">Restore</a></td>
                        <td><a href="{{ route('post.kill', ['id' => $post->id]) }}" class="btn btn-sm btn-danger">Delete</a></td>
                    </tr>
                @endforeach


            </table>
        </div>
    </div>


@stop