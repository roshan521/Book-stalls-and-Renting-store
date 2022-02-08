<?php
session_start();
if(!isset($_SESSION['username']))
{
  header("location:../index.php");
}
include("includes/database/dbconfig.php");

$id=$_GET['id'];

$upd="UPDATE orders SET status='completed' WHERE order_id='$id'";
$connection->query($upd);

 header("location:orders.php");

?>