@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="text-center">List of posts</h1>
        </div>

        <div class="panel-body">
            <table class="table">
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Remove</th>
                </tr>
                @if ($posts->count() > 0)
                    @foreach($posts as $post)
                        <tr>
                            <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="100px" height="50px"></td>
                            <td>{{ $post->title }}</td>
                            <td><a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-info">Edit</a></td>
                            <td><a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-danger">Delete</a> </td>
                        </tr>
                    @endforeach
                @else
                    <tr><td colspan="4" style="text-align: center;"><strong>No Post Yet</strong></td></tr>
                @endif


            </table>
        </div>
    </div>


@stop