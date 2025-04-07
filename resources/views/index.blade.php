@extends('layout')
@section('content')


    <h3>Student  List </h3>
    <div class="table-wrapper">
        <div style="margin: 20px 0">
            <a href="{{ url('/students/create')}}" class="btn-create">Add New Student</a>
        </div>
        <table class="fl-table">

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Section</th>
                <th>Image</th>
                <th>Show </th>
<th>Update </th>
<th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->section }}</td>
                <td><img src="{{ asset('images/'.$student->image) }}" width="96" height="96"></td>
                <td style="vertical-align:middle; ">
                    <form method="POST" align="left">
                    <a ; class="btn btn-info" href="{{ route('students.show' , $student->id) }}">Show</a>
                    </form>
                    </td>
                    <td style="vertical-align:middle; ">
                    <form method="POST" align="left">
                    <a class="btn btn-primary" href="{{ route('students.edit' , $student->id) }}">Edit</a>
                    </form>
                    </td>
                    <td>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    @endsection
