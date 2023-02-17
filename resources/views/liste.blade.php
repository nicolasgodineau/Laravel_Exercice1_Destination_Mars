@extends('master')
@extends('nav')

@section('title', 'Merci')

@section('content')
<main
    class="bg-[url('assets/img/home.webp')] bg-no-repeat bg-auto bg-center w-[100%] h-[100%] flex flex-col items-center gap-[10%] rounded-[30px] pt-8 ">
    @section('nav')
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