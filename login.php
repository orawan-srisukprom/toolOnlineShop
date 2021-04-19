<?php
session_start();
//php code here

require('db.php');

    //check bd connect
    if($con->connect_error){
        die("cannot connect to database");
    }
    
    
            $mail=$_POST['email'];
			
			$q="select * from member where email='$mail'";
			
			$res=mysqli_query($con,$q) or die("wrong query");
			
			$row=mysqli_fetch_assoc($res);
			
			if(!empty($row))
			{
				if($_POST['MPassword']==$row['MPassword'])
				{
					$_SESSION=array();
					$_SESSION['unm']=$row['email'];
					$_SESSION['uid']=$row['MPassword'];
					$_SESSION['status']=true;
					header("location:home.php");
	
				}
				
				else
				{
					echo 'Incorrect Password....';
				}
			}
			else
			{
				echo 'Invalid User';
			}
	
		



?>
