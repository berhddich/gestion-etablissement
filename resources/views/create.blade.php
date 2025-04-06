@extends('layout')
@section('content')

<h3>Add Student</h3>

<form method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" placeholder="Enter student's name">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" placeholder="Enter student's email">
    </div>

    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="form-control" name="phone" placeholder="Enter student's phone">
    </div>

    <div class="form-group">
        <label for="section">Section:</label>
        <input type="text" class="form-control" name="section" placeholder="Enter student's section">
    </div>

    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" class="form-control" name="image">
    </div>

    <button type="submit" class="btn btn-primary">Add Student</button>
</form>

@endsection

