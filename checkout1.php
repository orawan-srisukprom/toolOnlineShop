<?php
 session_start();
 extract($_POST);
 extract($_SESSION);
 
 require('db.php');
	//echo $uid;
	if(isset($submit))
	{
		$paymentMethod= $_POST['paymentMethod']	;
		$shippingMethod = $_POST['shippingMethod'];
		$shippingCost = $_POST['shippingCost'];
	// $query="insert into orders(OrderID,paymentMethod,shippingMethod,shippingCost) values('$OrderID','$paymentMethod','$shippingMethod','$shippingCost')";
	$query="INSERT into orders(paymentMethod,shippingMethod,shippingCost) values('$paymentMethod','$shippingMethod','$shippingCost')";
	$res=mysqli_query($con,$query) or die("Can't Execute Query...");
	header("location:cart.php");
	
}
	else {
	}


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment and Shipping Details</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


<?php
			include("include/style.php");
		?>
		<div class="topnav">
  			<a class="active" href="home.php">Home</a>
			<a class="active" href="cart.php">cart</a>

				<form method="GET" action="search_result.php">
					
					<input type="text" id="mySearch" name="s" value="" />
					<input type="submit" id="x" value="Search" />
					
				</form>
  
		</div>	
			<!------------------------------->
			<font style="font-size:30px;margin-left:420px">Payment and Shipping Details</font>	
			<div class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <div class="clr"></div>
				
            </div><!--/ freshdesignweb top bar -->    
		
      <div  class="form" <div class="custom-select" style="width:200px;">
    		<form id="contactform" method="post"> 
				<!-- <p class="contact"><label for="OrderID"></label></p> 
				ORDERID
				<input id="OrderID" name="OrderID" placeholder="OrderID" required="" tabindex="1" type="text">  -->
				<!-- <form action="save.php" method="post"> -->
				<br><br>
				Payment Method	 
				<select name="paymentMethod" required="" >
					<option value="">-Please Select Option-</option>
					<option value="banking">-Banking-</option>
					<option value="credit card">-Credit Card-</option>
					<option value="cash on delivery">-Cash On Delivery-</option>
				</select>
				</br></br>
				Shipping Method	 
				<select name="shippingMethod" required="">
					<option value="">-Please Select Option-</option>
					<option value="EMS">-EMS-</option>
					<option value="SCG EXPRESS">-SCG EXPRESS-</option>
					<option value="NINJA VAN">-NINJA VAN-</option>
					<option value="รถบรรทุก">-TRUCK-</option>
					<option value="KERRY EXPRESS">-KERRY EXPRESS-</option>
				</select>
				<br><br>
				<button type="submit" >SAVE</button>
				<?php 
      		if (isset($_POST['submit'])) {
          		$shippingMethod = $_POST['shippingMethod'];
         	if($shippingMethod== "EMS") { 
         		echo 'shippingCost' = 50;
        	 }
         	if ($shippingMethod == "SCG EXPRESS"){
				'shippingCost' = 80;
			 }
			 if ($shippingMethod == "NINJA VAN"){
				'shippingCost' = 60;
			 }
			 if ($shippingMethod == "เธฃเธ–เธเธฃเธฃเธ—เธธเธ"){
				'shippingCost' = 200;
			}
			if ($shippingMethod == "KERRY EXPRESS"){
				'shippingCost' = 50;
		  }
         ?>
  		 	<strong><?php echo "Shipping Method" ?></strong>
   			<?php echo $shippingMethod; ?><br/>
   			<strong><?php echo "Shipping Cost" ?></strong>
   		<?php echo $shippingCost; ?>
  	 <?php 
      }
      ?>
   <div>
   </div>
</form>
			
   
</div>      
</div>

<div id="footer-wrap">
		<div class="w3-container" align = 'center'>
            <a href="logout.php" class="w3-button w3-black" >LOG OUT</a>
        </div>						
	</div>
</body>
</html>