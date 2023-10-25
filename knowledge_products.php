<?php include('connection.php'); ?> 
<?php require_once 'phpti-master/src/ti.php'; ?>
 

<?php include 'base_menu.html.php'; ?>
<?php require_once 'controller/LGRRCController.php'; ?>

<?php startblock('title'); ?>
Knowledge Products
<?php endblock('title'); ?>

<?php startblock('content'); ?>
<?php include('views/knowledge_products/index.php'); ?>
<?php endblock(); ?>
