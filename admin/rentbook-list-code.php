<?php
include('security.php');

if(isset($_POST['rentbook_save']))
{
    $rname = $_POST['rname'];
    $branch = $_POST['branch'];
    $sem = $_POST['sem'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $description=$_POST['description'];
    $rprice = $_POST['rprice'];
        
   

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
      move_uploaded_file($file_tmp,"../assets/img/nbook/".$file_name);
   
        
            echo "images uploaded:";
        }else{
            echo "Sorry only jpg,jpeg,png and gif allowed:";
        }
        
        
        
        }
        }

     $query = "INSERT INTO rbook(rentbook,Branch,Sem,Author,PublicationHouse,description,Rent_price,image) VALUES ('$rname','$branch','$sem','$author','$publisher','$description','$rprice','$file_name')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Book's data  Added";
                $_SESSION['status_code'] = "success";
                header('Location: rentbook-list.php');
            }
            else 
            {
                $_SESSION['status'] = "Book's data  Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: rentbook-list.php');  
            }       

}





//code to update the button

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $edit_rname = $_POST['edit_rname'];
    $edit_branch = $_POST['edit_branch'];
    $edit_sem = $_POST['edit_sem'];
    $edit_author = $_POST['edit_author'];
    $edit_publisher = $_POST['edit_publisher'];
    $edit_description=$_POST['edit_description'];
    $edit_rprice = $_POST['edit_rprice'];
        
    
    $query = "SELECT * FROM rbook";
    $query_run = mysqli_query($connection, $query);
    if(mysqli_num_rows($query_run) > 0)        
        {
             while($row = mysqli_fetch_assoc($query_run))
         {
             $current_image=$row['image'];
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
        move_uploaded_file($file_tmp,"../assets/img/nbook/".$file_name);



            echo "images uploaded:";
        }else
        {
            echo "Sorry only jpg,jpeg and gif allowed:";
        }

    }else{
        
         $file_name=$current_image;
    }
   
}

    $query1 = "UPDATE rbook
     SET  rentbook='$edit_rname',Branch='$edit_branch',Sem='$edit_sem',Author='$edit_author',PublicationHouse='$edit_publisher',description='$edit_description',rent_price='$edit_rprice',image='$file_name' WHERE  rent_id='$id'";
    $query_run1 = mysqli_query($connection, $query1);

    if($query_run1)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: rentbook-list.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: rentbook-list.php'); 
    }
}



//code to delete the admin 
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    
    $sql1="select * from r  book where rent_id='$id'";
    $result=mysqli_query($connection,$sql1) or die("Query failed");
    $row=mysqli_fetch_assoc($result);
    unlink("../assets/img/nbook/".$row['image']);
   
    $query = "DELETE FROM nbook WHERE  rent_id='$id' ";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: rentbook-list.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: rentbook-list.php'); 
    }    
}
  
?>
