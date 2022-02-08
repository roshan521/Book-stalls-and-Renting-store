

   <?php 
   error_reporting(1);
   session_start();
   include('includes/header.php');?>

  
  <!-- Main Wrapper Start -->
<div class="wrapper enable-header-transparent">
        <?php include('includes/navbar.php');?>

        <!-- Main Content Wrapper Start -->
        <div id="content" class="main-content-wrapper">

                    <!-- Banner starts -->
                <?php include('includes/banner.php');?>
                    <!-- Banner Ends -->

            <!-- Video section Start Here -->
            <div  class="video-section-area pt--80 pb--40 pt-md--60 pb-md--30">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="text-block">
                                <figure class="mb--30 mb-md--20 max-w-60">
                                    <img src="assets/img/logo/logo_1.png" alt="logo">
                                </figure>

                                <p class="font-2 heading-color font-size-16 mb--30 mb-md--20"> <b>Books Stall And Renting Store</b> is an online bookstore with a mission to financially support local, independent bookstores. We believe that bookstores are essential to a healthy culture. They’re where authors can connect with readers, where we discover new writers, where children get hooked on the thrill of reading that can last a lifetime. They’re also anchors for our downtowns and communities. As more and more people buy their books online, we wanted to create an easy, convenient way for you to get your books and support bookstores at the same time.</p>
                                <a href="about-us.php" class="heading-button mb-sm--30">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <figure class="image-box image-box-w-video-btn">
                                <a href="https://www.youtube.com/watch?v=ToVcPM7EjoA" class="video-popup">
                                    <img src="assets/img/slider/home-01/library.jpg" alt="banner">
                                    <span class="video-btn"></span>
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video section End Here -->
            <!-- counter collection -->
        <div class="container gray-bg">
            <div class="row">
                <div class="four col-md-3">
                    <div class="counter-box colored"> <i class="fa fa-group"></i> 
                    <span class="counter">
                            <?php 
                                $query = "SELECT user_id FROM users ORDER BY user_id";  
                                $query_run = mysqli_query($connection, $query);
                                $row = mysqli_num_rows($query_run);
                            echo $row;
                            ?>
                    </span>
                        <p>Registered Members</p>
                    </div>
                </div>
                <div class="four col-md-3">
                    <div class="counter-box"> <i class="fa fa-book"></i> 
                    <span class="counter">
                            <?php 
                                $query = "SELECT new_id FROM nbook ORDER BY new_id";  
                                $query_run = mysqli_query($connection, $query);
                                $row = mysqli_num_rows($query_run);
                                echo $row;
                            ?>
                    </span>
                        <p>Total New Books</p>
                    </div>
                </div>
                <div class="four col-md-3">
                    <div class="counter-box"> <i class="fa fa-book"></i>
                    <span class="counter">
                            <?php 
                                $query = "SELECT old_id FROM obook ORDER BY old_id";  
                                $query_run = mysqli_query($connection, $query);
                                $row = mysqli_num_rows($query_run);
                                echo $row;
                            ?>
                    </span>
                        <p>Total Old Books</p>
                    </div>
                </div>
                <div class="four col-md-3">
                    <div class="counter-box"> <i class="fa fa-book"></i> 
                    <span class="counter">
                            <?php 
                                $query = "SELECT rent_id FROM rbook ORDER BY rent_id";  
                                $query_run = mysqli_query($connection, $query);
                                $row = mysqli_num_rows($query_run);
                                echo $row;
                            ?>
                    </span>
                        <p>Total Rent Books</p>
                    </div>
                </div>
            </div>
        </div>
             <!-- counter collection end-->
            
