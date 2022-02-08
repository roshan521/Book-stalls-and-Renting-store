
<?php
session_start();
include('config.php');
//code to update the button

if(isset($_POST['updatebtn']))
{
   
    $username = $_SESSION['username'];
    $email = $_POST['edit_email'];
    $phone = $_POST['edit_phone'];
    $address = $_POST['edit_address'];
    $query = "UPDATE users SET email='$email', phone='$phone', address='$address' WHERE name='$username'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        
       header('Location: my-account.php'); 
    }
    else
    {
        
         header('Location: my-account.php'); 
    }
}
?>