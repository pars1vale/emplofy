<html lang="en" class="h-100" data-bs-theme="dark">

<head>
  <script src="{{ asset('dist/js/color-modes.js') }}"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.122.0">
  <title>Emplofy</title>

  <link rel="stylesheet" href="{{ asset('dist/css/cover.css') }}">

  <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
      --bd-violet-bg: #712cf9;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #6528e0;
      --bs-btn-hover-border-color: #6528e0;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #5a23c8;
      --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
      z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
      display: block !important;
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-bg-dark">

  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
      <div>
        <h3 class="float-md-start mb-0">Emplofy</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
          @guest
            @if (Route::has('login'))
              <a class="nav-link fw-bold py-1 px-0" href="{{ route('login') }}">Login</a>
            @endif
            @if (Route::has('register'))
              <a class="nav-link fw-bold py-1 px-0" href="{{ route('register') }}">Register</a>
            @endif
          @else
            <a class="nav-link fw-bold py-1 px-0" href="{{ route('logout') }}">Logout</a>
            <a class="nav-link fw-bold py-1 px-0" aria-current="page" href="{{ route('home') }}">Dashboard</a>
          @endguest
        </nav>
      </div>
    </header>

    <main class="px-3">
      <h1>App Data Pegawai</h1>
      <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ad nisi molestias sed natus, consectetur recusandae similique
        fuga in accusantium non possimus unde reprehenderit exercitationem amet officiis quo vel earum?</p>
      <p class="lead">
        <a href="#" class="btn btn-lg btn-light fw-bold border-white bg-white">Learn more</a>
      </p>
    </main>

    <footer class="mt-auto text-white-50">
      <p>Muhammad Ridho Putra Syalabi</p>
    </footer>
  </div>
  <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
