<?php 
include 'function php/conn.php';
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="LGRRC Website">
    <meta name="keywords" content="dilg, calabarzon, lgrrc, lgrc">
    <meta name="author" content="Jeck Castillo">
    <link rel="icon" type="image/png" href="images/lgrc_logo.png">
    <?php include 'includes/css_includes.php'; ?>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
  rel="stylesheet"
/>


    <title>LGRRC</title>
  </head>
  <body>
  <div class="bgImage" style="background-image: url(images/hd7.jpg); background-position: 50% -25px;">
     <!-- Navbar-->
     <?php include 'includes/header.php'; ?>

<br><br><br>
      <div class="container">

          <div class="pt-5">

            <div class="row align-items-center">

              <div class="col-lg-12 mb-4 text-white headingContent">
                <header class="py-5 mt-5">
                    <h1 class="display-6 headingText">Directory of Experts</h1>
                    <p class="lead mb-0 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa nulla sed quis rerum amet natus quas necessitatibus.</p>
                    <a href="#page2" class="btn btn-primary btn-lg mt-3 scrollTo"><i class="fa fa-angle-double-down"></i></a>
                </header>
              </div>



            </div>
            <!-- <div class="row"> -->
          </div>
      </div>
      <span id="page2"></span>

    </div>
    <!-- bgImage -->


    <hr>


 <!-- <div class="parallax"> -->
 <div class="container-fluid">
<br>
<div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-3" style="border-right: 2px solid lightgray;">
        <p style="font-weight: bold;">Categories:</p><br>
        <hr>


        <p>Filter by Name</p>
        <div class="row">
          <div class="input-group col-md-12">
                  <input class="form-control py-2 border-right-0 border" type="search" placeholder ="Name" id="searchName">
                  <span class="input-group-append">
                      <button class="btn btn-outline-secondary border-left-0 border" type="button" id="btnSearchName" onclick="searchCategory('test');">
                          <i class="fa fa-search"></i>
                      </button>
                    </span>
              </div>
        </div>
        <hr>
        <p>Filter Position</p>
        <div class="row">
          <div class="input-group col-md-12">
                  <input class="form-control py-2 border-right-0 border" type="search" placeholder ="Position" id="searchAddress">
                  <span class="input-group-append">
                      <button class="btn btn-outline-secondary border-left-0 border" type="button" id="btnSearchAddress" onclick="searchCategory('test');">
                          <i class="fa fa-search"></i>
                      </button>
                    </span>
              </div>
        </div>
        <hr>
        <p>Filter by Expertise</p>
        <div class="row">
          <?php include 'expertise_selection.php'; ?> 
        </div>
        <hr>

      </div>
      <div class="col-md-7 ml-2">
        <!-- <br><hr> -->
        <center><h2 id="ViewText"></h2></center><br>
        <center><img src="images/loading1.gif" width="40%" id="imgLoading"></center>
        <div class="row" id="directoryOutput">
        </div>
      </div>
    
    </div>
        <!-- <div class="row"> -->

    </div>
  <!-- </div> -->


<br><br><br>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/js_includes.php'; ?>

