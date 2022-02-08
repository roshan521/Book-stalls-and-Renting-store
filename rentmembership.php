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
    $idd=$_REQUEST['itemno'];

    $id=$_SESSION['username'];
    $sql="select * from users where name='$id'";
    $query_run = mysqli_query($connection, $sql);
    while($row = mysqli_fetch_assoc($query_run))
        {  
            $se=$row['service'];
         
        } 
        if($se=='PRO')
        {
            header("location:rentbook-checkout.php?itemno='$idd'");  
        }
        else if(isset($_POST['submit']))
        {
            if($se=='REG')
            {
                $query1 = "UPDATE users SET service='PRO' where name='$id'";
                                                
                $query_run1 = mysqli_query($connection, $query1);
              if($query_run1){
                header("location:rentbook-checkout.php?itemno='$idd'");
              }
               
                
            }

       
         }

?>
 
    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Area Start -->
        <?php include('includes/navbar-full.php');?>
        <!-- Mobile Header area End -->

        <!-- Breadcrumb area Start -->
        <div class="breadcrumb-area bg--white-6 breadcrumb-bg-1 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Premium Member</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.php">Home</a></li>
                            <li class="current"><span>rentmembership</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div id="content" class="main-content-wrapper">
            <div class="page-content-inner">
                <div class="container ">
                    
                    <div class="row pb--80 pb-md--60 pb-sm--40 mt-5">
                        <!-- Checkout Area Start -->
                        <div class="col-lg-6">
                            <div class="checkout-title mt--10">
                                <h3>Since you are not pro member,You cant rent a book.</h3>
                                <h2>Fill PRO Membership Form</h2>
                            </div>
                            <div class="checkout-form">
                                            <?php
                                                include('config.php');
                                                $ii=$_GET['itemno'];
                                                $query = "SELECT * from rbook where rent_id={$ii}";
                                               
                                                $query_run = mysqli_query($connection, $query);
                                                if(mysqli_num_rows($query_run) > 0)        
                                                {
                                                    while($row = mysqli_fetch_assoc($query_run))
                                                    {
                                                       
                                                ?>         
                                <form action=""  method="post">
                                    <div class="form-row mb--30">
                                        <div class="form__group col-md-12 mb-sm--30">
                                            <label for="billing_name" class="form__label form__label--2">Username
                                                <span class="required">*</span></label>
                                            <input type="text" name="name" id="billing_name"
                                                class="form__input form__input--2" value="<?php echo $_SESSION['username'];?>" readonly>
                                        </div>
                                        
                                    </div>
                                    <div class="form-row mb--30">
                                        <div class="form__group col-12">
                                            <label for="billing_email" class="form__label form__label--2">Email Address
                                                <span class="required">*</span></label>
                                            <input type="email" name="email" id="billing_email"
                                                class="form__input form__input--2">
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="form-row mb--30">
                                        <div class="form__group col-12">
                                            <label for="billing_phone" class="form__label form__label--2">Phone <span
                                                    class="required">*</span></label>
                                            <input type="text" name="phone" id="billing_phone"
                                                class="form__input form__input--2">
                                        </div>
                                    </div>
                                    <div class="form-row mb--30">
                                        <div class="form__group col-12">
                                            <label for="billing_address" class="form__label form__label--2">Address <span
                                                    class="required">*</span></label>
                                            <input type="text" name="address" id="billing_address"
                                                class="form__input form__input--2">
                                        </div>
                                    </div>
                                    <div class="form-row mb--30">
                                        <div class="form__group col-12">
                                            <label for="billing_price" class="form__label form__label--2">MemberShip Price <span
                                                    class="required">*</span></label>
                                            <input type="text" name="price" id="billing_price"
                                                class="form__input form__input--2" value="NRs. 1000" readonly>
                                        </div>
                                    </div>
                                    
                                    <div class="form-row mb--30">
                                        <div class="form__group col-12">
                                            <label for="billing_address" class="form__label form__label--2">PaymentMethod <span
                                                    class="required">*</span></label>
                                                    <select class="form__input form__input--2" name="paymentMethod">
                                                    <option data-display="COD">COD</option>
                                                    <option value="Esewa">Esewa</option>
                                                    <option value="Credit">Credit</option>
                                                </select>
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-fullwidth btn-style-1">Submit Form</button>
                
                                </form>
                                <?php }}?>
                            </div>
                        </div>
                       
                        <!-- Checkout Area End -->
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