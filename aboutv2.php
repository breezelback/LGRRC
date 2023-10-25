<?php include('connection.php'); ?> 
<?php require_once 'phpti-master/src/ti.php'; ?>
 

<?php include 'base_menu.html.php'; ?>
<?php require_once 'controller/LGRRCController.php'; ?>

<?php startblock('title'); ?>
About
<?php endblock('title'); ?>

<?php startblock('content'); ?>
<?php include('views/about/index.php'); ?>
<?php endblock(); ?>
