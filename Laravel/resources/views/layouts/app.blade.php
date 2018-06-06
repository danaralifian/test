<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Travellaku - @yield('title')</title>

   <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ URL::asset('assets/css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ URL::asset('assets/css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>
  <!-- Navigation -->
  <div class="navbar-fixed">
    <nav class="light-blue lighten-1" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="{{ URL('/') }}" class="brand-logo orange-gray">Travellaku</a>
          <ul class="right hide-on-med-and-down" id="garis">
            <li><a href="#">Rute</a></li>
             <li><a href="{{ URL('input') }}">Input Data</a></li>
             <li><a href="{{ URL('confirm') }}">Konfirmasi Tiket</a></li>
          </ul>

          <ul id="nav-mobile" class="side-nav">
            <li><a href="#">Navbar Link</a></li>
          </ul>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
  </div>
  <!-- Navigation -->

  <!-- Content -->
    @section('content')

    @show

  <!-- End Of Content -->

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{ URL::asset('assets/js/materialize.js') }}"></script>
  <script src="{{ URL::asset('assets/js/init.js') }}"></script>

  <script type="text/javascript">
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
  </script>

  </body>
</html>