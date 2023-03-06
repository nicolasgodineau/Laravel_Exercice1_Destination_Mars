<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Revalia&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4890a1a8f5.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

    <title>@yield('title')</title>
</head>

<body
    class="bg-repeat bg-contain w-[1440px] h-[100vh] flex flex-col items-center justify-items-center mx-auto my-0  p-7 text-white"
    style="background-image: url({{ url('assets/img/background.jpg') }});">
    <nav class="flex flex-row items-center w-full px-8" id="mainNav">
        <div class="grow">
            <a class="flex flex-row gap-2 items-center" href="home"><img class="w-4 invert"
                    src="assets/img/favicon.ico" alt=""><span class=" font-Revalia text-white">Mars Real
                    Estate</span>
            </a>
        </div>
        <div class="flex flex-row gap-8 items-center">
            <a class=" font-Revalia px-2 py-3 text-white hover:scale-110 transition-all hover:underline"
                href="houses">Nos
                maisons</a>
            <a class=" font-Revalia px-2 py-3 text-white hover:scale-110 transition-all hover:underline"
                href="about">À
                propos</a>
            <a class=" font-Revalia px-6 py-2 text-white border-2 rounded-full hover:scale-110 transition-all hover:backdrop-blur-3xl"
                href="contact">Contact</a>
        </div>
    </nav>
    <main class="bg-no-repeat bg-cover w-[100%] h-[90vh] flex flex-col items-center justify-center rounded-[30px] pt-5"
        style="background-image: url({{ url('assets/img/home.webp') }});">
        <!-- Contenu -->
        @yield('content')

        <script src="{{ asset('js/scripts.js') }}"></script>
        @yield('Javascript')
</body>

</html>
