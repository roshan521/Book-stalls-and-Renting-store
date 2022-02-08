
<?php 

error_reporting(1);
 session_start();
 include("config.php");
if(isset($_POST['request_save'])){
    $name=$_POST['contact_name'];
    $email=$_POST['contact_email'];
    $book_types=$_POST['types'];
    $book_name=$_POST['book_name'];
    $request_message=$_POST['book_request'];


$result=mysqli_query($connection,"insert into request(contact_name,contact_email,book_types,book_name,book_request) values('$name','$email','$book_types','$book_name','$request_message')");
if($result)
{
    echo '<script>
    alert("Your request has been sent.Thank you!!");
    window.location.href="index.php";
    </script>';
}
else
{
header("location:request.php");
}

}



?>






<?php include('includes/header.php');?>
    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Area Start -->
        <?php include('includes/navbar-full.php');?>
        <!-- Header Header area End -->

        <!-- Breadcrumb area Start -->
        <div class="breadcrumb-area bg--white-6 pt--30 pb--30 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Request for books</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.php">Home</a></li>
                            <li class="current"><span>Request</span></li>
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
                    <div class="row pt--30 pt-md--50 pt-sm--30 pb--80 pb-md--60 pb-sm--35">
                        <div class="col-md-7 mb-sm--30">
                            <h2 class="heading-secondary mb--20 mb-md--10 mb-sm--10">Your Request</h2>
                            <p>You can send your new book request with this form and you will be notified when the book requested is purchased.</p>

                            <!-- Contact form Start Here -->
                            <form class="form" action="" method="post">
                                <div class="form__group mb--20">
                                    <input type="text" id="contact_name" name="contact_name"
                                        class="form__input form__input--2" placeholder="Your name*">
                                </div>
                                <div class="form__group mb--20">
                                    <input type="email" id="contact_email" name="contact_email"
                                        class="form__input form__input--2" placeholder="Email Address*">
                                </div>
                                <div class="form__group mb--20">
                                    <select class="form__input form__input--2" name="types">
                                        <option data-display="newbook">NewBook</option>
                                        <option value="oldbook">OldBook</option>
                                    </select>
                                </div>
                                <div class="form__group mb--20">
                                    <input type="text" id="book_name" name="book_name"
                                        class="form__input form__input--2" placeholder="book name*">
                                </div>
                                <div class="form__group mb--20">
                                    <textarea class="form__input form__input--textarea" id="book_detail"
                                        name="book_request" placeholder="Books Details(Author,Edition and Publication House)*"></textarea>
                                </div>
                                <div class="form__group">
                                    <input type="submit" name="request_save" value="Submit" class="btn btn-submit btn-style-1">
                                </div>
                                <div class="form__output"></div>
                            </form>
                            <!-- Contact form end Here -->

                        </div>

                        <div class="col-md-5 col-xl-4 offset-xl-1">
                            <h2 class="heading-secondary mb--50 mb-md--35 mb-sm--20"></h2>

                            <!-- Contact info widget start here -->
                            <div class="contact-info-widget mb--45 mb-sm--35">
                                <div class="contact-info">
                                    <h2><b> Books Stall And Renting Store</b></h2>
                                    <p>bmcpustakalaya@gmail.com</p>
                                    <p>Butwal, Rupandehi Nepal</p>
                                </div>
                            </div>
                            <!-- Contact info widget end here -->

                            

                            <!-- Contact info widget start here -->
                                    <h5><b>Favorite Publication</b></h5>
                                <div class="row justify-content-center">   
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="popular-selling-items">
                                            <a href="kec.php"><img src="assets/img/others/kec.jpg" height="100px" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="popular-selling-items">
                                            <a href="pearson.php"><img src="assets/img/others/pearson.png" height="100px" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="popular-selling-items">
                                            <a href="osborne.php"><img src="assets/img/others/osbo.png" height="100px" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="popular-selling-items">
                                            <a href="#"><img src="assets/img/others/mcg.png" height="100px" alt=""></a>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            <!-- Contact info widget end here -->
                            <!-- Social Icons Start Here -->
                            <ul class="social body-color mt-5">
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
                                    <a href="https://facebook.com/" class="social__link">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="https://youtube.com/" class="social__link">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="https://instagram.com/" class="social__link">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- Social Icons End Here -->
                        </div>



                    </div>
                </div>
                <!-- <div class="container-fluid p-0">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div id="google-map">

                            </div>
                        </div>
                    </div>
                </div> -->
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