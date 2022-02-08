<?php
error_reporting(1);
session_start();
if(!$_SESSION['username'])
{   
    echo '<script>
    alert("Please Login first");
    window.location.href="login-register.php";
    </script>';
}
include('includes/header.php');?>

<link rel="stylesheet" href="assets/css/myaccount.css">
    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Area Start -->
        <?php include('includes/navbar-full.php');?>
        <!-- Header Header area End -->

        <!-- Breadcrumb area Start -->
        <div class="breadcrumb-area bg--white-6 breadcrumb-bg-1 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">My Account</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.php">Home</a></li>
                            <li class="current"><span>My Account</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div id="content" class="main-content-wrapper">
            <div class="page-content-inner">
            
                <div class="container">
                    <div class="row pt--30 pt-md--60 pt-sm--40 pb--80 pb-md--60 pb-sm--40">
                        <div class="col-12">
                            
                            <div class="user-dashboard-tab flex-column flex-md-row">
                            
                                <div class="user-dashboard-tab__head nav flex-md-column" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link active" data-toggle="pill" role="tab" href="#dashboard"
                                        aria-controls="dashboard" aria-selected="true">Dashboard</a>
                                    <a class="nav-link" data-toggle="pill" role="tab" href="#orders"
                                        aria-controls="orders" aria-selected="true">Orders</a>
                                    
                                    <a class="nav-link" data-toggle="pill" role="tab" href="#rentbook"
                                        aria-controls="rentbook" aria-selected="true">RentBookStatus</a>
                                    <a class="nav-link" data-toggle="pill" role="tab" href="#accountdetails"
                                        aria-controls="accountdetails" aria-selected="true">Password Change</a>
                                    <a class="nav-link" href="logout.php">Logout</a>
                                </div>
                                <div class="user-dashboard-tab__content tab-content">
                                    <div class="tab-pane fade show active" id="dashboard">
                                    <div class="profile-wrapper bg-white mt-sm-5">
                                        <h4 class="pb-4 border-bottom">Account settings</h4>
                                            <?php
                                                    
                                                    include("config.php");
                                                    $id=$_SESSION['username'];
                                                    $query = "SELECT * FROM img_upload where uname='$id'";
                                                    $query_run = mysqli_query($connection, $query);
                                                    if(mysqli_num_rows($query_run) > 0)        
                                                    {
                                                        while($row = mysqli_fetch_assoc($query_run))
                                                        {
                                                ?>
                                        <div class="d-flex align-items-start py-3 border-bottom"> <div class="image"><img src="<?php echo 'assets/img/logo/'.$row['image']; ?>" class="img"  alt="Profile"></div>
                                            <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo(<span class="texty">Hello,<?php echo $_SESSION['username'];?></span>)</b>
                                            <?php }} ?>
                                                <form action="img-upload.php" method="post" enctype="multipart/form-data">
                                                    <input type="file" name="fileToUpload" class="my_file" required><br>
                                        
                                                    <input type="submit" name="send" value="upload" id="submit">
                                                </form>
                                            </div>
                                        </div>
                                        <form action="myaccount-update.php" method="POST">
                                            <div class="py-2">
                                                <?php
                                                    
                                                    include('config.php');
                                                    $id=$_SESSION['username'];
                                                    $query1 = "SELECT * from users where name='$id'";
                                                
                                                    $query_run1 = mysqli_query($connection, $query1);
                                                
                                                    if(mysqli_num_rows($query_run1) > 0)        
                                                    {
                                                        while($row1 = mysqli_fetch_assoc($query_run1))
                                                        {
                                                        
                                                        
                                                    ?>
                                                <div class="row py-2">
                                                    <div class="col-md-12"> <label for="firstname">First Name</label> <input type="text" class="bg-light form-control" name="uname" value="<?php echo $_SESSION['username']; ?>" readonly> </div>
                                                    
                                                </div>
                                                <div class="row py-2">
                                                    <div class="col-md-6"> <label for="email">Email Address</label> <input type="text" class="bg-light form-control" name="edit_email" placeholder="Enter Email" value="<?php echo $row1['email'];?>"> </div>
                                                    <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Phone Number</label> <input type="tel" class="bg-light form-control" name="edit_phone" placeholder="Ph NO" value="<?php echo $row1['phone'];?>"> </div>
                                                </div>
                                                <div class="row py-2">
                                                    <div class="col-md-12"> <label for="address">Address</label> <input type="text" class="bg-light form-control" name="edit_address" value="<?php echo $row1['address'];?>"> </div>
                                                    
                                                </div>
                                                <div class="py-3 pb-4 border-bottom"> <button type="submit" class="btn btn-primary mr-3" name="updatebtn">Save Changes</button>  </div>
                                                <div class="d-sm-flex align-items-center pt-3" id="deactivate">
                                                    <div> <b>LOG-OUT FROM ACCOUNT</b>
                                                    
                                                    </div>
                                                    <div class="ml-auto"> <button class="btn bg-danger"><a href="logout.php">Logout</a></button> </div>
                                                </div>
                                                <?php }} ?>
                                            </div>
                                        </form>
                                    </div>
                                    </div>
                                    <div class="tab-pane fade" id="orders">
                                        <div class="message-box mb--30 d-none">
                                            <p><i class="fa fa-check-circle"></i>No order has been made yet.</p>
                                            <a href="shop-sidebar.php">Go Shop</a>
                                        </div>
                                       
                                        <div class="table-content table-responsive">
                                        
                                            <?php
                                                include('config.php');
                                                $id=$_SESSION['username'];
                                                $query = "SELECT * FROM orders where name='$id'";
                                                $query_run = mysqli_query($connection, $query);
                                            ?>
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <!-- <th>COUNTRY</th> -->
                                                            <th>ORDER No</th>
                                                            <th>USERNAME</th>
                                                            <th>ADDRESS</th>
                                                            <th>BOOKNAME</th>
                                                            <th>SEM</th>
                                                            
                                                            <th>DATE</th>
                                                            <th>PAYMENT</th> 
                                                             <th>Cancel</th>
                                                            <th>View</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            if(mysqli_num_rows($query_run) > 0)        
                                                            {
                                                                while($row = mysqli_fetch_assoc($query_run))
                                                                {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $row['order_no'];?></td>
                                                            <td><?php echo $row['name'];?></td>                                                                     
                                                            <td><?php echo $row['address'];?></td>
                                                            <td><?php echo $row['bookname'];?></td>
                                                            <td><?php echo $row['Sem'];?></td>
                                                            
                                                            <td><?php echo $row['date'];?></td>
                                                            <td><?php echo $row['paymentMethod'];?></td>
                                                           
                                                            <td>
                                                                <form action="myorders-code.php" method="post">
                                                                    <input type="hidden" name="delete_id" value="<?php echo $row['order_id']; ?>">
                                                                
                                                                    <button type="submit" name="delete_btn" onclick="return confirm('Are you sure?')" class="btn btn-danger"> CANCEL</button>
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-primary"><a href="view-order.php?itemno='<?php echo $row['order_id'];?>'" target="_blank">View</a></button>
                                                            </td>
                                                        </tr>
                                                    
                                                        <?php }}?>
                                                       
                                                    </tbody>
                                            </table>
                                                   
                                        </div>
                                    </div>
                                   
                                    <div class="tab-pane fade" id="rentbook">
                                        <!-- <div class="message-box mb--30 d-none">
                                            <p><i class="fa fa-check-circle"></i>No order has been made yet.</p>
                                            <a href="shop-sidebar.php">Go Shop</a>
                                        </div> -->
                                        <div class="table-content table-responsive">
                                            <?php
                                                include('config.php');
                                                $id=$_SESSION['username'];
                                                $query = "SELECT * FROM booksonrent where name='$id'";
                                                $query_run = mysqli_query($connection, $query);
                                            ?>
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <!-- <th>COUNTRY</th> -->
                                                            <th>ORDER No</th>
                                                            <th>USERNAME</th>
                                                            <th>ADDRESS</th>
                                                            <th>BOOKNAME</th>
                                                            <th>DayIsseued</th>
                                                            <th>SEM</th>
                                                            <th>PRICE</th>
                                                            <th>DATE</th>
                                                            <th>PAYMENT</th>
                                                            <th>Cancel</th>
                                                            <th>View</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            if(mysqli_num_rows($query_run) > 0)        
                                                            {
                                                                while($row = mysqli_fetch_assoc($query_run))
                                                                {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $row['order_no'];?></td>
                                                            <td><?php echo $row['name'];?></td>                              
                                                            <td><?php echo $row['address'];?></td>
                                                            <td><?php echo $row['bookname'];?></td>
                                                            <td><?php echo $row['dayissued'];?></td>
                                                            <td><?php echo $row['Sem'];?></td>
                                                            <td><?php echo $row['price'];?></td>
                                                            <td><?php echo $row['date'];?></td>
                                                            <td><?php echo $row['paymentMethod'];?></td>
                                                            <td>
                                                                <form action="myorders-code.php" method="post">
                                                                    <input type="hidden" name="delete_id" value="<?php echo $row['rent_id']; ?>">
                                                                
                                                                    <button type="submit" name="delete_rbtn" onclick="return confirm('Are you sure?')" class="btn btn-danger"> CANCEL</button>
                                                                </form>
                                                            </td>
                                                           
                                                            <td>
                                                                <button class="btn btn-primary"><a href="view-booksonrent.php?itemno='<?php echo $row['rent_id'];?>'" target="_blank">View</a></button>
                                                            </td>
                                                            
                                                        </tr>
                                                    
                                                        <?php }}?>
                                                       
                                                    </tbody>
                                            </table>
                                                   
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="accountdetails">
                                        <form action="update_password.php" method="post" class="form form--account">
                                        <fieldset class="form__fieldset mb--20">
                                            <div class="row mb--20">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <label class="form__label" for="email">Email Address <span
                                                                class="required">*</span></label>
                                                        <input type="email" name="email" id="email" class="form__input">
                                                    </div>
                                                </div>
                                            </div>
                                         
                                                <legend class="form__legend">Password Change</legend>
                                                <div class="row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label class="form__label" for="old_pass">Current/Old password
                                                                (leave blank to leave unchanged)</label>
                                                            <input type="password" name="old_pass" id="old_pass"
                                                                class="form__input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label class="form__label" for="new_pass">New password
                                                                (leave blank to leave unchanged)</label>
                                                            <input type="password" name="new_pass" id="new_pass"
                                                                class="form__input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label class="form__label" for="re_pass">Confirm new
                                                                password</label>
                                                            <input type="password" name="re_pass"
                                                                id="re_pass" class="form__input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <input type="submit" value="Save Changes" name="re_password"
                                                            class="btn btn-style-1 btn-submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper Start -->


        <!-- Footer Start -->
        <?php include('includes/footer2.php');?>
        <!-- Footer End -->


        <!-- Search from Start -->
        <div class="searchform__popup" id="searchForm">
            <a href="#" class="btn-close"><i class="dl-icon-close"></i></a>
            <div class="searchform__body">
                <p>Start typing and press Enter to search</p>
                <form class="searchform">
                    <input type="text" name="search" id="search" class="searchform__input"
                        placeholder="Search Entire Store...">
                    <button type="submit" class="searchform__submit"><i class="dl-icon-search10"></i></button>
                </form>
            </div>
        </div>
        <!-- Search from End -->

        <!-- Side Navigation Start -->
        <?php include('includes/side-navigation.php');?>
        <!-- Side Navigation End -->

    


        <!-- Modal Start -->
        <?php include('includes/model.php');?>
        <!-- Modal End -->
   
        



    </div>
    <!-- Main Wrapper End -->


    <!-- ************************* JS Files ************************* -->
    <?php include('includes/scripts.php');?>

</body>



</html>