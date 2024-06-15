<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Emplofy</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/fontawesome-free/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/css/components.css') }}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">

      @yield('content')

    </div>
  </div>

  <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
  <script src="{{ asset('backend/js/popper.min.js') }}"></script>
  <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('backend/js/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('backend/js/moment.min.js') }}"></script>
  <script src="{{ asset('backend/js/stisla.js') }}"></script>
  <script src="{{ asset('backend/js/scripts.js') }}"></script>
  <script src="{{ asset('backend/js/custom.js') }}"></script>
</body>

</html>
