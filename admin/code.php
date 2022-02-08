<?php
include('security.php');

if(isset($_POST['registerbtn']))
{
$username = mysqli_real_escape_string($connection, $_POST['uname']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $phone = mysqli_real_escape_string($connection, $_POST['phone']);
  $address = mysqli_real_escape_string($connection, $_POST['address']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);
  $usertype = mysqli_real_escape_string($connection, $_POST['usertype']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($phone)) { array_push($errors, "Phone NO is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  $sql = "SELECT * FROM users WHERE name='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($connection, $sql);
  $user = mysqli_fetch_assoc($result);
  if ($user) { 
    if ($user['name'] === $username){
        $_SESSION['status'] = "User Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');  
    }
    else
    {
        $query = "INSERT INTO users(name,email,phone,address,password,usertype) 
  			  VALUES('$username','$email','$phone','$address','$password','$usertype')";
  	        $result=mysqli_query($connection, $query);

            if($result)
            {
                // echo "Saved";
                $_SESSION['status'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: register.php');  
            }
        }
       
  }

}





//code to update the button

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $phone = $_POST['edit_phone'];
    $address = $_POST['edit_address'];
    $usertypeupdate=$_POST['update_usertype'];
    $query = "UPDATE users SET name='$username', email='$email', phone='$phone', address='$address',usertype='$usertypeupdate' WHERE user_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }
}



//code to delete the admin 
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM users WHERE user_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }    
}


//code to login into system
if(isset($_POST['login_btn']))
{
    $username = $_POST['uname']; 
    $password = $_POST['password']; 

    $query = "SELECT * FROM users WHERE name='$username' AND password='$password' LIMIT 1";
    $query_run = mysqli_query($connection, $query);
    $usertypes=mysqli_fetch_array($query_run);
   if($usertypes['usertype'] == "ADMIN")
   {
        $_SESSION['username'] = $username;
   
         header('Location: index.php');
   } 
   else if($usertypes['usertype'] == "USER")
   {
    $_SESSION['username'] = $username;
   
    header('Location: ../index.php');
   }else
   {
        $_SESSION['status'] = "Username / Password is Invalid";
        header('Location: login.php');

    }

}
    
?>
