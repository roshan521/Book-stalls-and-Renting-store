<?php
include('security.php');


if(isset($_POST['blogbtn']))
{
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $author=$_SESSION['username'];
    $date=date("d M,Y");
   
   
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
      move_uploaded_file($file_tmp,"../assets/img/post/".$file_name);
   
        
            echo "images uploaded:";
        }else{
            echo "Sorry only jpg,jpeg,png and gif allowed:";
        }
        
        
        
        }
        }
      
     $query = "INSERT INTO post(title,description,category,post_date,author,post_img) VALUES ('$title','$description','$category','$date','$author','$file_name')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Posts Added";
                $_SESSION['status_code'] = "success";
                header('Location:blog.php');
            }
            else 
            {
                $_SESSION['status'] = "post Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: blog.php');  
            }       

}





//code to update the button

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $edit_title = $_POST['edit_title'];
    $edit_description = $_POST['edit_description'];
    
        
    
    $query = "SELECT * FROM post";
    $query_run = mysqli_query($connection, $query);
    if(mysqli_num_rows($query_run) > 0)        
        {
             while($row = mysqli_fetch_assoc($query_run))
         {
             $current_image=$row['post_img'];
         }}

    //Image Uploading
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
        move_uploaded_file($file_tmp,"../assets/img/post/".$file_name);



            echo "images uploaded:";
        }else
        {
            echo "Sorry only jpg,jpeg and gif allowed:";
        }

    }else{
        
        $file_name=$current_image;
    }
}

    $query1 = "UPDATE post
     SET  title='$edit_title',description='$edit_description',post_img='$file_name' WHERE  post_id='$id'";
    $query_run1 = mysqli_query($connection, $query1);

    if($query_run1)
    {
        $_SESSION['status'] = "Your Post is Updated";
        $_SESSION['status_code'] = "success";
        header('Location:blog.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Post is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location:blog.php'); 
    }
}



//code to delete the admin 
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    
    $sql1="select * from post where post_id='$id'";
    $result=mysqli_query($connection,$sql1) or die("Query failed");
    $row=mysqli_fetch_assoc($result);
    unlink("../assets/img/post/".$row['post_img']);
   
    $query = "DELETE FROM post WHERE  post_id='$id' ";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
        $_SESSION['status'] = "Your Post is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location:blog.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Post is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: blog.php'); 
    }    
}
  
?>
