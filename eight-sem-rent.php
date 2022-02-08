<?php
session_start();
error_reporting(1);
include('includes/header.php');?>

    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Area Start -->
        <?php include('includes/navbar-full.php');?>
        <!--  Header area End -->

        <!-- Breadcrumb area Start -->
        <div class="breadcrumb-area bg--white-6 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Eight Semester</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.php">Home</a></li>
                            <li class="current"><span>Eight-Sem</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div id="content" class="main-content-wrapper">
            <div class="page-content-inner enable-page-sidebar">
                <div class="container-fluid">
                    <div class="row shop-sidebar pt--45 pt-md--35 pt-sm--20 pb--60 pb-md--50 pb-sm--40">
                        <div class="col-lg-9 order-lg-2" id="main-content">
                            <div class="shop-toolbar">
                                <div class="shop-toolbar__inner">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 text-md-left text-center mb-sm--20">
                                            <div class="shop-toolbar__left">
                                                <p class="product-pages text-white p-3 bg-primary font-size-15">Total Second Sem Books:

                                                    <span>

                                                    <?php 
                                                    include('config.php');
                                                    $query = "SELECT rent_id FROM rbook  where Sem='8' ORDER BY rent_id";  
                                                    $query_run = mysqli_query($connection, $query);
                                                    $row = mysqli_num_rows($query_run);
                                                    echo $row;
                                                    ?>
                                                    </span>
                                                </p>
                                            </div>
                                        </div> 
                                        
                                        <div class="col-md-6">
                                            <!-- <div class="shop-toolbar__right"> -->
                                                <form action="search-rent.php" method="post">
                                                    <div class="input-group">
                                                        <input class="form-control text-center" placeholder="Search By Bookname/Author/Publicationhouse" name="search"  type="text">
                                                    </div>
                                                </form>
                                            <!-- </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-products">
                                <div class="row grid-space-20 xxl-block-grid-5">
                                            <?php
                                                include('config.php');
                                                $query = "SELECT * FROM rbook where Sem='8'  LIMIT 6";
                                                $query_run = mysqli_query($connection, $query);
                                                if(mysqli_num_rows($query_run) > 0)        
                                                {
                                                    while($row = mysqli_fetch_assoc($query_run))
                                                    {
                                                        $i=$row['rent_id'];
                                            ?>

                                    <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
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
                                                        
                                                               
                                                            <a class="action-btn" href="rentmembership.php?itemno=<?php echo $row['rent_id'];?>"
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
                                                        <a href="product-details-rent.php?itemno=<?php echo $row['rent_id']; ?>"><?php echo $row['rentbook'].' by';?></a>
                                                    </h3>
                                                   
                                                    <h3 class="product-title">
                                                        <a href="product-details-rent.php?itemno=<?php echo $row['rent_id']; ?>"><?php echo $row['Author'];?></a>
                                                    </h3>
                                               
                                                    <span class="product-price-wrapper">
                                                            <span class="money text-white"><?php echo 'Nrs. '.$row['Rent_price'];?></span>
                                                            
                                                    </span>                                                    
                                                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                                        <?php }}?>



                                </div>
                            </div>

                            <!-- <nav class="pagination-wrap">
                                <ul class="pagination">
                                    <li><a href="shop-sidebar.html" class="prev page-number"><i
                                                class="fa fa-angle-double-left"></i></a></li>
                                    <li><span class="current page-number">1</span></li>
                                    <li><a href="shop-sidebar.html" class="page-number">2</a></li>
                                    <li><a href="shop-sidebar.html" class="page-number">3</a></li>
                                    <li><a href="shop-sidebar.html" class="next page-number"><i
                                                class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </nav> -->
                        </div>
                         <!-- Category Start -->
                                <?php include('includes/category-rent.php');?>
                        <!-- Catgeory End -->
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