<?php 
$fileId = $_GET['id'];
$filename = $_GET['fileName'];
// $fileId = 1;
// $filename = 'p1.pdf';

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="../admin/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../fonts/font awesome/css/all.min.css">


        <link rel="stylesheet" href="../admin/assets/izimodal/css/iziModal.min.css">

        <link rel="stylesheet" href="../styles/styles.css" >

        <link rel="stylesheet" type="text/css" href="../admin/DataTables/datatables.min.css"/>



        <style>
            canvas {
                width: 500px;
                height: 600px;
                border: 3px solid black;
                border-radius: 10px;

            }
           /* button {
                outline :0;
                border: none;
                border-radius: 3px;
                color: white;
                background: black;
                width: 100px;
                height: 40px;
                transition: all .1s ease-in-out;
            }
            button:hover {
                background:  none;
                border: 3px solid black;
                color: black;
            }*/
        </style>
    </head>
    <body style="background-color: #bfbfbf;">

        <nav class="navbar fixed-top navbar-light bg-dard">
          <a class="navbar-brand" href="#"></a>
          <a href="#" id="btnClose" class="btn btn-danger text-white">Close <i class="fa fa-times"></i></a>
        </nav>
        <br><br><br>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <center>
                        <canvas id="pdf_canvas"></canvas><br>
                        <button class="btn btn-primary" id="prev_page">Previous</button>
                        <button class="btn btn-primary" id="next_page">Next</button>
                        <span id="current_page_num"></span>
                            of
                        <span id="total_page_num"></span>
                            
                        <input type="text" id="page_num">
                        <button class="btn btn-primary" id="go_to_page">Go To Page</button>


                       <!--  <div id="adobe-dc-view"></div>
                        <script src="https://documentcloud.adobe.com/view-sdk/main.js"></script>
                        <script type="text/javascript">
                            document.addEventListener("adobe_dc_view_sdk.ready", function(){ 
                                var adobeDCView = new AdobeDC.View({clientId: "616875dcfc954a2399f243703ada6fc9", divId: "adobe-dc-view"});
                                adobeDCView.previewFile({
                                    content:{location: {url: "https://documentcloud.adobe.com/view-sdk-demo/PDFs/Bodea Brochure.pdf"}},
                                    metaData:{fileName: "Bodea Brochure.pdf"}
                                }, {});
                            });
                        </script> -->

                    </center>
                </div>
            </div>
        </div>
        
        <!-- Replace pdf.js with downloaded pdf.js file -->
        <script src="pdfjs/build/pdf.js" charset="utf-8"></script>
        <!-- <script src="script.js" charset="utf-8"></script> -->
        
        <script type="text/javascript" src="../admin/assets/js/jquery3.min.js"></script>

        <script type="text/javascript" src="../admin/assets/js/sweetalert2.all.min.js"></script>

        <script type="text/javascript" src="../admin/assets/js/bootstrap.min.js"></script>


        <script type="text/javascript" src="../admin/assets/izimodal/js/iziModal.min.js"></script>


        <script type="text/javascript" src="../admin/DataTables/datatables.min.js"></script>

            




        <script>
            // intial params
            let pdf ;
            let canvas;
            let isPageRendering;
            let  pageRenderingQueue = null;
            let canvasContext;
            let totalPages;
            let currentPageNum = 1;

            // events
            window.addEventListener('load', function () {
                isPageRendering= false;
                pageRenderingQueue = null;
                canvas = document.getElementById('pdf_canvas');
                canvasContext = canvas.getContext('2d');
                
                initEvents();
                initPDFRenderer();
            });

            function initEvents() {
                let prevPageBtn = document.getElementById('prev_page');
                let nextPageBtn = document.getElementById('next_page');
                let goToPage = document.getElementById('go_to_page');
                prevPageBtn.addEventListener('click', renderPreviousPage);
                nextPageBtn.addEventListener('click',renderNextPage);
                goToPage.addEventListener('click', goToPageNum);
            }

            // init when window is loaded
            function initPDFRenderer() {
                const url = '../products/<?php echo $filename; ?>'; // replace with your pdf location
                // const cMapUrl = '/cmaps/';
                // const cMapPacked = true;
                let option  = { url};
                

                pdfjsLib.getDocument(option).promise.then(pdfData => {
                    totalPages = pdfData.numPages;
                    let pagesCounter= document.getElementById('total_page_num');
                    pagesCounter.textContent = totalPages;

                    // assigning read pdfContent to global variable
                    pdf = pdfData;
                    console.log(pdfData);
                    renderPage(currentPageNum);
                });
            }

            function renderPage(pageNumToRender = 1, scale = 1) {
                isPageRendering = true;
                document.getElementById('current_page_num').textContent = pageNumToRender;
                pdf.getPage(pageNumToRender).then(page => {
                    const viewport = page.getViewport({scale :1});
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;  
                    let renderCtx = {canvasContext ,viewport};
                    page.render(renderCtx).promise.then(()=> {
                        isPageRendering = false;
                        if(pageRenderingQueue !== null) { // this is to check of there is next page to be rendered in the queue
                            renderPage(pageNumToRender);
                            pageRenderingQueue = null; 
                        }
                    });        
                }); 
            }

            function renderPageQueue(pageNum) {
                if(pageRenderingQueue != null) {
                    pageRenderingQueue = pageNum;
                } else {
                    renderPage(pageNum);
                }
            }

            function renderNextPage(ev) {
                if(currentPageNum >= totalPages) {
                    alert("This is the last page");
                    return ;
                } 
                currentPageNum++;
                renderPageQueue(currentPageNum);
            }

            function renderPreviousPage(ev) {
                if(currentPageNum<=1) {
                    alert("This is the first page");
                    return ;
                }
                currentPageNum--;
                renderPageQueue(currentPageNum);
            }

            function goToPageNum(ev) {
                let numberInput = document.getElementById('page_num');
                let pageNumber = parseInt(numberInput.value);
                if(pageNumber) {
                    if(pageNumber <= totalPages && pageNumber >= 1){
                        currentPageNum = pageNumber;
                        numberInput.value ="";
                        renderPageQueue(pageNumber);
                        return ;
                    }
                }
                    alert("Enter a valide page numer");
            }


            $('#btnClose').click(function(){
                window.close();
            });
        </script>


    </body>
</html>