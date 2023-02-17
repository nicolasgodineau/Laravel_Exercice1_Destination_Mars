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
    <link href="{{ asset ('css/styles.css')}}" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                fontSize: {
                    big: "clamp(2rem, 5vw, 7rem)",
                    small: "clamp(1rem, 5vw, 2rem)"
                },
                fontFamily: {
                    'ArchivoBlack': ['Archivo Black'],
                    'Revalia': ['Revalia']
                },
                backgroundSize: {
                    'auto': 'auto 100%',
                },
                boxShadow: {
                    '3xl': 'rgb(0, 0, 0) 0px 20px 30px -10px',
                }
            }
        }
    }
    </script>
    <title>@yield('title')</title>
</head>

<body
    class="bg-[url('assets/img/background.jpg')] bg-repeat bg-contain w-[1440px] h-[900px] flex flex-col items-center justify-items-center mx-auto my-0  p-7 text-white">
    @yield('nav')

    <!-- Contenue -->
    @yield('content')


</body>

</html>