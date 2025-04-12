@extends('layout')

@section('content')
    <h2>{{ isset($book) ? 'Modifier le Livre' : 'Ajouter un Livre' }}</h2>

    <form action="{{ isset($book) ? route('books.update', $book) : route('books.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
        @csrf
        @if(isset($book)) @method('PUT') @endif

        @include('books-form')

        <button type="submit" class="btn btn-success mt-3">{{ isset($book) ? 'Mettre à jour' : 'Enregistrer' }}</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3">Annuler</a>
    </form>
@endsection
