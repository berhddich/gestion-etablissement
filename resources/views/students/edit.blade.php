@extends('layout')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-4">
        <h3>Edit Student</h3>
        <a href="{{ route('students.index') }}" class="btn btn-primary">Back</a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{ $student->name }}">
        </div>
        <div class="form-group mb-3">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" value="{{ $student->email }}">
        </div>
        <div class="form-group mb-3">
            <label for="phone">Phone:</label>
            <input type="tel"  pattern="[0-9]+"  class="form-control" name="phone" value="{{ $student->phone }}">
        </div>
        <div class="form-group mb-3">
            <label for="section">Section:</label>
            <select name="section" class="form-control">
                <option value="Math" {{ $student->section == 'Math' ? 'selected' : '' }}>Math</option>
                <option value="Svt" {{ $student->section == 'Svt' ? 'selected' : '' }}>SVT</option>
                <option value="Physique" {{ $student->section == 'Physique' ? 'selected' : '' }}>Physique</option>
                <option value="Informatique" {{ $student->section == 'Informatique' ? 'selected' : '' }}>Informatique</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="image">Image:</label>
            <input type="file" name="image" class="form-control">
            <img src="/images/{{ $student->image }}" width="100" class="mt-2">
        </div>
        <button type="submit" class="btn btn-primary">Update Student</button>
    </form>
</div>
@endsection
