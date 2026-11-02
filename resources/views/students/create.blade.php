<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
    <h1>Add Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <label>Roll Number:</label>
        <input type="text" name="roll_no" required>
        <br><br>

        <label>Name:</label>
        <input type="text" name="name" required>
        <br><br>

        <label>Email:</label>
        <input type="email" name="email" required>
        <br><br>

        <label>Department:</label>
        <input type="text" name="department" required>
        <br><br>

        <label>Semester:</label>
        <input type="number" name="semester" required>
        <br><br>

        <label>CGPA:</label>
        <input type="number" name="cgpa" min="0" max="10" step="0.01" required>
        <br><br>

        <button type="submit">Save Student</button>
    </form>
</body>
</html>