<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php 
    include("include/style.php");
        require('db.php');
        if (isset($_REQUEST['Comp_name'])){
            $Comp_name = stripcslashes($_REQUEST['Comp_name']);
            $Comp_name = mysqli_real_escape_string($con,$Comp_name);
            $Comp_rep_name = stripcslashes($_REQUEST['Comp_rep_name']);
            $Comp_rep_name = mysqli_real_escape_string($con,$Comp_rep_name);
            $address = stripcslashes($_REQUEST['address']);
            $address = mysqli_real_escape_string($con,$address);
            $MPassword = stripcslashes($_REQUEST['MPassword']);
            $MPassword = mysqli_real_escape_string($con,$MPassword);
            $email = stripcslashes($_REQUEST['email']);
            $email = mysqli_real_escape_string($con,$email);
            $phone = stripcslashes($_REQUEST['phone']);
            $phone = mysqli_real_escape_string($con,$phone);
            
        $query="INSERT INTO member(MPassword,adress, email, phone) VALUE ('$MPassword', '$address', '$email', '$phone')";
        $result = mysqli_query($con,$query);
        $query2="INSERT INTO company(comp_name, comp_rep_name) VALUE ('$Comp_name', '$Comp_rep_name')";
        $result2 = mysqli_query($con,$query2);
        if($result2){
            echo "<div class='form'>
            <h3> You are sign up successfull!!!</h3>
            <br> Click here to <a href='index.php'>LogIn</a>
            </div>";
        }
    }
        else {

    ?>
        <div class="form">
        <h1>Sign Up</h1>
        <form name="sign up" action ="" method ="post"><br>
            <input type="text" name="Comp_name" Placeholder="Company Name" require><br>
            <input type="Comp_rep_name" name="Comp_rep_name" Placeholder="Comp_rep_name" require><br>
            <input type="address" name="address" Placeholder="Address" require><br>
            <input type="email" name="email" Placeholder="Email" require><br>
            <input type="password" name="MPassword" Placeholder="Password" require><br>
            <input type="phone" name="phone" Placeholder="Phone" require><br>
            <input type="submit" name="submit"  value ="Sign Up">
            </form>
        <p>Click here to Login|<a href ="index.php">Login</a></p>
        </div>
        <?php }?>

        <div id="footer-wrap">
		<div class="w3-container" align = 'center'>
            <a href="logout.php" class="w3-button w3-black" >LOG OUT</a>
        </div>						
	</div>
</body>
</html>

