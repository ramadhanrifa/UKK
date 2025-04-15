<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @vite('resources/css/app.css')
</head>

<body>
    <div class="box-content mt-5">
        @yield('content')
    </div>

    @stack('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>

</html>
