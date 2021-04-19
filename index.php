<?php
session_start();
require('db.php');

    //check bd connect
    //if($conn->connec_error){
    //    die("cannot connect to database");
    //}
    //echo "connected";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tool Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<style>
body {
  background-image: url('bg1.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>

<body>
<div class="container">
    <div class="row">
    
    <div class="col-sm-4"></div>
   
    <?php 
    //echo $_SESSION["uid"];
    if(!isset($_SESSION["uid"])){?>
        
        <div class="col-sm-4" >
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <h1>Log In</h1>
        
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="email">EMAIL</label>
                <input type="text" class="form-control" id="username"  name="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="username" name="MPassword">
            </div>
            <button type="submit" class="btn btn-primary">Log in</button><br/>
            <a href="signupperson.php"> sign up for person| </a>
            <a href="signupcomp.php"> |sign up for company</a>



            

        </form>
        </div>
        
    <?php } 
    else {?>
        <h1>Success!!</h1><br/>
        <a href="/logout.php"> log out </a>
    <?php } ?>
    
    <div class="col-sm-4"></div>
    
    </div>
    </div>
</body>

</html>

<!-- style="background-image: url('bg1.png'); background-repeat: no-repeat;
  background-size: cover;" -->