
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
 session_start();
 extract($_POST);
 extract($_SESSION);
 
 require('db.php');
	
?>

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
			<!-- <font style="font-size:30px;margin-left:420px">Payment and Shipping Details</font>	 -->
			<div class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <div class="clr"></div>
				
            </div><!--/ freshdesignweb top bar -->    
		
    <div  class="form" <div class="custom-select" style="width:200px;">
	  <form name="Payment and Shipping Details" action ="save.php" method ="post">
	
				<br><br>
				Payment Method	 
				<select name="paymentMethod"  >
					<option value="">-Please Select Option-</option>
					<option value="banking">-Banking-</option>
					<option value="credit card">-Credit Card-</option>
					<option value="cash on delivery">-Cash On Delivery-</option>
				</select>
				</br></br>
				Shipping Method	 
				<select name="shippingMethod" >
					<option value="">-Please Select Option-</option>
					<option value="EMS">-EMS-</option>
					<option value="SCG EXPRESS">-SCG EXPRESS-</option>
					<option value="NINJA VAN">-NINJA VAN-</option>
					<option value="รถบรรทุก">-TRUCK-</option>
					<option value="KERRY EXPRESS">-KERRY EXPRESS-</option>
				</select>
				<br><br>
				<button type="submit" >SAVE</button>
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