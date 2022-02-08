<?php
 error_reporting(1);
 session_start();
include('includes/header.php');?>

    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Area Start -->
        <?php include('includes/navbar-full.php');?>
        <!-- Header  area End -->

        <!-- Breadcrumb area Start -->
        <div class="breadcrumb-area bg--white-6 ptb--70 ptb-lg--40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Our Team</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.php">Home</a></li>
                            <li class="current"><span>Team</span></li>
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
                    <div class="row pt--80 pb--40">
                        <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                            <div class="airi-team">
                                <div class="team-member">
                                    <div class="team-member__thumbnail">
                                        <img src="assets/img/team/pramesh.jpg" alt="Team Member">
                                        <a href="#" class="link-overlay">Team member</a>
                                        <div class="team-member__overlay">
                                            <ul class="social social-round">
                                                <li class="social__item">
                                                    <a href="https://www.facebook.com/" class="social__link">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="https://twitter.com/" class="social__link">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="https://www.pinterest.com/" class="social__link">
                                                        <i class="fa fa-pinterest-p"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team-member__info">
                                        <h2 class="team-member__name"><a href="#">Pramesh B. Shrestha</a></h2>
                                        <p class="team-member__designation">Developer</p>
                                        <p class="team-member__desc">Pellentesque dignissim at ante sed iaculis.
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                                            ac turpis egestas. Sed sod</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                            <div class="airi-team">
                                <div class="team-member">
                                    <div class="team-member__thumbnail">
                                        <img src="assets/img/team/roshan.jpg" alt="Team Member">
                                        <a href="#" class="link-overlay">Team member</a>
                                        <div class="team-member__overlay">
                                            <ul class="social social-round">
                                                <li class="social__item">
                                                    <a href="https://www.facebook.com/" class="social__link">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="https://twitter.com/" class="social__link">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="https://www.pinterest.com/" class="social__link">
                                                        <i class="fa fa-pinterest-p"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team-member__info">
                                        <h2 class="team-member__name"><a href="#">Roshan Thapa</a></h2>
                                        <p class="team-member__designation">Developer</p>
                                        <p class="team-member__desc">Pellentesque dignissim at ante sed iaculis.
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                                            ac turpis egestas. Sed sod</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                            <div class="airi-team">
                                <div class="team-member">
                                    <div class="team-member__thumbnail">
                                        <img src="assets/img/team/madhu.jpg" alt="Team Member">
                                        <a href="#" class="link-overlay">Team member</a>
                                        <div class="team-member__overlay">
                                            <ul class="social social-round">
                                                <li class="social__item">
                                                    <a href="https://www.facebook.com/" class="social__link">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="https://twitter.com/" class="social__link">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="https://www.pinterest.com/" class="social__link">
                                                        <i class="fa fa-pinterest-p"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team-member__info">
                                        <h2 class="team-member__name"><a href="#">Madhu Khadka</a></h2>
                                        <p class="team-member__designation">Developer</p>
                                        <p class="team-member__desc">Pellentesque dignissim at ante sed iaculis.
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                                            ac turpis egestas. Sed sod</p>
                                    </div>
                                </div>
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