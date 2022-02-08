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
                
                $query = "SELECT * FROM rbook WHERE rent_id='$id'";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="rentbook-list-code.php" method="POST" enctype="multipart/form-data">

                            <input type="hidden" name="edit_id" value="<?php echo $row['rent_id'] ?>">

                            <div class="form-group">
                                <label>Book Name</label>
                                <input type="text" name="edit_rname" value="<?php echo $row['rentbook'] ?>" class="form-control"
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
                                <label>Description</label>
                                <input type="text" name="edit_description" value="<?php echo $row['description'] ?>"
                                    class="form-control" placeholder="Enter Description">
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="edit_rprice" value="<?php echo $row['Rent_price'];?>"
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

                            <a href="rentbook-list.php" class="btn btn-danger"> CANCEL </a>
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