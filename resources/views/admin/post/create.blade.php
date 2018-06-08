@extends('layouts.app')



@section('content')

    <div class="card">
        <div class="card-header">
            Create Post Form
        </div>
        <div class="card-body">
            <form action="{{route('CreatePost')}}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea type="text" name="content" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <input type="submit" class="btn btn-primary" value="Create Post">
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
