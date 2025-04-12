@extends('layout')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-4">
        <h3>Student Details</h3>
        <a href="{{ route('students.index') }}" class="btn btn-primary">Back</a>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <p><strong>ID:</strong> {{ $student->id }}</p>
                    <p><strong>Name:</strong> {{ $student->name }}</p>
                    <p><strong>Email:</strong> {{ $student->email }}</p>
                    <p><strong>Phone:</strong> {{ $student->phone }}</p>
                    <p><strong>Section:</strong> {{ $student->section }}</p>
                </div>
                <div class="col-md-4">
                    <img src="/images/{{ $student->image }}" width="200" height="200">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
