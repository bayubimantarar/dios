<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />

    <style>
        body {
            background: #eee;
        }
    </style>

    @yield('css')

    <title>@yield('title') | Digital Oasis Bandung</title>
  </head>
  <body>
    <div class="container">
      @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    @yield('js')
  </body>
</html>
