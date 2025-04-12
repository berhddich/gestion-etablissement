@extends('layout')

@section('content')
    <h2>Bienvenue, {{ Auth::user()->name }}</h2>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Déconnexion</button>
    </form>

    <ul class="mt-4">
        <li><a href="{{ route('books.index') }}">📚 Gérer les livres</a></li>
        <li><a href="{{ route('students.index') }}">👨‍🎓 Gérer les étudiants</a></li>
        <li><a href="{{ route('teachers.index') }}">👨‍🏫 Gérer les enseignants</a></li>
        <li><a href="{{ route('users.index') }}">👤 Gérer les utilisateurs</a></li>
    </ul>
@endsection
