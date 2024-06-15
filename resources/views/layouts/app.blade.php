<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title', 'Emplofy')</title>
  {{-- <link rel="shortcut icon" href="{{ asset('assets/landing/images/service-image.png') }}" type="image/svg+xml"> --}}

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/fontawesome-free/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/css/components.css') }}">

  <!-- Stack for additional CSS -->
  @stack('styles')
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      @include('layouts.navbar')
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#">Emplofy</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">Em</a>
          </div>
          @include('layouts.menu')
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content" style="min-height: 816px;">
        @yield('content')
      </div>
      @include('layouts.footer')
    </div>
  </div>


  <!-- General JS Scripts -->
  <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
  <script src="{{ asset('backend/js/popper.min.js') }}"></script>
  <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('backend/js/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('backend/js/moment.min.js') }}"></script>
  <script src="{{ asset('backend/js/stisla.js') }}"></script>
  <script src="{{ asset('backend/js/scripts.js') }}"></script>
  <script src="{{ asset('backend/js/custom.js') }}"></script>

  <!-- Stack for additional scripts -->
  @stack('scripts')
</body>

</html>
