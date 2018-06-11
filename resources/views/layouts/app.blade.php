<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    @yield('styles')
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <div class="container">
            <div class="row">
                @if(Auth::check())
                    <div class="col-lg-4">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('Users')}}">Admins</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('UserForm')}}">Add Admin</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('EditProfile',['id'=>$user->id])}}">Edit My Profile</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('Posts')}}">Posts</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('Categories')}}">Categories</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('Tags')}}">Tags</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('PostForm')}}">Create New Post</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('DeletedPosts')}}">Deleted Posts</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('CategoryForm')}}">Create New Category</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('TagForm')}}">Create New Tag</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-8">
                        @yield('content')
                    </div>
                @else
                <div class="col-lg-12">
                    @yield('content')
                </div>
                @endif
            </div>
        </div>


    </div>
</body>
    @yield('scripts')
</html>
