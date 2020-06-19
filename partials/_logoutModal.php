<?php
echo '
<!-- Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logoutModalLabel">LogOut</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>Are you really want to logout form iCoders ?</h3>
        <a href="logout.php" class="btn btn-danger my-3" role="button" aria-pressed="true">Yes Sure</a>      
        <a href="index.php" class="btn btn-outline-success ml-2 my-3" role="button" aria-pressed="true">Cancle</a>      
      </div>
    </div>
  </div>
</div>';
?>