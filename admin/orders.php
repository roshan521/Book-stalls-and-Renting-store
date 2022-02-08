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

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Orders Profile 
            
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
                $query = "SELECT * FROM orders";
                $query_run = mysqli_query($connection, $query);
            ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Order No. </th>
            <th> Name </th>
            <th>Email </th>
            <th>Phone No</th>
            <th>Address</th>
            <th>Book Name</th>
            <th>Sem</th>
            <th>Price</th>
            <th>Date</th>
            <th>payment</th>
            <th>status</th>
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
                                <td><?php  echo $row['order_id']; ?></td>
                                <td><?php  echo $row['order_no']; ?></td>
                                <td><?php  echo $row['name']; ?></td>                              
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['phone']; ?></td>
                                <td><?php  echo $row['address']; ?></td>
                                <td><?php  echo $row['bookname']; ?></td>
                                <td><?php  echo $row['Sem']; ?></td>
                                <td><?php  echo$row['price']; ?></td>
                                <td><?php  echo$row['date']; ?></td>
                                <td><?php  echo $row['paymentMethod']; ?></td>
                                <td>
                                <?php if($row['status']=='processing'){?>

                            <a href="status.php?id=<?php  echo $row['order_id'];?>" class="btn btn-primary">Processing</a>
                            <?php  } elseif($row['status']=='transporting'){ ?>
                            <a href="status2.php?id=<?php  echo $row['order_id'];?>" class="btn btn-warning">Transporting</a>
                            <?php  } else{ ?>
                              <a href="status3.php?id=<?php  echo $row['order_id'];?>" class="btn btn-success">Completed</a>
                            <?php } ?>
                                </td>
                                <td>
                                    <form action="orders-code.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['order_id']; ?>">
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