<?php 
error_reporting(1);
session_start();
include('includes/header.php');
?>

    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Area Start -->
        <?php include('includes/navbar-full.php');?>
        <!-- Header Header area End -->

        <!-- Breadcrumb area Start -->
        <div class="breadcrumb-area bg--white-6 breadcrumb-bg-1 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Login &amp; Register</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>Login Register</span></li>
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
                    <div class="row pt--75 pt-md--55 pt-sm--35 pb--80 pb-md--60 pb-sm--40">
                        <div class="col-md-6 mb-sm--30">
                             <?php
                                include('config.php');
                            // LOGIN USER

                            if (isset($_POST['lsubmit']))
                            {
                                $username = mysqli_real_escape_string($connection,$_POST['uname']);
                                $email = mysqli_real_escape_string($connection,$_POST['email']);
                                $password = mysqli_real_escape_string($connection,$_POST['password']);
                                $Failed="Login Error- Please Try Again!!!";
                                $nameErr=$emailErr=$phoneErr=$addressErr=$passwordErr="";
                                
                                    $query = "SELECT * FROM users WHERE name='$username' AND password='$password'";
                                    $results = mysqli_query($connection, $query);
                                    if (mysqli_num_rows($results) == 1) 
                                    {
                                        session_start();
                                        $_SESSION['username']=$username;
                                        echo "<script>alert('You have been logged in!!!')</script>";  
                                        echo "<script>window.location.href='index.php';</script>";   
                                    }
                                    else 
                                    {
                                        // array_push($errors, "Wrong username/password combination");
                                        echo "<h4 style='color:red;'>".$Failed."</h4>";
                                        header('location:login-register.php');
                                    }
                                }
                                ?>

                            <div class="login-box">
                                <h4 class="mb--35 mb-sm--20">Login</h4>
                                <form class="form form--login" action="" method="post">
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="username_email">Username
                                             <span class="required">*</span></label>
                                        <input type="text" class="form__input form__input--3" id="uname"
                                            name="uname">
                                    </div>
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="password">Password <span
                                                class="required">*</span></label>
                                        <input type="password" class="form__input form__input--3" id="password"
                                            name="password">
                                    </div>
                                    <div class="d-flex align-items-center mb--20">
                                        <div class="form__group">
                                            <input type="submit" value="Log in" name="lsubmit" class="btn btn-submit btn-style-1">
                                        </div>
                                        
                                    </div>
                                    <a class="forgot-pass" href="#">Lost your password?</a>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="register-box">
                        

                                <?php

                                // initializing variables
                                $errors = array(); 
                                // REGISTER USER
                            if (isset($_POST['rsubmit'])) {
                                // receive all input values from the form
                                $username = mysqli_real_escape_string($connection, $_POST['uname']);
                                $email = mysqli_real_escape_string($connection, $_POST['email']);
                                $phone = mysqli_real_escape_string($connection, $_POST['phone']);
                                $address = mysqli_real_escape_string($connection, $_POST['address']);
                                $password = mysqli_real_escape_string($connection, $_POST['password']);
                                $usertype = mysqli_real_escape_string($connection, $_POST['usertype']);
                                $service = mysqli_real_escape_string($connection, $_POST['service']);
                                $nameErr=$emailErr=$phoneErr=$addressErr=$passwordErr="";
                                $success="You have been Registered";
                                // form validation: ensure that the form is correctly filled ...
                                // by adding (array_push()) corresponding error unto $errors array
                                // first check the database to make sure 
                                // a user does not already exist with the same username and/or email
                                $sql = "SELECT * FROM users WHERE name='$username' OR email='$email' LIMIT 1";
                                $result = mysqli_query($connection, $sql);
                                $user = mysqli_fetch_assoc($result);

                                // if(!preg_match('/^[a-zA-Z0-9]{5,}$/',$_POST['uname'])) { 
                                //     $nameErr="username must be start with  empty";
                                // }
                                    if($username==""){
                                            $nameErr="username cant be empty";
                                    }
                                   
                                    
                                   if ($user) { // if user exists
                                        if ($user['name'] === $username) {
                                            $nameErr= "Username already exists";
                                        }

                                        if ($user['email'] === $email) {
                                            $emailErr= "Email already exists";
                                        }
                                    }
                                     if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
                                        $nameErr = "Only letters and white space allowed";
                                      }
                                     if($email==""){
                                        $emailErr= "Email cant be empty";
                                    }
                                //     else if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                //         $emailErr= "Email must be in valid format";
                                //    }
                                     if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email)){
                                             $emailErr= "Email must be in valid format";
                                     }
                                     if(!preg_match("/^[0-9]{10}$/", $phone)){
                                        $phoneErr= "Phone number should be in digits and must be  10 digits";
                                    }
                                     if($phone==""){
                                        $phoneErr= "Phone cant be empty";
                                    }
                                     if($address==""){
                                        $addressErr= "Address cant be empty";
                                    }
                                     if($password==""){
                                        $passwordErr= "Password cant be empty";
                                    }
                                     if(strlen($password)<6){
                                        $passwordErr= "Password must be greater  than 6 digits";
                                    }


                                // Finally, register user if there are no errors in the form
                                else {
                                $password = $password;//encrypt the password before saving in the database

                                $query = "INSERT INTO users (name, email,phone,address,password,usertype,service) 
                                            VALUES('$username', '$email','$phone','$address','$password','$usertype','$service')";
                                $result=mysqli_query($connection, $query);

                                    if($result){
                                    header('location:login-register.php');
                                            echo "<h4 style='color:green;'>".$success."</h4>";
                                    }
                                }

                             }
                                ?>
                                 
                                <h4 class="mb--35 mb-sm--20">Register</h4>
                               
                                <form class="form form--login"  action="" method="post" name="myform" onsubmit="return validateform()">
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="username">UserName  <span
                                                class="required">*</span></label>
                                        <input type="hidden" class="form__input form__input--3" id="service" name="service" value="REG">
                                        <input type="hidden" class="form__input form__input--3" id="usertype" name="usertype" value="USER">
                                        <input type="text" class="form__input form__input--3" id="uname" name="uname">
                                            <span class="text-danger"><?php echo $nameErr;?></span>
                                    </div>
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="email">Email address <span
                                                class="required">*</span></label>
                                        <input type="email" class="form__input form__input--3" id="email" name="email">
                                        <span class="text-danger"><?php echo $emailErr;?></span>
                                    </div>
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="email">Phone No <span
                                                class="required">*</span></label>
                                        <input type="text" class="form__input form__input--3" id="phone" name="phone">
                                        <span class="text-danger"><?php echo $phoneErr;?></span>
                                    </div>
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="email">Address <span
                                                class="required">*</span></label>
                                        <input type="text" class="form__input form__input--3" id="address" name="address">
                                        <span class="text-danger"><?php echo $addressErr;?></span>
                                    </div>
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="password">Password <span
                                                class="required">*</span></label>
                                        <input type="password" class="form__input form__input--3" id="password"
                                            name="password">
                                            <span class="text-danger"><?php echo $passwordErr;?></span>
                                        </div>
                                    
                                   
                                    <div class="form__group">
                                        <input type="submit" value="Register" name="rsubmit" class="btn btn-submit btn-style-1">
                                    </div>
                                </form>
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
    <script>  
        function validateform(){  
        var uname=document.myform.uname.value; 
        var email=document.myform.email.value; 
        var address=document.myform.address.value; 
        var atposition=x.indexOf("@");  
        var dotposition=x.lastIndexOf(".");  
       
        var phone=document.myform.phone.value; 
        var password=document.myform.password.value;  
     
        
        if (uname==null || uname=="")
        {  
        alert("Name can't be blank");  
        return false;  
        }
        else if (email==null || email=="")
        {  
        alert("Emaill can't be blank");  
        return false;  
        }
        else if (address==null || address=="")
        {  
        alert("Address can't be blank");  
        return false;  
        }
        else if (phone==null || phone=="")
        {  
        alert("Phone can't be blank");  
        return false;  
        }
        else if (isNaN(phone))
        {  
        alert("Phone must be in numeric value");  
        return false;  
        }
        else if (password==null || password=="")
        {  
        alert("Password can't be blank");  
        return false;  
        }
        else if(password.length<6){  
        alert("Password must be at least 6 characters long.");  
        return false;  
        }  
        else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length)
        {  
        alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition");  
        return false;  
        }
        
        
        }  
    </script>  
    
    <?php include('includes/scripts.php');?>


</body>



</html>