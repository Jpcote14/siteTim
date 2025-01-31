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

    <div class="ctn-droite">
        <div class="ctn-nos-responsables">
            <h2 class="h2">Nos responsables</h2>
            <p>Choisissez avec qui vous souhaitez communiquer parmi nos quatre professeurs responsables du programme.</p>
        </div>

        <div class="ctn-carte-prof">
            @foreach($responsables as $responsable)
            <label for="responsable-{{$responsable->getId()}}" class="carte-prof">
                <input class="radio-prof" type="radio" id="responsable-{{$responsable->getId()}}"
                    name="responsableSelectionne" value="{{$responsable->getId()}}"
                    @if($loop->first) checked @endif>

                <div class="info-prof">
                    <img class="img-prof" src="{{$responsable->getCheminImage()}}"
                        alt="Photo de {{$responsable->getPrenom()}} {{$responsable->getNom()}}">
                    <div class="ctn-infos">
                        <h3 class="h3 h3-contact">{{$responsable->getPrenom()}} {{$responsable->getNom()}}</h3>
                        <div>
                            <p class="responsabilite-prof">{{$responsable->getResponsabilite()}}</p>
                            <p class="role-prof">{{$responsable->getRole()}}</p>
                        </div>
                        <p>{{$responsable->getTelephone()}}</p>
                    </div>
                </div>
            </label>
            @endforeach


        </div>
    </div>

    <div class="formulaire">

        <h2 id="choixResponsable" class="h2 h2-contact">Joindre Sylvain Lamoureux</h2>

        <div class="ctn-input">
            <label class="label" for="nomPrenom">Nom complet</label>
            <input
                type="text"
                id="nomPrenom"
                name="nomPrenom"
                placeholder="Jean-Philippe Côté"
                aria-labelledby=""
                aria-required="true"
                aria-invalid="false"
                aria-describedby=""
                value=""
                class="input" />
        </div>

        <div class="ctn-input">
            <label class="label" for="courriel">Adresse courriel</label>
            <input
                type="text"
                id="courriel"
                name="courriel"
                placeholder="jean-philippe_Cote@csfoy.ca"
                aria-labelledby=""
                aria-required="true"
                aria-invalid="false"
                aria-describedby=""
                value=""
                class="input" />
        </div>

        <!-- A faire apparaitre que si benoit est selected -->
        <div id="ctnBenoit">
            <div id="ctnTelephone" class="ctn-input">
                <label class="label" for="telephone">Téléphone</label>
                <input
                    type="telephone"
                    id="telephone"
                    name="telephone"
                    placeholder="418-659-6600"
                    aria-labelledby=""
                    aria-required="true"
                    aria-invalid="false"
                    aria-describedby=""
                    value=""
                    class="input" />
            </div>

            <div id="ctnCheckbox" class="ctn-checkbox">
                <input
                    type="checkbox"
                    id="checkboxAutorisation"
                    name="checkboxAutorisation"
                    placeholder="418-659-6600"
                    aria-labelledby=""
                    aria-required="true"
                    aria-invalid="false"
                    aria-describedby=""
                    value=""
                    class="" />
                <label class="" for="checkboxAutorisation">J'autorise l'utilisation de mon numéro de téléphone.</label>

            </div>
        </div>

        <div class="ctn-input">
            <label class="label" for="sujet">Objet</label>
            <input
                type="text"
                id="sujet"
                name="sujet"
                placeholder="Étudiant d'un jour, stage, questions..."
                aria-labelledby=""
                aria-required="true"
                aria-invalid="false"
                aria-describedby=""
                value=""
                class="input" />
        </div>

        <div class="ctn-input">
            <label class="label" for="message">Message</label>
            <textarea class="input" id="message" name="message" rows="10" cols="50" maxlength="500"
                placeholder="Écrivez votre message ici..."></textarea>
        </div>

        <!-- manque le recapcha -->
        <button type="submit" class="btn btnFormulaire">S'inscrire</button>

    </div>

</form>



@endsection