
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


<?php
include('config.php');
$order_no=$_REQUEST['order_no'];
$email=$_POST['email'];
$itemno=$_REQUEST['itemno'];
if(isset($_POST['submit'])){
$sql="select * from orders where order_no='$order_no' AND email='$email'";
$results = mysqli_query($connection, $sql);
if (mysqli_num_rows($results) == 1){
     header("location:tracking.php?itemno='$order_no'");
}else
{
    header("Refresh:2; url=order-tracking.php");
    echo'<h3>ID nOT found<h3>';
}
}
?>
    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Area Start -->
        <?php include('includes/navbar-full.php');?>
        <!-- Header  area End -->
      

        <!-- Breadcrumb area Start -->

        <div class="breadcrumb-area bg--white-6 breadcrumb-bg-1 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Tracking Order</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.php">Home</a></li>
                            <li class="current"><span>Tracking Order</span></li>
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
                    <div class="row justify-content-center pt--75 pb--80 pt-md--55 pb-md--60 pt-sm--35 pb-sm--40">
                        <div class="col-lg-6">
                            <p class="heading-color mb--30 text-center">To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
                            <form class="form form--track" action="" method="post">
                                <div class="form__group mb--30">
                                    <label for="order_no" class="form__label form__label--3">Order no.</label>
                                    <input type="text" name="order_no"  class="form__input form__input--3" placeholder="Found in your order confirmation email.">
                                </div>
                                <div class="form__group mb--30">
                                    <label for="billing_email" class="form__label form__label--3">Billing email</label>
                                    <input type="text" name="email"  class="form__input form__input--3" placeholder="Email you used during checkout.">
                                </div>
                                <div class="form__group text-center">
                                    <input type="submit" name="submit" value="Track" class="btn btn-submit btn-style-1">
                                </div>

                            </form>
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