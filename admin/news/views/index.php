<?php require_once 'news/controller/NewsController.php'; ?>

<main class="page-content pt-2">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 mt-2">
        <button class="btn btn-success float-right" data-toggle="modal" data-target="#modalAddProduct" id="btnAddNews">Add News <i class="fas fa-plus"></i></button>
        <center><h2>News</h2></center><br>
        <div class="card mb-3">
          <div class="card-header bg-primary text-white">
            <i class="fa fa-table"></i> News Management
          </div>
          <div class="card-body">
            <?php include 'news_table.php'; ?>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include 'includes/js_includes.php' ?>
<script type="text/javascript" src="../rich texteditor/src/jquery.richtext.js"></script>
<?php include 'assets.js' ?>

