<?php 
	session_start();
	require('db.php');
	
	$id=$_GET['id'];
	$q1="select * from product where PID=$id";
	$q2="SELECT * FROM product RIGHT JOIN warehouse ON product.PID = warehouse.PID  RIGHT JOIN shop ON warehouse.SID = shop.SID WHERE warehouse.PID =$id" ;
	
	$res=mysqli_query($con,$q1) or die("Can't Execute Query..");
	$res2=mysqli_query($con,$q2) or die("Can't Execute Query..");
	$row=mysqli_fetch_assoc($res);
	$row2=mysqli_fetch_assoc($res2);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Tool Store</title>	
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
			<!-- start page -->

				<div id="page">
						<!-- start content -->
							<div id="content">
								<div class="post">
									<h1 class="title"><?php echo $row['name'];?></h1>
									<div class="entry">
										<?php
										
											echo '	<table border="0" width="100%">
												 <tr>
													<td><hr color="purple"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 <td>Item Details</td>
												</tr>
												<tr>
													<td><hr color="purple"></td>
												</tr>
											 </table>
											
											<table border="0"  width="100%" bgcolor="#ffffff">
												<tr> 
													
													<td width="15%" rowspan="3">
														<img src="'.$row['PImage'].'" width="100">
													
													</td>
												</tr>
											
												<tr> 
													<td width="50%" height="100%">
														<table border="0"  width="100%" height="100%">
															<tr valign="top">
																<td align="right" width="10%">NAME</td>
																<td width="6%">: </td>
																<td align="left">'.$row['name'].'</td>
															</tr>

															
															<tr>
																<td align="right">ID</td>
																<td>: </td>
																<td align="left">'.$row['PID'].'</td>
																
															</tr>
															
															<tr>
																<td align="right"> PRICE</td>
																<td>: </td>
																<td align="left">'.$row['price'].'</td>
															</tr>
															
															<tr>
																<td align="right">  SHOP</td>
																<td>: </td>
																<td align="left"><a href="product_in_shop.php?id='.$row2['SID'].'"</a>'.$row2['Sname'].'</td>
															</tr>
															
															
															


														</table>
										
														
													</td>
												</tr>
											</table>
									
											<table border="0" width="100%">
												 <tr>
													<td><hr color="purple"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 <td>DESCRIPTION</td>
												</tr>
												<tr>
													<td><hr color="purple"></td>
												</tr>
																		
											 </table>
											 
											 '.$row['description'].'
																				

											 
											 <tr><td colspan=2><hr color="purple"></td></tr>
											
											<table border="0" width="100%">
												
												 <tr align="center" bgcolor="#EEE9F3">';
												 
												 if(isset($_SESSION['uid']))
												 {
													echo ' <td><a href="process_cart.php?nm='.$row['name'].'&rate='.$row['price'].'&pid='.$row['PID'].'">
														<img src="image/addcart.jpg">
													</a></td>';
												}
												else
												{
													echo '<td><img src="image/addcart.jpg"><br><a href="index.php"> <h4>Please Login..</h4></a></td>';
												}
												echo '</tr>
											</table>';
										?>
									</div>
				
								</div>
			
							</div>

	<div id="footer-wrap">
		<div class="w3-container" align = 'center'>
            <a href="logout.php" class="w3-button w3-black" >LOG OUT</a>
        </div>						
	</div>
						
</body>
</html>
