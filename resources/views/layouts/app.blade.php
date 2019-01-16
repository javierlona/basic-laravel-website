<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Basic Laravel Website</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
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
          @include('inc.messages')
          @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
          @include('inc.sidebar')
        </div>
      </div>
    </div>
    <footer class="text-center">
    <p>Copyright {!! date('Y') !!} &copy; Basic Stuff</p>
    </footer>
  </body>
</html>
