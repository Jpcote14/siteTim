@extends('gabarit')

@section('title')
    Projets
@endsection

@section('contenu')
    <h1> Je suis l'index projets... </h1>
    <a href="index.php?controleur=projets&action=fiche">Ficher d'un projet</a>
    <p>{{$contenu}}</p>
@endsection