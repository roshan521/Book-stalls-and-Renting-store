<?php 
   error_reporting(1);
   session_start();
   include('includes/header.php');?>

    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Area Start -->
        <?php include('includes/navbar-full.php');?>
        <!-- Header Area End -->
        <!-- Mobile Header area End -->

        <!-- Breadcrumb area Start -->
        <div class="breadcrumb-area bg--white-6 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Blog</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li class="current"><span>Single Post</span></li>
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
                    <div class="row ptb--70 ptb-md--50 ptb-sm--30">
                        <div class="col-lg-12" id="main-content">
                            <div class="single-post">
                                <!-- Single Blog Start Here -->
                                <article class="single-post-details">

                                        
                                            <?php
                                               include('config.php');
                                               $ii=$_GET['itemno'];
                                                $query = "SELECT * FROM post where post_id=$ii";
                                                $query_run = mysqli_query($connection, $query);
                                                if(mysqli_num_rows($query_run) > 0)        
                                                {
                                                    while($row = mysqli_fetch_assoc($query_run))
                                                    {
                                                        $i=$row['post_id'];
                                            ?>
                                    <div class="entry-header">
                                        <h2 class="entry-title"><?php echo $row['title'];?></h2>
                                        <div class="entry-meta">
                                            <div class="entry-meta-top">
                                                <a href="blog.php" class="posted-on"><?php echo $row['post_date'];?></a>
                                                <span class="meta-separator">-</span>
                                                <a href="blog.php" class="posted-by"><?php echo $row['author'];?></a>
                                                
                                            </div>
                                            <!-- <div class="entry-meta-bottom">
                                                <a href="#" class="comments-link">
                                                    <i class="dl-icon-comment"></i>
                                                    <span>2</span>
                                                </a>
                                                <a href="#" class="favorite-link">
                                                    <i class="dl-icon-heart4"></i>
                                                    <span>4</span>
                                                </a>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="entry-thumbnail d-flex justify-content-center">
                                    <img src="<?php echo 'assets/img/post/'.$row['post_img'];?>"
                                                                alt="Blog" class="secondary-image" height="700px" width="50%">
                                    </div>
                                    <div class="entry-content">
                                        <h3><?php echo $row['description'];?></h3>
                                       
                                    
                                    </div>
                                    <div class="entry-footer-meta">
                                        <div class="tag-list">
                                            <span>
                                                <i class="fa fa-tags"></i>
                                            </span>
                                            <span>
                                                <a href="blog.php"><?php echo $row['category']?></a>
                                                
                                            </span>
                                        </div>
                                        <div class="author">
                                            <span>
                                                Author: <a href="blog.php"><?php echo $row['author'];?></a>
                                            </span>
                                        </div>
                                    </div>
                                                        <?php }}?>

                                </article>
                                <!-- Single Blog End Here -->

                                <!-- Social Sharing Icons Start Here -->
                                <div class="post-share sticky-social">
                                    <ul class="social social-big social-round social-sharing bg-gray-2 vertical">
                                        <li class="social__item">
                                            <a href="https://facebook.com/" class="social__link facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://twitter.com/" class="social__link twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://plus.google.com/" class="social__link pinterest">
                                                <i class="fa fa-pinterest-p"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://plus.google.com/" class="social__link google-plus">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Social Sharing Icons End Here -->

                                
                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid p-0">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <hr>
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