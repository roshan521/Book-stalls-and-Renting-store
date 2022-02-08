<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>tracking</title>
    <style>
    body {
    letter-spacing: 0.8px;
    background: linear-gradient(0deg, #fff, 50%, #74a0ff);
    background-repeat: no-repeat
}

.container-fluid {
    margin-top: 80px !important;
    margin-bottom: 80px !important
}

p {
    font-size: 14px;
    margin-bottom: 7px
}

.cursor-pointer {
    cursor: pointer
}

a {
    text-decoration: none !important;
    color: #651FFF !important
}

.bold {
    font-weight: 600
}

.small {
    font-size: 12px !important;
    letter-spacing: 0.5px !important
}

.Today {
    color: rgb(83, 83, 83)
}

.btn-outline-primary {
    background-color: #fff !important;
    color: #4bb8a9 !important;
    border: 1.3px solid #4bb8a9;
    font-size: 12px;
    border-radius: 0.4em !important
}

.btn-outline-primary:hover {
    background-color: #4bb8a9 !important;
    color: #fff !important;
    border: 1.3px solid #4bb8a9
}

.btn-outline-primary:focus,
.btn-outline-primary:active {
    outline: none !important;
    box-shadow: none !important;
    border-color: #42A5F5 !important
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: #455A64;
    padding-left: 0px;
    margin-top: 30px
}

#progressbar li {
    list-style-type: none;
    font-size: 13px;
    width: 33.33%;
    float: left;
    position: relative;
    font-weight: 400;
    color: #455A64 !important
}

#progressbar #step1:before {
    content: "1";
    color: #fff;
    width: 29px;
    margin-left: 15px !important;
    padding-left: 11px !important
}

#progressbar #step2:before {
    content: "2";
    color: #fff;
    width: 29px
}

#progressbar #step3:before {
    content: "3";
    color: #fff;
    width: 29px;
    margin-right: 15px !important;
    padding-right: 11px !important
}

#progressbar li:before {
    line-height: 29px;
    display: block;
    font-size: 12px;
    background: #455A64;
    border-radius: 50%;
    margin: auto
}

#progressbar li:after {
    content: '';
    width: 121%;
    height: 2px;
    background: #455A64;
    position: absolute;
    left: 0%;
    right: 0%;
    top: 15px;
    z-index: -1
}

#progressbar li:nth-child(2):after {
    left: 50%
}

#progressbar li:nth-child(1):after {
    left: 25%;
    width: 121%
}

#progressbar li:nth-child(3):after {
    left: 25% !important;
    width: 50% !important
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #4bb8a9
}

.card {
    background-color: #fff;
    box-shadow: 2px 4px 15px 0px rgb(0, 108, 170);
    z-index: 0
}

small {
    font-size: 12px !important
}

.a {
    justify-content: space-between !important
}

.border-line {
    border-right: 1px solid rgb(226, 206, 226)
}

.card-footer img {
    opacity: 0.3
}

.card-footer h5 {
    font-size: 1.1em;
    color: #8C9EFF;
    cursor: pointer;
}
button a{
    text-decoration:none;
    color:white;
}

    </style>
  </head>
  <body>
  <?php 

  session_start();
  $id=$_SESSION['username'];
  include("config.php");
  $itemno=$_REQUEST['itemno'];
  
  ?>
  <div class="container-fluid my-5 d-sm-flex justify-content-center">
    <div class="card px-2">
        <div class="card-header bg-white">
            <div class="row justify-content-between">
            <?php   
            $sql="select * from orders where order_no={$itemno}";
            $query_run = mysqli_query($connection, $sql);                  
            while($row = mysqli_fetch_assoc($query_run))
                         { 
                ?>
                <div class="col">
                    <p class="text-muted"> Order No. <span class="font-weight-bold text-dark"><?php echo $row['order_no'];?></span></p>
                    <p class="text-muted"> Place On <span class="font-weight-bold text-dark"><?php echo $row['date'];?></span> </p>
                </div>
                <div class="flex-col my-auto">
                    <h6 class="ml-auto mr-3"> <a href="my-account.php">View Details</a> </h6>
                </div>
                <?php }?>
            </div>
        </div>
        <div class="card-body">
            <div class="media flex-column flex-sm-row">
                    <?php   
                    $sql="select * from orders where order_no={$itemno}";
                    $query_run = mysqli_query($connection, $sql);                  
                    while($row = mysqli_fetch_assoc($query_run))
                                { 
                        ?>
                <div class="media-body ">
                    <h5 class="bold"><?php echo $row['bookname'];?></h5>
                    <h5 class="text-dark"> Quantity:<?php echo $row['qty'];?></h5>
                    <h4 class="mt-3 mb-4 bold"> <span class="mt-5">&#x20B9;</span> <?php echo $row['price']*$row['qty'];?> <span class="small text-dark"> via(<?php echo $row['paymentMethod'];?>) </span></h4>
                    <p class="text-muted">Tracking Status on: <span class="Today">
                    <?php
                   $date = new DateTime("now", new DateTimeZone('Asia/Kathmandu') );
                   echo $date->format('Y-m-d H:i:s');
                    ?>
                    
                    </span></p><a href="contact-us.php"> <button type="button" class="btn btn-outline-primary text-white d-flex">Contact US</button></a>
                </div><img class="align-self-center img-fluid" src="assets/img/logo/bmc3.png" width="180 " height="180">
                                    <?php }?>
            </div>
        </div>
        <div class="row px-3">
                <?php   
                    $sql="select * from orders where order_no={$itemno}";
                    $query_run = mysqli_query($connection, $sql);                  
                    while($row = mysqli_fetch_assoc($query_run))
                                { 
                        ?>
            <div class="col">
            <p>YOUR ORDER STATUS:</p>
                <ul id="progressbar">
                <?php
                if($row["status"]=='processing'){
                
                    echo' <li class="step0 active" id="step1">Processing</li>';
                }else if($row["status"]=='transporting'){
                    
                   echo'<li class="step0 active text-center" id="step2">transporting</li>';
                 } else{
                    echo'<li class="step0 text-muted text-right" id="step3">DELIVERED</li>';
                   }
                ?>
                </ul>
            </div>
            <?php }?>
        </div>
        <div class="card-footer bg-white px-sm-3 pt-sm-4 px-0">
            <div class="row text-center ">
           <a href="index.php"><button type="button" class="btn btn-primary">RETURN TO HOME PAGE</button></a>
               
                
            </div>
        </div>
    </div>
</div>                            

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>