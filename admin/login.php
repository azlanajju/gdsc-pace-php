<?php
session_start();

// Check if the username session variable is not set
if (isset($_SESSION['username'])) {
    // Redirect to the login page
    header("Location: index.php");
    exit();
}
?>
<?php
session_start();

include("../config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $raw_password = $_POST["password"];

    $hashed_password = hash('sha256', $raw_password);
    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ? AND password_sha = ?");
    $stmt->bind_param("ss", $username, $hashed_password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION["username"] = $username;
        $_SESSION["FullName"] = $row["full_name"];
        echo "Login successful!";
        header("Location: index.php");
        exit();
    } else {
        echo '<div class="container mt-3"><div class="text-center alert alert-danger"> Invalid Username or Password</div></div>';
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Login Page</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer style="position: absolute;width:100vw;bottom:0;" class="footer mt-auto py-3 bg-white card-body shadow">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-6 text-left">
                    &copy;2023 GDSC PACE. All Rights Reserved.
                </div>
                <a href="https://codewizy.in" class="col-md-6 text-right">
                    <img  src="../images/codewizycredits.png" alt="Logo" height="50">
                </a>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
