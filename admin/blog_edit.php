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
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Post </h6>
        </div>
        <div class="card-body">
        <?php

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM post WHERE post_id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="blog_code.php" method="POST" enctype="multipart/form-data">

                            <input type="hidden" name="edit_id" value="<?php echo $row['post_id'] ?>">

                            <div class="form-group">
                                <label> Title </label>
                                <input type="text" name="edit_title" value="<?php echo $row['title'] ?>" class="form-control"
                                    placeholder="Enter Title">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="edit_description" value="<?php echo $row['description'] ?>" class="form-control"
                                    placeholder="Enter Description">
                            </div>
                            <div class="form-group">
                                  <label>Current Image</label><br>
                                  <img src="<?php echo '../assets/img/post/'.$row['post_img'];  ?>" height="100px">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                 <input type="file" name="fileToUpload" class="form-control">
                            </div>


                            <a href="blog.php" class="btn btn-danger"> CANCEL </a>
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