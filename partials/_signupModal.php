<?php
echo '
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Register To iCoders</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container my-4">
      <form action="register.php" method="POST">
      <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" require>
      </div>
      <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" require>
      </div>
      <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" require>
      </div>
      <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" require>
          <p>--> Don\'t Use < and > In Your Password.</p>
      </div>
      <div class="form-group">
          <label for="cpassword">Confirm Password</label>
          <input type="password" class="form-control" id="cpassword" name="cpassword" require>
      </div>
      <input type="submit" value="Submit" class="btn btn-danger">
      </form>
  </div>
      </div>
    </div>
  </div>
</div>';
?>

