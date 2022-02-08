<?php
session_start();
error_reporting(1);
include('config.php');
if(!$_SESSION['username'])
{   
    echo '<script>
    alert("Please Login first");
    window.location.href="login-register.php";
    </script>';
}
if(isset($_POST['send']))
{
    $bname = $_POST['bname'];
    $branch = $_POST['branch'];
    $seller = $_SESSION['username'];
    $email = $_POST['email'];
    $sem = $_POST['sem'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $description=$_POST['description'];
    $price = $_POST['price'];
   
        
   

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
      move_uploaded_file($file_tmp,"assets/img/oldbook/".$file_name);
   
        
            echo "images uploaded:";
        }else{
            echo "Sorry only jpg,jpeg,png and gif allowed:";
        }
        
        
        
        }
        }

     $query = "INSERT INTO obook(oldbook,Branch,seller,email,Sem,AUTHOR,PublicationHouse,Price,image)
     VALUES ('$bname' ,'$branch','$seller','$email','$sem','$author','$publisher','$price','$file_name')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
               
                header('Location:oldbook.php');
            }
            else 
            {
              
                header('Location:oldbook.php');  
            }       

}

	
?>



<body>
<?php 
include('includes/header.php');
 include('includes/navbar.php');
include('includes/scripts.php');
?>

<br/>
<br/>

<div>
	
<br/><br/>
<br/>  
<br/>


<link rel="stylesheet" href="assets/css/submitbook.css">
 
<div class="w3ls-main mt-5">
    <div class="w3ls-form">
    <form action="#" method="post" name="f1" onSubmit="return vali()"  enctype="multipart/form-data">
    <ul class="fields1">
        <h2>SUMMIT OLD BOOKS</h2> 
        <li>	
            <label class="w3ls-opt">Book Name: </label>
            <div class="w3ls-name">	
                <input type="text" name="bname" id="bn" onchange="return phone()" required=" "/>
            </div>
    </div>
        </li>
        <li>
            <label class="w3ls-opt">Author:</label>
            <div class="w3ls-name">
            <input type="text" name="author" id="by" onchange="return phone()" required=" "/>
            </div>
        </li>
        <li>
            <label class="w3ls-opt">Seller Email:</label>
            <div class="w3ls-name">
            <input type="text" name="email" id="by" onchange="return phone()" required=" "/>
            </div>
        </li>
        <li>
            <label class="w3ls-opt">Publisher:</label>	
            <span class="w3ls-text w3ls-name">
            <input type="text" name="publisher" id="bb" onchange="return phone()" required=" "/>
        </li>
        <li>
            <label class="w3ls-opt">Price:</label>	
            <span class="w3ls-text w3ls-name">
            <input type="text" name="price" id="bs" onchange="return phone()" required=" "/>
            </span>
        </li>	
        <li>
            <label class="w3ls-opt">Branch</label>	
            <span class="w3ls-text w3ls-name">
            <input type="text" name="branch" id="ba" onchange="return phone()"  required=" "/>
            </span>
        </li>
        <li>
            <label class="w3ls-opt">Semester:</label>	
            <span class="w3ls-text w3ls-name">
            <input type="text" name="sem" id="bp" onchange="return phone()" required=" "/>
            </span>
        </li>	
        <li>
            <label class="w3ls-opt">Image:</label>	
            <span class="w3ls-text w3ls-name"><br>
            <input type="file" name="fileToUpload"  required=" "/>
            </span>
        </li>	
    </ul>
    <br>
    <div class="clear"></div>
        <div class="w3ls-btn">
        <button class="btn btn-primary" name="send" type="submit" id="send" value="Send">Submit Form</button>
        </div>
</form>

    </div>



<br/>
<br/>

<br/>
  

<?php include('includes/footer2.php');?>
</body>

</html>
