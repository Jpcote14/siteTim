@extends('gabarit')

@section('title')
    Projets
@endsection

@section('contenu')
    <h1>{{ $projet->getTitre() }}</h1>
    
    @php
        $cours = $projet->getCoursAssociee();
        $diplome = $projet->getDiplomeAssociee();
    @endphp


        <p>{{ $cours->getNom() }}</p>
        <br>
        <p>{{$cours->getAnnee()}}e année</p>
        <br>
        <p>{{$cours->getSession()}}e session</p>
 <br>
 <p>Projet réalisé par {{$diplome->getPrenom()}} {{$diplome->getNom()}}</p>
 {{-- Ajouter une photo du finissant si dispo --}}
@endsection

