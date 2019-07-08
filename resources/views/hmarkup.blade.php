<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{mix('css/app.css')}}" crossorigin="anonymous">
    @yield('header-styles')

    <script>
    
    window.Laravel={

      csrfToken: '{{csrf_token()}}',
      basePath: '{{url('/')}}'

    }
    
    </script>

    <title>Event +</title>
    
  </head>
  <body>
    <div class="container" id="app">

      @include('partials.menu')
        <div class="container">
        @yield('content')
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{mix('js/app.js')}}"></script>
    @yield('footer-script')
  </body>
</html>

