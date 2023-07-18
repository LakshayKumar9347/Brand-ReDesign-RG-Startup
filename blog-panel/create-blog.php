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
        <h1>Create <span class="span-color">Your Blog</span></h1>
        <div class="container">
        <form id="blogForm" enctype="multipart/form-data">
            <div class="mb-3">
                <h5 class="form-label font-weight-800">Blog Title</h5>
                <input style="padding: 20px 20px;" id="title" name="title" type="text" class="form-control"
                    placeholder="title...">
            </div>
            <div class="mb-3">
                <h5 for="exampleFormControlTextarea1" class="form-label">Blog Description</h5>
                <textarea class="form-control" id="description" name="description" rows="7"
                    placeholder="description..."></textarea>

            </div>
            <div class="mb-3 ">
                <select class="form-select" aria-label="Default select example" name="category">
                    <option selected>Select Category</option>
                    <option value="App Development">App Development</option>
                    <option value="Web Designing">Web Designing</option>
                    <option value="Web Development">Web Development</option>
                    <option value="Mobile App Development">Mobile App Development</option>
                    <option value="Digital Marketing">Digital Marketing</option>
                    <option value="SEO & SMO Services">SEO & SMO Services</option>
                    <option value="PPC">PPC</option>
                  </select>
            </div>
            <div class="mb-3">
                <h5>Upload Image</h5>
                <input type="file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-warning ">Post Your BLog</button>
        </form>
    </div>
   
      
      </div>
    </div>
  </div>
  <!-- js to prevent reload -->
  <script>
    document.getElementById("blogForm").addEventListener("submit", function (event) {
        event.preventDefault();
        const formData = new FormData(this);

        fetch("http://localhost:3000/blogs", {
            method: "POST",
            body: formData,
        })
        .then(response => {
            if (response.ok) {
                return response.text(); // Parse the response body as text
            } else {
                throw new Error("An error occurred. Please try again later.");
            }
        })
        .then(data => {
            alert(data);
            document.getElementById("blogForm").reset();
        })
        .catch(error => {
            alert(error.message);
        });
    });
</script>

</body>

</html>