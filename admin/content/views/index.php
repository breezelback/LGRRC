<?php require_once 'content/controller/contentController.php'; ?>
<main class="page-content pt-2">

    <div class="row">
        <div class="col-md-12 mt-2">
            <!-- <button class="btn btn-success float-right" data-toggle="modal" data-target="#modalAddProduct">Add MSAC Member <i class="fas fa-plus"></i></button> -->
            <center><h2>Images and Website Content</h2></center>
            <br>
             <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-table"></i> MSAC Management
              </div>
              <div class="card-body">
                <div class="table-responsive" style="font-family: ui monospace;">
                  <table class="table table-bordered" id="result1" width="100%" cellspacing="0" style="font-size: 15px;">
                    <thead>
                      <tr>
                        <th>IMAGE</th>
                        <th>NAME</th>
                        <th>TEXT</th>
                        <th width="7%"><center>Action</center></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php include 'content_table.php'; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer small text-muted"></div>
            </div>


        </div>
      </div>

    </div><!-- container -->
</main>

<?php include 'modal_update.php'; ?>
<?php include 'function.js'; ?>