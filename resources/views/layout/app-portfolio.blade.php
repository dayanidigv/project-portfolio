<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ $user->name }} - Portfolio @yield('title')</title>
  <meta name="description" content="@yield('description')">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.svg">
  

  <!-- CSS here -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('fontawsome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('fontawsome/css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('css/portfolio-style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/portfolio-responsive.css') }}">
  @yield('style')

  <style>
    @if ($user->primaryColor)
      :root {
        --primary: {{ $user->primaryColor}};
      }
    @endif
    

    .primary-color{
      color:var(--primary);
    }

  </style>
    <script>
       const primaryColor = getComputedStyle(document.documentElement).getPropertyValue('--primary');
        let rgbValues;
        if (primaryColor.startsWith('#')) {
            rgbValues = [
                parseInt(primaryColor.substring(1, 3), 16), 
                parseInt(primaryColor.substring(3, 5), 16), 
                parseInt(primaryColor.substring(5, 7), 16), 
            ];
        } else {
            rgbValues = primaryColor.match(/\d{1,3}/g);
        }
        if (rgbValues && rgbValues.length === 3) {
            const [r, g, b] = rgbValues.map(value => parseInt(value, 10));
            const secondaryOpacity = 0.6; 
            const secondaryColor = `rgba(${r}, ${g}, ${b}, ${secondaryOpacity})`;    
            document.documentElement.style.setProperty('--secondary', secondaryColor);
        }
    </script>
</head>

<body>

  <div id="page-content">
        @yield('Content')
  </div>

 <!-- JS here -->
 <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
 <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
 <script src="{{ asset('js/ajax-form.js') }}"></script>
 <script src="{{ asset('js/clipboard.min.js') }}"></script>
 <script src="{{ asset('js/slick.min.js') }}"></script>
 <script src="{{ asset('js/portfolio-script.js') }}"></script>

    @yield('script')

</body>


</html>