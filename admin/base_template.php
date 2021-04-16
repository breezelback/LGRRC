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
            <main class="page-content pt-2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 mb-1">
                          <a id="toggle-sidebar" class="btn btn-secondary rounded-0" href="#">
                              <span class="fas fa-list"></span>
                          </a>
                          <a id="pin-sidebar" class="btn btn-outline-secondary rounded-0" href="#">
                              <span class="fas fa-map"></span>
                          </a>
                        </div>
                    </div>
                </div>    
            </main>  

            <?php emptyblock('content') ?>
        
        </div>
        <!-- end content -->
    </div>

</body>
<?php startblock('assets') ?>
    <?php include 'includes/js_includes.php'; ?>
    

    
<?php endblock() ?>

</html>