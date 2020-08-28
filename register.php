<?php
require "partials/_dbconnect.php";
//Global Vars
$error = false;
$success = false;

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];

    $name = str_replace("<","&lt;","$name");
    $name = str_replace(">","&gt;","$name");

    $username = str_replace("<","&lt;","$username");
    $username = str_replace(">","&gt;","$username");

    $pass = str_replace("<","&lt;","$pass");
    $pass = str_replace(">","&gt;","$pass");

    $sql = "SELECT * FROM users066247 WHERE username='$username' AND email='$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if($num == 0){
        if($pass == $cpass){
            $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users066247` (`name`, `username`, `email`, `password`, `dt`) VALUES ('$name', '$username', '$email', '$pass_hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);

            if($result){
                $success = "Registration Successfull. Now You Can LogIn To iCoders.";
            }else{
                $error = "Registration Failed. Try Again Later.";
            }
        }else{
            $error = "Both Passwords Should Be Same.";
        }   
    }else{
        $error = "Email Or Username Already Exists.";
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Resistration Successfull</title>
</head>

<body>
    <?php
    include "partials/_header.php";
    if($success){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 55px;">
        <strong>Success</strong>'.$success.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    if($error){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 55px;">
        <strong>Failed!</strong>' .$error. '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    ?>

    <div class="container text-center">
        <img src="images/logo.png" alt="logo" class="img-fluid" style="padding-top: 10%;">
        <b><p>Welcome To iCoders. Click <a href="index.php">Here</a> To Begin.</p></b>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>