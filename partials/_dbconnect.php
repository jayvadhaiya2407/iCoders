<?php
//Creating Vars
$servername = "localhost";
$username = "root";
$password = "";
$database = "icoder";

//Connecting Database
$conn = mysqli_connect($servername, $username, $password, $database);

//Checking Connection
if(!$conn){
    echo '<div class="alert alert-danger" role="alert">
    Technical Error! Plase Try After Some Time.
  </div>';
}
?>