@extends('layouts.app')



@section('content')

    <div class="card">
        <div class="card-header">
            Posts
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <th>Image</th>
                <th>User</th>
                <th>Edit</th>
                <th>Remove</th>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>
                            <img src="{{asset($user->profile->avatar)}}" width="60px" height="60px">
                        </td>
                        <td>
                            {{$user->name}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop
