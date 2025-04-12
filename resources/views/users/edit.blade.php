@extends('layout')

@section('content')

<h2 class="mb-4">Modifier l'utilisateur</h2>

@include('users.form', ['action' => route('users.update', $user), 'method' => 'PUT'])

@endsection
