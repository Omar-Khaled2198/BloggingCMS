@extends('layouts.app')



@section('content')

    <div class="card">
        <div class="card-header">
            Posts
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <th>Title</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Remove</th>
                </thead>
                <tbody>
                @foreach($deleted as $post)
                    <tr>
                        <td>
                            {{$post->title}}
                        </td>
                        <td>
                            <img src="{{asset($post->image)}}" alt="{{$post->title}}" width="90px" height="50px">
                        </td>
                        <td>
                            <a href="{{route('RestorePost',['id'=>$post->id])}}" class="btn btn-sm btn-success">Restore</a>
                        </td>
                        <td>
                            <a href="{{route('DeletePermanently',['id'=>$post->id])}}" class="btn btn-sm btn-danger">Delete Permanently</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop
