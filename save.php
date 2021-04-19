<?php 
session_start();
require('db.php');

echo'<pre>';
print_r($_POST);
$paymentMethod=$_POST['paymentMethod'];
$shippingMethod = $_POST['shippingMethod'];
    if($shippingMethod == "EMS" ){ 
            $shippingCost = 50;
            }
    if($shippingMethod == "SCG EXPRESS"){ 
                $shippingCost = 80;
            }
    if($shippingMethod == "NINJA VAN"){ 
                $shippingCost = 80;
            }
    if($shippingMethod == "รถบรรทุก"){ 
                $shippingCost = 200;
            }
    if($shippingMethod == "KERRY EXPRESS"){ 
                $shippingCost = 50;
            }
$query="INSERT into orders(paymentMethod,shippingMethod,shippingCost) values('$paymentMethod','$shippingMethod','$shippingCost')";
$res=mysqli_query($con,$query) or die("Can't Execute Query...");
header("location:cart.php");


echo '</pre>'
?>