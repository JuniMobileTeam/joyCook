<!DOCTYPE html>
<html class="wide wow-animation smoothscroll scrollTo">
  <head>
    @include('partials._head')
  </head>
  <body>
    <div id="app">
      @include('elements._ui-rd-navbar-hamburger-menu')
      <div class="page text-center">
        @yield('content')
      </div>
    </div>
    <script type="text/javascript" src="js/core.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    @yield('script')
  </body>
</html>
