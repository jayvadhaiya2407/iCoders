<?php
require "partials/_dbconnect.php";
$signup = true;
$login = false;

session_start();
//error_reporting(0);
if(isset(($_SESSION['login'])) && $_SESSION['login'] == true){
  $signup = false;
  $login = true;
}

echo '<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">iCoders</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about.php">About</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Categories
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">';
        
      $sql = "SELECT category_id,category_name FROM categories";
      $result = mysqli_query($conn, $sql);

      while($row = mysqli_fetch_assoc($result)){
        echo '<a class="dropdown-item" href="threadlist.php?catid='.$row['category_id'].'">'.$row['category_name'].'</a>';
      }


      echo '</div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php">Contact</a>
    </li>
  </ul>
  <form class="form-inline my-2 my-lg-0" action="search.php">
    <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search">
    <!-- <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button> --->
  </form>';

  if($signup){
  echo '
  <button class="btn btn-outline-light ml-2" role="button" aria-pressed="true" data-toggle="modal" data-target="#loginModal">LogIn</button>
  <button class="btn btn-outline-warning ml-2" role="button" aria-pressed="true" data-toggle="modal" data-target="#signupModal">Register</buton>';
  }

  if($login){
  echo '
  <button class="btn btn-danger ml-2" role="button" aria-pressed="true" data-toggle="modal" data-target="#logoutModal">LogOut</button>';
  }

  echo '
</div>
</nav>';
?>
<?php include "partials/_signupModal.php"; ?>
<?php include "partials/_loginModal.php"; ?>
<?php include "partials/_logoutModal.php"; ?>