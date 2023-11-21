<?php

if ($conn) {
    $query = "SELECT * FROM blog ORDER BY blog_id DESC LIMIT 3";

    $result = $conn->query($query);

    if ($result) {
        $blogs = '';

        if ($result->num_rows > 0) {
            while ($blog = $result->fetch_assoc()) {
                $title = $blog['title'];
                $description = $blog['description'];
                $date = $blog['date'];
                $uploaded_by = $blog['uploaded_by'];
                $link = $blog['link'];
                $image = $blog['image'];

        
                $blogs .= '
                <div class="blogs py-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="blogs-content">
                    <div>
                        <div class="bloger-name xs">' . $uploaded_by . '</div>
                        <h2 class="blog-highlight my-0"><a href="./blogs.php?nav=3">' . $title . '</a></h2>
                        <div class="blog-details my-0">' . (strlen($description) > 300 ? substr($description, 0, 300) . '...' : $description) . '</div>
                        <div class="blog-date">
                            ' . $date . '
                            <div>
                                <i class="far fa-bookmark"></i>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="blog-img">
                        <img src="./admin/uploads/'.$image.'" alt="">
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
    <h1>- Blog -</h1>
</div>
<div class="site-content  grid-2 blogContent">
                
    <div class="blog-main">
       
               
 
        <?php echo $blogs ; ?>
        <div style="text-align: center;">

<a  type="button" class="mt-3 btn btn-primary"  href="./blogs.php?nav=3">View More</a>
        </div>      
    </div>
    <?php include "./comps/rightside.html";?>

</div>
