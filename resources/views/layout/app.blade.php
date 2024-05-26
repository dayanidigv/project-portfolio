
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <meta name="author" content="innak">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/notify.css') }}">

    @yield('style')
    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('font/fonts.css') }}">

    <!-- Icon -->
    <link rel="stylesheet" href="{{ asset('icon/style.css') }}">

    <!-- Favicon and Touch Icons  -->
    <!-- <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="images/favicon.png"> -->

</head>

<body class="body">

    @yield('body')

    <!-- Javascript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/notify.js') }}"></script>

    <!-- Display success message -->
    @if (session('message'))
        <script>
            new Notify({
                status: "success",
                title: "{{ session('message') }}",
                text: "",
                autoclose: false,
                effect: "slide",
                speed: 300,
                position: "right bottom"
            }).show();
        </script>
    @endif

    @if (session('success'))
        <script>
            new Notify({
                status: "success",
                title: "{{ session('message') }}",
                text: "",
                autoclose: false,
                effect: "slide",
                speed: 300,
                position: "right bottom"
            }).show();
        </script>
    @endif

    <!-- Display error message -->
    @if (session('error'))
        <script>
            new Notify({
                status: "error",
                title: "{{ session('error') }}",
                text: "",
                autoclose: false,
                effect: "slide",
                speed: 300,
                position: "right bottom"
            }).show();
        </script>
    @endif


    @yield('script')

</body>
</html>