<header class="header" id="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container-fluid">
          <a href="index.php" class="navbar-brand text-uppercase"><img src="images/lgrc_logo.png" class="mb-3 ml-5" width="55">LGRRC</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link" id="navHome">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link"  id="navAbout">About</a></li>
                    <li class="nav-item"><a href="news.php" class="nav-link"  id="navNews">News</a></li>
                    <li class="nav-item"><a href="msac.php" class="nav-link"  id="navMsac">MSAC</a></li>
                    <!-- <li class="nav-item"><a href="knowledge-products.php" class="nav-link" id="navBook">Knowledge Product</a></li> -->

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navVideos">Knowledge Product</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="knowledge-products.php">Knowledge Products</a>
                            <a class="dropdown-item" href="ct-module.php">CT Panel</a>
                        </div>
                    </li> 

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navVideos">Videos</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="linawin-natin.php">Linawin Natin</a>
                            <a class="dropdown-item" href="sagisag-ng-pagasa.php">Sagisag ng Pag-asa</a>
                            <a class="dropdown-item" href="martesmarites.php">#MartesMarites</a>
                        </div>
                    </li> 

                    <li class="nav-item"><a href="directory.php" class="nav-link"  id="navDir">Directory</a></li>
                    <li class="nav-item"><a href="faq.php" class="nav-link"  id="navFaq">FAQ</a></li>

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navVideos">CT Panel</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="ct-videos.php">Videos</a>
                            <a class="dropdown-item" href="ct-documents.php">Documents</a>
                        </div>
                    </li>  -->
                    <!-- <li class="nav-item"><a href="ct-module.php" class="nav-link"  id="navCt">CT Panel</a></li> -->


                    <li class="nav-item ml-2">
                        <form action="search-result.php" method="post">
                          <div class="input-group">
                            <input type="text" class="form-control" required="" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2" name="searchValue">
                            <div class="input-group-append">
                              <button class="btn btn-outline-secondary" type="submit" name="btnSearch"><i class="fa fa-search"></i></button>
                            </div>
                          </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>