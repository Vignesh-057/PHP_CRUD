<?php
    include 'connection.php';

    if(isset($_POST["submit"])){
        $username = $_POST["username"]; 
        $email = $_POST["email"]; 
        $mobile = $_POST["mobile"]; 
        $password = $_POST["password"]; 

        $sql = "INSERT INTO crud (name, email, mobile, password) VALUES ('$username', '$email', '$mobile', '$password')";

        $result = mysqli_query($conn, $sql);

        if($result){
            // echo "your data is registered!";
            header('location:display.php');
        }else{
            die(mysqli_error($conn));
        }
    }

    if(isset($_POST["dispuser"])){
        header("location:display.php");
    }

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Crud Operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form action="index.php" method="post">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="username" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Mobile:</label>
            <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
        </div>
        
        <button type="submit" class="btn btn-primary" name="submit">Submit</button> &nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" class="btn btn-primary" name="dispuser">Display Users</button>
    </form>
    </div>
   
</html>