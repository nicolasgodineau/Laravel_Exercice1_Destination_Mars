@extends('master')

@section('title', 'A propos')

@section('content')
<main
    class="bg-[url('assets/img/home.webp')] bg-no-repeat bg-auto bg-center w-[100%] h-[100%] flex flex-col items-center gap-[10%] rounded-[30px] pt-8 ">
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
        class="backdrop-blur-xl rounded-[30px] bg-[#0000003d] w-[1000px] flex flex-col items-center justify-evenly gap-9 p-8 px-8 my-0 mx-auto"">
        <h1 class=" fs-6 font-ArchivoBlack text-small text-white text-center uppercase">
        Qui nous sommes</h1>
        <div class="flex flex-row gap-9 items-center justify-center h-fit w-full p-8">
            <p class="font-ArchivoBlack leading-7">Bienvenue Mars Real Estate, le premier fournisseur de
                logements sur la
                planète rouge!
                <br> Notre collection de propriétés propose des maisons pour tous les budgets, que vous recherchiez
                une maison modeste ou un domaine de luxe. <br> Chacune de nos annonces offre une opportunité unique
                de posséder un morceau du seul habitat connu au-delà de la Terre. <br> En tant que pionniers des
                temps modernes, nous sommes fiers d'offrir un service exceptionnel et les meilleures offres sur
                l'immobilier martien. <br> Que vous cherchiez à investir, à créer une maison de vacances ou
                simplement à concrétiser vos rêves interplanétaires, Mars Real Estate est là pour y arriver. <br>
                Demandez une consultation gratuite aujourd'hui et faites le premier pas vers votre propre aventure
                martienne.
            </p>

        </div>

    </section>
</main>
@endsection