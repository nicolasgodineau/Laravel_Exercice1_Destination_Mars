@extends('master')

@section('title', 'Merci')

@section('content')
<main
    class="bg-no-repeat bg-cover w-[100%] h-[100%] flex flex-col items-center justify-start rounded-[30px] pt-5" style="background-image: url({{ url('assets/img/home.webp')}});">
    <nav class="flex flex-row items-center w-full px-8" id="mainNav">
        <div class="grow">
            <a class="flex flex-row gap-2 items-center" href="home"><img class="w-4 invert" src="assets/img/favicon.ico"
                    alt=""><span class=" font-Revalia text-white">Mars Real Estate</span>
            </a>
        </div>
        <div class="flex flex-row gap-8 items-center">
            <a class=" font-Revalia px-2 py-3 text-white hover:scale-110 transition-all hover:underline" href="houses">Nos
                maisons</a>
            <a class=" font-Revalia px-2 py-3 text-white hover:scale-110 transition-all hover:underline" href="about">À
                propos</a>
            <a class=" font-Revalia px-6 py-2 text-white border-2 rounded-full hover:scale-110 transition-all hover:backdrop-blur-3xl"
                href="contact">Contact</a>
        </div>
    </nav>
    <section
        class="backdrop-blur-xl rounded-[30px] bg-[#0000003d] flex flex-col items-center justify-evenly w-[1000px]  pb-12">
        <h1 class="fs-6 font-ArchivoBlack text-small text-white text-center uppercase">
            merci !</h1>
        <div class="flex flex-row gap-9 items-center justify-center h-fit w-full p-8">
            <div class="flex flex-col gap-9 items-center justify-center h-fit w-full p-8 ">
                @isset ($data)
                <p><strong>Nom: </strong>{{ $data->nom  ?? ''}}</p>
                <p><strong>Prénom: </strong>{{ $data->prenom ?? '' }}</p>
                <p><strong>Email: </strong>{{ $data->email ?? ''}}</p>
                @else
                @endisset
            </div>
        </div>

    </section>
</main>
@endsection