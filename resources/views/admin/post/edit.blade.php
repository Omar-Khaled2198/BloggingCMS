@extends('layouts.app')



@section('content')

    <div class="card">
        <div class="card-header">
            Update Post Form
        </div>
        <div class="card-body">
            <form action="{{route('UpdatePost',['id'=>$post->id])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="category_id">Content</label>
                    <select type="text" name="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea type="text" name="content" class="form-control">{{$post->content}}</textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <input type="submit" class="btn btn-primary" value="Update Post">
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
