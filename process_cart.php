<?php 
session_start();
require('db.php');
		

	if(isset($_GET['nm']) and  isset($_GET['rate']))
	{
		//add item
		$_SESSION['cart'][] = array("nm"=>$_GET['nm'],"rate"=>$_GET['rate'],"qty"=>"1","pid"=>$_GET['pid']);
		header("location: cart.php");
	}
	else if(isset($_GET['id']))
	{
		//del a item
		$id = $_GET['id'];
		unset($_SESSION['cart'][$id]);
		header("location: cart.php");
	}
	else if(!empty($_POST))
	{
		//update qty
		foreach($_POST as $id=>$val)
		{
			$_SESSION['cart'][$id]['qty']=$val;
			header("location: cart.php");
		}
	}
	$pid = $_SESSION['cart'] [$id]['pid'];
	$amount=$_SESSION['cart'][$id]['qty'];
$query="INSERT INTO cart (PID,amount) values('$pid','$amount')";
$res=mysqli_query($con,$query) or die("Can't Execute Query...");


?>