@extends('gabarit')

@section('title')
Nous joindre
@endsection

@section('contenu')

<div class="ctn-intro-page">
    <h1 class="h1">Nous joindre</h1>
    <p class="">Pour toute question ou information, contactez-nous par courriel ou par téléphone – notre équipe se fera un plaisir de vous répondre rapidement !</p>
</div>
<form class="ctn-formulaire" action="index.php?controleur=messages&action=inserer" method="post">


    <div class="ctn-droite">
        <div class="ctn-nos-responsables">
            <h2 class="h2">Nos responsables</h2>
            <p>Choisissez avec qui vous souhaitez communiquer parmi nos quatre professeurs responsables du programme.</p>
        </div>

        <div class="ctn-carte-prof">
            @foreach($responsables as $responsable)
            <label for="responsable-{{$responsable->getId()}}" class="carte-prof">
                <input class="radio-prof" type="radio" id="responsable-{{$responsable->getId()}}"
                    name="responsable_id" value="{{$responsable->getId()}}"
                    @if(isset($tValidation['responsable_id']['valeur']) && $tValidation['responsable_id']['valeur']==$responsable->getId())
                checked
                @elseif($loop->first)
                checked
                @endif>

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
            <label class="label" for="prenom_nom">Nom complet</label>
            <input
                type="text"
                id="prenom_nom"
                name="prenom_nom"
                placeholder="Jean-Philippe Côté"
                aria-labelledby=""
                aria-required="true"
                aria-invalid="false"
                aria-describedby=""
                value="{{ $tValidation['prenom_nom']['valeur'] ?? '' }}"
                class="input" />

            @if(isset($tValidation['prenom_nom']['message']) && $tValidation['prenom_nom']['valide'] == 'faux')
            <p class="error">{{ $tValidation['prenom_nom']['message'] }}</p>
            @endif
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
                value="{{ $tValidation['courriel']['valeur'] ?? '' }}"
                class="input" />

            @if(isset($tValidation['courriel']['message']) && $tValidation['courriel']['valide'] == 'faux')
            <p class="error">{{ $tValidation['courriel']['message'] }}</p>
            @endif
        </div>

        <div id="ctnBenoit" class="hidden">
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
                    value="{{ $tValidation['telephone']['valeur'] ?? '' }}"
                    class=" input" />

                @if(isset($tValidation['telephone']['message']) && $tValidation['telephone']['valide'] == 'faux')
                <p class="error">{{ $tValidation['telephone']['message'] }}</p>
                @endif
            </div>

            <div id="ctnCheckbox" class="ctn-checkbox">
                <div class="inputLabelConsentement">
                    <input
                        type="checkbox"
                        id="consentement"
                        name="consentement"
                        placeholder="418-659-6600"
                        aria-labelledby=""
                        aria-required="true"
                        aria-invalid="false"
                        aria-describedby=""
                        value="on" {{ isset($tValidation['consentement']['valeur']) && $tValidation['consentement']['valeur'] == '1' ? 'checked' : '' }}
                        class="" />
                    <label class="" for="consentement">J'autorise l'utilisation de mon numéro de téléphone.</label>
                </div>

                @if(isset($tValidation['consentement']['message']) && $tValidation['consentement']['valide'] == 'faux')
                <p class="error">{{ $tValidation['consentement']['message'] }}</p>
                @endif
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
                value="{{ $tValidation['sujet']['valeur'] ?? '' }}"
                class="input" />

            @if(isset($tValidation['sujet']['message']) && $tValidation['sujet']['valide'] == 'faux')
            <p class="error">{{ $tValidation['sujet']['message'] }}</p>
            @endif
        </div>

        <div class="ctn-input">
            <label class="label" for="message">Message</label>
            <textarea class="input" id="message" name="message" rows="10" cols="50" maxlength="500"
                placeholder="Écrivez votre message ici...">{{ $tValidation['message']['valeur'] ?? '' }}</textarea>

            @if(isset($tValidation['message']['message']) && $tValidation['message']['valide'] == 'faux')
            <p class="error">{{ $tValidation['message']['message'] }}</p>
            @endif
        </div>

        <!-- manque le recapcha -->
        <button type="submit" class="btn btnFormulaire">S'inscrire</button>

    </div>

</form>



@endsection