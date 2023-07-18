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
        <h1> <span class="span-color">Settings</span></h1>
        <div class="row mt-4">

          </div>
          <button  onclick="logOut()" class="btn btn-danger">SignOut</button>
      </div>
    </div>
  </div>
 
  <!-- LogOut -->
  <script>
        function logOut() {
            sessionStorage.clear()
            location.reload();
        }
    </script>
</body>

</html>