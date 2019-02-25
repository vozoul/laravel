<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cherii - @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Style -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/cherii.css')}}" rel="stylesheet">
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link rel="icon" type="image/png" href="{{asset('img/logo/Favicon.png')}}" />
</head>
<body>
        @section('navbar')
        <nav class="navbar navbar-expand-lg navbar-light bg-cherii position-relative">
            <button class="navbar-toggler mr-auto position-relative" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img src="{{asset('img/logo/logo-Horizontal.png')}}" width="100" height="55" class="d-inline-block align-top position-absolute justify-self-center logo" alt="">
            </a>
            <a href="{{asset('basket')}}" class="navbar-toggler"><i class="fas fa-shopping-basket"></i></a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('')}}"><i class="fas fa-home"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('catalogue')}}">Catalogue</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('contact')}}">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('basket')}}"><i class="fas fa-shopping-basket"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>
        @section('footer')
        <div class="footer">

        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
