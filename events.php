<?php

include "./config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GDSC-PACE</title>

  <!-- bootstrap links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <!-- style sheets  -->
  <link rel="stylesheet" href="./css/Style.css">
  <link rel="stylesheet" href="./css/Team.css">
  <link rel="stylesheet" href="./css/Blog.css">

  <!-- google fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Product+Sans:regular,bold,italic,thin,light,bolditalic,black,blackitalic,thinitalic,lightitalic,medium,mediumitalic" />

  <!-- font awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Annimation -->
  <link rel="stylesheet" href="css/aos.css">


  <link rel="stylesheet" href="welcome/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>

<body>
  <?php include "./comps/topbar.php" ?>
  <!-- navBar -->



  <?php include("./comps/allEvents.php"); ?>

  <?php include "./comps/footer.html";?>



<!-- bootstrap links -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>


        <!-- Annimation -->
<script src="js/aos.js"></script>

<!-- Custom JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/index.js"></script>

<!--  Owl Carousel  -->

<script src="js/owl.carousel.min.js"></script>


</body>

</html>