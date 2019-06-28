<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Portfolio</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="js/bootstrap.js" defer></script>
        <script type="text/javascript" src="/js/jquery-2.1.3.js"></script>
        <script type="text/javascript" src="/js/jquery.tablesorter.js"></script>
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
    </head>
<body>
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="/">Portfolio</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Projet
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <h6 class="dropdown-header">Projet en classe</h6>
                        <a class="dropdown-item" href="#">PPE</a>
                        <a class="dropdown-item" href="#">SI5</a>
                        <a class="dropdown-item" href="#">SI6</a>
                        <a class="dropdown-item" href="#">SLAM</a>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header">Projet en stage</h6>
                        <a class="dropdown-item" href="#">1er année</a>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header">Projet en perso</h6>
                        {{--<a class="dropdown-item" href="#">Something else here</a>--}}
                      </div>
                    </li>
                  </ul>
                </div>
              </nav>
<div class="background jumbotron jumbotron-fluid text-center">
    <h1>Mon Portfolio</h1>
    <p>Warren Schneerberger</p>
</div>

  <main class="py-4">
    @yield('content')
    </main>
</body>
</html>
