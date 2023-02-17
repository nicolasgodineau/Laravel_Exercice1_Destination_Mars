@extends('master')
@extends('nav')

@section('title', 'Maison')

@section('content')
<main
    class="bg-[url('assets/img/home.webp')] bg-no-repeat bg-auto bg-center w-[1400px] h-[1000px] rounded-[30px] pt-8 ">
    @section('nav')
    <section
        class="backdrop-blur rounded-[30px] bg-[#0000003d] w-[1000px] flex flex-col items-center justify-evenly gap-9 p-8 px-8 my-0 mx-auto">
        <h1 class="fs-6 font-Revalia text-small text-white text-center uppercase">
            nos maisons</h1>
        <div class="flex flex-row gap-9 items-center justify-center h-fit w-full p-12">
            <article class="shadow-3xl rounded-[30px] hover:scale-105 transition-all">
                <img class="h-72 rounded-t-[30px] object-cover" src="assets/img/maisons/maison1.jpeg" alt="Maison 1">
                <div class="flex flex-col gap-3 p-3  rounded-b-[30px] backdrop-blur-xl bg-[#ffffff26]">
                    <p class="font-Revalia text-sm px-3 text-center">Sphère 1</p>
                    <p class="font-Revalia text-xs px-3 text-center flex flex-row items-center justify-center">70
                        000<span><i class="fa-brands fa-battle-net h-5"></i></span></p>
                    <small class="font-Revalia text-xs px-3 text-center">Environ 500 000 $</small>
                    <p class="font-Revalia text-xs px-3 text-center">Livraison: printemps 2175</p>
                    <a class="text-center border-t" href="contact">
                        <h2 class="font-Revalia text-sm py-2">S'inscire sur la liste</h2>
                    </a>
                </div>
            </article>
            <article class="shadow-3xl rounded-[30px] hover:scale-105 transition-all">
                <img class="h-72 rounded-t-[30px] object-cover" src="assets/img/maisons/maison2.jpeg" alt="Maison 2">
                <div class="flex flex-col gap-3 p-3 rounded-b-[30px] backdrop-blur-xl bg-[#ffffff26]">
                    <p class="font-Revalia text-sm px-3 text-center">Sphère 2</p>
                    <p class="font-Revalia text-xs px-3 text-center flex flex-row items-center justify-center">70
                        000<span><i class="fa-brands fa-battle-net h-5"></i></span></p>
                    <small class="font-Revalia text-xs px-3 text-center">Environ 850 000 $</small>
                    <p class="font-Revalia text-xs px-3 text-center">Livraison: printemps 2175</p>
                    <a class="text-center border-t" href="contact">
                        <h2 class="font-Revalia text-sm py-2">S'inscire sur la liste</h2>
                    </a>
                </div>
            </article>
            <article class="shadow-3xl rounded-[30px] hover:scale-105 transition-all">
                <img class="h-72 rounded-t-[30px] object-cover" src="assets/img/maisons/maison3.jpeg" alt="Maison 3">
                <div class="flex flex-col gap-3 p-3 rounded-b-[30px] backdrop-blur-xl bg-[#ffffff26]">
                    <p class="font-Revalia text-sm px-3 text-center">Sphère 3</p>
                    <p class="font-Revalia text-xs px-3 text-center flex flex-row items-center justify-center">135
                        000<span><i class="fa-brands fa-battle-net h-5"></i></span></p>
                    <small class="font-Revalia text-xs px-3 text-center">Environ 1 000 000 $</small>
                    <p class="font-Revalia text-xs px-3 text-center">Livraison: printemps 2175</p>
                    <a class="text-center border-t" href="contact">
                        <h2 class="font-Revalia text-sm py-2">S'inscire sur la liste</h2>
                    </a>
                </div>
            </article>
        </div>

    </section>
</main>
@endsection