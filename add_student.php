<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_name = $_POST['student_name'];
    $student_id = $_POST['student_id'];
    $course = $_POST['course'];
    $grade = $_POST['grade'];

    if (!empty($student_name) && !empty($student_id) && !empty($course) && is_numeric($grade)) {
        $sql = "INSERT INTO students (student_name, student_id, course, grade)
                VALUES ('$student_name', '$student_id', '$course', '$grade')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Please fill all fields correctly.";
    }

    $conn->close();
}
?>