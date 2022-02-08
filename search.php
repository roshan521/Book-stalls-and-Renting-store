<?php 
error_reporting(1);
session_start();
include('includes/header.php');
?>

    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Area Start -->
        <?php include('includes/navbar-full.php');?>
        <!-- Mobile Header area End -->

        <!-- Breadcrumb area Start -->
        <div class="breadcrumb-area pt--70 pt-md--25">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="index.php">Books Pages</a></li>
                            <li class="current"><span>Searched result</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div id="content" class="main-content-wrapper">
            <div class="page-content-inner enable-full-width">
                <div class="container-fluid">                     
                    <div class="row pt--40">
                                             <?php
                                                include('config.php');
                                                $search=$_POST['search'];
                                                $query = "SELECT * FROM nbook where newbook LIKE '%{$search}%' OR PublicationHouse LIKE '%{$search}%' OR Author LIKE '%{$search}%'";
                                                $query_run = mysqli_query($connection,$query);
                                                if(mysqli_num_rows($query_run) > 0)        
                                                {
                                                    while($row = mysqli_fetch_assoc($query_run))
                                                    {
                                                        $i=$row['new_id'];
                                            ?>
                               
                                    <div class="col-lg-3 col-sm-6 mb--40 mb-md--30">
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details.php?itemno=<?php echo $row['new_id']; ?>">
                                                            <img src="<?php echo 'assets/img/nbook/'.$row['image'];?>"
                                                                alt="Product Image" class="primary-image">
                                                            <img src="<?php echo 'assets/img/nbook/'.$row['image'];?>"
                                                                alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                        <a class="quickview-btn action-btn" href="product-details.php?itemno=<?php echo $row['new_id']; ?>"
                                                            data-toggle="tooltip" data-placement="top" title="Close view">
                                                            <i class="dl-icon-view"></i>
                                                        </a>
                                                            <form action="addtocart.php?itemno=<?php echo $row['new_id'];?>" method="post">
                                                                <input type="hidden" name="pid" value="<?php echo $row['new_id'];?>">
                                                                <p><input type="hidden" name="qty" value="1" min="1" style="width: 60px;"></p>
                                                            
                                                                <input type="hidden" name="price" value="<?php echo $row['Price']; ?>">
                                                                <div class="icons">
                                                                    <button type="submit" name="act" class="cart add_to_cart_btn action-btn"  data-toggle="tooltip" data-placement="top" title="Add to cart">
                                                                        <i class="dl-icon-cart29"></i>
                                                                    </button>
                                                                </div>
                                                            
                                                            </form>
                                                            <a class="action-btn" href="checkout-direct.php?itemno=<?php echo $row['new_id'];?>"
                                                                data-toggle="tooltip" data-placement="top" title="Order Now">
                                                                <i class="fa fa-money"></i>
                                                            </a>
                                                            <!-- <a class="add_wishlist action-btn" href="wishlist.php"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Add to Wishlist">
                                                                <i class="dl-icon-heart4"></i>
                                                            </a>
                                                            <a class="add_compare action-btn" href="compare.php"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Add to Compare">
                                                                <i class="dl-icon-compare"></i>
                                                            </a> -->
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="product-info text-center">
                                                    <h3 class="product-title">
                                                        <a href="product-details.php?itemno=<?php echo $row['new_id']; ?>"><?php echo $row['newbook'].' by';?></a>
                                                    </h3>
                                                    <h3 class="product-title">
                                                        <a href="product-details.php?itemno=<?php echo $row['new_id']; ?>"><?php echo $row['Author'];?></a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                        <span class="money text-white"><?php echo 'Nrs. '.$row['Price'];?></span>
                                                        
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                             <?php }}?>


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
                <form class="searchform" action="search.php" method="post">
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