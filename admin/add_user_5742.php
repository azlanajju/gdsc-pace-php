<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<?php
include("../config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $raw_password = $_POST['password'];
    $email = $_POST['email'];
    $full_name = $_POST['full_name'];

    $hashed_password = hash('sha256', $raw_password);

    $sql = "INSERT INTO admin (username, password_sha, email, full_name) VALUES ('$username', '$hashed_password', '$email', '$full_name')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Admin user successfully created')</script>";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} 
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h2 class="mb-4">Admin Registration Form</h2>
        <form action="" method="post">

            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="full_name" class="form-label">Full Name:</label>
                <input type="text" class="form-control" id="full_name" name="full_name" required>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
            
        </form>
    <br>
        <a class="btn btn-success" href="./index.php">Return Home</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