<!-- popular-selling-brand -->
<section class="popular-selling-brand gray-bg pt-50 pb-120 mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="popular-selling-wrap">
                                <div class="popular-selling-top">
                                    <div class="popular-selling-title text-center">
                                        <h4>Favorite Publication House</h4>
                                    </div>
                                    <div class="see-all-brand">
                                        <a href="#">See all Publication</a>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="popular-selling-items">
                                            <a href="kec.php"><img src="assets/img/others/kec.jpg" height="145px" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="popular-selling-items">
                                            <a href="pearson.php"><img src="assets/img/others/pearson.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="popular-selling-items">
                                            <a href="osborne.php"><img src="assets/img/others/osbo.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="popular-selling-items">
                                            <a href="#"><img src="assets/img/others/mcg.png" alt=""></a>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="popular-selling-ad-banner">
                                <a href="#"><img src="assets/img/others/banner.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- popular-selling-brand-end -->
            <!-- Trending Products area Start Here -->
            <section class="trending-products-area pt--30 pb--80 pt-md--20 pb-md--60">
                <div class="container-fluid">
                    <div class="row mb--40 mb-md--30">
                        <div class="col-12">
                            <h3 class="heading-secondary text-center">Recommend For You</h3>
                        </div>
                    </div>
                    <div class="row">

                                            <?php
                                                include('config.php');
                                                $query = "SELECT * FROM nbook  LIMIT 4";
                                                $query_run = mysqli_query($connection, $query);
                                                if(mysqli_num_rows($query_run) > 0)        
                                                {
                                                    while($row = mysqli_fetch_assoc($query_run))
                                                    {
                                                        $i=$row['new_id'];
                                            ?>
                        <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                            <div class="airi-product">
                                <div class="product-inner">
                                    <figure class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.php?itemno=<?php echo $row['new_id']; ?>">
                                                <img src="<?php echo 'assets/img/nbook/'.$row['image'];?>" alt="Product Image"
                                                    class="primary-image">
                                                <img src="<?php echo 'assets/img/nbook/'.$row['image'];?>" alt="Product Image"
                                                    class="secondary-image">
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
                                                    data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                    <i class="dl-icon-heart4"></i>
                                                </a>
                                                <a class="add_compare action-btn" href="compare.php"
                                                    data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                    <i class="dl-icon-compare"></i>
                                                </a> -->
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="product-info">
                                        <h3 class="product-title">
                                            <a href="product-details.php?itemno=<?php echo $row['new_id']; ?>"><?php echo $row['newbook'].' by';?></a>
                                            <br><a href="product-details.php?itemno=<?php echo $row['new_id']; ?>"><?php echo $row['Author']; ?></a>
                                        </h3>
                                        <span class="product-price-wrapper">
                                            <span class="money text-white"><?php echo 'NRS. '.$row['Price']; ?></span>
                                            
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <?php }}?>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="newbook.php" class="heading-button">Shop Now</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Trending Products area End Here -->



            <!-- Newsletter area Start Here -->
            <section class="newsletter-area bg--gray pt--30 pt-md--25 pb--40 pb-md--30">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="newsletter-box text-center">
                                <h2 class="heading-secondary mb--20">Join Our Newsletter</h2>
                                <p class="heading-color font-size-16 font-bold lts-2 mb--30">GET 15% OFF YOUR FIRST
                                    ORDER</p>
                                <form
                                    action="https://company.us19.list-manage.com/subscribe/post?u=2f2631cacbe4767192d339ef2&amp;id=24db23e68a"
                                    class="newsletter-form mc-form" method="post" target="_blank">
                                    <input type="email" name="newsletter_email" id="newsletter_email"
                                        placeholder="Enter your email address.." required="required"
                                        class="newsletter-form__input">
                                    <button type="submit" class="newsletter-form__submit">Subscribe</button>
                                </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                </div>
                                <!-- mailchimp-alerts end -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Newsletter area End Here --> 
        <!-- Blog area Start Here -->
            <div class="blog-area ptb--80 ptb-sm--60">
            <h2 class="heading-secondary text-center">Latest Blog</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="airi-element-carousel blog-carousel dot-style-1" data-slick-options='{
                                    "spaceBetween": 30,
                                    "slidesToShow": 3,
                                    "slidesToScroll": 1,
                                    "dots": true,
                                    "infinite": true
                                }' data-slick-responsive='[
                                    {"breakpoint":991, "settings": {"slidesToShow": 2} },
                                    {"breakpoint":767, "settings": {"slidesToShow": 1} }
                                ]'>
                                        <?php
                                                include('config.php');
                                                $query = "SELECT * FROM post order by post.post_id DESC";
                                                $query_run = mysqli_query($connection, $query);
                                                if(mysqli_num_rows($query_run) > 0)        
                                                {
                                                    while($row = mysqli_fetch_assoc($query_run))
                                                    {
                                                        $i=$row['post_id'];
                                            ?>
                                <div class="item">
                                    <article class="blog">
                                        <div class="blog-media">
                                            <div class="image">
                                                <a href="single-post.php?itemno=<?php echo $row['post_id']; ?>">
                                                <img src="<?php echo 'assets/img/post/'.$row['post_img'];?>"
                                                                alt="Blog" class="secondary-image" height="250px" width="250px">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="blog-info">
                                            <div class="blog-entry-meta">
                                                <span class="blog-category">
                                                    <a href="blog.php">Trends</a>
                                                </span>
                                            </div>
                                            <h3 class="blog-title">
                                                <a href="single-post.php?itemno=<?php echo $row['post_id']; ?>"><?php echo $row['title'];?></a>
                                            </h3>
                                            <div class="blog-footer-meta">
                                            <a href="blog.php" class="posted-on" tabindex="0"><?php echo $row['post_date'];?></a>
                                                <span class="meta-separator">-</span>
                                                <a href="blog.php" class="posted-by" tabindex="0">By <?php echo $row['author'];?></a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                             
                               <?php }} ?> 
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog area End Here -->

        </div>
        <!-- Main Content Wrapper Start -->
        <!-- Footer Start -->
            <?php include('includes/footer.php');?>
         <!-- Footer End -->

        <!-- Search from Start -->
        <div class="searchform__popup" id="searchForm">
            <a href="#" class="btn-close"><i class="dl-icon-close"></i></a>
            <div class="searchform__body">
                <p>Start typing and press Enter to search</p>
                <form class="searchform" action="search-new.php" method="post">
                    <input type="text" name="search" id="search" class="searchform__input"
                        placeholder="Search Entire Books...">
                    
                </form>
            </div>
        </div>

        
        <!-- Search from End -->

        <!-- Side Navigation Start -->
            <?php include('includes/side-navigation.php'); ?>
         <!-- Side Navigation End -->

      

      <!-- Modal starts -->  
      <?php include('includes/model.php'); ?>
        <!-- Modal End -->
        

</div>
<!-- Main Wrapper End -->


<?php include('includes/scripts.php');?>


</body>



</html>