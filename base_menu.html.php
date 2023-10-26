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

    <link rel="stylesheet" href="carousel/dist/demo-only/demo-css/general.css" type="text/css" />
    <link rel="stylesheet" href="carousel/dist/mibreit-gallery/css/mibreitGallery.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <title>LGRRC | <?php emptyblock('title'); ?></title>
    <style type="text/css">
       

        .menuOutput {
            height: 400px;
            overflow-y: scroll;
        }

        .menuOutput::-webkit-scrollbar {
            width: 3px;
        }

        .menuOutput::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px #d7e5fc;
            border-radius: 5px;
            /*color: #d7e5fc;*/
        }

        .menuOutput::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        .mibreit-enter-fullscreen-button {
            display: none;
        }

        .zoomable-image {
            width: 100%;
            margin-bottom: 100px;
            transition: transform 0.3s;
        }

        .zoomable-image:hover {
            transform: scale(1.2);
        }
    </style>
</head>

<body>
    <div class="bgImageSmall" style="background-image: url(images/hd7.jpg); background-position: 50% -25px;"></div>
        <!-- Navbar-->
        <?php include 'includes/header.php'; ?>
        <div>
            <?php emptyblock('content') ?>

        </div>

        <div id="footer">
            <?php startblock('footer') ?>
            <?php include 'includes/footer.php'; ?>
            <?php endblock() ?>
        </div>
</body>

<?php include 'includes/js_includes.php'; ?>
<script src="carousel/dist/mibreit-gallery/mibreitGallery.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {
        // Get the current page's URL path
        var currentPath = window.location.pathname;


        // Loop through navigation links and check if the URL matches
        $('.nav-link').each(function() {
            if (currentPath === '/LGRRC/data-privacy-notice.php') {
                $('#navPrivacy').addClass('active');
            } else if (currentPath === '/LGRRC/knowledge_products.php') {
                $('#navBook').addClass('active');
            } else if (currentPath === '/LGRRC/msac_directory.php') {
                $('#navMsac').addClass('active');
            }
        });
    })
</script>

</html>



<body>