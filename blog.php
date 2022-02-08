<?php 
   error_reporting(1);
   session_start();
   include('includes/header.php');?>

    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Area Start -->
        <?php include('includes/navbar-full.php');?>
        <!-- Header Area End -->


        <!-- Breadcrumb area Start -->
        <div class="breadcrumb-area bg--white-6 pt--40 pb--40 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">News & Blog</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>news&blog</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div id="content" class="main-content-wrapper">
            <div class="page-content-inner blog-page-sidebar">
                <div class="container">
                    <div class="row ptb--80 pt-md--60 pb-md--55 pt-sm--50 pb-sm--45">
                        <div class="col-lg-9 order-lg-2 mb-md--40" id="main-content">
                            <div class="row">

                                            <?php
                                                include('config.php');
                                                $limit=2;
                                                if(isset($_GET['page'])){
                                                    $page=$_GET['page'];
                                                }else{
                                                    $page=1;
                                                }
                                              
                                                $offset=($page-1) * $limit;
                                                $query = "SELECT * FROM post order by post.post_id DESC LIMIT {$offset},{$limit}";
                                                $query_run = mysqli_query($connection, $query);
                                                if(mysqli_num_rows($query_run) > 0)        
                                                {
                                                    while($row = mysqli_fetch_assoc($query_run))
                                                    {
                                                        $i=$row['post_id'];
                                            ?>

                                <div class="col-12 mb--40 mb-md--30 mb-sm--25">
                                    <article class="post">
                                        <div class="post-media">
                                            <div class="image">
                                            <img src="<?php echo 'assets/img/post/'.$row['post_img'];?>"
                                                                alt="Blog" class="secondary-image" height="800px" width="100%">
                                                <a href="single-post.php?itemno=<?php echo $row['post_id']; ?>" class="link-overlay">Blog</a>
                                            </div>
                                        </div>
                                        <div class="post-info post-info--2">
                                            <div class="post-entry-meta">
                                                <a href="blog.php">Trends</a>
                                            </div>
                                            <h3 class="post-title">
                                                <a href="single-post.php?itemno=<?php echo $row['post_id']; ?>"><?php echo $row['title'];?></a>
                                            </h3>
                                            <div class="post-meta">
                                                <a href="blog.php" class="posted-on" tabindex="0"><?php echo $row['post_date'];?></a>
                                                <span class="meta-separator">-</span>
                                                <a href="blog.php" class="posted-by" tabindex="0">By <?php echo $row['author'];?></a>
                                            </div>
                                            <div class="post-content">
                                                <p><?php
                                                
                                                $string= $row['description'];
                                                 echo substr($string,0,100);
                                                ?>…</p>
                                            </div>
                                            <a href="single-post.php?itemno=<?php echo $row['post_id']; ?>" class="read-more-btn">Read More</a>
                                        </div>
                                    </article>
                                </div>


                                                            <?php }}?>


                               
                            </div>
                            <div class="row">
                                <div class="col-12">  
                                        <?php
                                       include('config.php');
                                       $query = "SELECT * FROM post";
                                       $result1 = mysqli_query($connection, $query);
                                       if(mysqli_num_rows($result1) > 0)        
                                       {
                                           $total_records=mysqli_num_rows($result1);
                                          
                                           $total_page=ceil($total_records/$limit);
                                           echo' <nav class="pagination-wrap">';
                                                echo' <ul class="pagination">';
                                                        for($i=1;$i<=$total_page; $i++)
                                                        {
                                                            if($i==$page){
                                                                $active="page-number current";
                                                            }else{
                                                                $active="page-number";
                                                            }
                                                        echo'<li><a class="'.$active.'" href="blog.php?page='.$i.'">'.$i.'</a></li>';
                                                        }
                                                echo '</ul>';
                                           echo'</nav>';
                                       }
                                        ?>                                                  

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 order-lg-1" id="primary-sidebar">
                            <div class="sidebar-inner">
                                <div class="widget blog-widget widget-categories mb--40 mb-md--30 mb-sm--20">
                                    <h3 class="widget-title">Categories</h3>
                                    <ul class="menu list-unstyled">
                                        <li><a href="#">Education</a></li>
                                        <li><a href="#">Knowledge</a></li>
                                        
                                    </ul>
                                </div>
                                <div class="widget blog-widget widget-recent-posts mb--40 mb-md--30 mb-sm--20">
                                    <h3 class="widget-title">Recent Post</h3>
                                    <div class="recent-post">
                                                <?php
                                                    include('config.php');
                                                    $query = "SELECT * FROM post order by post.post_id DESC LIMIT 3";
                                                    $query_run = mysqli_query($connection, $query);
                                                    if(mysqli_num_rows($query_run) > 0)        
                                                    {
                                                        while($row = mysqli_fetch_assoc($query_run))
                                                        {
                                                            $i=$row['post_id'];
                                                ?>
                                        <div class="recent-post__item">
                                            <div class="recent-post__thumb">
                                                <a href="single-post.php?itemno=<?php echo $row['post_id']; ?>">
                                                <img src="<?php echo 'assets/img/post/'.$row['post_img'];?>"
                                                                alt="Blog" class="secondary-image">
                                                </a>
                                            </div>
                                            <div class="recent-post__content">
                                                <h3 class="recent-post__title text-truncate">
                                                    <a href="single-post.php?itemno=<?php echo $row['post_id']; ?>"><?php echo $row['title']; ?></a>
                                                </h3>
                                                <span class="recent-post__meta"><?php echo $row['post_date']; ?></span>
                                            </div>
                                        </div>
                                       
                                       
                                                            <?php }}?>

                                    </div>
                                </div>
                                <div class="widget blog-widget widget-tag">
                                    <h3 class="widget-title">Tags</h3>
                                    <div class="tagcloud">
                                        <a href="blog.php">Education</a>
                                        <a href="blog.php">Knowledge</a>
                                        
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