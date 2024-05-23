<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ $user->name }} - Portfolio @yield('title')</title>
  <meta name="description" content="@yield('description')">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" type="image/x-icon" href="secure_assets/img/favicon.svg">
  

  <!-- CSS here -->
  <link rel="stylesheet" href="{{ secure_asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('fontawsome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('fontawsome/css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('css/slick.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('css/portfolio-style.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('css/portfolio-responsive.css') }}">
  @yield('style')
</head>

<body>

  <div id="page-content">
        @yield('Content')
  </div>

 <!-- JS here -->
 <script src="{{ secure_asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
 <script src="{{ secure_asset('js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ secure_asset('js/jquery.magnific-popup.min.js') }}"></script>
 <script src="{{ secure_asset('js/ajax-form.js') }}"></script>
 <script src="{{ secure_asset('js/clipboard.min.js') }}"></script>
 <script src="{{ secure_asset('js/slick.min.js') }}"></script>
 <script src="{{ secure_asset('js/portfolio-script.js') }}"></script>

    @yield('script')

</body>


</html>