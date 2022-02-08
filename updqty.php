<?php
session_start();
include("config.php");

$cartid=$_POST['cart_id'];
$qty=$_POST['qty'];

$upd="UPDATE mycart SET qty='$qty' WHERE cartid='$cartid'";
$connection->query($upd);



?>
<div class="table-content table-responsive">
    <table class="table"  id="crt_table">
        <thead>
            <tr>
                
                <th class="product-thumbnail">Images</th>
                <th class="cart-product-name">BookName</th>
                <th class="product-author">Author</th>  
                <th class="product-semester">Semester</th> 
                <th class="product-price">Price</th>
                <th class="product-qty">Quantity</th>
                <th class="product-price">Total Price</th>
                <th class="product_buy">Buy Now</th>
                <th class="product_remove">Remove</th>
            </tr>
        </thead>
        <tbody>
                
                <?php
                
                include('config.php');
                $id=$_SESSION['username'];
                $query = "SELECT nbook.image,nbook.newbook,nbook.Author,nbook.Sem,nbook.Price,mycart.cartid,mycart.qty,mycart.price FROM nbook 
                left join mycart on nbook.new_id =mycart.new_id
                where username='$id'";
                $query_run = mysqli_query($connection, $query);
                if(mysqli_num_rows($query_run) > 0)        
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                            $car=$row['cartid'];
                        
                        
                ?>
            <tr>
                
                <td class="product-thumbnail">
                    <a href="#">
                        <img src="<?php echo 'assets/img/nbook/'.$row['image'];?>" width="50px" height="50px" alt="Cart Thumbnail">
                    </a>
                </td>
                <td class="product-name"><a href="#"><?php echo $row['newbook'];?></a></td>
                <td class="product-author"><span class="amount"><?php echo $row['Author'];?></span></td>
                <td class="product-price"><?php echo $row['Sem'];?></td>
                <td class="product-price"><?php echo $row['Price'];?></td>
                <td class="product-qty">
                    <div class="input-group-control">
                        <form id="frm<?php echo $row['cartid']; ?>">
                            <input type="hidden" name="cart_id" value="<?php echo $row['cartid'];;?>">
                            <input type="number" class="quantity-input" name="qty" value="<?php echo $row['qty']; ?>" onchange="updcart(<?php echo $row['cartid'];;  ?>)" onkeyup="updcart(<?php echo $row['cartid'];;  ?>)" style="width: 100px;" max="5" min="1">
                        
                        </form>
                    </div>
                </td>
                <td class="item-total"><?php echo $row['qty']*$row['price']; ?></td>
                                    <!-- <td class="product_remove">
                    <a href="#">
                        <i class="pe-7s-trash" data-tippy="Remove" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder"></i>
                    </a>
                </td> -->
                <td> <button class="btn btn-success text-white"><a href="checkout.php?itemno=<?php echo $row['cartid']; ?>">Buy Now</a></button> </td>

                <td>
                    <form action="myorders-code.php" method="post">
                        <input type="hidden" name="delete_id" value="<?php echo $row['cartid'];?>">
                        <button type="submit" name="delete_cart_btn" onclick="return confirm('Are you sure?')" class="btn btn-danger"> DELETE</button>
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