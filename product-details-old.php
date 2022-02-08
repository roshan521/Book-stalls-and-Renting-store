<?php 
error_reporting(1);
session_start();
include('includes/header.php');?>

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
                            <li class="current"><span>OldBooks Details</span></li>
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
                                                $query = "SELECT * FROM obook where old_id=$ii";
                                                $query_run = mysqli_query($connection,$query);
                                                if(mysqli_num_rows($query_run) > 0)        
                                                {
                                                    while($row = mysqli_fetch_assoc($query_run))
                                                    {
                                                        $i=$row['old_id'];
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
                                                        <img src="<?php echo 'assets/img/oldbook/'.$row['image'];?>" alt="Product">
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
                                <span class="product-badge new">OLD</span>
                            </div>
                        </div>
                        <div class="col-md-6 product-main-details mt--40 mt-md--10 mt-sm--30">
                            <div class="product-summary">
                               
                                
                             
                                <h3 class="product-title"><?php echo $row['oldbook'].' by';?></h3>
                                <h3 class="product-title"><?php echo $row['Author'];?></h3>
                                <span class="product-stock in-stock float-right">
                                    <i class="dl-icon-check-circle1"></i>
                                    in stock
                                </span>
                                <div class="product-price-wrapper mb--40 mb-md--10">
                                    <span class="money text-white"><?php echo 'Nrs. '.$row['Price'];?></span>
                                    
                                </div>
                                <h4>Please Contact with seller for this book:</h4>
                          
                                
                                
                              
                                <div class="clearfix"></div>
                                <div
                                    class="product-summary-footer d-flex justify-content-between flex-sm-row flex-column mt-5">
                                    <div class="product-meta">
                                        <span class="posted_in font-size-15">Seller:
                                            <a href=""><?php echo $row['seller'];?></a>
                                        </span>
                                        <span class="posted_in font-size-15">Seller Email:
                                            <a href=""><?php echo $row['email'];?></a>
                                        </span>
                                        <span class="sku_wrapper font-size-15">Branch: <span class="sku"><?php echo $row['Branch'];?>.
                                               </span></span>
                                        <span class="posted_in font-size-15">Publisher:
                                            <a href="#"><?php echo $row['PublicationHouse'];?></a>
                                        </span>
                                        <span class="posted_in font-size-15">Semester:
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