<?php
 session_start();
 if(!$_SESSION['username'])
{
    header('Location:login.php');
}
include('includes/header.php'); 
include('includes/navbar.php'); 
include('includes/database/dbconfig.php');

?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add OldBook Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="oldbook-list-code.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">
            <div class="form-group">
                <label>Book Name</label>
                <input type="text" name="bname" class="form-control" placeholder="Enter Name">
            </div>
            
            <div class="form-group">
                <label>Branch</label>
                <input type="text" name="branch" class="form-control" placeholder="Enter Branch">
            </div>
            <div class="form-group">
                <label>Seller</label>
                <input type="text" name="seller" class="form-control" placeholder="Enter Seller Name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Enter Email">
            </div>
            
            <div class="form-group">
                <label>Semester</label>
                <input type="text" name="sem" class="form-control" placeholder="Enter semester">
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" name="author" class="form-control" placeholder="Enter Author Name">
            </div>
              
            <div class="form-group">
                <label>Publisher</label>
                <input type="text" name="publisher" class="form-control" placeholder="Enter Publisher">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" placeholder="Enter Description">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" name="price" class="form-control" placeholder="Enter Price">
            </div>
            <div class="form-group">
                <label>Images</label>
                <input type="file" name="fileToUpload" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="oldbook_save" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Old Book Data  
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add 
            </button>
    </h6>
  </div>

  <div class="card-body">
<?php
if(isset($_SESSION['success']) && $_SESSION['success'] !='')
{
  echo'<h2>'.$_SESSION['success'].'</h2>';
  unset($_SESSION['success']);

}

if(isset($_SESSION['status']) && $_SESSION['status'] !='')
{
  echo'<h2 class="bg-info">'.$_SESSION['status'].'</h2>';
  unset($_SESSION['status']);

}

?>
    <div class="table-responsive">
    <?php
                $query = "SELECT * FROM obook";
                $query_run = mysqli_query($connection, $query);
            ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
          <th> ID </th>
            <th>Book Name</th>
            <th>Seller</th>
            <th>Branch</th>
            <th>Semester</th>
            <th>Author</th>
            <th>Publisher</th>
          
            <th>Price</th>
            <th>Images</th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
     
                    <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <td><?php  echo $row['old_id']; ?></td>
                                <td><?php  echo $row['oldbook']; ?></td>
                                <td><?php  echo $row['seller']; ?></td>
                                <td><?php  echo $row['Branch']; ?></td>
                                <td><?php  echo $row['Sem']; ?></td>
                                <td><?php  echo $row['Author']; ?></td>
                                <td><?php  echo $row['PublicationHouse']; ?></td>
                              
                                <td><?php  echo $row['Price']; ?></td>
                                
                                <td><img src="<?php echo '../assets/img/oldbook/'.$row['image']; ?>" height="100px"></td>
                                <td>
                                    <form action="oldbook-list-edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['old_id']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="oldbook-list-code.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['old_id']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
        
        </tbody>
      </table>

    </div>
  </div>
</div>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>