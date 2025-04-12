@extends('layout')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-4">
        <h3>Add New Student</h3>
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

    <form method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        </div>
        <div class="form-group mb-3">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group mb-3">
            <label for="phone">Phone:</label>
            <input type="tel"  pattern="[0-9]+" class="form-control" name="phone" value="{{ old('phone') }}">
        </div>
        <div class="form-group mb-3">
            <label for="section">Section:</label>
            <select name="section" class="form-control">
                <option value="Math">Math</option>
                <option value="Svt">SVT</option>
                <option value="Physique">Physique</option>
                <option value="Informatique">Informatique</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="image">Image:</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Add Student</button>

        
    </form>
</div>
@endsection
