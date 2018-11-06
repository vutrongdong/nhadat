<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <link rel="canonical" href="@yield('canonical')" /> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <meta name="twitter:card" content="{{config('app.name', 'FullTechWord')}}"> --}}
    <title> @yield('title') </title>
    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="{{asset('V2/css/font-awesome.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{mix('/css/frontend/ecom/header.css')}}"> --}}
    <link rel="stylesheet" href="{{mix('/css/frontend/ecom/home.css')}}">
    <link rel="stylesheet" href="{{asset('/css/frontend/ecom/menu.css')}}">
    <link rel="stylesheet" href="{{asset('/css/frontend/ecom/initcarousel-1.css')}}">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/amazingcarousel.js') }}"></script>
    <script src="{{ asset('js/initcarousel-1.js') }}"></script>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
    <!-- BEGIN PRIVY WIDGET CODE -->
{{--     <script type='text/javascript'> var _d_site = _d_site || '6734EAC9998372A108FD815F'; </script>
    <script src='https://widget.privy.com/assets/widget.js'></script> --}}
    <!-- END PRIVY WIDGET CODE -->
</head>
<body>
    {{-- <div id="fb-root"></div> --}}
{{--     <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script> --}}

    <div id="app">
        <frontend-layout/>
    </div>
    <div id="wrapper">

    </div>
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
