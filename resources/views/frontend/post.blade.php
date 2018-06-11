@extends('layouts.front)



@section('content')

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Title -->
                <h1 class="mt-4">{{$post->title}}</h1>

                <!-- Author -->
                <p class="lead">
                    by
                    <a href="#">Start Bootstrap</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p>Posted on {{date('M d , Y h:m', strtotime($post->updated_at))}}</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-fluid rounded" src="{{$asset($post->image)}}" alt="">

                <hr>

                <!-- Post Content -->
                {!! $post->content !!}

                <hr>

            </div>

@stop