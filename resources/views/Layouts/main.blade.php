<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dulur Lanang | {{ $title }}</title>
    <link rel="shortcut icon" href="Logo.png">
    <!--Import Font Monoton-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <!--Import CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  </head>
  <body class="bg-black d-flex flex-column min-vh-100">
      <!--Navbar-->
      <div>
        <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
          <div class="container-fluid">
              <a class="navbar-brand text-light" href="/" style="font-family: Monoton;">
                  <img src="/Logo.png" alt="" width="30" height="30" class="d-inline-block">
                  Dulur Lanang
              </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <form class="d-flex my-3" action="/pencari" role="search" method="GET">
                  <input class="form-control rounded-pill me-1" name="search" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-primary rounded-pill" type="submit"><i class="bi bi-search"></i></button>
              </form>
              <ul class="navbar-nav nav-pills ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Genre
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/Genre/Action">Action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/Genre/Comedy">Comedy</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/Genre/Fantasy">Fantasy</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/Genre/Horror">Horror</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/Genre/Romance">Romance</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/Genre/Supranatural">Supranatural</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/Genre/Thriller">Thriller</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('movies') ? 'active' : '' }}" href="/movies">Movies</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('anime') ? 'active' : '' }}" href="/anime">Anime</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('feedback') ? 'active' : '' }}" href="/feedback">Feedback</a>
                </li>
<<<<<<< HEAD
                <ul class="navbar-nav ms-auto">
                  @auth
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Welcome. {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/admin">Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                  </li>

                  
                      
                  @endauth

                </ul>
=======
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}" href="/admin">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-outline-primary {{ Request::is('login') ? 'active' : '' }}" href="/login">Login</a>
                </li>
>>>>>>> 071adcf73b44cfabdfb782acf4f8f5c183b7c900
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <!--Content-->
      @yield('Content')
      <!--Footer-->
      <footer class="mt-auto">
        <div class="absolute mb-0">
          <div class="bg-dark p-2 mt-2 d-flex flex-row">
              <div class="me-auto ms-3">
                  <a class="navbar-brand text-light" href="/login" style="font-family: Monoton;">
                      <img src="/Logo.png" alt="" width="30" height="30" class="d-inline-block">
                      Dulur Lanang
                  </a>
              </div>
              <div class="text-white me-3">
                  <i>
                  &copy; Copyright 2022
                  </i>
              </div>
          </div>
        </div>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>