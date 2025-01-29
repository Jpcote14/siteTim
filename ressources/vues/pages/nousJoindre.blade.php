@extends('gabarit')

@section('title')
Nous joindre
@endsection

@section('contenu')
<div class="ctn-intro-page">
    <h1 class="h1">Nous joindre</h1>
    <p class="">Pour toute question ou information, contactez-nous par courriel ou par téléphone – notre équipe se fera un plaisir de vous répondre rapidement !</p>
</div>

<form class="ctn-formulaire" action="#" method="post">
    <div class="ctn-carte-prof">
        <div class="ctn-nos-responsables">
            <h2 class="h2">Nos responsables</h2>
            <p>Choisi avec qui tu souhaite communiquer parmis nos 4 professeurs responsable du programme.</p>
        </div>


        @foreach($responsables as $responsable)
        <label for="responsable-{{$responsable->getId()}}" class="carte-prof">
            <!-- Bouton radio caché -->
            <input class="radio-prof" type="radio" id="responsable-{{$responsable->getId()}}"
                name="responsableSelectionne" value="{{$responsable->getId()}}"
                @if($loop->first) checked @endif>

            <!-- Contenu de la carte -->
            <div class="info-prof">
                <img class="img-prof" src="{{$responsable->getCheminImage()}}"
                    alt="Photo de {{$responsable->getPrenom()}} {{$responsable->getNom()}}">
                <div>
                    <h3 class="h3 h3-contact">{{$responsable->getPrenom()}} {{$responsable->getNom()}}</h3>
                    <p class="responsabilite-prof">{{$responsable->getResponsabilite()}}</p>
                    <p class="role-prof">{{$responsable->getRole()}}</p>
                    <p>{{$responsable->getTelephone()}}</p>
                </div>
            </div>
        </label>
        @endforeach


    </div>


    <div class="formulaire">

        <!-- Faire un script qui permet dafficher le nom du responsable choisi -->
        <h2 id="choixResponsable" class="h2 h2-contact">Contactezr Sylvain Lamoureux</h2>

        <div class="ctn-input">
            <label class="label" for="joindrePrenom">Prénom</label>
            <input
                type="text"
                id="joindrePrenom"
                name=""
                placeholder=""
                aria-labelledby=""
                aria-required="true"
                aria-invalid="false"
                aria-describedby=""
                value="Jean-Philippe"
                class="input" />
        </div>

        <div class="ctn-input">
            <label class="label" for="joindrePrenom">Prénom</label>
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

        <div class="ctn-input">
            <label class="label" for="joindrePrenom">Prénom</label>
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

        <div class="ctn-input">
            <label class="label" for="joindrePrenom">Prénom</label>
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

        <div class="ctn-input">
            <label class="label" for="joindrePrenom">Prénom</label>
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

    </div>

</form>



@endsection