<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TheBears | Blog [blog.thebears.cn]</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js" integrity="sha384-L2pyEeut/H3mtgCBaUNw7KWzp5n9+4pDQiExs933/5QfaTh8YStYFFkOzSoXjlTb" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
<div class="sidebar text-center">
    <div class="logo mt-3">
        <a href="/"><img src="{{ asset('images/thebears3x.png') }}"></a>
    </div>

    <div class="mt-5 text-center">
        <ul class="nav flex-column">
            <li class="m-1 nav-item "><a href="/">首页</a></li>
            <li class="m-1 nav-item "><a href="/categories">分类</a></li>
            <li class="m-1 nav-item "><a href="/archive">归档</a></li>
            <li class="m-1 nav-item "><a href="/about">关于</a></li>
        </ul>
    </div>
</div>
<div class="main">
    <div class="container">
        @yield('main')
    </div>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
