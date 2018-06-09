@extends('layouts.app')



@section('content')

    <div class="card">
        <div class="card-header">
            Create Tag Form
        </div>
        <div class="card-body">
            <form action="{{route('CreateTag')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="tag">Tag</label>
                    <input type="text" name="tag" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <input type="submit" class="btn btn-primary" value="Create Tag">
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
