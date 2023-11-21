<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include ("../../config.php"); 


// Retrieve data from the form
$title = $_POST['title'];
$description = $_POST['description'];
$date = $_POST['date'];
$uploaded_by = $_POST['uploaded_by'];
$link = $_POST['link'];

// File upload handling
$targetDir = "../uploads/";
$targetFile = $targetDir . basename($_FILES["image"]["name"]);
$filename = basename($targetFile);

move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

// SQL query for inserting data
$sql = "INSERT INTO blog (title, description, image, date, uploaded_by, link) VALUES ('$title', '$description', '$filename', '$date', '$uploaded_by', '$link')";

if ($conn->query($sql) === TRUE) {
    echo "New blog entry inserted successfully!";
    echo "<script>
    alert('Successfully Added');
    window.location.href = '../2allBlogs.php';
</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
