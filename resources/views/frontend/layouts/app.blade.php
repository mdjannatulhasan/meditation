<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Meditation') }}- @yield('title')</title>

        <!------- FONTS ------->
        <link rel="stylesheet" href="{{ asset('') }}asset/frontend/fonts/fonts.css">
        <!----- CSS HERE ----->
        <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/swiper-bundle.min.css" />
        <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/bootstrap-grid.min.css" />
        <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/style.css" />
        <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/reuseble-code.css" />
        <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/header.css" />
        <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/footer.css" />
        <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/responsive.css" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    @include('frontend.include.header')
    <main>

        @yield('content')

    </main>
    @include('frontend.include.footer')

    @include('frontend.include.back-to-top')

    <!------------ JS HERE ------------>
    @include('frontend.include.script')


    <!--  Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
