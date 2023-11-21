<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("../../config.php");

// Check if an ID is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // SQL query to delete a record with the provided ID
    $sql = "DELETE FROM events WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record with ID $id deleted successfully!";
        echo "<script>
        alert('Event deleted successfully');
        window.location.href = '../1allEvents.php';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "<script>
    alert('Cannot be deleted');
    window.location.href = '../1allEvents.php';
    </script>";
}

// Close the database connection
$conn->close();
?>
