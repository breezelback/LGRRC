<?php require_once 'validate.php'; ?>
<?php include 'base_template.php'; ?>

<?php startblock('title'); ?>
  Dashboard
<?php endblock('title'); ?>

<?php startblock('content'); ?>
  <?php include('dashboard/views/index.php'); ?>
<?php endblock(); ?>
