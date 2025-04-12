@extends('layout')

@section('content')

<h2 class="mb-4">Créer un utilisateur</h2>

@include('users.form', ['action' => route('users.store'), 'method' => 'POST'])

@endsection
