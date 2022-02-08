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
                        <h1 class="page-title">My Cart</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.php">Home</a></li>
                            <li class="current"><span>Cart</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div id="content" class="main-content-wrapper mt-5 mb-5">
            
        <div class="cart-area section-space-y-axis-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- <form action="" method="post"> -->
                                <div class="table-content table-responsive">
                                    <table class="table"  id="crt_table">
                                        <thead>
                                            <tr>
                                                
                                                <th class="product-thumbnail">Images</th>
                                                <th class="cart-product-name">BookName</th>
                                                <th class="product-author">Author</th>  
                                                <th class="product-semester">Semester</th> 
                                                <th class="product-price">Price</th>
                                                <th class="product-qty">Quantity</th>
                                                <th class="product-price">Total Price</th>
                                                <th class="product_buy">Buy Now</th>
                                                <th class="product_remove">Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                
                                                <?php
                                                
                                                include('config.php');
                                                $id=$_SESSION['username'];
                                                $query = "SELECT nbook.image,nbook.newbook,nbook.Author,nbook.Sem,nbook.Price,mycart.cartid,mycart.qty,mycart.price FROM nbook 
                                                left join mycart on nbook.new_id =mycart.new_id
                                                where username='$id'";
                                                $query_run = mysqli_query($connection, $query);
                                                if(mysqli_num_rows($query_run) > 0)        
                                                {
                                                    while($row = mysqli_fetch_assoc($query_run))
                                                    {
                                                         $car=$row['cartid'];
                                                        
                                                       
                                                ?>
                                            <tr>
                                               
                                                <td class="product-thumbnail">
                                                    <a href="#">
                                                        <img src="<?php echo 'assets/img/nbook/'.$row['image'];?>" width="50px" height="50px" alt="Cart Thumbnail">
                                                    </a>
                                                </td>
                                                <td class="product-name"><a href="#"><?php echo $row['newbook'];?></a></td>
                                                <td class="product-author"><span class="amount"><?php echo $row['Author'];?></span></td>
                                                <td class="product-price"><?php echo $row['Sem'];?></td>
                                                <td class="product-price"><?php echo $row['Price'];?></td>
                                                <td class="product-qty">
                                                    <div class="input-group-control">
                                                        <form id="frm<?php echo $row['cartid']; ?>">
                                                            <input type="hidden" name="cart_id" value="<?php echo $row['cartid'];;?>">
                                                            <input type="number" class="quantity-input" name="qty" value="<?php echo $row['qty']; ?>" onchange="updcart(<?php echo $row['cartid'];;  ?>)" onkeyup="updcart(<?php echo $row['cartid'];;  ?>)" style="width: 100px;" max="5" min="1" size="2">
                                                        
                                                        </form>
                                                    </div>
                                                </td>
                                                <td class="item-total"><?php echo $row['qty']*$row['price']; ?></td>
                                                                    <!-- <td class="product_remove">
                                                    <a href="#">
                                                        <i class="pe-7s-trash" data-tippy="Remove" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder"></i>
                                                    </a>
                                                </td> -->
                                                <td> <button class="btn btn-success text-white"><a href="checkout.php?itemno=<?php echo $row['cartid']; ?>">Buy Now</a></button> </td>
                             
                                                <td>
                                                    <form action="myorders-code.php" method="post">
                                                        <input type="hidden" name="delete_id" value="<?php echo $row['cartid'];?>">
                                                        <button type="submit" name="delete_cart_btn" onclick="return confirm('Are you sure?')" class="btn btn-danger"> DELETE</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                                } 
                                            }
                                            else {
                                                echo "No Record Found";
                                            }
                                            ?>
                                            



                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 mt-5">
                                        <div class="cart-page-total">
                                            <button class="btn btn-primary"><a href="index.php">Back To Shopping</a></button>
                                        </div>
                                    </div>
                                </div>
                            <!-- </form> -->
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
    <script >

function updcart(id){

  $.ajax({
  url:'updqty.php',
  type:'POST',
  data:$("#frm"+id).serialize(),
  success:function(res){

     $("#crt_table").html(res);

  }


});

}

</script>
</body>



</html>