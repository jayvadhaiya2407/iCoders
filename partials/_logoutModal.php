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
        <p>Are You Sure To Logout Form iCoders ?</p>
        <a href="logout.php" class="btn btn-danger ml-2" role="button" aria-pressed="true">LogOut</a>      
      </div>
    </div>
  </div>
</div>';
?>