@extends('layouts.app')



@section('content')

    <div class="card">
        <div class="card-header">
            Create Category Form
        </div>
        <div class="card-body">
            <form action="{{route('CreateCategory')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <input type="submit" class="btn btn-primary" value="Create Category">
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
