@extends('gabarit')

@section('title')
    Nous joindre
@endsection

@section('contenu')
    <h1>Je suis la page nous joindre...</h1>
    @if($messages && count($messages) > 0)
        <ul>
            @foreach($messages as $message)
                <li>{{ $message->getCourriel() }}</li>
            @endforeach
        </ul>
    @else
        <p>Aucun message trouvé.</p>
    @endif
@endsection

