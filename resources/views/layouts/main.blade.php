<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyApp | {{ $title }}</title>

    {{-- css bootstaraps --}}
    <link href="assets/bootstraps-5.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    {{-- end css bootstraps --}}

    {{-- css fontawesome --}}
    <link href="assets/fontawesome-5.15.4/css/fontawesome.css" rel="stylesheet" />
    <link href="assets/fontawesome-5.15.4/css/brands.css" rel="stylesheet" />
    <link href="assets/fontawesome-5.15.4/css/solid.css" rel="stylesheet" />
    {{-- end css fontawesome --}}

    {{-- myStyle --}}
    <link href="assets/css/myStyle.css" rel="stylesheet" />
    {{-- end myStyle --}}

</head>

<body>
    @if (!(Request::is('login') || Request::is('register')))
        @include('partials.navbar')
    @endif

    <div class="container">
        @yield('container')
    </div>

    @if (Request::is('login') || Request::is('register'))
        <footer class="sticky-footer bg-white p-2 fixed-bottom">
    @else
        <footer class="sticky-footer bg-white p-2">
    @endif    
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy;hurasan 2021</span>
            </div>
        </div>
    </footer>

    {{-- js bootstaraps --}}
    <script src="assets/bootstraps-5.1/js/bootstrap.bundle.min.js"></script>
    {{-- end js bootstraps --}}

    {{-- js fontawesome --}}
    <script src="assets/fontawesome-5.15.4/js/fontawesome.min.js"></script>
    {{-- end js fontawesome --}}

    {{-- js myJs --}}
    <script src="assets/js/myJs.js"></script>
    {{-- end js myJs --}}

</body>

</html>
