<?php

include "./config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GDSC-PACE</title>

      <!-- Tailwind CSS links -->
      <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

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
  <?php include "./comps/topbar.php" ?>
  <!-- navBar -->


 <!-- form  -->
 <div style="height: 5px;" class="nothing"></div>
    <section class="text-gray-600 body-font bg-yellow-50">
    <div class="container flex flex-col md:flex-row lg:max-w-5xl w-full px-5 py-12 md:py-24 mx-auto section"
        id="contact-form">
        <div class="md:w-1/3 w-full">
            <h1 class="text-4xl text-gray-800 sm:text-4xl font-bold title-font mb-4">Contact Us</h1>
            <p class="leading-relaxed text-xl text-gray-900">
                We're here to assist you! If you have any questions or need assistance, please feel free to reach out to
                us.
                <br>                   <a style="text-decoration: none;" href="mailto:gdscpace@gmail.com" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">gdscpace@gmail.com</a>
    
            </p>
            <p>explore out linktree profile
                <br>
                <a class="btn btn-success" href="https://linktr.ee/gdscpace">here</a>
            </p>

            <span class="inline-flex mt-6 justify-center sm:justify-start">
             
               
            </span>
        </div>
        <div class="md:w-2/3 w-full mt-10 md:mt-0 md:pl-28">
            <h1 class="text-4xl text-gray-800 sm:text-4xl font-bold title-font mb-4">Contact Form</h1>
            <form action="send-contact.php" method="post" id="submit-contact-form">
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="name" class="leading-7 py-4 text-lg text-gray-900">Your Name</label>
                        <input type="text" id="name" name="name" required=""
                            class="w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">
                    </div>
                </div>
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="email" class="leading-7 py-4 text-lg text-gray-900">Your Email</label>
                        <input type="email" id="email" name="email" required=""
                            class="w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">
                    </div>
                </div>
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="message" class="leading-7 py-4 text-lg text-gray-900">Your Message</label>
                        <textarea id="message" name="message" required=""
                            class="w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 h-32 text-base outline-none text-gray-900 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out "></textarea>
                    </div>
                </div>
                <div class="p-2 w-full">
                    <button type="submit"
                        class="flex text-white bg-gray-900 border-0 py-4 px-6 focus:outline-none hover:bg-blue-900 rounded text-xl font-bold shadow-lg mx-0 flex-col text-center ">
                        Send Message 
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

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