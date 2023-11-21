<?php

session_start();

if (!isset($_SESSION['username'])) {
    
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include("../config.php"); ?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> GDSC ADMIN - Blogs</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
  <link rel="stylesheet" href="../css/Blog.css">
<style>
        .blogs-main{
        width: 70vw;
    }
    .blog-img img{
        height: 150px;
    }
</style>
</head>

<body>

<?php include("./navBar.php"); ?>
<?php include("./sideBar.php"); ?>

<div class="rightContainer container mt-10">



<!-- BLOG START  -->

    <?php
if ($conn) {
    $query = "SELECT * FROM blog ORDER BY blog_id DESC;";

    $result = $conn->query($query);

    if ($result) {
        $blogs = '';

        if ($result->num_rows > 0) {
            while ($blog = $result->fetch_assoc()) {
                $id= $blog['blog_id'];
                $title = $blog['title'];
                $image = $blog['image'];
                $description = $blog['description'];
                $date = $blog['date'];
                $uploaded_by = $blog['uploaded_by'];
                $link = $blog['link'];
        
                $blogs .= '
                <div class="blogs py-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="blogs-content">
                        <div class="bloger-name xs">' . $uploaded_by . '</div>
                        <h2 class="blog-highlight my-0"><a href="./oneBlog.php?id='.$id.'&nav=3">' . $title . '</a></h2>
                        <div class="blog-details my-0">' . (strlen($description) > 350 ? substr($description, 0, 350) . '...' : $description) . '</div>
                        <div class="blog-date">
                            ' . $date . '
                            <div>
                                <i class="far fa-bookmark"></i>
                            </div>
                            <a href="./processes/delete.php?table=blog&id='.$id.'" class="btn btn-danger">Delete</a>

                        </div>
                    </div>
                    <div class="blog-img">
                        <img src="./uploads/'.$image.'" alt="image not found">
                    </div>
                </div>
            ';
            
            }
        } else {
            echo "No blog posts found.";
        }
        
        
    } else {
        echo "Error executing the query: " . $conn->error;
    }
} else {
    echo "Database connection failed. Check your configuration.";
}
?>

<div  class="sectionHeading mt-5">
    <h1>- Blogs -</h1>
</div>
<div class="site-content  grid-3 blogContent">
                
    <div class="blogs-main">
        <?php echo $blogs ; ?>
        <div style="text-align: center;">

        </div>      
    </div>
</div>








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