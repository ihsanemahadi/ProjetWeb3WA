<?php 
ob_start();
?>

<div class="alert alert-danger" role="alert">
<?= $errorMessage ?>
</div>
<?php $content = ob_get_clean();
 require "template.php" ?>