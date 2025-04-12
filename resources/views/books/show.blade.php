@extends('layout')

@section('content')
    <h2>Détails du Livre</h2>

    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">{{ $book->title }}</h5>
            <p class="card-text"><strong>Auteur :</strong> {{ $book->author }}</p>
            <p class="card-text"><strong>Éditeur :</strong> {{ $book->publisher }}</p>
            <p class="card-text"><strong>Année :</strong> {{ $book->year }}</p>

            @if($book->cover_image)
                <img src="{{ asset('images/books/' . $book->cover_image) }}" width="120">
            @endif
        </div>
    </div>

    <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3">⬅ Retour</a>
@endsection
