@extends('layouts.app')



@section('content')

    <div class="card">
        <div class="card-header">
            Tags
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Tag</th>
                    <th>Edit</th>
                    <th>Remove</th>
                </thead>
                <tbody>
                @foreach($tags as $tag)
                    <tr>
                        <td>
                           {{$tag->tag}}
                        </td>
                        <td>
                            <a href="{{route('EditTag',['id'=>$tag->id])}}" class="btn btn-sm btn-primary">Edit</a>
                        </td>
                        <td>
                            <a href="{{route('DeleteTag',['id'=>$tag->id])}}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop
