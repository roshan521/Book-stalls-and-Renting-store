
<?php
 include('security.php');
include('includes/header.php');
include('includes/database/dbconfig.php');
include('includes/navbar.php');
?>
        
   <!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  
</div>

<!-- Content Row -->
<div class="row">

  <!--Total Registered Admin Card Example -->
  <div class="col-xl-6 col-md-12 mb-4">
    <div class="card border-left-dark shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Users</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
                   <?php 
                        $query = "SELECT user_id FROM users ORDER BY user_id";  
                        $query_run = mysqli_query($connection, $query);
                        $row = mysqli_num_rows($query_run);
                        echo '<h4> Total Users: '.$row.'</h4>';
                     ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Total Registered new books Card Example -->
  <div class="col-xl-6 col-md-12 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total New Books</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
                   <?php 
                        $query = "SELECT new_id FROM nbook ORDER BY new_id";  
                        $query_run = mysqli_query($connection, $query);
                        $row = mysqli_num_rows($query_run);
                        echo '<h4> Total New Books: '.$row.'</h4>';
                     ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Total Registered Testimonial card Example -->
  <div class="col-xl-6 col-md-12 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Old Books</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
                   <?php 
                        $query = "SELECT old_id FROM obook ORDER BY old_id";  
                        $query_run = mysqli_query($connection, $query);
                        $row = mysqli_num_rows($query_run);
                        echo '<h4> Total Old Books: '.$row.'</h4>';
                     ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Total Registered rent books Card Example -->
  <div class="col-xl-6 col-md-12 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Rent Books</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
                   <?php 
                        $query = "SELECT rent_id FROM rbook ORDER BY rent_id";  
                        $query_run = mysqli_query($connection, $query);
                        $row = mysqli_num_rows($query_run);
                        echo '<h4> Total Rent Books: '.$row.'</h4>';
                     ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Total Registered complain Card Example -->
  <div class="col-xl-6 col-md-12 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Orders</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
                   <?php 
                        $query = "SELECT order_id FROM orders ORDER BY order_id";  
                        $query_run = mysqli_query($connection, $query);
                        $row = mysqli_num_rows($query_run);
                        echo '<h4> Total orders : '.$row.'</h4>';
                     ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Total Registered complain Card Example -->
  <div class="col-xl-6 col-md-12 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Books on Rent:</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
                   <?php 
                        $query = "SELECT rent_id FROM booksonrent ORDER BY rent_id";  
                        $query_run = mysqli_query($connection, $query);
                        $row = mysqli_num_rows($query_run);
                        echo '<h4> Total Books On Rent: '.$row.'</h4>';
                     ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Content Row -->



        </div>
        <!-- container fliud -->

        </div>   
        <!-- end of main content -->

        


   
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>