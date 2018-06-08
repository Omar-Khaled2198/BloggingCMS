@extends('layouts.app')



@section('content')

    <div class="card">
        <div class="card-header">
            Update Category Form
        </div>
        <div class="card-body">
            <form action="{{route('UpdateCategory',['id'=>$category->id])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{$category->name}}">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <input type="submit" class="btn btn-primary" value="Update Category">
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