<script type="text/javascript" src="admin/assets/bootstrap-4/dist/js/BsMultiSelect.js"></script>

  <style type="text/css">
    .dashboardcode-bsmultiselect ul > li {
      color: black;
    }
  </style>
    <script type="text/javascript">

    // $("select").bsMultiSelect();

    $("select").bsMultiSelect({

  cssPatch: {

    choices: {
      listStyleType:'none',
      columnCount:'1'
    },
    picks: {
      listStyleType:'none',
      display:'flex',
      flexWrap:'wrap',
      height:'auto',
      marginBottom:'0'
    },
    choice:'px-md-2 px-1',
    choice_hover:'text-primary bg-light',
    filterInput: {
      border:'0px',
      height:'auto',
      boxShadow:'none',
      padding:'0',
      margin:'0',
      outline:'none',
      backgroundColor:'transparent',
      backgroundImage:'none' // otherwise BS .was-vali<a href="https://www.jqueryscript.net/time-clock/">date</a>d set its image
 
    },
    filterInput_empty:'form-control',
    // need for placeholder, TODO test form-control-plaintext
    // used in staticContentGenerator
    picks_disabled: {
      backgroundColor:'#e9ecef'
    },
    picks_focus: {
      borderColor:'#80bdff',
      boxShadow:'0 0 0 0.2rem rgba(0, 123, 255, 0.25)'
    },
    picks_focus_valid: {
      borderColor:'',
      boxShadow:'0 0 0 0.2rem rgba(40, 167, 69, 0.25)'
    },
    picks_focus_invalid: {
      borderColor:'',
      boxShadow:'0 0 0 0.2rem rgba(220, 53, 69, 0.25)'
    },
    // used in BsAppearance
    picks_def: {
      minHeight:'calc(2.25rem + 2px)'
    },
    picks_lg: {
      minHeight:'calc(2.875rem + 2px)'
    },
    picks_sm: {
      minHeight:'calc(1.8125rem + 2px)'
    },
    // used in pickContentGenerator
    pick: {
      paddingLeft:'0px',
      lineHeight:'1.5em'
    },
    pickButton: {
      fontSize:'1.5em',
      lineHeight:'.9em',
      float:"none"
    },
    pickContent_disabled: {
      opacity:'.65'
    },
    // used in choiceContentGenerator
    choiceContent: {
      justifyContent:'initial'
    },
    // BS problem: without this on inline form menu items justified center
    choiceLabel: {
      color:'inherit'
    },
    // otherwise BS .was-validated set its color
    choiceCheckBox: {
      color:'inherit'
    },
    choiceLabel_disabled: {
      opacity:'.65'
    }
  }
});

// $("select").bsMultiSelect({cssPatch : {
//                    choices: {columnCount:'4' },
//                 }});

    $('#navDir').addClass('active');

    var keywordHolder = '';
    var nameHolder = '';
    var addressHolder = '';


    $("#searchName").on('keyup', function (e) {
        if (e.key === 'Enter' || e.keyCode === 13) 
        {
          if ($(this).val() == '') 
          {
            fetchExperts();
          }
          else
          {
              searchCategory(keywordHolder);
          }
        }
    });


    $("#searchAddress").on('keyup', function (e) {
        if (e.key === 'Enter' || e.keyCode === 13) 
        {
          if ($(this).val() == '') 
          {
            fetchExperts();
          }
          else
          {
              searchCategory(keywordHolder);
          }
        }
    });


    $('#expertise_opt').change(function() {
      console.log('qweqweqwe');
      let opt = $(this).children("option:selected").val();
    
      searchCategory(opt);
    });


    function searchCategory(searchCategory)
    { 
     $('.navPill').removeClass("active");
      // $('.navPill').addClass("active");
      // alert(searchCategory)
      document.getElementById("directoryOutput").hidden=true;

      if (searchCategory != 'test') 
      {
        keywordHolder = searchCategory;
      }

      nameHolder = $('#searchName').val();
      addressHolder = $('#searchAddress').val();

      $('#ViewText').text('Results for: '+keywordHolder+' '+nameHolder+' '+addressHolder);


      $.ajax({

        url:"function php/fetchExperts.php?id="+keywordHolder+'&nameHolder='+nameHolder+'&addressHolder='+addressHolder, 
        method:"GET",  

        contentType:false,
        cache:false,
        processData:false,
        beforeSend:function() {

         $('#imgLoading').show();

        },  
        error:function(data){

                       
        }, 
        success:function(data){
        // alert(data); 
           $('#imgLoading').hide();
          document.getElementById("directoryOutput").innerHTML=data;
          document.getElementById("directoryOutput").hidden=false;

        }
                
        });
    }




    function fetchExperts(){

     $('.navPill').removeClass("active");
     $('#btnAll').addClass("active");
     $('#searchName').val('');
     $('#searchAddress').val('');
     $('#ViewText').text('All Entries');
      document.getElementById("directoryOutput").hidden=true;

     $.ajax({

      url:"function php/fetchExperts.php", 
        method:"POST",  

        contentType:false,
        cache:false,
        processData:false,
        beforeSend:function() {

         $('#imgLoading').show();

        },  
        error:function(data){

                       
        }, 
        success:function(data){
       $('#imgLoading').hide();

      document.getElementById("directoryOutput").innerHTML=data;
      document.getElementById("directoryOutput").hidden=false;

          }
                


        });
    }

    fetchExperts();

    </script>



  </body>
</html>