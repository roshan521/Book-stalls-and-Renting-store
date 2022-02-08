<?php
include('config.php');
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM orders WHERE order_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        header('Location:my-account.php'); 
    }
}

if(isset($_POST['delete_rbtn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM booksonrent WHERE rent_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        header('Location:my-account.php'); 
    }
}
if(isset($_POST['delete_cart_btn']))
{
    $id = $_POST['delete_id'];
   
    $query = "DELETE FROM mycart WHERE cartid='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        header('Location:cart.php'); 
    }

    
}




  ?>