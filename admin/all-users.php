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
        <h1>All <span class="span-color">Users</span></h1>
        <div class="row mt-4">
          <div class="col-lg-4 col-md-6">
            <div class="dash-card d-c-2">
              <div class="row">
                <div class="col-5">
                  <h5 class="dash-card-h5">200</h5>
                </div>
                <div class="col-7">
                  <div class="text-right">
                    <h6>Employers</h6><a href="/admin/employers">
                      <p class="f-12">View All</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="dash-card d-c-2">
              <div class="row">
                <div class="col-5">
                  <h5 class="dash-card-h5">200</h5>
                </div>
                <div class="col-7">
                  <div class="text-right">
                    <h6>Employers</h6><a href="/admin/employers">
                      <p class="f-12">View All</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="dash-card d-c-2">
              <div class="row">
                <div class="col-5">
                  <h5 class="dash-card-h5">200</h5>
                </div>
                <div class="col-7">
                  <div class="text-right">
                    <h6>Employers</h6><a href="/admin/employers">
                      <p class="f-12">View All</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>