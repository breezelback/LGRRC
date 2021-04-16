<?php 
  include 'base_template.php'; 
  include 'users/users.js';
  require_once 'function php/fetchUsersData.php';
?>


<?php startblock('title'); ?>
  Users
<?php endblock('title'); ?>

<?php startblock('content'); ?>
  <?php include('users/index.php'); ?>
<?php endblock(); ?>
