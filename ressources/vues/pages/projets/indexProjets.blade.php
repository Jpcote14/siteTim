@extends('gabarit')

@section('title')
    Projets
@endsection

@section('contenu')
    <h1> Je suis l'index projets... </h1>
  
    <ul>
        @foreach ($projets as $projet)
    
        <li><a href="index.php?controleur=projets&action=fiche&">{{ $projet->getId() }} - {{ $projet->getTitre() }}</a></li>
        <br>
            
        @endforeach
    </ul>
   
@endsection
