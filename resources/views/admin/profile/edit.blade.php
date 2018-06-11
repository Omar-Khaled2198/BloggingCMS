@extends('layouts.app')



@section('content')

    <div class="card">
        <div class="card-header">
            Update Profile Form
        </div>
        <div class="card-body">
            <form action="{{route('UpdateProfile',['id'=>$user->id])}}" method="post" onclick="tinyMCE.triggerSave()" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{$user->email}}">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="avatar">Avatar</label>
                    <input type="file" name="avatar" class="form-control">
                </div>
                <div class="form-group">
                    <label for="facebook">Facebook Link</label>
                    <input type="url" name="facebook" class="form-control" value="{{$user->facebook}}">
                </div>
                <div class="form-group">
                    <label for="youtube">Youtube Link</label>
                    <input type="url" name="youtube" class="form-control" value="{{$user->youtube}}">
                </div>
                <div class="form-group">
                    <label for="About">About</label>
                    <textarea type="text" name="about" id="editor" class="form-control">{{$user->about}}</textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <input type="submit" class="btn btn-primary" value="Update Profile">
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop

@section('scripts')
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'#editor' });</script>
@stop