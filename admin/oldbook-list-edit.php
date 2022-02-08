<?php
     include('security.php');
     include('includes/header.php'); 
    include('includes/navbar.php'); 
     include('includes/database/dbconfig.php');
?>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Book's Data </h6>
        </div>
        <div class="card-body">
        <?php

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM obook WHERE old_id='$id'";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="oldbook-list-code.php" method="POST" enctype="multipart/form-data">

                            <input type="hidden" name="edit_id" value="<?php echo $row['old_id'] ?>">

                            <div class="form-group">
                                <label>Book Name</label>
                                <input type="text" name="edit_bname" value="<?php echo $row['oldbook'] ?>" class="form-control"
                                    placeholder="Enter Book's name">
                            </div>
                          
                            <div class="form-group">
                                <label>Branch</label>
                                <input type="text" name="edit_branch" value="<?php echo $row['Branch'] ?>"
                                    class="form-control" placeholder="Enter Branch">
                            </div>
                            <div class="form-group">
                                <label>Semester</label>
                                <input type="text" name="edit_sem" value="<?php echo $row['Sem'] ?>"
                                    class="form-control" placeholder="Enter Semester">
                            </div>
                            <div class="form-group">
                                <label>Author</label>
                                <input type="text" name="edit_author" value="<?php echo $row['Author'] ?>"
                                    class="form-control" placeholder="Enter author">
                            </div>
                            <div class="form-group">
                                <label>Publisher</label>
                                <input type="text" name="edit_publisher" value="<?php echo $row['PublicationHouse'] ?>"
                                    class="form-control" placeholder="Enter Publisher">
                            </div>
                            
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="edit_price" value="<?php echo $row['Price'];?>"
                                    class="form-control" placeholder="Enter Price">
                            </div>
                            
                            <div class="form-group">
                                  <label>Current Image</label><br>
                                  <img src="<?php echo '../assets/img/nbook/'.$row['image'];  ?>" height="100px">
                            </div>
                            
                            <div class="form-group">
                                <label>Image</label>
                                 <input type="file" name="fileToUpload" class="form-control">
                            </div>

                            <a href="oldbook-list.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

                        </form>
                        <?php
                }
            }
        ?>
        </div>
    </div>
</div>

</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>