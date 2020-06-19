<?php

$signup = true;
$login = false;

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
      <a class="nav-link" href="#">About</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Cetegories
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Programming</a>
        <a class="dropdown-item" href="#">Gaming</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Smart Devices</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact</a>
    </li>
  </ul>
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <!-- <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button> --->
  </form>';

  if($signup){
  echo '
  <a href="#" class="btn btn-outline-light ml-2" role="button" aria-pressed="true" data-toggle="modal" data-target="#loginModal">LogIn</a>
  <a href="#" class="btn btn-outline-warning ml-2" role="button" aria-pressed="true" data-toggle="modal" data-target="#signupModal">Register</a>';
  }

  if($login){
  echo '
  <a href="#" class="btn btn-danger ml-2" role="button" aria-pressed="true">LogOut</a>';
  }

  echo '
</div>
</nav>';
?>

<?php include "partials/_signupModal.php"; ?>
<?php include "partials/_loginModal.php"; ?>