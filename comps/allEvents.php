
<?php

if ($conn) {
    $query = "SELECT * FROM events ORDER BY id";

    $result = $conn->query($query);

    if ($result) {
        $events = '
<div style="width:100vw; class="container mt-4">
  <div class="row text-center" style"justify-content: center;">';

        if ($result->num_rows > 0) {
            while ($blog = $result->fetch_assoc()) {
                $id= $blog['id'];
                $title = $blog['title'];
                $date = $blog['date'];
                $image = $blog['image'];

        
                $events .= '
                <div class="col-md-4"   style="width:300px;" >
                <div class="card mb-4">
                  <img src="./admin/uploads/'.$image.'" class="card-img-top" alt="Event Image " style="object-fit: cover; height: 150px;">
                  <div class="card-body">
                    <h5 class="card-title">Event Title</h5>
                    <p class="card-text">Date: November 1, 2023</p>
                    <a href="./oneEvent.php?id='.$id.'&nav=2" class="btn btn-primary">View</a>
                  </div>
                </div>
              </div>
            ';
            
            }
        } else {
            echo "No blog posts found.";
        }
        $events.='
        </div>
        </div>';

        
        
    } else {
        echo "Error executing the query: " . $conn->error;
    }
} else {
    echo "Database connection failed. Check your configuration.";
}
?>


<div  class="sectionHeading mt-5">
    <h1>- Events -</h1>
</div>
<div class=" grid-2 ">
    <div class="blog-main">
        <?php echo $events ; ?>
  
    </div>

</div>

<style>
    *{
        justify-content: center;
        
    }
</style>