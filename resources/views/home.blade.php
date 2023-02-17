@extends('master')
@extends('nav')

@section('title', 'Accueil')

@section('content')
<main
    class="bg-[url('assets/img/home.webp')] bg-no-repeat bg-auto bg-center w-[100%] h-[100%] flex flex-col items-center justify-between rounded-[30px] pt-8">
    @section('nav')
    <div class="w-full flex flex-col items-center text-center backdrop-blur-xl bg-[#0000002e]">
        <h1 class="font-ArchivoBlack text-big uppercase">Découvrez Mars</h1>
        <h2 class="font-Revalia text-small uppercase">Et si votre prochaine maison était sur Mars ?</h2>
    </div>
    <div class="flex w-full h-[250px] justify-center gap-28">
        <div class="flex flex-col items-center p-2 w-[220px] rounded-t-full backdrop-blur-xl bg-[#ffffff26]">
            <div
                class="flex flex-col items-center justify-center w-[200px] h-[200px] rounded-full border border-solid border-white">
                <h2 class=" flex flex-col items-center justify-center font-ArchivoBlack text-small rounded-full">
                    1.2M+</h2>
                <p class="font-Revalia text-xs">Population sur Mars</p>
            </div>
        </div>
        <div class="flex flex-col items-center p-2 w-[220px] rounded-t-full backdrop-blur-xl bg-[#ffffff26]">
            <div
                class="flex flex-col items-center justify-center w-[200px] h-[200px] rounded-full border border-solid border-white">
                <h2 class=" flex flex-col items-center justify-center font-ArchivoBlack text-small rounded-full">500K+
                </h2>
                <p class="font-Revalia text-xs">Logement disponible</p>
            </div>
        </div>
        <div class="flex flex-col items-center p-2 w-[220px] rounded-t-full backdrop-blur-xl bg-[#ffffff26]">
            <div
                class="flex flex-col items-center justify-center w-[200px] h-[200px] rounded-full border border-solid border-white">
                <h2
                    class=" flex flex-col items-center justify-center font-ArchivoBlack uppercase text-small rounded-full">
                    80M+
                </h2>
                <p class="font-Revalia text-xs">Client satisfait</p>
            </div>
        </div>
    </div>
</main>
@endsection