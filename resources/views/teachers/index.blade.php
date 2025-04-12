@extends('layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold">👨‍🏫 Liste des enseignants</h3>
    @if(Auth::user()->role === 'admin')
    <a href="{{ route('teachers.create') }}" class="btn btn-success">➕ Ajouter un enseignant</a>
    @endif
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="row">
    @forelse($teachers as $teacher)
        <div class="col-md-4 d-flex align-items-stretch mb-4">
            <div class="card text-center shadow-sm w-100">
                <div class="card-body">
                    <img src="{{ $teacher->image ? asset('images/' . $teacher->image) : asset('images/default-avatar.png') }}"
                         alt="Photo de {{ $teacher->name }}"
                         class="rounded-circle mb-3" width="120" height="120" style="object-fit: cover;">

                    <h5 class="card-title mb-0">{{ $teacher->name }}</h5>
                    <small class="text-muted d-block mb-2">{{ $teacher->department }}</small>

                    <p class="mb-1"><i class="fas fa-envelope text-muted me-2"></i>{{ $teacher->email }}</p>
                    <p class="mb-1"><i class="fas fa-phone text-muted me-2"></i>{{ $teacher->phone }}</p>
                    <p class="mb-0"><i class="fas fa-graduation-cap text-muted me-2"></i>{{ $teacher->qualification }}</p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-outline-info btn-sm">Voir</a>
                    @if(Auth::user()->role === 'admin')
                    <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-outline-primary btn-sm">Modifier</a>
                    <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" onsubmit="return confirm('Supprimer cet enseignant ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm">Supprimer</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="alert alert-warning text-center">Aucun enseignant trouvé.</div>
        </div>
    @endforelse
</div>

<!-- Pagination -->
<div class="d-flex justify-content-center mt-4">
    {{ $teachers->links() }}
</div>

@endsection
