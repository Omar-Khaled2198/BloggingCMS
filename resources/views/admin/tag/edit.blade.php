@extends('layouts.app')



@section('content')

    <div class="card">
        <div class="card-header">
            Update Tag Form
        </div>
        <div class="card-body">
            <form action="{{route('UpdateTag',['id'=>$tag->id])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="tag">Tag</label>
                    <input type="text" name="tag" class="form-control" value="{{$tag->tag}}">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <input type="submit" class="btn btn-primary" value="Update Tag">
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
