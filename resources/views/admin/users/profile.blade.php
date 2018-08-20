@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="text-center">Edit a new user</h1>
        </div>

        @include('admin.layouts.errors')

        <div class="panel-body">
            <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" value="">
                </div>

                <div class="form-group">
                    <label for="avatar">Upload Avatar</label>
                    <input type="file" name="avatar" class="form-control">
                </div>

                <div class="form-group">
                    <label for="facebook">Facebook Profile</label>
                    <input type="text" name="facebook" class="form-control" value="{{ $user->profile->facebook }}">
                </div>

                <div class="form-group">
                    <label for="youtube">Youtube Channel</label>
                    <input type="text" name="youtube" class="form-control" value="{{ $user->profile->youtube }}">
                </div>

                <div class="form-group">
                    <label for="about">About you</label>
                    <textarea class="form-control" rows="3" name="about">{{ $user->profile->about }}</textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update User</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@stop