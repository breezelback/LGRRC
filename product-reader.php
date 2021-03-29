<?php 
include 'function php/conn.php';
$fileId = $_GET['id'];
$filename = $_GET['fileName'];


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <?php include 'includes/css_includes.php'; ?>




    <style>
		#app {
		  display: flex;
		  flex-direction: column;
		  /*height: 100vh;*/
		  height: 100vh;
		}
		#toolbar {
		  display: flex;
		  align-items: center;
		  background-color: #555;
		  color: #fff;
		  padding: 0.5em;
		}
		#toolbar button,
		#page-mode input {
		  color: currentColor;
		  background-color: transparent;
		  font: inherit;
		  border: 1px solid currentColor;
		  border-radius: 3px;
		  padding: 0.25em 0.5em;
		}
		#toolbar button:hover,
		#toolbar button:focus,
		#page-mode input:hover,
		#page-mode input:focus {
		  color: lightGreen;
		}
		#page-mode {
		  display: flex;
		  align-items: center;
		  padding: 0.20em 0.2em;
		}

		#viewport-container {
		  flex: 1;
		  background: #eee;
		  overflow: auto;
		}
		#viewport {
		  width: 18%;
		  margin: 0 auto;
		  display: flex;
		  flex-wrap: wrap;
		  align-items: center;
		}
		#viewport > div {
		  text-align: center;
		  max-width: 100%;
		}
		#viewport canvas {
		  width: 100%;
		  box-shadow: 0 2px 5px gray;
		}
		</style>
</head>
<body>
	


	<div id="app">
		<div role="toolbar" id="toolbar">
		  <div id="pager">
		    <button data-pager="prev">prev</button>
		    <button data-pager="next">next</button>
		  </div>
		  <div id="page-mode">
		    <label>Page Mode <input type="number" value="2" min="1"/></label>
		  </div>

		</div>
		<div id="viewport-container"><div role="main" id="viewport"></div></div>
	</div>







    <?php include 'includes/js_includes.php'; ?>


<script src="https://www.jsdelivr.com/package/npm/pdfjs-dist"></script>
<script src="https://cdnjs.com/libraries/pdf.js"></script>
<script src="https://unpkg.com/pdfjs-dist/"></script>
    <script>

	initPDFViewer("products/<?php echo $filename; ?>");




	(function() {
	let currentPageIndex = 0;
	let pageMode =  1;
	let cursorIndex = Math.floor(currentPageIndex / pageMode);
	let pdfInstance = null;
	let totalPagesCount = 0;

	  const viewport = document.querySelector("#viewport");
	  window.initPDFViewer = function(pdfURL) {
	    pdfjsLib.getDocument(pdfURL).then(pdf => {
	      pdfInstance = pdf;
	      totalPagesCount = pdf.numPages;
	      initPager();
	      initPageMode();
	      render();
	    });
	  };

	  function onPagerButtonsClick(event) {
	    const action = event.target.getAttribute("data-pager");
	    if (action === "prev") {
	      if (currentPageIndex === 0) {
	        return;
	      }
	      currentPageIndex -= pageMode;
	      if (currentPageIndex < 0) {
	        currentPageIndex = 0;
	      }
	      render();
	    }
	    if (action === "next") {
	      if (currentPageIndex === totalPagesCount - 1) {
	        return;
	      }
	      currentPageIndex += pageMode;
	      if (currentPageIndex > totalPagesCount - 1) {
	        currentPageIndex = totalPagesCount - 1;
	      }
	      render();
	    }
	  }
	  function initPager() {
	    const pager = document.querySelector("#pager");
	    pager.addEventListener("click", onPagerButtonsClick);
	    return () => {
	      pager.removeEventListener("click", onPagerButtonsClick);
	    };
	  }

	  function onPageModeChange(event) {
	    pageMode = Number(event.target.value);
	    render();
	  }
	  function initPageMode() {
	    const input = document.querySelector("#page-mode input");
	    input.setAttribute("max", totalPagesCount);
	    input.addEventListener("change", onPageModeChange);
	    return () => {
	      input.removeEventListener("change", onPageModeChange);
	    };
	  }

	  function render() {
	    cursorIndex = Math.floor(currentPageIndex / pageMode);
	    const startPageIndex = cursorIndex * pageMode;
	    const endPageIndex =
	      startPageIndex + pageMode < totalPagesCount
	        ? startPageIndex + pageMode - 1
	        : totalPagesCount - 1;

	    const renderPagesPromises = [];
	    for (let i = startPageIndex; i <= endPageIndex; i++) {
	      renderPagesPromises.push(pdfInstance.getPage(i + 1));
	    }

	    Promise.all(renderPagesPromises).then(pages => {
	      const pagesHTML = `<div style="width: ${
	        pageMode > 1 ? "50%" : "100%"
	      }"><canvas></canvas></div>`.repeat(pages.length);
	      viewport.innerHTML = pagesHTML;
	      pages.forEach(renderPage);
	    });
	  }

	  function renderPage(page) {
	    let pdfViewport = page.getViewport(1);

	    const container =
	      viewport.children[page.pageIndex - cursorIndex * pageMode];
	    pdfViewport = page.getViewport(container.offsetWidth / pdfViewport.width);
	    const canvas = container.children[0];
	    const context = canvas.getContext("2d");
	    canvas.height = pdfViewport.height;
	    canvas.width = pdfViewport.width;

	    page.render({
	      canvasContext: context,
	      viewport: pdfViewport
	    });
	  }
	})();
    </script>



</body>
</html>