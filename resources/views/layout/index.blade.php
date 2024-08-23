<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- BootStrap 5.3 Cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    {{-- FontAwsome Cdn 6.4  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- AOS Style --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <link rel="stylesheet" href="@yield('style')">
    <title>@yield('title')</title>
</head>

<body>

    


    @yield('navbar')
    @yield('body')
    @yield('about')
    @yield('resume')
    @yield('projects')
    @yield('comments')
    @yield('contact')
    @yield('mail')


    @yield('script')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

    {{-- Type Js Library --}}
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    {{-- AOS JS Library --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


</body>

</html>
