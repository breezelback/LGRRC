<?php require_once 'function php/conn.php'; ?>
<?php require_once 'validate.php'; ?>

<main class="page-content pt-2">
  <div id="overlay" class="overlay"></div>
    <!-- container -->
    <div class="container-fluid">
      <!-- <div class="row">
        <div class="col-xl-12 col-sm-12 mb-1">
          <a id="toggle-sidebar" class="btn btn-secondary rounded-0" href="#">
              <span class="fas fa-list"></span>
          </a>
          <a id="pin-sidebar" class="btn btn-outline-secondary rounded-0" href="#">
              <span class="fas fa-map"></span>
          </a>
        </div>
      </div> -->
      <div class="row">
        <div class="col-md-12 mt-2">
          <center><h2>Dashboard</h2></center>
        </div>
      </div>
    </div>
   
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
      </ol>

      <!-- Icon Cards-->
      <div class="row">
        <?php include 'icon_cards.php'; ?>
        <?php include 'product_history.php'; ?>
        <?php include 'uploaded_news.php'; ?>
        <?php include 'msac_members.php'; ?>
        <?php include 'uploaded_videos.php'; ?>
      </div>  
    </div>
</main>

