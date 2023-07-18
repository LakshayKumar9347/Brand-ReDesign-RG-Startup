<!doctype html>
<html lang="en">

<head>
  <?php include './components/headLinks.php' ?>
  <title>Dashboard </title>
  <style>
    .blog-card {
      height: 575px
    }

    .clients-card {
      height: 570px;
      margin-bottom: 53px;
    }
  </style>
</head>

<body>
  <!-- LEFT SIDE BAR -->
  <div class="flex-part">
    <!-- Left menu -->
    <?php include './components/leftMenu.php' ?>

    <div class="dash-body">
      <!-- NavBar -->
      <?php include './components/navBar.php' ?>

      <!-- Main Content -->
      <div class="dash-right">
        <h1>Recent <span class="span-color">Blogs</span></h1>
        <div class="container">
          <div class="row">
            <!-- Sectin Repeat -->
            <?php
$data = file_get_contents('http://localhost:3000/api/blogs');
$blogs = json_decode($data, true);
$latestBlogs = array_reverse($blogs); 

foreach ($latestBlogs as $blog) {
    $blogID = $blog['_id'];
    $title = $blog['title'];
    $description = $blog['description'];
    $image = $blog['image'];
    $status = $blog['status']; // Get the status of the blog

    // Check if the status is not 'trash'
    if ($status === 'Published') {
        // Slice title to 4 words
        $titleWords = explode(' ', $title);
        $slicedTitle = implode(' ', array_slice($titleWords, 0, 4));

        // Slice description to 18 words
        $descriptionWords = explode(' ', $description);
        $slicedDescription = implode(' ', array_slice($descriptionWords, 0, 18));

        $blogCard ='
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;margin-top:1.5rem;height:400px">
                    <img style="width:100%;height:161px;object-fit:cover" src="http://localhost:3000/uploads/'. $image .'" class="card-img-top" alt="Chitra Not Found">
                    <div class="card-body">
                        <h5 style="height:48px;" class="card-title">'. $slicedTitle .'</h5>
                        <p style="height:96px;" class="card-text">'. $slicedDescription .'</p>
                        <!-- Use proper syntax for onclick attribute -->
                        <a class="btn btn-secondary" onclick="moveToTrash(\''. $blogID .'\')">Move To Trash</a>
                    </div>
                </div>
            </div>';

        echo $blogCard;
    }
}
?>
            <!-- Sectin Repeat -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Include the following script in your PHP file, below the above PHP loop -->
  <script>
    function moveToTrash(blogID) {
      // Send AJAX PUT request to your Express API
      fetch('http://localhost:3000/api/blogs/' + blogID, {
        method: 'PUT',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({ status: 'trash' }), // JSON payload with the status to update
      })
        .then(response => {
          if (response.ok) {
            // If the request is successful, reload the page to update the view
            window.location.reload();
          } else {
            console.error('Failed to move blog to trash:', response);
            // Handle error cases if needed
          }
        })
        .catch(error => {
          console.error('Error:', error);
          // Handle other errors if needed
        });
    }
  </script>

</body>

</html>