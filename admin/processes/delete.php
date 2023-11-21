<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


include ('../../config.php');
if (isset($_GET['table']) && isset($_GET['id'])) {
    $tableName = $_GET['table'];
    $id = $_GET['id'];



    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Perform the delete operation
    $sql = "DELETE FROM " . $tableName . " WHERE blog_id = " . $id;
    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('Successfully deleted');
        window.location.href = '../1allProducts.php';
    </script>";

    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    echo "Table name and ID are required";
}

?>