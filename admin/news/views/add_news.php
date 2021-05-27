
<main class="page-content pt-2">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 mt-2">
        


        <form action="function php/insertNews.php" method="get">
              <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
              <h4 class="modal-title" style=" margin: 0 auto;">Add News</h4>
            </div>
            <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
               <center>
                  <img class="ml-2" src="../images/news.png" style="width: 170px; height: 170px; border-radius: 50%;" id="image_editProfile"><br>
                  <label class="btn btn-primary btn mt-2" style="width:150px;">
                  <span class="fa fa-picture"></span>&nbsp&nbspBrowse Image<input type="file" style="display: none;" id="file_editProfile">
                  </label>
                </center>
                Author:
                <input type="text" class="form-control" id="author" name="author">
                Title:
                <input type="text" class="form-control" id="title" name="title">
              </div>
              <div class="col-md-6">
                Description:

                <!-- <textarea id="noise" name="noise" class="widgEditor nothing"></textarea> -->
                <!-- <textarea id="summernote"></textarea> -->

                <div class="page-wrapper1 box-content">

                    <textarea class="content1" name="example" required=""></textarea>

                </div>



              </div>
            </div>


            </div><!-- <div class="modal-body"> -->

            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Close <i class="fas fa-times"></i></button>
              <button type="submit" class="btn btn-success" id="btnInserNews">Save <i class="fas fa-check"></i></button>
                <!-- <div class="modal-content"> -->
              </form>




        
      </div>
    </div>
  </div>
</main>


<?php include 'includes/js_includes.php' ?>
<script type="text/javascript" src="news/views/assets.js"></script>
<?php //include 'assets.js' ?>


