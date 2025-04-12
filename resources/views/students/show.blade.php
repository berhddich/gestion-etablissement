@extends('layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold">👤 Détails de l'étudiant</h3>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">⬅ Retour à la liste</a>
</div>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm text-center p-4">
            <img src="{{ asset('images/' . $student->image) }}" 
                 class="rounded-circle mx-auto mb-3" 
                 style="width: 150px; height: 150px; object-fit: cover;"
                 alt="Photo de {{ $student->name }}">

            <h4 class="card-title">{{ $student->name }}</h4>
            <p class="text-muted mb-2">Section : {{ $student->section }}</p>

            <div class="text-start px-4 mt-4">
                <p><i class="fas fa-id-card me-2 text-primary"></i><strong>ID :</strong> {{ $student->id }}</p>
                <p><i class="fas fa-envelope me-2 text-primary"></i><strong>Email :</strong> {{ $student->email }}</p>
                <p><i class="fas fa-phone me-2 text-primary"></i><strong>Téléphone :</strong> {{ $student->phone }}</p>
            </div>
        </div>
    </div>
</div>

@endsection
