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
  <meta name="keywords" content="dilg,lgrc calabarzon,lgrrc calabarzon,lgrrc,lgrc, calabarzon, dilg calabarzon">
  <meta name="author" content="DILG IV-A">
  <link rel="icon" type="image/png" href="images/lgrc_logo.png">
  <?php include 'includes/css_includes.php'; ?>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />


  <title>LGRRC</title>
  <style>
    html,
    body {

      font-family: Poppins, Helvetica, "sans-serif";
      -ms-text-size-adjust: 100%;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    /* width */
    .expertisePanel::-webkit-scrollbar {
      width: 10px;
    }

    /* Track */
    .expertisePanel::-webkit-scrollbar-track {
      background: #f1eaea;
    }

    /* Handle */
    .expertisePanel::-webkit-scrollbar-thumb {
      background: #e8e6e6;
    }

    /* Handle on hover */
    .expertisePanel::-webkit-scrollbar-thumb:hover {
      /*background: #555; */
      background: whitesmoke;
    }

    #expertise_opt {
      min-height: 190px;
      overflow-y: auto;
      overflow-x: hidden;
      position: absolute;
      width: 300px;
      display: contents;
    }

    .card {
      width: 100%;
      height: 350px;
      background: #3405a3;
      border-radius: 15px;
      box-shadow: 1px 5px 60px 0px #100a886b;
    }

    .card .card-border-top {
      width: 60%;
      height: 5%;
      background: #6b64f3;
      margin: 0px 40px;
      border-radius: 0px 0px 15px 15px;
    }

    .card span {
      font-weight: 600;
      color: white;
      text-align: center;
      display: block;
      padding-top: 10px;
      font-size: 16px;
    }

    .card .job {
      font-weight: 400;
      color: white;
      display: block;
      text-align: center;
      padding-top: 3px;
      font-size: 12px;
    }

    .card .img {
      width: 150px;
      height: 150px;
      background: #6b64f3;
      border-radius: 15px;
      margin: auto;
      margin-top: 25px;
    }

    .card button {
      padding: 8px 25px;
      display: block;
      margin: auto;
      border-radius: 8px;
      border: none;
      margin-top: 30px;
      background: #6b64f3;
      color: white;
      font-weight: 600;
    }

    .card button:hover {
      background: #534bf3;
    }

    .img-card {
      width: 150px;
      height: 150px;
      border-radius: 15px;
      margin: auto;
    }

    #page_navigation a {
      padding: 0.7rem 1rem;
      border: 1px solid #2163e8;
      margin: 2px;
      color: #595d69;
      text-decoration: none;
      border-radius: 0.25rem;
    }

    .active-page {
      background-color: #192f72;
      color: #fff !important;
    }
  </style>
</head>

