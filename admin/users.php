<?php 
  include 'base_template.php'; 
?>


<?php startblock('title'); ?>
  Users
<?php endblock('title'); ?>

<?php startblock('content'); ?>
  <?php include('users/index.php'); ?>
<?php endblock(); ?>
