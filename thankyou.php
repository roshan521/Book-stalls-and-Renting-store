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

 ?>
 <style>
 .pro-empty-page{
margin-bottom:200px;
justify-content:center;
 }
  .pro-empty-page p{
    line-height:2;
   font-size:20px;
   letter-spacing: 2px;
 }
 </style>
     <?php include('includes/header.php');?>    

         <!-- //header style One-->
         <?php include('includes/navbar-full.php');?>

     <!-- About-us Content -->
    <section class="pro-content empty-content">
        <div class="container">
            
            <div class="row">
              <div class="col-12">
                  <div class="pro-empty-page">
                    <h2 style="font-size: 150px;"><i class="fa fa-check-circle"></i></h2>
                    <h1 >Thank You <span class="text-danger"><?php echo $_SESSION['username'];?></span> for ordering.</h1>
                      
                                   <?php
                                                include('config.php');
                                                $id=$_SESSION['username'];
                                                $query = "SELECT * FROM orders where name='$id'";
                                                $query_run = mysqli_query($connection, $query);
                                                if(mysqli_num_rows($query_run) > 0)        
                                                {
                                                    while($row = mysqli_fetch_assoc($query_run))
                                                    {
                                                      $ord=$row['order_no'];
                                                      $bn=$row['bookname'];
                                                    }}
                                            ?>


                      <p>Your Book: <strong class="text-danger"><?php echo $bn ?></strong> Will be available soon.</p>                      
                     <p>Your Order No. is: <strong class="text-danger"><?php echo $ord;?></strong>. 
                    <br>Go to the: <a href="my-account.php" class="btn bg-primary text-white"><b>Order page</b></a>.
                  
                  </div>
              
              </div>
            </div>
          
        </div>  
        
        
    </section>

  
 <!-- //footer style -->
 <?php include('includes/footer2.php');?>
        <!-- //footer style -->
    </div>
       

      
        
       
       

 <?php include('includes/scripts.php');?>


</body>


</html>
