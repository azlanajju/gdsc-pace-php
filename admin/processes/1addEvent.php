<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("../../config.php");

// Retrieve data from the form
$title = $_POST['title'];
$date = $_POST['date'];
$time = $_POST['time'];
$resource_person = $_POST['resource_person'];
$image = $_FILES['image']['name'];
$staff_coordinators = $_POST['staff_coordinators'];
$student_coordinators = $_POST['student_coordinators'];
$joining_link = $_POST['joining_link'];
$feedback_link = $_POST['feedback_link'];
$description = $_POST['description'];

// File upload handling
$targetDir = "../uploads/";
$targetFile = $targetDir . basename($_FILES["image"]["name"]);
$filename = basename($targetFile);

move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

$sql = "INSERT INTO events (title, date, time, resource_person, image, staff_coordinators, student_coordinators, joining_link, feedback_link, description) VALUES ('$title', '$date', '$time', '$resource_person', '$filename', '$staff_coordinators', '$student_coordinators', '$joining_link', '$feedback_link', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "New event entry inserted successfully!";
    echo "<script>
    alert('Successfully Added');
    window.location.href = '../1allEvents.php';
</script>";
    // header("Location: ../1allEvents");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
