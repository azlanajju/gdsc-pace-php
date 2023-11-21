<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "./config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GDSC-PACE</title>

    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- style sheets  -->
    <link rel="stylesheet" href="./css/Style.css">
    <link rel="stylesheet" href="./css/Team.css">
    <link rel="stylesheet" href="./css/Blog.css">
    <link rel="stylesheet" href="./css/responsive.css">

    <!-- google fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Product+Sans:regular,bold,italic,thin,light,bolditalic,black,blackitalic,thinitalic,lightitalic,medium,mediumitalic" />

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Annimation -->
        <link rel="stylesheet" href="css/aos.css">


        <link rel="stylesheet" href="welcome/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            $.get("welcome/index.html", function (data) {
                $("#dynamic-content").html(data);
                setTimeout(function () {
                    $("#dynamic-content").empty();
                }, 6000);
            });
        });
    </script>
    <style>
        #dynamic-content {
            z-index: 10;
        }
    </style>
</head>

<body>
    <div id="dynamic-content"></div>
<?php include "./comps/topbar.php"?>
    <!-- navBar -->
    
    <div class="home">
        <div class="grid">
            <!-- <img src="./images/bgGrid.jpg" alt=""> -->
            <div class="gridContent">
                <img src="./images/gdscLogo.png" alt="">
                <h1>Google Developer Student Clubs</h1>
                
                <h3>P. A. College of Engineering</h3>
                <p>Welcome to the Google Developer Student Club at P A College of Engineering (GDSC PACE)! We are a
                    community of passionate students who are enthusiastic about learning, building, and sharing
                    technology. Our club is officially recognized by Google as a hub for students to explore,
                    collaborate, and grow their skills in the field of technology and software development.
                </p>
            </div>
        </div>

    </div>
    <div class="chevronBtn">
        <a href="#start">
            <div class="chevron"></div>
            <div class="chevron"></div>
            <div class="chevron"></div>
        </a>
    </div>

<!-- Team  -->
<?php include "./comps/team.html"?>
<hr>
<!-- events start  -->
<?php include("./comps/event.php"); ?>
<hr>
<!-- blog start  -->
<?php include "./comps/blog.php";?>




    <!-- footer  -->
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