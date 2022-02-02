<?php 
include 'function php/conn.php';

if (isset($_GET['id'])) 
{
  $id = $_GET['id'];
  $qry = ' WHERE `id` = "'.$id.'" ';
}
else
{
  $qry = '';
}


$sql = ' SELECT `id` FROM `tbl_knowledge_products` '.$qry.' ORDER BY `id` DESC ';
$exec = $conn->query($sql);
$row = $exec->fetch_assoc();

if (isset($_POST['btnSearch'])) 
{
  $searchValue = 'AND `title` LIKE "'.$_POST['searchValue'].'%" OR `title` LIKE "%'.$_POST['searchValue'].'" OR `title` LIKE "%'.$_POST['searchValue'].'%"  ';

  if ($_POST['searchValue'] != '') 
  {
     $searchTxt = 'Search result for <b>'.$_POST['searchValue'].'</b>';
  }
  else
  {
    $searchTxt = '';
  }
 
}
else
{
  $searchValue = '';
  $searchTxt = '';
}


 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="LGRRC Website">
    <meta name="keywords" content="dilg,lgrc calabarzon,lgrrc calabarzon,lgrrc,lgrc, calabarzon, dilg calabarzon">
    <meta name="author" content="Jeck Castillo">
    <link rel="icon" type="image/png" href="images/lgrc_logo.png">
    <?php include 'includes/css_includes.php'; ?>
    <style type="text/css">
      .bookOutput
      {
        border-right: 2px solid lightgray; 
        background-color: lightgray; 
        padding:15px; border-radius:5px;
        height: 700px;
        overflow-y: scroll;
      }
      .bookOutput::-webkit-scrollbar {
        width: 5px;               /* width of the entire scrollbar */
      }

      .bookOutput::-webkit-scrollbar-track {
        background: whitesmoke;        /* color of the tracking area */
      }

      .bookOutput::-webkit-scrollbar-thumb {
        background-color: gray;    /* color of the scroll thumb */
        border-radius: 20px;       /* roundness of the scroll thumb */
        border: 3px solid gray;  /* creates padding around scroll thumb */
      }

    </style>
    <title>LGRRC</title>
  </head>
  <body>
  <div class="bgImageSmall" style="background-image: url(images/hd7.jpg); background-position: 50% -25px;">
     <!-- Navbar-->
     <?php include 'includes/header.php'; ?>

<!--       <br><br><br>
      <div class="container">

          <div class="pt-5">

            <div class="row align-items-center">

              <div class="col-lg-12 mb-4 text-white headingContent">
                <header class="py-5 mt-5">
                    <h1 class="display-6 headingText">Knowledge Products</h1>
                    <a href="#page2" class="btn btn-primary btn-lg mt-3 scrollTo"><i class="fa fa-angle-double-down"></i></a>
                </header>
              </div>



            </div>
          </div>
      </div>

      <span id="page2"></span> -->
    </div>
    <!-- bgImage -->


    <hr>

 <!-- <div class="parallax"> -->
 <div class="container-fluid">
<br>
<div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-2 bookOutput">
        <p style="font-weight: bold;"><i class="fa fa-search"></i> Search : </p>
        
        <!-- <p>Search</p> -->
        <div class="row">
          <form action="" method="post"> 
            <div class="input-group col-md-12"> 
                <input class="form-control py-2 border-right-0 border" type="search" placeholder ="Title" name="searchValue">
                <span class="input-group-append">
                  <button class="btn btn-outline-secondary border-left-0 border" type="submit" name="btnSearch">
                  <i class="fa fa-search"></i>
                  </button>
                </span>
            </div>
          </form> 
        </div>
        <hr>

        <center><?php echo $searchTxt; ?></center>

        <div class="files">
          <?php 
          $sql = ' SELECT `id`, `filename`, `title`, `status`, `dateUploaded` FROM `tbl_knowledge_products` WHERE `status` = "published" '.$searchValue.' ORDER BY `title` ASC ';
          $exec = $conn->query($sql);
          while ($res = $exec->fetch_assoc())
          {
            $phpdate = strtotime( $res['dateUploaded'] );
            $mysqldate = date( 'M d, Y', $phpdate );
          ?>
            <div class="fileLink" onclick="viewFile(<?php echo $res['id']; ?>);">
              <p style="color:blue;"><?php echo $res['title']; ?><br>.....................</p>
              <p class="text-muted" style="font-size:10px;"><?php echo $mysqldate; ?></p>
            </div>

          <?php } ?>
        </div>
        <!-- <div class="files"> -->
      </div>
      <div class="col-md-7 ml-2">
        <!-- <br><hr> -->
            <div id="imgLoading"><center><img src="images/loading1.gif" width="30%"></center></div>
        <div class="row">
          <div class="col-md-12" id="productOutput">
              






          </div>
          <!-- <div class="col-md-12"> -->




        </div>


      </div>
    
    </div>
        <!-- <div class="row"> -->

    </div>
  <!-- </div> -->
