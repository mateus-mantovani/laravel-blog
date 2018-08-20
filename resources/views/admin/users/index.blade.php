@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="text-center">List of users</h1>
        </div>

        <div class="panel-body">
            <table class="table">
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Permissions</th>
                    <th>Delete</th>
                </tr>
                @if ($users->count() > 0)
                    @foreach($users as $user)
                        <tr>
                            <td><img src="{{ $user->profile->avatar }}" width="100px" height="50px"></td>
                            <td>{{ $user->name }}</td>
                            <td>
                                @if($user->admin)
                                    <a href="{{ route('user.not-admin', $user->id) }}" class="btn btn-danger btn-xs">Remove permission</a>
                                @else
                                    <a href="{{ route('user.admin', $user->id) }}" class="btn btn-success btn-xs">Give permission</a>
                                @endif
                            </td>
                            <td><a href="{{ route('user.destroy', $user->id) }}" class="btn btn-danger btn-xs">Delete User</a></td>
                        </tr>
                    @endforeach
                @else
                    <tr><td colspan="4" style="text-align: center;"><strong>No Users Yet</strong></td></tr>
                @endif


            </table>
        </div>
    </div>


@stop