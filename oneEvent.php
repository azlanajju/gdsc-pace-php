<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('./config.php');
$id = isset($_GET['id']) ? $_GET['id'] : 1;

if ($conn) {
    $query = "SELECT * FROM events WHERE id='$id'";

    // Execute the query
    $result = $conn->query($query);

    if ($result) {
        if ($result->num_rows > 0) {
            while ($event = $result->fetch_assoc()) {

                $title = $event['title'];
                $date = $event['date'];
                $time = $event['time'];
                $resource_person = $event['resource_person'];
                $image = $event['image'];
                $staff_coordinators = $event['staff_coordinators'];
                $student_coordinators = $event['student_coordinators'];
                $joining_link = $event['joining_link'];
                $feedback_link = $event['feedback_link'];
                $description = $event['description'];
            }
        } else {
            echo "No events found.";
        }
    } else {
        echo "Error executing the query: " . $conn->error;
    }
} else {
    echo "Database connection failed. Check your configuration.";
}

?>

<!DOCTYPE html>
<html lang="en">

<>
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

    <!-- google fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Product+Sans:regular,bold,italic,thin,light,bolditalic,black,blackitalic,thinitalic,lightitalic,medium,mediumitalic" />

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Annimation -->
        <link rel="stylesheet" href="css/aos.css">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- writted by Munazza ref:https://github.com/munazzabegam/gdsc-blog-page -->
    <style>
        .navBar{
            margin-top: 30px;
        }
.oneoneEvent{
    margin: 60px;
}
.oneEvent {
    width: 800px;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.oneEvent-title h2 {
    font-size: 36px;
    text-align: center;
    padding: 20px 0;
}

.oneEvent-image {
    text-align: center;
    padding: 20px 0;
}

.oneEvent-image img {
    width: 350px;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.oneEventDescription {
    padding: 20px;
    line-height: 1.6;
}


.oneEventDescription h4 {
    font-size: 16px;
    color: #555;
}


.oneEventDescription p {
    font-size: 18px;
    color: #333;
}
</style>

<body>
    <?php include "./comps/topbar.php"?>

    <!-- HTML structure for the event details -->

    <div class="oneoneEvent">
        <div class="oneEvent-title">
            <h2><?php echo $title ?></h2>
        </div>
        <div class="oneEvent-image">
            <img src="./admin/uploads/<?php echo $image ?>" alt="" srcset="">
        </div>
        <div class="oneEventDetails">
            <h4><?php echo $resource_person ?></h4>
            <h4><?php echo $date . ' ' . $time ?></h4>
            <p><?php echo $description ?></p>
            <!-- Add other details as needed -->
        </div>
    </div>

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
