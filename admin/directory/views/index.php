<?php require_once 'directory/controller/expertController.php'; ?>
<main class="page-content pt-2">
  <div id="overlay" class="overlay"></div>

    <div class="container-fluid p-5">
      
      <div class="row">
          <div class="col-md-12 mt-2">
              <button class="btn btn-success float-right" data-toggle="modal" data-target="#modalAddProduct">Add New Expert <i class="fas fa-plus"></i></button>
              <center><h2>Directory of Experts</h2></center>
              <br>
               <div class="card mb-3">
                <div class="card-header">
                  <i class="fa fa-table"></i> Expert Management
                </div>
                <div class="card-body">
                  <div class="table-responsive" style="font-family: ui monospace;">
                    <?php include 'expert_table.php'; ?>
                  </div>
                </div>
                <div class="card-footer small text-muted"></div>
              </div>


          </div>
      </div>

  </div><!-- container -->
</main>
<!-- page-content" -->


<?php include 'modal_add.php'; ?>
<?php include 'modal_update.php'; ?>
<?php include 'function.js'; ?>
<!-- <script src="directory/views/function.js"></script> -->