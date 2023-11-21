<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include your daabase connection configuration
include "./config.php";

// Check if the database connection is established
if ($conn) {
    // SQL query to fetch blog posts
    $query = "SELECT * FROM blog";

    // Execute the query
    $result = $conn->query($query);

    if ($result) {
        // Check if there are rows in the result
        if ($result->num_rows > 0) {
            // Loop through the result and fetch the rows
            while ($blog = $result->fetch_assoc()) {
                $title = $blog['title'];
                $description = $blog['description'];
                $date = $blog['date'];
                $uploaded_by = $blog['uploaded_by'];
                $link = $blog['link'];

                // Display the blog post details
                ?>
                <div class="title"><?php echo $title; ?></div>
                <div class="description"><?php echo $description; ?></div>
                <div class="date"><?php echo $date; ?></div>
                <div class="uploaded-by">Uploaded by: <?php echo $uploaded_by; ?></div>
                <a href="<?php echo $link; ?>">Read more</a>
                <?php
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
