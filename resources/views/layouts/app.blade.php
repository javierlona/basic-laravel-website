<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Basic Laravel Website</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')

    <div class="container">
      <!-- Add logic to specify which pages to show 'showcase' -->
      @if(Request::is('/'))
        @include('inc.showcase')
      @endif
      <div class="row">
        <div class="col-md-8 col-lg-8">
          @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
          @include('inc.sidebar')
        </div>
      </div>
    </div>
    <footer class="text-center">
      <p>Copyright 2079 &copy; Basic Stuff</p>
    </footer>
  </body>
</html>
