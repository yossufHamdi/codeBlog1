<html>
<head>
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<title>
    @yield('title')
</title>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand text-light" href="{{url("/posts")}}">codeBlog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">

                <li class="nav-item">
                    <a class=" nav-link " href="{{url('/posts')}}">posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{url('/tags')}}">tags</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        latest posts
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('/posts/latest/1')}}">latest 1</a>
                        <a class="dropdown-item" href="{{url('/posts/latest/2')}}">latest 2</a>
                        <a class="dropdown-item" href="{{url('/posts/latest/3')}}">latest 3</a>
                        <a class="dropdown-item" href="{{url('/posts/latest/4')}}">latest 4</a>
                        <a class="dropdown-item" href="{{url('/posts/latest/5')}}">latest 5</a>
                        <a class="dropdown-item" href="{{url('/posts/latest/6')}}">latest 6</a>

                    </div>
                </li>


            </ul>

        </div>
    </nav>

<div class="container  mt-5 p-5">
    @yield('content')
</div>

<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
