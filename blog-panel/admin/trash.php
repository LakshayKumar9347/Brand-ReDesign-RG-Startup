<!doctype html>
<html lang="en">

<head>
  <?php include './components/headLinks.php' ?>
  <title>Dashboard </title>
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
        <h1> Clear <span class="span-color">Trash</span></h1>
        <div class="row mt-4">

        <?php
// Fetch all blogs from the API endpoint
$data = file_get_contents('http://localhost:3000/api/blogs');
$blogs = json_decode($data, true);

// Filter blogs with status === 'trash'
$trashedBlogs = array_filter($blogs, function ($blog) {
    return $blog['status'] === 'trash';
});

// Loop through the trashed blogs and display them
foreach ($trashedBlogs as $blog) {
    $blogID = $blog['_id'];
    $title = $blog['title'];
    $description = $blog['description'];
    $image = $blog['image'];

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
                    <!-- Add other actions if needed, e.g., Restore, Delete Permanently, etc. -->
                    <a class="btn btn-secondary" onclick="restoreBlog(\''. $blogID .'\')">Restore Blog</a>
                    <a class="btn btn-danger" onclick="deleteBlog(\''. $blogID .'\')">Delete Blog</a>
                </div>
            </div>
        </div>';

    echo $blogCard;
}
?>

        
        </div>
      </div>
    </div>
  </div>

  <script>
    function restoreBlog(blogID) {
      // Send AJAX PUT request to your Express API
      fetch('http://localhost:3000/api/blogs/' + blogID, {
        method: 'PUT',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({ status: 'Published' }),
      })
        .then(response => {
          if (response.ok) {
            // If the request is successful, reload the page to update the view
            window.location.reload();
          } else {
            console.error('Failed to Restore BLogs:', response);
            // Handle error cases if needed
          }
        })
        .catch(error => {
          console.error('Error:', error);
          // Handle other errors if needed
        });
    };
    function deleteBlog(blogID) {
      // Send AJAX PUT request to your Express API
      fetch('http://localhost:3000/api/blogs/' + blogID, {
        method: 'DELETE',
        headers: {
          'Content-Type': 'application/json',
        },
      })
        .then(response => {
          if (response.ok) {
            window.location.reload();
          } else {
            console.error('Failed to Restore BLogs:', response);
          }
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }
  </script>
</body>

</html>