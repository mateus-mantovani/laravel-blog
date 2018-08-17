@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="text-center">List of tags</h1>
        </div>

        <div class="panel-body">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Remove</th>
                </tr>
                @if($tags->count() > 0)
                    @foreach($tags as $tag)
                        <tr>
                            <td>{{ $tag->name }}</td>
                            <td><a href="{{ route('tag.edit', ['id' => $tag->id]) }}" class="btn btn-info">Edit</a></td>
                            <td><a href="{{ route('tag.delete', ['id' => $tag->id]) }}" class="btn btn-danger">Delete</a> </td>
                        </tr>
                    @endforeach
                @else
                    <tr><td colspan="4" style="text-align: center;"><strong>No Tags Yet</strong></td></tr>
                @endif


            </table>
        </div>
    </div>


@stop