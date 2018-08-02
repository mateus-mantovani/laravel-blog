@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="text-center">List of category</h1>
        </div>

        <div class="panel-body">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Remove</th>
                </tr>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach


            </table>
        </div>
    </div>


@stop