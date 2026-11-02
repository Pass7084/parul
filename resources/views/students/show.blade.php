<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>
    <h1>Student Details</h1>

    <p>Name: {{ $student->name }}</p>
    <p>Roll Number: {{ $student->roll_no }}</p>
    <p>Email: {{ $student->email }}</p>
    <p>Department: {{ $student->department }}</p>
    <p>Semester: {{ $student->semester }}</p>
    <p>CGPA: {{ $student->cgpa }}</p>

    <a href="{{ route('students.index') }}">Back to Students</a>
</body>
</html>