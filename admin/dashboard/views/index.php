<?php require_once 'function php/conn.php'; ?>

<main class="page-content pt-2">
  <div id="overlay" class="overlay"></div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 mt-2">
          <center><h2>Dashboard</h2></center>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <ol class="breadcrumb">
      </ol>
      <div class="row">
        <?php include 'icon_cards.php'; ?>
        <?php include 'product_history.php'; ?>
        <?php include 'uploaded_news.php'; ?>
        <?php include 'msac_members.php'; ?>
        <?php include 'uploaded_videos.php'; ?>
      </div>  
    </div>
</main>

