@extends('gabarit')

@section('title')
    Nous joindre
@endsection
{{-- <div>{{ $message->getTelephone() }}</div> --}}
@section('contenu')
    <h1>Nous joindre</h1>
        
            @foreach($responsables as $responsable)
                <div>
{{-- ajouter une image de chaque prof --}}
                    {{-- <img src="" alt=""> --}}
<p>{{$responsable->getPrenom()}} {{$responsable->getNom()}}</p>
<p>{{$responsable->getResponsabilite()}}</p>
<p>{{$responsable->getTelephone()}}</p>

                </div>

                <br>
            @endforeach
        
        

{{-- Ajouter une action pour faire fonctionner le formulaire --}}
<form action="#" method="post">

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

<div class="ctn-input">
    <label class="" for="joindreNom">Nom</label>
    <input
        type="text"
        id="joindreNom"
        name=""
        placeholder=""
        aria-labelledby=""
        aria-required="true"
        aria-invalid="false"
        aria-describedby=""
        value=""
        class="input" />
</div>




</form>




@endsection