<body>
  <div class="bgImageSmall" style="background-image: url(images/hd7.jpg); background-position: 50% -25px;">
    <!-- Navbar-->
    <?php include 'includes/header.php'; ?>

  </div>


  <!-- <div class="parallax"> -->
  <div class="container position-relative">
    <br>
    <div class="row" data-aos="fade-up" data-aos-duration="1500">
      <div class="col-md-9">
        <h1 class="display-6">Directory of Experts</h1>
      </div>
      <div class="col-md-12">
        <p style="font-size: 12pt; text-align: justify; text-indent: 10px;">LGRRC IV-A is positioned to be the central provider of knowledge products and as the main link between and among national and local governments. As the regional convergence platform for Capacity Development (CapDev) of the local governments, LGRRC IV-A continues to improve its services in providing CapDev intervention and developing mechanisms to ensure efficient utilization of government resources.</p>
        <p style="font-size: 12pt; text-align: justify; text-indent: 10px;">In compliance with its role as the regional convergence platform for CapDev, the LGRRC through its Multi-Sectoral Advisory Committee (MSAC) passed Resolution No. 2022-02 dealing with the Certification of Experts on different Local Governance facets from among the Local Government Operation Officers of the Department and Members of MSAC, thus creating a database of internal trainers who can provide technical assistance to local governments.</p>
      </div>
      <div class="col-md-3" style="border-right: 2px solid lightgray;">
        <p style="font-weight: bold;">Categories:</p>

        <button class="btn btn-sm float-right text-white" style="background-color: gray;" id="btnReload" rel="tooltip" title="Refresh"><i class="fa fa-sync-alt"></i></button>
        <br>
        <hr>


        <p>Filter by Expertise</p>
        <div class="row">
          <?php include 'expertise_selection.php'; ?>
        </div>
        <hr>

      </div>
      <div class="col-md-7 ml-2">
        <!-- <br><hr> -->
        <center>
          <h2 id="ViewText"></h2>
        </center><br>
        <center><img src="images/loading1.gif" width="40%" id="imgLoading"></center>
        <div class="row" id="directoryOutput">

        </div>
        <div id="page_navigation">
          <a id="previous" data-page="1">&lt;&lt;</a>
          <a id="page_num" class="page_link" data-page="1">1</a>
          <a id="page_num2" class="page_link" data-page="11">2</a>
          <a id="page_num3" class="page_link" data-page="21">3</a>
          <a id="page_num4" class="page_link" data-page="31">4</a>
          <a id="page_num5" class="page_link" data-page="41">5</a>
          <a class="next_link" id="next">&gt;&gt;</a>
        </div>
      </div>
      <!-- asd -->
    </div>
    <!-- <div class="row"> -->

  </div>
  <!-- </div> -->


  <br><br><br>

  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/js_includes.php'; ?>


  <style type="text/css">
    .dashboardcode-bsmultiselect ul>li {
      color: black;
    }
  </style>

  <script type="text/javascript">
    const itemsPerPage = 10; // Number of items per page
    let currentPage = 1; // Current page
    let totalPages = 1000;
    // $("select").bsMultiSelect();
    $(document).ready(function() {
      $('.page_link').on('click', function() {
        var pageNumber = $(this).data('page');
        // Remove 'active-page' class from all elements with class 'page_link'
        $('.page_link').removeClass('active-page');

        // Handle page-specific logic
        go_to_page(pageNumber);

        // Handle 'next' and 'previous' elements if needed
        $('#next, #previous').removeClass('active-page');
        $(this).addClass('active-page');
      });

      $('#previous').on('click', function() {
        previous();
        $('.page_link').removeClass('active-page');
        $('#next').removeClass('active-page');
        $(this).addClass('active-page');
      });

      $('#next').on('click', function() {
        next();
        $('.page_link').removeClass('active-page');
        $('#previous').removeClass('active-page');
        $(this).addClass('active-page');
      });
    })
    // Function to go to a specific page
    function go_to_page(page) {
      currentPage = page;
      fetchExperts(page);
      // Update pagination links here
    }

    // Function to go to the next page
    function next() {
      if (currentPage < totalPages) {
        go_to_page(currentPage + 10);
        console.log(currentPage+"--"+totalPages);
      } else {
        console.log("Page reaches limit")
      }
    }

    // Function to go to the previous page
    function previous() {
      console.log(currentPage);
      if (currentPage > 1) {
        go_to_page(currentPage - 10);
      }
    }
    $("select").bsMultiSelect({

      cssPatch: {

        choices: {
          listStyleType: 'none',
          columnCount: '1'
        },
        picks: {
          listStyleType: 'none',
          display: 'flex',
          flexWrap: 'wrap',
          height: 'auto',
          marginBottom: '0'
        },
        choice: 'px-md-2 px-1',
        choice_hover: 'text-primary bg-light',
        filterInput: {
          border: '0px',
          height: 'auto',
          boxShadow: 'none',
          padding: '0',
          margin: '0',
          outline: 'none',
          backgroundColor: 'transparent',
          backgroundImage: 'none' // otherwise BS .was-vali<a href="https://www.jqueryscript.net/time-clock/">date</a>d set its image

        },
        filterInput_empty: 'form-control',
        // need for placeholder, TODO test form-control-plaintext
        // used in staticContentGenerator
        picks_disabled: {
          backgroundColor: '#e9ecef'
        },
        picks_focus: {
          borderColor: '#80bdff',
          boxShadow: '0 0 0 0.2rem rgba(0, 123, 255, 0.25)'
        },
        picks_focus_valid: {
          borderColor: '',
          boxShadow: '0 0 0 0.2rem rgba(40, 167, 69, 0.25)'
        },
        picks_focus_invalid: {
          borderColor: '',
          boxShadow: '0 0 0 0.2rem rgba(220, 53, 69, 0.25)'
        },
        // used in BsAppearance
        picks_def: {
          minHeight: 'calc(2.25rem + 2px)'
        },
        picks_lg: {
          minHeight: 'calc(2.875rem + 2px)'
        },
        picks_sm: {
          minHeight: 'calc(1.8125rem + 2px)'
        },
        // used in pickContentGenerator
        pick: {
          paddingLeft: '0px',
          lineHeight: '1.5em'
        },
        pickButton: {
          fontSize: '1.5em',
          lineHeight: '.9em',
          float: "none"
        },
        pickContent_disabled: {
          opacity: '.65'
        },
        // used in choiceContentGenerator
        choiceContent: {
          justifyContent: 'initial'
        },
        // BS problem: without this on inline form menu items justified center
        choiceLabel: {
          color: 'inherit'
        },
        // otherwise BS .was-validated set its color
        choiceCheckBox: {
          color: 'inherit'
        },
        choiceLabel_disabled: {
          opacity: '.65'
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


    $("#searchName").on('keyup', function(e) {
      if (e.key === 'Enter' || e.keyCode === 13) {
        if ($(this).val() == '') {
          fetchExperts();
        } else {
          searchCategory(keywordHolder);
        }
      }
    });


    $("#searchAddress").on('keyup', function(e) {
      if (e.key === 'Enter' || e.keyCode === 13) {
        if ($(this).val() == '') {
          fetchExperts();
        } else {
          searchCategory(keywordHolder);
        }
      }
    });


    $('#expertise_opt').change(function() {
      let opt = $(this).children("option:selected").val();
      var expertiseVal = $(this).val();

      if (opt) {
        if (expertiseVal.length > 1) {
          searchCategory(opt, expertiseVal);
        } else {
          searchCategory(opt);
        }
      } else {
        fetchExperts();
      }

    });


    function searchCategory(searchCategory, identifier) {
      $('.navPill').removeClass("active");
      // $('.navPill').addClass("active");
      // alert(searchCategory)
      document.getElementById("directoryOutput").hidden = true;

      if (searchCategory != 'test') {
        keywordHolder = searchCategory;
      }

      // nameHolder = $('#searchName').val();
      // addressHolder = $('#searchAddress').val();
      nameHolder = '';
      addressHolder = '';

      $('#ViewText').text('Results for: ' + keywordHolder + ' ' + nameHolder + ' ' + addressHolder);

      $.ajax({

        url: "function php/fetchExperts.php?id=" + keywordHolder + '&nameHolder=' + nameHolder + '&addressHolder=' + addressHolder + '&identifier=' + identifier,
        method: "GET",
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function() {

          $('#imgLoading').show();

        },
        error: function(data) {


        },
        success: function(data) {
          // alert(data); 
          $('#imgLoading').hide();
          document.getElementById("directoryOutput").innerHTML = data;
          document.getElementById("directoryOutput").hidden = false;

        }

      });
    }



    function fetchExperts(page) {

      $('.navPill').removeClass("active");
      $('#btnAll').addClass("active");
      $('#searchName').val('');
      $('#searchAddress').val('');
      $('#ViewText').text('All Entries');
      document.getElementById("directoryOutput").hidden = true;

      $.ajax({

        url: "route/fetch_experts.php",
        type: "POST",
        data: {
          page: page,
          itemsPerPage: itemsPerPage
        },
        beforeSend: function() {

          $('#imgLoading').show();

        },
        success: function(data) {

          let lists = JSON.parse(data);
          $('#directoryOutput').empty();

          let ex = '';

          $.each(lists, function(key, item) {
            // Create an image element for each item
            var imgElement = $('<img>', {
              src: 'images/expert/' + item['imageName'],
              alt: 'Original Image',
              class: 'img-card media-object'
            });

            // Check if the image exists
            imgElement.on("error", function() {
              // If the image doesn't exist, replace the source with a default image
              $(this).attr('src', 'images/expert/img.png');
            });

            // Create a card element for the item
            var card = $('<div>', {
              class: 'col-md-4 asda',
              align: 'center'
            });

            // Add other card content
            card.html(
              '<a href="directory-profile.php?id=82" style="text-decoration: none; color:black;">' +
              '<div class="card">' +
              '<div class="card-border-top"></div>' +
              '<div class="img">' + imgElement.prop('outerHTML') + '</div>' +
              '<span>' + item['name'] + '</span>' +
              '<p class="job">' + item['expertise'] + '</p>' +
              '<p class="job">' + item['province'] + '<br>' + item['address'] + '</p>' +
              '</div></a><hr>'
            );

            // Append the card to the container (e.g., $('#container') or another parent element)
            $('#directoryOutput').append(card);
          });
          $('#imgLoading').hide();

          document.getElementById("directoryOutput").hidden = false;

        }



      });
    }

    fetchExperts(1);



    $('#btnReload').click(function() {
      fetchExperts();


      $('#searchName').val('');
      $('#searchAddress').val('');
      // $('#expertise_opt').removeAttr("selected");
      $("#expertise_opt option:selected").removeAttr("selected");
    });



    $('#expertiseSearch').change(function() {
      let expertiseSearch = $('#expertiseSearch').val();
      alert(expertiseSearch);
    });
  </script>



</body>

</html>