<div id="modalRead" data-izimodal-group="group1"></div>



<br><br><br>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/js_includes.php'; ?>

    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js">
    </script>

    <script>


        var myState = {
            pdf: null,
            currentPage: 1,
            zoom: 0.5
        }
      
    
 
        function render() {
            myState.pdf.getPage(myState.currentPage).then((page) => {
          
                var canvas = document.getElementById("pdf_renderer");
                var ctx = canvas.getContext('2d');
      
                var viewport = page.getViewport(myState.zoom);
 
                canvas.width = viewport.width;
                canvas.height = viewport.height;
          
                page.render({
                    canvasContext: ctx,
                    viewport: viewport
                });
            });
        }
    </script>


    <script type="text/javascript">

    $('#navBook').addClass('active');

    var idHolder = 0;

    var dataTable = '';

 
    //-----------------------------------------------------------DOWNLOAD PDF----------------------------------------------------------
    $(document).on('click', "#td_btn_delete", function(){
     
      var fileName=$(this).data("id_delete");
      var files = fileName.split("/");
      var name = files[0];
      var id = files[1];

      
      window.location = 'admin/function php/download.php?fileName='+name+'&id='+id;
     });

    //-----------------------------------------------------------DOWNLOAD PDF----------------------------------------------------------





    //----------------------------------------------------------READ PDF----------------------------------------------------------------
    $(document).on('click', "#td_btn_edit", function(){
      var fileName=$(this).data("id_edit");
      var files = fileName.split("/");
      var name = files[0];
      var id = files[1];

      // alert(name);

      $('#modalRead').iziModal({
      title: 'Read Book',
      headerColor: '#192f72',
      width: 970,
      iframe: true, 
      // iframeHeight: 500, 
      // iframeURL: 'product-reader.php?fileName='+name+'&id='+id,
      iframeURL: 'pdfjs/index.php?fileName='+name+'&id='+id,
      openFullscreen: true,
      // fullscreen:true,
      closeOnEscape: true,
      closeButton: true,
      onClosed: function(){document.getElementById("header").hidden=false;}
      });


      document.getElementById("header").hidden=true;

      // window.location = 'product-reader.php?fileName='+name+'&id='+id;

      window.open('pdfjs/index.php?fileName='+name+'&id='+id);
      location.reload();
      // $('#modalRead').iziModal('open', this); 

    });
    //----------------------------------------------------------READ PDF----------------------------------------------------------------


    $('#imgLoading').hide();

    //----------------------------------------------------------VIEW MENU----------------------------------------------------------------
    function viewFile(id)
    {
      idHolder = id;
       $.ajax({

        url:"function php/fetchProduct.php?id="+id, 
          method:"POST",  

          contentType:false,
          cache:false,
          processData:false,
          beforeSend:function() {
          document.getElementById("productOutput").hidden=true;
           $('#imgLoading').show();


          },  
          error:function(data){

                         
          }, 
          success:function(data){
           $('#imgLoading').hide();
           // alert(data);
          document.getElementById("productOutput").innerHTML=data;
          document.getElementById("productOutput").hidden=false;

          var filename = $('#filename').val();

            pdfjsLib.getDocument('products/'+filename).then((pdf) => {
  
              myState.pdf = pdf;
              render();
   
            });
          }
                  


          });
    }
    viewFile('<?php echo $row['id']; ?>');

    //----------------------------------------------------------VIEW MENU----------------------------------------------------------------







    </script>



  </body>
</html>