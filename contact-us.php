
<?php 

error_reporting(1);
 session_start();
 include("config.php");
if(isset($_POST['contact_save'])){
    $name=$_POST['contact_name'];
    $email=$_POST['contact_email'];
    $phone=$_POST['contact_phone'];
    $message=$_POST['contact_message'];


$result=mysqli_query($connection,"insert into contact(contact_name,contact_email,contact_phone,contact_message) values('$name','$email','$phone','$message')");
if($result)
{
    echo '<script>
    alert("Your message has been sent");
    window.location.href="index.php";
    </script>';
}
else
{
header("location:contact.php");
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
                        <h1 class="page-title">Contact Us</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>Contact Us</span></li>
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
                    <div class="row pt--30 pt-md--50 pt-sm--30 pb--30 pb-md--30 pb-sm--35">
                        <div class="col-md-7 mb-sm--30">
                            <h2 class="heading-secondary mb--50 mb-md--35 mb-sm--20">Get in touch</h2>

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
                                    <input type="text" id="contact_phone" name="contact_phone"
                                        class="form__input form__input--2" placeholder="Your Phone*">
                                </div>
                                <div class="form__group mb--20">
                                    <textarea class="form__input form__input--textarea" id="contact_message"
                                        name="contact_message" placeholder="Message*"></textarea>
                                </div>
                                <div class="form__group">
                                    <input type="submit" name="contact_save" value="Send" class="btn btn-submit btn-style-1">
                                </div>
                                <div class="form__output"></div>
                            </form>
                            <!-- Contact form end Here -->

                        </div>
                        <div class="col-md-5 col-xl-4 offset-xl-1">
                            <h2 class="heading-secondary mb--50 mb-md--35 mb-sm--20">Contact info</h2>

                            <!-- Contact info widget start here -->
                            <div class="contact-info-widget mb--45 mb-sm--35">
                                <div class="contact-info">
                                    <h3> Books Stall And Renting Store</h3>
                                    <p>Postal Address <br> PO Box 16122 Butwal Rupandehi <br>  Nepal
                                </div>
                            </div>
                            <!-- Contact info widget end here -->

                            

                            <!-- Contact info widget start here -->
                            <div class="contact-info-widget two-column-list sm-one-column mb--45 mb-sm--35">
                                <div class="contact-info mb-sm--35">
                                    <h3>Business Phone</h3>
                                    <a href="#">+61 3 8376 6284</a>
                                </div>
                                <div class="contact-info">
                                    <h3>Say Hello</h3>
                                    <a href="mailto:demo@example.com">bmcpustakalya@example.com</a>
                                </div>
                            </div>
                            <!-- Contact info widget end here -->
                            <!-- Social Icons Start Here -->
                            <ul class="social body-color">
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