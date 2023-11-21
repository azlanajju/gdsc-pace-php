<?php

session_start();

if (!isset($_SESSION['username'])) {
    
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
  <link rel="stylesheet" href="../css/Blog.css">
<style>
.event-container {
    display: flex;
    flex-wrap: wrap;
    /* justify-content: space-between; */
}

.event-card {
    width: 30%;
    margin-bottom: 20px;
    border: 2px solid ;         
    margin: 10px;
    padding: 10px;
    border-radius: 5px;
}
.event-card img{
    height: 200px;
    width: 280px;

    object-fit: cover;
}
.event-card h2{
    font-size: 16px;
    font-weight: bold;
    height: 30px;
}
</style>
</head>

<body>

<?php include("./navBar.php"); ?>
<?php include("./sideBar.php"); ?>

<div class="rightContainer container mt-10">



<!-- BLOG START  -->

<?php
// Replace with your database connection code
include("../config.php"); // Include your database connection script
// Query to fetch all events from the database
$sql = "SELECT * FROM events ORDER BY date DESC";
$result = $conn->query($sql);

$eventCards = ''; 

if ($result->num_rows > 0) {
   while ($row = $result->fetch_assoc()) {
       $event_id = $row['id'];
       $title = $row['title'];
       $date = $row['date'];
       $description = $row['description'];
       $image = $row['image'];
   
       $eventCard = '
       <div class="event-card">
           <img src="./uploads/'.$image.'" alt="Event ' . $event_id . '">
           <h2>' . $title . '</h2>
           <p>Date: ' . $date . '</p>
           <a  href="./processes/1deleteEvent.php?id='.$event_id.'" class="btn btn-danger">Delete</a>

       </div>
       ';
       
       $eventCards .= $eventCard; 
   }
} else {
   echo "No events found";
}

$conn->close();
?>

<div  class=" mt-5 row">
    <h1>- Events -</h1>
</div>

<section>
<div class="event-container">

      <?php echo $eventCards ?>
</div>
    </section>


</div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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