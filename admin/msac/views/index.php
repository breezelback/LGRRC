<?php require_once 'msac/controller/MembersController.php'; ?>
<?php require_once 'function php/conn.php'; ?>
<?php require_once 'validate.php'; ?> 

<main class="page-content pt-2">
    
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-12 mt-2">
        <button class="btn btn-success float-right" data-toggle="modal" data-target="#modalAddProduct"><i class="fas fa-plus"></i> Add MSAC Member</button>
        <center><h2>MSAC Members</h2></center>
      </div>

      <div class="col-md-12 mt-3">
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i> MSAC Management
          </div>
          <div class="card-body">
            <?php include 'table_members.php'; ?>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>
      </div>

    </div>
  </div>
</main>

<?php include 'modal_add_product.php'; ?>
<?php include 'modal_edit_product.php'; ?>
<?php include 'js/js_manager.js'; ?>
<?php include 'assets.js'; ?>




