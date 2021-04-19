<?php

 session_start();
 require('db.php');
 
	$query="SELECT * FROM product LEFT JOIN warehouse ON product.PID = warehouse.PID WHERE NA_Amount <> 0 ORDER BY NA_Amount ASC ";
	$res=mysqli_query($con,$query) or die("Can't Execute Query...");
?>
<!DOCTYPE html>
<html>
<head>
<title>Tool Store</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<br\>
    
<div id="page">
					<!-- start content -->
							<div id="content">
								<div class="post">
									<h1 class="title"><?php echo @$_GET['cat'];?></h1>
									<div class="entry">
										
										<table border="3" width="100%" >
											<?php
												$count=0;
												while($row=mysqli_fetch_assoc($res))
												{
													if($count==0)
													{
														echo '<tr>';
													}
													
													echo '<td valign="top" width="20%" align="center">
														<a href="detail.php?id='.$row['PID'].'">
														<img src="'.$row['PImage'].'" width="80" height="100">
														<br>'.$row['name'].'</a>
													</td>';
													$count++;							
													
													if($count==4)
													{
														echo '</tr>';
														$count=0;
													}
												}
											?>
											
										</table>
									</div>
									
								</div>
								
							</div>
                    <!-- end content -->
                    <div id="footer-wrap">
		<div class="w3-container" align = 'center'>
            <a href="logout.php" class="w3-button w3-black" >LOG OUT</a>
        </div>						
	</div>


</body>
</html>
