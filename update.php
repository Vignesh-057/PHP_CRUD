<?php
    include 'connection.php';

    $id = $_GET["updateid"];
    $sql = "SELECT * FROM crud WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $username = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $password = $row['password'];
    
    if(isset($_POST["submit"])){
        $username = $_POST["username"]; 
        $email = $_POST["email"]; 
        $mobile = $_POST["mobile"]; 
        $password = $_POST["password"]; 
        echo "hello";
        $sql = "UPDATE crud SET id=$id, name='$username', email='$email', mobile='$mobile', password='$password' WHERE id=$id";

        $result = mysqli_query($conn, $sql);

        if($result){
           // echo "your data is updated!";
            header('location:display.php');
        }else{
            die(mysqli_error($conn));
        }
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
    <form action="" method="post">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="username" autocomplete="off" value="<?php echo $username; ?>">
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value="<?php echo $email; ?>">
        </div>
        <div class="form-group">
            <label>Mobile:</label>
            <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off" value="<?php echo $mobile; ?>">
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" value="<?php echo $password; ?>">
        </div>
        
        <button type="submit" class="btn btn-primary" name="submit"> Update </button>
    </form>
    </div>
   
</html>