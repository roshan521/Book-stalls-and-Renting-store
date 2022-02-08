
        <!-- Header Area Start -->
        <header class="header header-transparent header-fullwidth header-style-1">
            <div class="header-outer">
                <div class="header-inner fixed-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-5 col-lg-6">
                                <!-- Main Navigation Start Here -->
                                <nav class="main-navigation">
                                    <ul class="mainmenu">
                                        <li class="mainmenu__item menu-item-has-children megamenu-holder">
                                            <a href="index.php" class="mainmenu__link">
                                                <span class="mm-text">Home</span>
                                            </a>
                                        
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children">
                                            <a href="index.php" class="mainmenu__link">
                                                <span class="mm-text">Book</span>
                                                <span class="tip">Hot</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="newbook.php">
                                                        <span class="mm-text">New Book</span>
                                                    </a>
                                                </li>
                                                
                                                <li>
                                                    <a href="rentbook.php">
                                                        <span class="mm-text">Rent Book</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="oldbook.php">
                                                        <span class="mm-text">Old Book</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mainmenu__item">
                                            <a href="about-us.php" class="mainmenu__link">
                                                <span class="mm-text">About</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item">
                                            <a href="request.php" class="mainmenu__link">
                                                <span class="mm-text">Request</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item">
                                            <a href="blog.php" class="mainmenu__link">
                                                <span class="mm-text">News & Blog</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item">
                                            <a href="contact-us.php" class="mainmenu__link">
                                                <span class="mm-text">Contact Us</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- Main Navigation End Here -->
                            </div>
                            <div class="col-lg-2 col-md-3 col-4 text-lg-center">
                                <!-- Logo Start Here -->
                                <a href="index.php" class="logo-box">
                                    <figure class="logo--normal">
                                        <img src="assets/img/logo/logo_1.png" height="90px" width="180px" alt="Logo" />
                                    </figure>
                                    <figure class="logo--transparency">
                                        <img src="assets/img/logo/logo_2.png" height="90px" width="180px" alt="Logo" />
                                    </figure>
                                </a>
                                <!-- Logo End Here -->
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-9 col-8">
                                <!-- Header Toolbar Start Here -->
                                <ul class="header-toolbar text-right">
                                    <li class="header-toolbar__item d-none d-lg-block">
                                        <a href="#sideNav" class="toolbar-btn">
                                            <i class="dl-icon-menu2"></i>
                                        </a>
                                    </li>
                                    <li class="header-toolbar__item user-info-menu-btn">
                                        <a href="#" class="mini-cart-btn">
                                            <i class="fa fa-user-circle-o"></i>
                                            <?php 
                                              error_reporting(1);
                                              session_start();
                                                if(!$_SESSION["username"]=='')
                                                {
                                                    echo'<sup class="mini-cart-count pl-2 pr-2">';
                                                    echo $_SESSION["HI"]="HI";
                                                    echo'</sup>';
                                                }
                                            ?>
                                        </a>
                                        <ul class="user-info-menu">
                                            <li>
                                                <a href="my-account.php">My Account</a>
                                            </li>
                                            <li>
                                                <a href="cart.php">Shopping Cart</a>
                                            </li>
                                            <li>
                                                <a href="order-tracking.php">Order tracking</a>
                                            </li>
                                           <li>
                                                <a href="login-register.php">Login/Register</a>
                                            </li>
                                            <?php 
                                              if(!$_SESSION["username"]==''){
                                                  echo' <li>
                                                  <a href="logout.php">Logout</a>
                                              </li>';
                                              }
                                            ?>
                                          
                                            <!-- <li>
                                                <a href="wishlist.php">Wishlist</a>
                                            </li>
                                            <li>
                                                <a href="order-tracking.php">Order tracking</a>
                                            </li>
                                            <li>
                                                <a href="compare.php">compare</a>
                                            </li>  -->
                                        </ul>
                                    </li>
                                    <li class="header-toolbar__item">
                                        <a  href="cart.php" class="mini-cart-btn">
                                            <i class="dl-icon-cart4"></i>
                                            <sup class="mini-cart-count">
                                            <?php 
                                                error_reporting(1);
                                                session_start();
                                                include('config.php');
                                                $id=$_SESSION['username'];
                                                $query = "SELECT cartid FROM mycart where username='$id' ORDER BY cartid";  
                                                $query_run = mysqli_query($connection, $query);
                                                $row = mysqli_num_rows($query_run);
                                                echo $row;
                                            ?>
                                            </sup>
                                        </a>
                                    </li>
                                    <li class="header-toolbar__item">
                                        <a href="#searchForm" class="search-btn toolbar-btn">
                                            <i class="dl-icon-search1"></i>
                                        </a>
                                    </li>
                                    <li class="header-toolbar__item d-lg-none">
                                        <a href="#" class="menu-btn"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-sticky-header-height"></div>
            </div>

        </header>
        <!-- Header Area End -->

        <!-- Mobile Header area Start -->
        <header class="header-mobile">
            <div class="header-mobile__outer">
                <div class="header-mobile__inner fixed-header">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <a href="index.php" class="logo-box">
                                    <figure class="logo--normal">
                                        <img src="assets/img/logo/logo_1.png" alt="Logo">
                                    </figure>
                                </a>
                            </div>
                            <div class="col-8">
                                <ul class="header-toolbar text-right">
                                    <li class="header-toolbar__item user-info-menu-btn">
                                    <a href="#" class="mini-cart-btn">
                                            <i class="fa fa-user-circle-o"></i>
                                            <?php 
                                              error_reporting(1);
                                              session_start();
                                                if(!$_SESSION["username"]=='')
                                                {
                                                    echo'<sup class="mini-cart-count pl-2 pr-2">';
                                                    echo $_SESSION["HI"]="HI";
                                                    echo'</sup>';
                                                }
                                            ?>
                                        </a>
                                        <ul class="user-info-menu">
                                            <li>
                                                <a href="my-account.php">My Account</a>
                                            </li>
                                            <li>
                                                <a href="cart.php">Shopping Cart</a>
                                            </li>
                                            <li>
                                                <a href="order-tracking.php">Order tracking</a>
                                            </li>
                                            <li>
                                                <a href="login-register.php">Login/Register</a>
                                            </li>
                                            <?php 
                                              if(!$_SESSION["username"]==''){
                                                  echo' <li>
                                                  <a href="logout.php">Logout</a>
                                              </li>';
                                              }
                                            ?>
                                        </ul>
                                    </li>
                                    <li class="header-toolbar__item">
                                        <a href="cart.php" class="mini-cart-btn">
                                            <i class="dl-icon-cart4"></i>
                                            <sup class="mini-cart-count">
                                            <?php 
                                                error_reporting(1);
                                                session_start();
                                                include('config.php');
                                                $id=$_SESSION['username'];
                                                $query = "SELECT cartid FROM mycart where username='$id' ORDER BY cartid";  
                                                $query_run = mysqli_query($connection, $query);
                                                $row = mysqli_num_rows($query_run);
                                                echo $row;
                                            ?>
                                            </sup>
                                        </a>
                                    </li>
                                    <li class="header-toolbar__item">
                                        <a href="search.php" class="search-btn toolbar-btn">
                                            <i class="dl-icon-search1" name="search"></i>
                                        </a>
                                    </li>
                                    <li class="header-toolbar__item d-lg-none">
                                        <a href="#" class="menu-btn"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <!-- Mobile Navigation Start Here -->
                                <div class="mobile-navigation dl-menuwrapper" id="dl-menu">
                                    <button class="dl-trigger">Open Menu</button>
                                    <ul class="dl-menu">
                                        <li>
                                            <a href="index.php">
                                                Home
                                            </a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children">
                                            <a href="shop-sidebar.php" class="mainmenu__link">
                                                <span class="mm-text">Book</span>
                                                <span class="tip">Hot</span>
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="newbook.php">
                                                        <span class="mm-text">New Book</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="oldbook.php">
                                                        <span class="mm-text">Old Book</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="rentbook.php">
                                                        <span class="mm-text">Rent Book</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mainmenu__item">
                                            <a href="about-us.php" class="mainmenu__link">
                                                <span class="mm-text">About</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item">
                                            <a href="request.php" class="mainmenu__link">
                                                <span class="mm-text">Request</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item">
                                            <a href="blog.php" class="mainmenu__link">
                                                <span class="mm-text">News & Blog</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item">
                                            <a href="contact-us.php" class="mainmenu__link">
                                                <span class="mm-text">Contact Us</span>
                                            </a>
                                        </li>
                                    </ul>
                                
                                </div>
                                <!-- Mobile Navigation End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-sticky-header-height"></div>
            </div>
        </header>
        <!-- Mobile Header area End -->