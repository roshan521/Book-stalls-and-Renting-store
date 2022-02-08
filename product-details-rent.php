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
                            <li class="current"><span>Rent Books Details</span></li>
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
                                                $query = "SELECT * FROM rbook where rent_id=$ii";
                                                $query_run = mysqli_query($connection,$query);
                                                if(mysqli_num_rows($query_run) > 0)        
                                                {
                                                    while($row = mysqli_fetch_assoc($query_run))
                                                    {
                                                        $i=$row['rent_id'];
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
                                <span class="product-badge rent">rent</span>
                            </div>
                        </div>
                        <div class="col-md-6 product-main-details mt--40 mt-md--10 mt-sm--30">
                            <div class="product-summary">
                               
                                
                             
                                <h3 class="product-title"><?php echo $row['rentbook'].' by';?></h3>
                                <h3 class="product-title"><?php echo $row['Author'];?></h3>
                                <span class="product-stock in-stock float-right">
                                    <i class="dl-icon-check-circle1"></i>
                                    in stock
                                </span>
                                <div class="product-price-wrapper mb--40 mb-md--10">
                                    <span class="money text-white"><?php echo 'Nrs. '.$row['Rent_price'];?></span>
                                    
                                </div>
                                <div class="clearfix"></div>
                                <p class="product-short-description mb--45 mb-sm--20"><?php echo $row['description'];?></p>
                                <form action="#" class="form--action mb--30 mb-sm--20">
                                    <div class="product-action flex-row align-items-center">
                                        <!-- <div class="quantity">
                                            <input type="number" class="quantity-input" name="qty" id="qty" value="1"
                                                min="1">
                                        </div> -->
                                        <button type="button" class="btn btn-success btn-large">
                                           <a href="rentbook-checkout.php?itemno=<?php echo $row['rent_id'];?>">Rent A Book</a>
                                        </button>
                                        <!-- <a href="wishlist.php"><i class="dl-icon-heart2"></i></a>
                                        <a href="compare.php"><i class="dl-icon-compare2"></i></a> -->
                                    </div>
                                </form>
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


                    <div class="row justify-content-center pt--45 pt-lg--50 pt-md--55 pt-sm--35">
                        <div class="col-12">
                            <div class="product-data-tab tab-style-1">
                                <div class="nav nav-tabs product-data-tab__head mb--40 mb-md--30" id="product-tab"
                                    role="tablist">
                                    <a class="product-data-tab__link nav-link active" id="nav-description-tab"
                                        data-toggle="tab" href="#nav-description" role="tab" aria-selected="true">
                                        <span>Description</span>
                                    </a>
                                    <a class="product-data-tab__link nav-link" id="nav-reviews-tab" data-toggle="tab"
                                        href="#nav-reviews" role="tab" aria-selected="true">
                                        <span>Reviews(1)</span>
                                    </a>
                                </div>
                                <div class="tab-content product-data-tab__content" id="product-tabContent">
                                    <div class="tab-pane fade show active" id="nav-description" role="tabpanel"
                                        aria-labelledby="nav-description-tab">
                                        <div class="product-description">
                                                <p>Curabitur sodales euismod nibh. Sed iaculis sed orci eget semper. Nam
                                                    auctor, augue et eleifend tincidunt, felis mauris convallis neque,
                                                    in placerat metus urna laoreet diam. Morbi sagittis facilisis arcu
                                                    sed ornare. Maecenas dictum urna ut facilisis rhoncus.iaculis sed
                                                    orci eget semper. Nam auctor, augue et eleifend tincidunt, felis
                                                    mauris</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-reviews" role="tabpanel"
                                        aria-labelledby="nav-reviews-tab">
                                        <div class="product-reviews">
                                            <h3 class="review__title">1 review for Waxed-effect pleated skirt</h3>
                                            <ul class="review__list">
                                                <li class="review__item">
                                                    <div class="review__container">
                                                        <img src="assets/img/others/comment-icon-2.png"
                                                            alt="Review Avatar" class="review__avatar">
                                                        <div class="review__text">
                                                           
                                                            <div class="review__meta">
                                                                <strong class="review__author">John Snow </strong>
                                                                <span class="review__dash">-</span>
                                                                <span class="review__published-date">November 20,
                                                                    2018</span>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <p class="review__description">Aliquam egestas libero ac
                                                                turpis pharetra, in vehicula lacus scelerisque.
                                                                Vestibulum ut sem laoreet, feugiat tellus at, hendrerit
                                                                arcu.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="review-form-wrapper">
                                                <span class="reply-title"><strong>Add a review</strong></span>
                                                <form action="#" class="form">
                                                    <div class="form-notes mb--20">
                                                        <p>Your email address will not be published. Required fields are
                                                            marked <span class="required">*</span></p>
                                                    </div>
                                                    
                                                    <div class="form__group mb--30 mb-sm--20">
                                                        <div class="form-row">
                                                            <div class="col-sm-6 mb-sm--20">
                                                                <label class="form__label" for="name">Name<span
                                                                        class="required">*</span></label>
                                                                <input type="text" name="name" id="name"
                                                                    class="form__input">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label class="form__label" for="email">email<span
                                                                        class="required">*</span></label>
                                                                <input type="email" name="email" id="email"
                                                                    class="form__input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form__group mb--30 mb-sm--20">
                                                        <div class="form-row">
                                                            <div class="col-12">
                                                                <label class="form__label" for="email">Your Review<span
                                                                        class="required">*</span></label>
                                                                <textarea name="review" id="review"
                                                                    class="form__input form__input--textarea"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form__group">
                                                        <div class="form-row">
                                                            <div class="col-12">
                                                                <input type="submit" value="Submit"
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
                                        $query = "SELECT * FROM rbook order by rand() LIMIT 3";
                                        $query_run = mysqli_query($connection, $query);
                                        if(mysqli_num_rows($query_run) > 0)        
                                        {
                                            while($row = mysqli_fetch_assoc($query_run))
                                            {
                                                $i=$row['rent_id'];
                                        ?>
                                <div class="col-4">
            
                                        <div class="airi-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <div class="product-image--holder">
                                                        <a href="product-details-rent.php?itemno=<?php echo $row['rent_id']; ?>">
                                                            <img src="<?php echo 'assets/img/nbook/'.$row['image'];?>"
                                                                alt="Product Image" class="primary-image">
                                                            <img src="<?php echo 'assets/img/nbook/'.$row['image'];?>"
                                                                alt="Product Image" class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="airi-product-action">
                                                        <div class="product-action">
                                                            <a class="quickview-btn action-btn" href="product-details-rent.php?itemno=<?php echo $row['rent_id']; ?>"
                                                                data-toggle="tooltip" data-placement="top" title="Close view">
                                                                <i class="dl-icon-view"></i>
                                                            </a>
                                                            <a class="action-btn" href="rentbook-checkout.php?itemno=<?php echo $row['rent_id'];?>"
                                                                data-toggle="tooltip" data-placement="top" title="Rent Book Now">
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
                                                        <a href="product-details-rent.php?itemno=<?php echo $row['rent_id']; ?>"><?php echo $row['rentbook'].' by'; ?></a>
                                                        <br><a href="product-details-rent.php?itemno=<?php echo $row['rent_id']; ?>"><?php echo $row['Author']; ?></a>
                                                    </h3>
                                                    <span class="product-price-wrapper">
                                                        <span class="money text-white"><?php echo 'Nrs. '.$row['Rent_price']; ?></span>
                                                       
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