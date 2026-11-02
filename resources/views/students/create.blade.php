@extends('layout')

@section('content')

<h2>Register Student</h2>

@if($errors->any())
    @foreach($errors->all() as $error)
        <p style="color:red">{{ $error }}</p>
    @endforeach
@endif

<form action="{{ route('students.store') }}" method="POST">

    @csrf

    Roll Number:
    <input type="text" name="roll_no" required>
    <br><br>

    Name:
    <input type="text" name="name" required>
    <br><br>

    Email:
    <input type="email" name="email" required>
    <br><br>

    Department:
    <input type="text" name="department" required>
    <br><br>

    Semester:
    <input type="number" name="semester" required>
    <br><br>

    CGPA:
    <input type="number" step="0.01" name="cgpa">
    <br><br>

    <button type="submit">Save Student</button>

</form>

<a href="{{ route('students.index') }}">Back</a>

@endsection