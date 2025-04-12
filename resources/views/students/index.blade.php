@extends('layout') 
@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold">👨‍🎓 Liste des étudiants</h3>
    <a href="{{ url('/students/create')}}" class="btn btn-success">➕ Ajouter un étudiant</a>
</div>

<div class="row">
    @foreach($students as $student)
        <div class="col-md-4 d-flex align-items-stretch mb-4">
            <div class="card   text-center shadow-sm w-100">
                <div class="card-body">
                    <img src="{{ asset('images/'.$student->image) }}" alt="Photo de {{ $student->name }}"
                         class="rounded-circle mb-3" width="120" height="120" style="object-fit: cover;">

                    <h5 class="card-title mb-0">{{ $student->name }}</h5>
                    <small class="text-muted d-block mb-2">Section : {{ $student->section }}</small>

                    <p class="mb-1"><i class="fas fa-envelope text-muted me-2"></i>{{ $student->email }}</p>
                    <p class="mb-2"><i class="fas fa-phone text-muted me-2"></i>{{ $student->phone }}</p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-outline-info btn-sm">Voir</a>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-outline-primary btn-sm">Modifier</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Supprimer cet étudiant ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
