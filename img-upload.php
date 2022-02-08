<?php
session_start();

include("config.php");

if(isset($_POST['send']) && isset($_FILES['fileToUpload']))
{
    $id=$_SESSION['username'];
    $sql="select * from users where name='$id'";
    $query_run = mysqli_query($connection, $sql);
    while($row = mysqli_fetch_assoc($query_run))
        {  
            $uid=$row['user_id'];
           
         
        } 


            //images added
    if(isset($_FILES['fileToUpload']))
    {
    
    $file_name=$_FILES['fileToUpload']['name']; 
    $file_type=$_FILES['fileToUpload']['type'];
    $file_tmp=$_FILES['fileToUpload']['tmp_name'];
    $file_size=$_FILES['fileToUpload']['size'];
    
    
    if(!empty($file_name))
    {
    
    $file_actual = strtolower(pathinfo($file_name,PATHINFO_EXTENSION)); 
    
    
    // valid image extensions
    $valid_extensions = array('jpeg','jpg','gif','png'); 
    
    
    if(in_array($file_actual, $valid_extensions))
    {
  move_uploaded_file($file_tmp,"assets/img/logo/".$file_name);

    
        echo "images uploaded:";
    }else{
        echo "Sorry only jpg,jpeg,png and gif allowed:";
    }
    
    
    
    }
        }
        $query2="select * from img_upload where uname='$id'";
        $query_run2 = mysqli_query($connection, $query2);
    while($row2 = mysqli_fetch_assoc($query_run2))
        {  
            $idd=$row2;
            
           
         
        } 
        if($idd<1){

     $query3 = "INSERT into img_upload(user_id,uname,image) values('$uid','$id','$file_name')";
            $query_run3 = mysqli_query($connection, $query3);
            
            if($query_run3)
            {
                // echo "Saved";
                
                  header('Location:my-account.php');
            }
            else 
            {
              
                  header('Location:my-account.php');  
            }
        }else{
            $query = "UPDATE  img_upload SET user_id='$uid',uname='$id',image='$file_name' where uname='$id'";
            $query_run = mysqli_query($connection, $query);
            
            header('Location:my-account.php'); 

        }       
}
?>