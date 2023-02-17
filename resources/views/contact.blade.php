@extends('master')
@extends('nav')

@section('title', 'Contact')

@section('content')
<main
    class="bg-[url('assets/img/home.webp')] bg-no-repeat bg-auto bg-center w-[1400px] h-[1000px] rounded-[30px] pt-8 ">
    @section('nav')
    <section
        class="backdrop-blur rounded-[30px] bg-[#0000003d] w-[1000px] flex flex-col items-center justify-evenly gap-9 p-8 px-8 my-0 mx-auto">
        <h1 class="fs-6 font-Revalia text-small text-white text-center uppercase">le premier pas vers Mars</h1>
        <article class="shadow-3xl rounded-[30px]">
            <img class="h-72 rounded-t-[30px] object-cover" src="assets/img/CityMars.png" alt="Maison 1">
            <form class="flex flex-col items-center gap-3  m-0 py-2 rounded-b-[30px] backdrop-blur-xl bg-[#ffffff26]"
                method="post" action="liste">
                @csrf
                <div>
                    <input class=" rounded-[30px] p-3 bg-[#0000003d] backdrop-blur-lg font-Revalia text-sm" type="text"
                        name="nom" id="nom" placeholder="Votre nom">
                </div>
                <div>
                    <input class="rounded-[30px] p-3 bg-[#0000003d] backdrop-blur-lg font-Revalia text-sm" type="text"
                        name="prenom" id="prenom" placeholder="Votre prenom">
                </div>
                <div>
                    <input class="rounded-[30px] p-3 bg-[#0000003d] backdrop-blur-lg font-Revalia text-sm" type="email"
                        name="email" id="email" placeholder="Votre email">
                </div>
                <div class="hover:scale-105 duration-150">
                    <input
                        class="w-[200px] rounded-[30px] p-3 bg-[#0000003d] backdrop-blur-lg hover:scale-105 duration-150 font-Revalia cursor-pointer"
                        type="submit" value="Envoyer">
                </div>
        </article>
        </form>

    </section>
</main>
@endsection