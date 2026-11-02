
@extends('layouts.app')

@section('title', 'Student List')

@section('content')

    <h2>Student List</h2>

    @if (session('status'))
        <p style="color: green;">
            {{ session('status') }}
        </p>
    @endif

    <p>
        <a href="{{ route('students.create') }}">Add New Student</a>
    </p>

    @if ($students->isEmpty())
        <p>No students found.</p>
    @else
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Roll Number</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Semester</th>
                    <th>CGPA</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->roll_no }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->department }}</td>
                        <td>{{ $student->semester }}</td>
                        <td>{{ $student->cgpa }}</td>
                        <td>
                            <a href="{{ route('students.show', $student->id) }}">
                                View
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

@endsection
