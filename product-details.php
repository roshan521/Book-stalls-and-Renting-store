<?php 
error_reporting(1);
session_start();
include('includes/header.php');
?>
<style>
 input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
 </style>
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
                            <li class="current"><span>Books Details</span></li>
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
                                                $ii=$_GET['itemno'];
                                                $ud=$_SESSION['username'];
                                                $query = "SELECT * FROM nbook where new_id=$ii";
                                                $query_run = mysqli_query($connection,$query);
                                                if(mysqli_num_rows($query_run) > 0)        
                                                {
                                                    while($row = mysqli_fetch_assoc($query_run))
                                                    {
                                                        $i=$row['new_id'];
                                            ?>
                        <div class="col-md-6 product-main-image">
                            <div class="product-image">
                                <div class="product-gallery vertical-slide-nav">
                                    <div class="product-gallery__thumb">
                                        <div class="product-gallery__thumb--image">
                                            <div class="airi-element-carousel nav-slider slick-vertical" 
                                            data-slick-options='{
                                                "slidesToShow": 3,
                                                "slidesToScroll": 1,
                                                "vertical": true,
                                                "swipe": true,
                                                "verticalSwiping": true,
                                                "infinite": true,
                                                "focusOnSelect": true,
                                                "asNavFor": ".main-slider",
                                                "arrows": true, 
                                                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-up" },
                                                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-down" }
                                            }'
                                            data-slick-responsive='[
                                                {
                                                    "breakpoint":992, 
                                                    "settings": {
                                                        "slidesToShow": 4,
                                                        "vertical": false,
                                                        "verticalSwiping": false
                                                    } 
                                                },
                                                {
                                                    "breakpoint":575, 
                                                    "settings": {
                                                        "slidesToShow": 3,
                                                        "vertical": false,
                                                        "verticalSwiping": false
                                                    } 
                                                },
                                                {
                                                    "breakpoint":480, 
                                                    "settings": {
                                                        "slidesToShow": 2,
                                                        "vertical": false,
                                                        "verticalSwiping": false
                                                    } 
                                                }
                                            ]'>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-gallery__large-image">
                                        <div class="gallery-with-thumbs">
                                            <div class="product-gallery__wrapper">
                                                <div class="airi-element-carousel main-slider product-gallery__full-image image-popup"
                                                data-slick-options='{
                                                    "slidesToShow": 1,
                                                    "slidesToScroll": 1,
                                                    "infinite": true,
                                                    "arrows": false, 
                                                    "asNavFor": ".nav-slider"
                                                }'>
                                                    <figure class="product-gallery__image zoom">
                                                        <img src="<?php echo 'assets/img/nbook/'.$row['image'];?>" alt="Product">
                                                    </figure>
                                                    
                                                </div>
                                                <div class="product-gallery__actions">
                                                    <button class="action-btn btn-zoom-popup"><i
                                                            class="dl-icon-zoom-in"></i>
                                                    </button>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span class="product-badge new">New</span>
                            </div>
                        </div>
                        <div class="col-md-6 product-main-details mt--40 mt-md--10 mt-sm--30">
                            <div class="product-summary">
                                <div class="product-rating float-left">
                                                <?php
                                                    include('config.php');
                                                    $query11 = "SELECT AVG(ratting) AS avg FROM ratting  where pid='$ii'";
                                                    $query_run11 = mysqli_query($connection, $query11);
                                                    if(mysqli_num_rows($query_run11) > 0)        
                                                    {
                                                        while($row11 = mysqli_fetch_assoc($query_run11))
                                                        {
                                                            // $row12=$row11['avg'];

                                                ?>
                                                            <p>
                                                                <?php for($i=1;$i<=$row11['avg'];$i++){ ?>
                                                                <span class="fa fa-star checked"></span>
                                                                <?php  }?>

                                                                <?php for($j=1;$j<=5-$row11['avg'];$j++) {?>
                                                                  <span class="fa fa-star "></span>
                                                                <?php  } ?>
                                                            </p>
                                                            <?php }}?>
                                    <a href="#" class="review-link">(<?php 
                                                    include('config.php');
                                                    $query11 = "SELECT id FROM ratting where pid='$ii' ORDER BY id";  
                                                    $query_run11 = mysqli_query($connection, $query11);
                                                    $row11 = mysqli_num_rows($query_run11);
                                                    echo $row11;
                                                ?> customer review)</a>
                                </div>
                                
                                <br><br>
                                <h3 class="product-title"><?php echo $row['newbook'].' by';?></h3>
                                <h3 class="product-title"><?php echo $row['Author'];?></h3>
                                <span class="product-stock in-stock float-right">
                                    <i class="dl-icon-check-circle1"></i>
                                    in stock
                                </span>
                                <div class="product-price-wrapper mb--40 mb-md--10">
                                    <span class="money text-white"><?php echo 'Nrs. '.$row['Price'];?></span>
                                    
                                </div>
                                <div class="clearfix"></div>
                                <p class="product-short-description mb--45 mb-sm--20"><?php echo $row['description'];?></p>
                                <!-- <form action="#" class="form--action mb--30 mb-sm--20"> -->
                                                                                    
                                        <form action="addtocart.php?itemno=<?php echo $row['new_id'];?>" method="post">
                                            <div class="product-action flex-row align-items-center">  
                                                <input type="hidden" name="pid" value="<?php echo $row['new_id'];?>">
                                                <!-- <p><input type="hidden" name="qty" value="1" min="1" style="width: 60px;"></p> -->
                                                <div class="quantity">
                                                    <input type="number" class="quantity-input" name="qty" id="qty" value="1"
                                                        min="1">
                                                </div>
                                                <input type="hidden" name="price" value="<?php echo $row['Price']; ?>">
                                                <div class="icons">
                                                    <button type="submit" name="act" class="btn btn-success btn-large"  data-toggle="tooltip" data-placement="top" title="Add to cart">
                                                    Add To Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- <a href="wishlist.php"><i class="dl-icon-heart2"></i></a>
                                        <a href="compare.php"><i class="dl-icon-compare2"></i></a> -->
                                   
                                <!-- </form> -->
                                <div class="product-extra mb--40 mb-sm--20">
                                    <a href="#" class="font-size-12"><i class="fa fa-map-marker"></i>Find store near
                                        you</a>
                                    <a href="#" class="font-size-12"><i class="fa fa-exchange"></i>Delivery and
                                        return</a>
                                </div>
                                <div
                                    class="product-summary-footer d-flex justify-content-between flex-sm-row flex-column">
                                    <div class="product-meta">
                                        <span class="sku_wrapper font-size-12">Branch: <span class="sku"><?php echo $row['Branch'];?>.
                                               </span></span>
                                        <span class="posted_in font-size-12">Publisher:
                                            <a href="#"><?php echo $row['PublicationHouse'];?></a>
                                        </span>
                                        <span class="posted_in font-size-12">Semester:
                                            <a href="#"><?php echo $row['Sem'];?></a>
                                        </span>
                                       
                                    </div>
                                    <div class="product-share-box">
                                        <span class="font-size-12">Share With</span>
                                        <!-- Social Icons Start Here -->
                                        <ul class="social social-small">
                                            <li class="social__item">
                                                <a href="https://facebook.com/" class="social__link">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="social__item">
                                                <a href="https://twitter.com/" class="social__link">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="social__item">
                                                <a href="https://plus.google.com/" class="social__link">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li class="social__item">
                                                <a href="https://plus.google.com/" class="social__link">
                                                    <i class="fa fa-pinterest-p"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- Social Icons End Here -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }}?>
                    </div>
                    <!-- description and feedback starts -->
                     <?php include('feedback.php');?>
                     <!-- description and feedback ends -->

                    <div class="row pt--35 pt-md--25 pt-sm--15 pb--75 pb-md--55 pb-sm--35">
                        <div class="col-12">
                            <div class="row mb--40 mb-md--30">
                                <div class="col-12 text-center">
                                    <h2 class="heading-secondary">Related Products</h2>
                                    <hr class="separator center mt--25 mt-md--15">
                                </div>
                            </div>
                            <div class="row">

                                    <?php
                                        include('config.php');
                                        $query = "SELECT * FROM nbook order by rand() LIMIT 4";
                                        $query_run = mysqli_query($connection, $query);
                                        if(mysqli_num_rows($query_run) > 0)        
                                        {
                                            while($row = mysqli_fetch_assoc($query_run))
                                            {
                                                $i=$row['new_id'];
                                        ?>
                                <div class="col-3">
            
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
                                                        <a href="product-details.php?itemno=<?php echo $row['new_id']; ?>"><?php echo $row['newbook'].' by'; ?></a>
                                                        <br><a href="product-details.php?itemno=<?php echo $row['new_id']; ?>"><?php echo $row['Author']; ?></a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                        <span class="money text-white"><?php echo 'Nrs. '.$row['Price']; ?></span>
                                                       
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