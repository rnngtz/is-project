<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}"></html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" contect="width=device-width, initial-scale=1">
    <meta name="csrf-token" contect="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{asset('admin/css/styles.css')}}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="sb-nav-fixed">

    @include('layouts.partial.navbar')

    <div id="layoutSidenav">

        <div id="layoutSidenav_nav">
            @include('layouts.partial.sidebar')
        </div>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 my-4">
                    @yield('content')
                </div>
            </main>

            @include('layouts.partial.footer')

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('admin/js/scripts.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('admin/js/datatables-simple-demo.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
