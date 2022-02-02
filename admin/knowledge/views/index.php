<?php require_once 'knowledge/controller/KnowledgeProductController.php'; ?>


<main class="page-content pt-2">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 mt-2">
        <button class="btn btn-success float-right" data-toggle="modal" data-target="#modalAddProduct" id="btnAddNews"><i class="fas fa-plus"></i> Add Product</button>
        <center><h2>Knowledge Product</h2></center>

        <div class="card mb-3">
          <div class="card-header bg-primary text-white">
            <i class="fa fa-table"></i> Management
          </div>
          <div class="card-body">
            <?php include 'products_table.php'; ?>
            <?php include 'modal.php'; ?>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>


      </div>
    </div>
  </div>
</main>    

<?php include 'includes/js_includes.php' ?>
<?php include 'assets.js'; ?>