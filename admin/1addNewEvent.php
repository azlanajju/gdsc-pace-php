<?php

session_start();

if (!isset($_SESSION['username'])) {
    
    header("Location: login.php");
    exit();
}
?>

<?php include("../config.php"); ?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GDSC ADMIN</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./0components.css">

</head>

<body>

    <?php include("./navBar.php"); ?>
    <?php include("./sideBar.php"); ?>

    <div class="rightContainer">

        <div class="container mt-10 w-50">
        <h1> Add Events</h1>
        <form action="./processes/1addEvent.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" class="form-control" id="date" name="date" required>
    </div>
    <div class="form-group">
        <label for="time">Time:</label>
        <input type="time" class="form-control" id="time" name="time" required>
    </div>
    <div class="form-group">
        <label for="resource_person">Resource Person:</label>
        <input type="text" class="form-control" id="resource_person" name="resource_person">
    </div>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" class="form-control" id="image" name="image" required>
    </div>
    <div class="form-group">
        <label for="staff_coordinators">Staff Coordinators:</label>
        <input type="text" class="form-control" id="staff_coordinators" name="staff_coordinators">
    </div>
    <div class="form-group">
        <label for="student_coordinators">Student Coordinators:</label>
        <input type="text" class="form-control" id="student_coordinators" name="student_coordinators">
    </div>
    <div class="form-group">
        <label for="joining_link">Joining Link: (optional)</label>
        <input type="text" class="form-control" id="joining_link" name="joining_link">
    </div>
    <div class="form-group">
        <label for="feedback_link">Feedback Link:</label>
        <input type="text" class="form-control" id="feedback_link" name="feedback_link">
    </div>
    <div class="form-group">
        <label for="description">description:</label>
        <textarea  class="form-control" id="description" name="description" rows="5">
        </textarea>
    </div>
<br>
    <button type="submit" class="btn btn-primary">Submit</button>
    <br>
    <br>
</form>

        </div>
        <?php include("./foot.php"); ?>


    </div>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>