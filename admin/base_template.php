<?php require_once 'assets/phpti-master/src/ti.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>LGRRC | <?php emptyblock('title'); ?></title>

    <?php startblock('assets') ?>
      <?php include 'includes/css_includes.php'; ?>
      <link rel="stylesheet" href="dashboard/admin_css.css">
    <?php endblock() ?>

</head>

<body>
    <div class="page-wrapper default-theme sidebar-bg bg1 toggled">

        <!-- sidebar -->
        <?php startblock('sidebar') ?>
            <?php include 'includes/sidebar.php'; ?> 
        <?php endblock(); ?>  
        <!-- end sidebar -->
        
        <!-- content -->
        <div id="content">
          <?php emptyblock('content') ?>
        </div>
        <!-- end content -->
    </div>

</body>
<?php startblock('assets') ?>
    <?php include 'includes/js_includes.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>

    
<?php endblock() ?>

</html>