@extends('layouts.app')



@section('content')

    <div class="card">
        <div class="card-header">
            Categories
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Cateogry</th>
                    <th>Edit</th>
                    <th>Remove</th>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>
                           {{$category->name}}
                        </td>
                        <td>
                            <a href="{{route('EditCategory',['id'=>$category->id])}}" class="btn btn-sm btn-primary">Edit</a>
                        </td>
                        <td>
                            <a href="{{route('DeleteCategory',['id'=>$category->id])}}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop
