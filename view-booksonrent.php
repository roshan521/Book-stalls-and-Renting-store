<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="assets/css/view-order.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
                <?php
                        include('config.php');
                        session_start();
                        $ii=$_GET['itemno'];
                        $id=$_SESSION['username'];
                        $query = "SELECT * FROM booksonrent where name='$id' AND rent_id={$ii}";
                        $query_run = mysqli_query($connection, $query);
                        
                    ?>
<title>ORDER RECEIPT</title>
<body>
<div class="container" id="printableArea" >
	<div class="row">

        <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
        <h2 class="text-center"><strong>ORDER RECEIPT</strong></h2>
            <div class="row">                            
    			<div class="receipt-header">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="receipt-left">
							<img class="img-responsive" alt="iamgurdeeposahan" src="assets/img/logo/bmc2.png" style="width:80px; border-radius: 50px;">
						</div>
                       
					</div>
                           
					<div class="col-xs-6 col-sm-6 col-md-6 text-right">
						<div class="receipt-right">
                           
							<h5>BMC Pustakalaya.</h5>
							<p>+91 12345-6789 <i class="fa fa-phone"></i></p>
							<p>bmcpustakalaya@gmail.com <i class="fa fa-envelope-o"></i></p>
							<p>Butwal,Nepal<i class="fa fa-location-arrow"></i></p>
						</div>
					</div>
				</div>
               
            </div>
			
			<div class="row">
                 <?php
                if(mysqli_num_rows($query_run) > 0)        
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                            ?>
				<div class="receipt-header receipt-header-mid">
					<div class="col-xs-8 col-sm-8 col-md-8 text-left">
						<div class="receipt-right">
                            <h3><u>Rental Details</u></h3>
							<h5>Name:<?php echo $row['name'];?> <small>  |  Rent-Order No. : <strong><?php echo $row['order_no'];?></strong></small></h5>
							<p><b>Mobile :</b> <?php echo $row['phone'];?></p>
							<p><b>Email :</b> <?php echo $row['email'];?></p>
							<p><b>Address :</b> <?php echo $row['address'];?></p>
						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<div class="receipt-left">
                        <td><button class="btn btn-primary text-white" onclick="printDiv('printableArea')" value="Print" >
                            <i class="fas fa-print"> Print</i></button></td>
						</div>
					</div>
				</div>
                <?php }}?>
            </div>
			
            <div>
           
                 <?php
                 include('config.php');
                
                 $ii=$_GET['itemno'];
                 $id=$_SESSION['username'];
                 $query = "SELECT * FROM booksonrent where name='$id' AND rent_id={$ii}";
                 $query_run = mysqli_query($connection, $query);
                 
                     ?>
                <table class="table table-bordered">
                   
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                         
                    <tbody>
                    <?php
                    if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                                $dc='15';
                                ?>
                        <tr>
                            <td class="col-md-9"> <strong>Bookname: </strong></td>
                            <td class="col-md-3"><i class="fa fa-inr"></i><?php echo $row['bookname'];?></td>
                        </tr>
                        <tr>
                            <td class="col-md-9"> <strong>Semester:</strong></td>
                            <td class="col-md-3"><i class="fa fa-inr"></i> <?php echo $row['Sem'];?></td>
                        </tr>
                        <tr>
                            <td class="col-md-9"> <strong>Day Issued:</strong></td>
                            <td class="col-md-3"><i class="fa fa-inr"></i> <?php echo $row['dayissued'];?></td>
                        </tr>
                        <tr>
                            <td class="col-md-9"> <strong>Payment Method:</strong></td>
                            <td class="col-md-3"><i class="fa fa-inr"></i><?php echo $row['paymentMethod'];?></td>
                        </tr>
                        <tr>
                            <td class="text-right">
                            <p>
                                <strong>Total Amount: </strong>
                            </p>
                            <p>
                                <strong>Delivery Charge: </strong>
                            </p>
							
							</td>
                            <td>
                            <p>
                                <strong><i class="fa fa-inr"></i><?php echo $row['price'];?></strong>
                            </p>
                            <p>
                                <strong><i class="fa fa-inr"></i><?php echo $dc;?></strong>
                            </p>
							<!-- <p>
                                <strong><i class="fa fa-inr"></i> 1300/-</strong>
                            </p>
							<p>
                                <strong><i class="fa fa-inr"></i> 9500/-</strong>
                            </p> -->
							</td>
                        </tr>
                        <tr>
                           
                            <td class="text-right"><h2><strong>Total: </strong></h2></td>
                            <td class="text-left text-danger"><h2><strong><i class="fa fa-inr"></i> <?php 
                          
                            $p=$row['price'];
                            echo 'Nrs. '.($p + $dc);
                            ?></strong></h2></td>
                        </tr>
                        <?php }}?>
                    </tbody>
                   
                </table>
            </div>
			
			<div class="row">
                    <?php
                        include('config.php');
                    
                        $ii=$_GET['itemno'];
                        $id=$_SESSION['username'];
                        $query = "SELECT * FROM booksonrent where name='$id' AND rent_id={$ii}";
                        $query_run = mysqli_query($connection, $query);
                        if(mysqli_num_rows($query_run) > 0)        
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                                    
                    ?>
				<div class="receipt-header receipt-header-mid receipt-footer">
					<div class="col-xs-8 col-sm-8 col-md-8 text-left">
						<div class="receipt-right">
							<h4><b>Order Date :</b> <?php echo $row['date'];?></h4>
							<h5 style="color: rgb(140, 140, 140);">Thank you for buying!!</h5>
						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<div class="receipt-left">
							<h1>Signature</h1>
						</div>
					</div>
				</div>
                                    <?php }}?>
            </div>
			
        </div>    
	</div>
</div>
</body>
<script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
</html>