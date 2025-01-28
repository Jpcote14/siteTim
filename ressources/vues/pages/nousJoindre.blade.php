@extends('gabarit')

@section('title')
Nous joindre
@endsection
{{-- <div>{{ $message->getTelephone() }}</div> --}}
@section('contenu')
<div class="ctn-intro-page">
    <h1>Nous joindre</h1>
    <p class="">Pour toute question ou information, contactez-nous par courriel ou par téléphone – notre équipe se fera un plaisir de vous répondre rapidement !</p>
</div>

<div class="ctn-formulaire">
    <div class="">


        @foreach($responsables as $responsable)
        <div class="carte-prof">

            <img class="img-prof" src={{$responsable->getCheminImage()}} alt="">
            <div class="">
                <h2 class="h2">{{$responsable->getPrenom()}} {{$responsable->getNom()}}</h2>
                <p>{{$responsable->getResponsabilite()}}: {{$responsable->getRole()}}</p>
            </div>
            <p>{{$responsable->getTelephone()}}</p>

        </div>
        @endforeach


    </div>

</div>



@endsection

<!-- <form action="#" method="post">

        <h2>Contacte par téléphone</h2>

        <div class="ctn-input">
            <label class="" for="joindrePrenom">Prénom</label>
            <input
                type="text"
                id="joindrePrenom"
                name=""
                placeholder=""
                aria-labelledby=""
                aria-required="true"
                aria-invalid="false"
                aria-describedby=""
                value=""
                class="input" />
        </div>

    </form> -->