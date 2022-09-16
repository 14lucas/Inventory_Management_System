<?php
if(isset($_SESSION['message'])) :

?>


<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hey!</strong> <?= $_SESSION['message']; ?>
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
</div>



<?php
unset($_SESSION['message']);
endif;

?>