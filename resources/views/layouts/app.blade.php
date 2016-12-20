<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Address book</title>

    {{ HTML::style('css/all.css') }}
    <!-- TODO fix Elixir link -->
    <!-- <link rel="stylesheet" href=" {/* {  elixir('css/all.css') }*/}" /> -->
  </head>

  <body>
    <div class="container">
      @yield('content')
    </div>
    {{ HTML::script('js/script.js') }}
  </body>
</html>
