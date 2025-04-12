@extends('layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Liste des livres</h2>
        @if(Auth::user()->role === 'admin')
        <a class="btn btn-primary" href="{{ route('books.create') }}">➕ Nouveau Livre</a>
        @endif
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Éditeur</th>
                <th>Année</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->publisher }}</td>
                <td>{{ $book->year }}</td>
                <td>
                    @if($book->cover_image)
                        <img src="{{ asset('images/books/' . $book->cover_image) }}" width="50">
                    @endif
                </td>
                <td>
                    <a class="btn btn-sm btn-info" href="{{ route('books.show', $book) }}">Voir</a>
                    @if(Auth::user()->role === 'admin')
                    <a class="btn btn-sm btn-warning" href="{{ route('books.edit', $book) }}">Modifier</a>
                    <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ce livre ?')">Supprimer</button>
                    </form>
                    @endif
                </td>
            </tr>
        @empty
            <tr><td colspan="6" class="text-center">Aucun livre trouvé.</td></tr>
        @endforelse
        </tbody>
    </table>
@endsection
