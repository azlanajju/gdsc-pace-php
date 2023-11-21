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


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>

<body>

    <!-- Navigation bar (if applicable) -->
    <?php include "./comps/topbar.php" ?>

    <section class="container my-5">
        <div class="text-center mb-4">
            <h1 class="display-4 fw-bold">About GDSC PACE</h1>
            <p class="lead">Empowering student developers at P A College of Engineering</p>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <img src="./images/gdscName.png" alt="GDSC PACE" class="img-fluid">
            </div>
            <div class="col-md-6">
                <p class="text-muted fs-5">
                    Welcome to GDSC PACE, the student developers' group at P A College of Engineering. We are a vibrant
                    community of tech enthusiasts, aspiring developers, and creative minds coming together to learn,
                    collaborate, and build innovative solutions.
                </p>
                <p class="text-muted fs-5">
                    Our mission is to provide a platform for students to explore the world of technology, enhance their
                    coding skills, and apply their knowledge to real-world projects. We believe in the power of
                    collaboration and continuous learning, and we strive to create an inclusive environment where
                    everyone feels inspired to contribute and grow.
                </p>
                <p class="text-muted fs-5">
                    Whether you're a beginner looking to start your coding journey or an experienced developer seeking
                    new challenges, GDSC PACE has something to offer for everyone. From workshops and coding sessions
                    to hackathons and collaborative projects, we aim to foster a culture of innovation and creativity.
                </p>
                <p class="text-muted fs-5">
                    Join us in this exciting journey of exploration and development. Let's code, learn, and innovate
                    together!
                </p>
            </div>
        <a class="btn btn-success" href="https://linktr.ee/gdscpace">Explore out Linktree profile</a>
        </div>


    </section>

    <!-- Footer -->
    <?php include "./comps/footer.html";?>

    <!-- Bootstrap JavaScript and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

    <!-- Your custom JavaScript scripts -->
    <script src="path/to/your/custom/script.js"></script>

</body>

</html>
