@extends('layouts.app')



@section('content')

    <div class="card">
        <div class="card-header">
            Create Post Form
        </div>
        <div class="card-body">
            <form action="{{route('CreatePost')}}" method="post" onclick="tinyMCE.triggerSave()" enctype="multipart/form-data">
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
                    <label for="category_id">Category</label>
                    <select type="text" name="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tags">Tags</label>
                    <br>
                    @foreach($tags as $tag)
                        <div class="form-check-inline">
                           <label><input type="checkbox" name="tags[]" value="{{$tag->id}}">{{$tag->tag}}</label>
                        </div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea type="text" name="content" id="editor" class="form-control"></textarea>
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

@section('scripts')
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
@stop
