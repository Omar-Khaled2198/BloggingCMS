@extends('layouts.front')


@section('content')

    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- Blog Post -->
                @foreach($posts as $post)
                    <div class="card mb-4">
                        <img class="card-img-top" src="{{asset($post->image)}}" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">{{$post->title}}</h2>
                            <div class="card-text">{!! $post->content !!}</div>
                            <a href="{{route('GetPost',['id'=>$post->id])}}" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            Posted on {{date('M d , Y h:m', strtotime($post->updated_at))}} By
                            <a href="#">Start Bootstrap</a>
                        </div>
                    </div>
            @endforeach

            <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item">
                        <a class="page-link" href="#">&larr; Older</a>
                    </li>
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Newer &rarr;</a>
                    </li>
                </ul>
            </div>
@stop