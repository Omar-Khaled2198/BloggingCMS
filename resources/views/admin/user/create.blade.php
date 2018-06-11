@extends('layouts.app')



@section('content')

    <div class="card">
        <div class="card-header">
            Add New Admin Form
        </div>
        <div class="card-body">
            <form action="{{route('CreateAdmin')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <input type="submit" class="btn btn-primary" value="Add Admin">
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
