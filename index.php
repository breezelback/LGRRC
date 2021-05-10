<?php 
session_start();

if (isset($_GET['auth'])) 
{
  $auth = 'Please login first!';
}
else
{
  $auth = '';
}

include 'function php/conn.php'; 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="LGRRC Website">
    <meta name="keywords" content="dilg,lgrc calabarzon,lgrrc calabarzon,lgrrc,lgrc">
    <meta name="author" content="Jeck Castillo">
    <link rel="icon" type="image/png" href="images/lgrc_logo.png">
    <?php include 'includes/css_includes.php'; ?>
    <style>
      .btn .btnBadge
      {
        background-color: red;
        color: white;
        margin-top: 330px;
        position: absolute;
        margin-left: -34px;
      }
    </style>
    <title>LGRRC CALABARZON</title>
  </head>
  <body>
  <div class="bgImage" style="background-image: url(images/hd7.jpg); background-position: 50% -25px;">
  <!-- <div class="bgImage1" style="background-image: url(images/LGRC_gif.gif); background-position: 50% -25px;"> -->
     <!-- Navbar-->
     <?php include 'includes/header.php'; ?>
    <br><br><br><br>

      <div class="container">

          <div class="pt-5">

            <div class="row align-items-center heading">

              <div class="col-lg-7 mb-4 text-white">
                <!-- <header class="py-5 mt-5"> -->
                <header>
                    <h1 class="display-6 headingText">Local Governance Regional Resource Center (LGRRC)</h1>
                    <p class="lead mb-0 text-muted">Builds learning communities that pursue local governance excellence through knowledge sharing.</p>
                    <a href="#facilitiesId" class="btn btn-primary btn-lg mt-3 scrollTo">Who Are We</a>
                </header>
              </div>
              <div class="col-md-5">
                <div class="py-5">
                   <div class="form-box">

                    <?php 
                    if (isset($_SESSION['id'])) 
                    {
                      $selectUser = ' SELECT `id`, `lastname`, `firstname`, `middlename`, `address`, `mobile`, `birthday`, `username`, `password`, `status`, `dateUploaded`, `borrowerId`, `email` FROM `tbl_user` WHERE `id` = "'.$_SESSION['id'].'" ';
                      $execUser = $conn->query($selectUser);
                      $resUser = $execUser->fetch_assoc();

                      ?>
                      <!-- Welcome<br> -->
                      <!-- <marquee behavior="" direction=""><span style="font-family:monospace; font-size:30px;">Welcome</span></marquee> -->
                     <span style="font-family:monospace; font-size:20px;">Welcome</span><br>
                      <img src="images/attachedagency_dilgcentral.png" alt="" width="70">
                      <p>Borrow ID: <b style="color:red;"><?php echo $resUser['borrowerId']; ?></b></p>
                      <h5 class="mt-3"><?php echo $resUser['lastname'].', '.$resUser['firstname'].' '.$resUser['middlename']; ?></h5>
                      <h6 class="mb-3"><?php echo $resUser['address'];?></h6>


                      

                      <?php 
                      $countRequest = ' SELECT COUNT(`id`) as totalRequest FROM `tbl_request` WHERE `requestorId` = "'.$resUser['borrowerId'].'" ';
                      $execRequest = $conn->query($countRequest);
                      $resRequest = $execRequest->fetch_assoc();
                       ?>



                      <button type="button" class="btn m-2 btn-warning text-white" data-toggle="modal" data-target="#modalRequest" data-toggle="tooltip" data-placement="top" title="Expert Requests"><i class="fa fa-paper-plane"></i><span class="badge badge-light btnBadge"><?php echo $resRequest['totalRequest']; ?></span></button>



                      <?php 
                      $countBorrowed = ' SELECT COUNT(`id`) as totalBorrowed FROM `tbl_downloads` WHERE `borrowerId` = "'.$resUser['borrowerId'].'" ';
                      $execBorrowed = $conn->query($countBorrowed);
                      $resBorrowed = $execBorrowed->fetch_assoc();
                       ?>

                      <button type="button" class="btn m-2 btn-success" data-toggle="modal" data-target="#modalLog" data-toggle="tooltip" data-placement="top" title="Borrowed Product Logs"><i class="fa fa-list"></i><span class="badge badge-light btnBadge"><?php echo $resBorrowed['totalBorrowed']; ?></span></button>

                      <button type="button" class="btn m-2 btn-primary" data-toggle="modal" data-target="#modalUpdate" data-toggle="tooltip" data-placement="top" title="Update Profile"><i class="fa fa-user-cog"></i></button>
                      <a href="function php/logout.php" class="btn m-2 btn-danger" data-toggle="tooltip" data-placement="top" title="Logout"><i class="fa fa-sign-out-alt"></i></a>


                      <span id="clock" style="font-family: monospace; font-size:16px;"></span>



                      <!-------------------------------- MODAL UPDATE PROFILE ----------------------------->
                     
                      <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdate" aria-hidden="true">
                        <div class="modal-dialog modal-md" role="document">
                          <div class="modal-content">
                            <div class="modal-header text-white" style="background-color: #007bff;">
                              <h5 class="modal-title" style="margin: 0 auto;" id="exampleModalLabel">Update Profile Information</h5>
                              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button> -->
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-sm-4">
                                  Lastname:
                                  <input type="text" class="form-control" id="updateLastname" value="<?php echo $resUser['lastname']; ?>">
                                </div>
                                <div class="col-sm-4">
                                  Firstname:
                                  <input type="text" class="form-control" id="updateFirstname" value="<?php echo $resUser['firstname']; ?>">
                                </div>
                                <div class="col-sm-4">
                                  Middlename:
                                  <input type="text" class="form-control" id="updateMiddlename" value="<?php echo $resUser['middlename']; ?>">
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-sm-6">
                                  Address:
                                  <input type="text" class="form-control" id="updateAddress" value="<?php echo $resUser['address']; ?>">
                                </div>
                                <div class="col-sm-6">
                                  Contact Number:
                                  <input type="text" class="form-control" id="updateMobile" value="<?php echo $resUser['mobile']; ?>">
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-sm-6">
                                  Birthday:
                                  <?php 
                                  $phpdate = strtotime( $resUser['password'] );
                                  $mysqldate = date( 'Y-m-d', $phpdate );
                                   ?>
                                  <input type="date" class="form-control" id="updateBirthday" value="<?php echo $mysqldate; ?>">
                                </div>
                                <div class="col-sm-6">
                                  Email:
                                  <input type="email" class="form-control" id="updateEmail" value="<?php echo $resUser['email']; ?>">
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-sm-4">
                                  Username:
                                  <input type="text" class="form-control" id="updateUsername" value="<?php echo $resUser['username']; ?>">
                                </div>
                                <div class="col-sm-4">
                                  Password:
                                  <input type="password" class="form-control" id="updatePassword" value="<?php echo $resUser['password']; ?>">
                                </div>
                                <div class="col-sm-4">
                                  Confirm Password:
                                  <input type="password" class="form-control" id="confirmPassword" value="<?php echo $resUser['password']; ?>">
                                </div>
                              </div>
                             
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary" id="btnUpdateProfile">Update</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-------------------------------- MODAL UPDATE PROFILE ----------------------------->



                      <!-------------------------------- MODAL VIEW BORROWED LOGS ----------------------------->
                     
                      <div class="modal fade" id="modalLog" tabindex="-1" role="dialog" aria-labelledby="modalLog" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header text-white" style="background-color: #28a745;">
                              <h5 class="modal-title" style="margin: 0 auto;" id="exampleModalLabel">Borrowed Product Logs</h5>
                              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button> -->
                            </div>
                            <div class="modal-body">
                              <button type="button" class="btn float-right mb-3" data-dismiss="modal">X</button>
                              <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Produt Name</th>
                                    <th>Date Borrowed</th>
                                  </tr>
                                </thead>
                                <?php 
                                $x = 1;
                                $selectLog = ' SELECT `id`, `bookId`, `downloaderId`, `dateDownloaded` FROM `tbl_downloads` WHERE `downloaderId` = "'.$_SESSION['id'].'" ORDER BY `dateDownloaded` DESC ';
                                $execLog = $conn->query($selectLog);
                                while ($resLog = $execLog->fetch_assoc()) 
                                {
                                  $phpdate = strtotime( $resLog['dateDownloaded'] );
                                  $mysqldate = date( 'M d, Y', $phpdate );

                                  $selectBook = ' SELECT `id`, `filename`, `title`, `status`, `dateUploaded` FROM `tbl_knowledge_products` WHERE `id` = "'.$resLog['bookId'].'" ';
                                  $execBook = $conn->query($selectBook);
                                  $resBook = $execBook->fetch_assoc();

                                 ?>
                                 <tbody>
                                   <tr>
                                     <td><?php echo $x; ?></td>
                                     <td><?php echo $resBook['filename']; ?></td>
                                     <td><?php echo $mysqldate; ?></td>
                                   </tr>
                                 </tbody>
                               <?php $x++; } ?>

                              </table>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-------------------------------- MODAL VIEW BORROWED LOGS ----------------------------->



                      <!-------------------------------- MODAL VIEW EXPERT REQUEST ----------------------------->
                     
                      <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalLog" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header text-white" style="background-color: #ffc107;">
                              <h5 class="modal-title" style="margin: 0 auto;" id="exampleModalLabel">Expert Requests</h5>
                              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button> -->
                            </div>
                            <div class="modal-body">
                              <button type="button" class="btn float-right mb-3" data-dismiss="modal">X</button>
                              <table class="table table-hover table-bordered">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Expert</th>
                                    <th>Remarks</th>
                                    <th>Date Requested</th>
                                  </tr>
                                </thead>
                                <?php 
                                $x = 1;
                                $selectRequest = ' SELECT `id`, `expertId`, `expertName`, `expertExpertise`, `requestorId`, `requestorName`, `requestorAddress`, `dateRequested`, `reason` FROM `tbl_request` WHERE `requestorId` = "'.$_SESSION['id'].'" ORDER BY `dateRequested` DESC ';
                                $execRequest = $conn->query($selectRequest);
                                while ($resRequest = $execRequest->fetch_assoc()) 
                                {
                                  $phpdate = strtotime( $resRequest['dateRequested'] );
                                  $mysqldate = date( 'M d, Y', $phpdate );

                                 ?>
                                 <tbody>
                                   <tr>
                                     <td><?php echo $x; ?></td>
                                     <td><?php echo $resRequest['expertName'].'<br><span style="font-size:10px;">'.$resRequest['expertExpertise'].'</span>'; ?></td>
                                     <td><?php echo $resRequest['reason']; ?></td>
                                     <td><?php echo $mysqldate; ?></td>
                                   </tr>
                                 </tbody>
                               <?php $x++; } ?>

                              </table>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-------------------------------- MODAL VIEW EXPERT REQUEST ----------------------------->




                    <?php
                    }

                    else
                    {
                     ?>

                      <h3 class="h4 text-black mb-4 text-center">Login Now</h3>
                      <span style="color:red;"><i><?php echo $auth; ?></i></span>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" id="username">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" id="password">
                      </div>
                      <div class="form-group" align="center">
                        <input type="submit" class="btn btn-primary btn-pill" value="Login" id="btnLogin"><br><br>
                        <button onclick="modalRegister();" style="background-color: transparent; border:0px; color: blue; cursor: pointer;"><i>Register new account</i></button>
                     
                      </div>

                    <?php } ?>

                    </div>
                </div>
              </div>



            <div id="modalRegister" data-izimodal-group="group1"></div>

            </div>
            <!-- <div class="row"> -->
          </div>
      </div>

    </div>
      <span id="facilitiesId"></span>
    <!-- bgImage -->
    <hr>

    <!-- PROGRAM FACILITIES -->
    <div class="container-fluid">

      <div class="parallax bgIndex"><br><br>


        <div class="row" style="background-color: rgba(200,200,200,0.3); padding: 50px;">


          <div class="col-lg-6 text-white aos-init" data-aos="fade-up"  data-aos-duration="1500" style="padding: 25px; border: 1px solid whitesmoke; border-radius: 5px;">
            <div class="row justify-content-center align-items-center">
              <div class="col-md-12 text-center testimony">
              
                <?php 
                $sql = ' SELECT `id`, `name`, `imageName`, `quotation` FROM `tbl_quotations` WHERE `id` = 2 ';
                $exec = $conn->query($sql);
                $res = $exec->fetch_assoc();

                 ?>

                <img src="images/main/<?php echo $res['imageName']; ?>" alt="Image" class="img-fluid mb-4" style="border-radius: 8px; width: 200px;">
                <h4 class="mb-1 directorText"><?php echo $res['name']; ?></h4>
                <h6 class="mb-4">Regional Director</h6>
                <blockquote>
                <p style="font-size: 17px; text-indent: 50px; text-align: justify;"><i><?php echo $res['quotation']; ?></i></p>
                </blockquote>
              </div>
            </div>
          </div>

          <div class="col-lg-1"></div>
          
          <div class="col-lg-5 text-white aos-init" data-aos="fade-up"  data-aos-duration="1500" style="padding: 25px; border: 1px solid whitesmoke; border-radius: 5px;">
            <div class="row justify-content-center align-items-center">
              <div class="col-md-12 text-center testimony">
              
                <?php 
                $sql = ' SELECT `id`, `name`, `imageName`, `quotation` FROM `tbl_quotations` WHERE `id` = 3 ';
                $exec = $conn->query($sql);
                $res = $exec->fetch_assoc();

                 ?>    

                <img src="images/main/<?php echo $res['imageName']; ?>" alt="Image" class="img-fluid mb-4" style="border-radius: 8px; width: 200px;">
                <h4 class="mb-1 directorText"><?php echo $res['name']; ?></h4>
                <h6 class="mb-4">Assistant Regional Director</h6>
                <blockquote>
                <p style="font-size: 17px; text-indent: 50px; text-align: justify;"><i><?php echo $res['quotation']; ?></i></p>
                </blockquote>
              </div>
            </div>
          </div>


        </div>

        <br>

        <div class="row" style="background-color: rgba(200,200,200,0.2); padding: 50px; ">
          <div class="col-lg-2"></div>
          <div class="col-lg-8" style="border:1px solid whitesmoke; padding-top: 50px; border-radius:5px;">
            <div class="row mb-5 justify-content-center">
              <div class="col-lg-7 text-center text-white aos-init" data-aos="fade-up"  data-aos-duration="1500" style="border: 2px solid aliceblue; padding: 25px; border-radius:10px; background-color: darkred;">
                <!-- <div class="col-lg-7 text-center text-white aos-init" data-aos="fade-up"  data-aos-duration="1500" style="border: 2px solid aliceblue; padding: 10px; border-radius:10px; background-color: rgba(100,0,0,0.5);"> -->
                <h2 class="section-title text-white">PROGRAM FACILITIES</h2>
                <p>Promote a culture of learning and knowledge sharing in pursuit of sustainable development through excellence in local governance</p>
              </div>
            </div>
            <div class="row mb-5 align-items-center">

              <div class="col-lg-6 mb-4 aos-init" data-aos="fade-up"  data-aos-duration="1500">
                 <?php 
                  $exec = $conn->query(' SELECT `id`, `imageName`, `status`, `dateUploaded` FROM `tbl_program_images` WHERE `status` = "mainImage" ');
                  $result = $exec->fetch_assoc();
                   ?>
                <img src="images/program features/<?php echo $result['imageName']; ?>" alt="Image" class="img-fluid" style="margin-left: 10px;">
              </div>

              <div class="col-lg-6 ml-auto aos-init" data-aos="fade-up"  data-aos-duration="1500">
                
                <div class="row">
                  <div class="col-sm-6 mb-4">
                      <?php 
                      $exec = $conn->query(' SELECT `id`, `imageName`, `status`, `dateUploaded` FROM `tbl_program_images` WHERE `status` = "subImage1" ');
                      $result = $exec->fetch_assoc();
                       ?>
                    <center><img src="images/program features/<?php echo $result['imageName']; ?>" alt="Image" class="img-fluid imgGallery"></center>
                  </div>
                  <div class="col-sm-6 mb-4">
                      <?php 
                      $exec = $conn->query(' SELECT `id`, `imageName`, `status`, `dateUploaded` FROM `tbl_program_images` WHERE `status` = "subImage2" ');
                      $result = $exec->fetch_assoc();
                       ?>
                    <center><img src="images/program features/<?php echo $result['imageName']; ?>" alt="Image" class="img-fluid imgGallery"></center>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 mb-4">
                      <?php 
                      $exec = $conn->query(' SELECT `id`, `imageName`, `status`, `dateUploaded` FROM `tbl_program_images` WHERE `status` = "subImage3" ');
                      $result = $exec->fetch_assoc();
                       ?>
                    <center><img src="images/program features/<?php echo $result['imageName']; ?>" alt="Image" class="img-fluid imgGallery"></center>
                  </div>
                  <div class="col-sm-6 mb-4">
                      <?php 
                      $exec = $conn->query(' SELECT `id`, `imageName`, `status`, `dateUploaded` FROM `tbl_program_images` WHERE `status` = "subImage4" ');
                      $result = $exec->fetch_assoc();
                       ?>
                    <center><img src="images/program features/<?php echo $result['imageName']; ?>" alt="Image" class="img-fluid imgGallery"></center>
                  </div>
                </div>

              </div>
            </div>  
          </div> 
          <div class="col-lg-2"></div>
        </div>



      </div>
      <!-- parallax -->

    </div>
    <!-- container -->
    <br><br>


    <!-- LATEST NEWS -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <center>
            <h2 class="section-title">Latest News</h2>
          </center>
        </div>
      </div>

      <div class="row aos-init" data-aos="fade-up"  data-aos-duration="1500" data-aos-duration="2000">

        <?php
        $sql = ' SELECT `id`, `title`, `description`, `imageName`, `status`, `dateUploaded`, `author` FROM `tbl_news` WHERE `status` = "published" ORDER BY `dateUploaded` DESC LIMIT 3 ';
        $exec = $conn->query($sql);
        while ($res = $exec->fetch_assoc()) 
        {

         $id = strip_tags($res['id']);
         $string = strip_tags($res['description']);
          $newDate = date("M d-Y | h:i:s A", strtotime($res['dateUploaded']));
          if (strlen($string) > 100) 
          {

              // truncate string
              $stringCut = substr($string, 0, 100);
              $endPoint = strrpos($stringCut, ' ');

              //if the string doesn't contain any space then it will cut without word basis.
              $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
              $string .= '......<a href="news.php?id='.$id.'">more</a>';
          }


         ?>


      
        <div class="col-md-4">
          
          <div class="card">
              <img class="card-img-top img-fluid" src="images/news/<?php echo $res['imageName']; ?>" alt="Card image cap" style="height: 300px;">
              <div class="card-body">
                <center>  
                    <h4 class="card-title"><b><?php echo $res['title']; ?></b></h4>
                    <h6><?php echo $res['author']; ?></h6>
                    <p><?php echo $newDate; ?></p>
                </center><br>  
                <p class="card-text"><?php echo $string; ?> </p>

              </div>
            </div>

            <div class="card p-3 card-outline-primary">
              <blockquote class="card-block card-blockquote">
                <footer>
                <center><a href="<?php echo 'news.php?id='.$id; ?>" class="btn btn-warning">View</a></center>
                  <small class="text-muted">
                    <!-- <?php echo $res['dateUploaded']; ?>              -->
                  </small>
                </footer>
              </blockquote>
            </div>

        </div>
        <!-- <div class="col-md-4"> -->
        <?php } ?>

      </div>
    </div>

    <br><hr>
    
    <!-- MSAC -->
    <div class="site-section courses-title">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center">
            <h2 class="section-title">MSAC MEMBERS</h2>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">

        <!-- <div class="owl-carousel owl-theme col-12 nonloop-block-14 owl-loaded owl-drag aos-init" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"> -->
        <div class="owl-carousel owl-theme col-12 nonloop-block-14 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
           <?php 
            $sql = " SELECT `id`, `agencyName`, `address`, `contactNumber`, `email`, `imageName`, `dateUploaded` FROM `tbl_msac` ORDER BY `agencyName` ASC ";
            $exec = $conn->query($sql);
            while ($result = $exec->fetch_assoc())
            {
            ?>
            <div class="item">
                <div class="course bg-white h-100 align-self-stretch">
                    <figure class="m-2">
                    <a title="<?php echo $result['agencyName']; ?>" href="msac_profile.php?id=<?php echo $result['id']; ?>"><img src="images/msac/<?php echo $result['imageName']; ?>" alt="<?php echo $result['agencyName']; ?>" class="msacImages"></a>
                  </figure>
                </div>
            </div>

            <?php } ?>
        </div>


      </div>
      <div class="row justify-content-center btns">
        <div class="col-md-12 text-center">

          <button class="customNextBtn btn btn-primary m-1 " style="background-color: darkred;">Next</button>
          <button class="customPreviousBtn btn btn-primary m-1 " style="background-color: darkred;">Prev</button>
        </div>
      </div>
    </div> 
    <!-- <div class="container"> -->


<br>  <hr>  

<!-- FEATURED BOOKS -->
<div class="site-section courses-title" id="teachers-section" style="background-color: #f2a51a;">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-lg-7 text-center aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500" >
          <h2 class="section-title">FEATURED KNOWLEDGE PRODUCT</h2>
          <p class="mb-5 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam repellat aut neque! Doloribus sunt non aut reiciendis, vel recusandae obcaecati hic dicta repudiandae in quas quibusdam ullam, illum sed veniam!</p>
        </div>
      </div>
    </div>
</div>
<div id="teachers-section" class="site-section courses-entry-wrap">
    <div class="container">
      <!-- <div class="row mb-5 justify-content-center">
      <div class="col-lg-7 mb-5 text-center" data-aos="fade-up" data-aos-delay="" style="border:1px solid #c0e218; padding: 10px; border-radius:10px; background-color: #f2a51a;">
      <h2 class="section-title text-white">Featured E-Books</h2>
      
      </div>
      </div> -->
      <div class="row">

      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js"></script>

       <?php 
       $i = 1;
       $sql = ' SELECT `id`, `filename`, `title`, `status`, `dateUploaded` FROM `tbl_knowledge_products` ORDER BY `id` DESC LIMIT 4 ';
       $exec = $conn->query($sql);
       while ($res = $exec->fetch_assoc()) 
       {
        $phpdate = strtotime( $res['dateUploaded'] );
        $mysqldate = date( 'M d, Y', $phpdate );
        ?>


        <div class="col-md-6 col-lg-3 mb-4 aos-init aos-animate productView" data-aos="fade-up" data-aos-duration="1500" >
          <div class="teacher text-center">
            <a href="knowledge-products.php?id=<?php echo $res['id']; ?>" style="text-decoration: none; color:black;">
              <!-- <img src="images/book1.jpg" alt="Image" class="img-fluid w-60 mx-auto mb-4"> -->
              <canvas id="pdf_renderer<?php echo $i; ?>" class="img-fluid mx-auto" style="height: 320px;"></canvas>
              <div class="py-5">
                <h6 class="text-black"><?php echo $res['title']; ?></h6>
                <p class="position"><?php echo $mysqldate; ?></p>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisci at provident.</p> -->
              </div>
            </a>
          </div>
        </div>



        
         


        <script>


            var myState = {
                pdf: null,
                currentPage: 1,
                zoom: 0.5
            }
          
        
     
            function render<?php echo $i; ?>() {
                myState.pdf.getPage(myState.currentPage).then((page) => {
              
                    var canvas = document.getElementById("pdf_renderer<?php echo $i; ?>");
                    // alert(canvas);
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

            pdfjsLib.getDocument('products/<?php echo $res['filename']; ?>').then((pdf) => {

              myState.pdf = pdf;
              render<?php echo $i; ?>();

            });

        </script>

      <?php $i++; } ?>
      </div>
    </div>
</div>


<!-- QUOTATION -->
    <div class="container-fluid">

      <div class="parallax"><br><br>

        <?php 
          $sql = ' SELECT `id`, `name`, `imageName`, `quotation` FROM `tbl_quotations` WHERE `id` = 4 ';
          $exec = $conn->query($sql);
          $res = $exec->fetch_assoc();

        ?>


      <div class="row justify-content-center align-items-center text-white">
        <div class="col-md-8 text-center testimony">
        <img src="images/main/<?php echo $res['imageName']; ?>" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
        <h3 class="mb-4"><?php echo $res['name']; ?></h3>
        <blockquote>
        <p><i><?php echo $res['quotation']; ?></i></p>
        </blockquote>
        </div>
      </div>




      </div>
      <!-- parallax -->

    </div>
    <!-- container -->
    <br><br>


    <?php include 'includes/footer.php'; ?>

    

    <?php include 'includes/js_includes.php'; ?>

    <script type="text/javascript">

      $('#navHome').addClass('active');

      $('#btnLogin').click(function(){
        var username = $('#username').val();
        var password = $('#password').val();

        username = username.trim();
        password = password.trim();



        if ( username == '' || password == '' ) 
        {
          swal('Incomplete Data!','Please fill up required fields','error');
        }
        else
        {
          var other_data = 'username='+username+'&password='+password;
            // alert(other_data);
            $.ajax({
              url:"function php/login.php?"+other_data,  
              method:"POST",  
              dataType:"text",
              cache:false,     
              beforeSend:function() {
                swal({
                position: "top-end",
                type: "info",
                title: "Processing Data...",
                showConfirmButton: false,
                });
                       
              },  
              error:function(data){

                             
              }, 
              success:function(data)
              {
                swal.close();
                data = data.trim();
                // alert(data);
                if (data == 'error') 
                {
                  swal('Invalid Username or Password!','Please check your details','error');
                }
                else
                {
                  window.location = 'index.php';
                }
              }
            }); 
        }
      });

      function modalRegister()
      {
        $('#modalRegister').iziModal({
        title: 'Fill Up Form',
        headerColor: '#192f72',
        width: 970,
        iframe: true, 
        iframeHeight: 600, 
        iframeURL: 'register.php',
        // openFullscreen: true,
        closeOnEscape: false,
        closeButton: true
        // onClosed: function(){document.getElementById("viewer1").hidden=false;}
        });


        $('#modalRegister').iziModal('open', this); 
      }




      $('#btnUpdateProfile').click(function(){
        var updateLastname = $('#updateLastname').val();
        var updateFirstname = $('#updateFirstname').val();
        var updateMiddlename = $('#updateMiddlename').val();
        var updateAddress = $('#updateAddress').val();
        var updateMobile = $('#updateMobile').val();
        var updateBirthday = $('#updateBirthday').val();
        var updateUsername = $('#updateUsername').val();
        var updatePassword = $('#updatePassword').val();
        var confirmPassword = $('#confirmPassword').val();
        var updateEmail = $('#updateEmail').val();

        if ( updateLastname == '' || updateFirstname == '' || updateMiddlename == '' || updateAddress == '' || updateMobile == '' || updateBirthday == '' || updateUsername == '' || updatePassword == '' || updateEmail == '' ) 
        {
          swal('Error','Please fill up required fields!','error');
        }
        else if ( updatePassword != confirmPassword ) 
        {
          swal('Error','Password do not match!','error');
        }
        else
        {
          var other_data = 'updateLastname='+updateLastname+'&updateFirstname='+updateFirstname+'&updateMiddlename='+updateMiddlename+'&updateAddress='+updateAddress+'&updateMobile='+updateMobile+'&updateBirthday='+updateBirthday+'&updateUsername='+updateUsername+'&updatePassword='+updatePassword+'&updateEmail='+updateEmail;
          // alert(other_data);
          
          $.ajax({
              url:"function php/updateProfile.php?"+other_data,  
              method:"POST",  
              dataType:"text",
              cache:false,     
              beforeSend:function() {
                swal({
                  position: "top-end",
                  type: "info",
                  title: "Processing Data...",
                  showConfirmButton: false,
                  });
                       
              },  
              error:function(data){

                             
              }, 
              success:function(data)
              {
                // alert(data);
                swal.close();
                if (data == 'error') 
                {
                  swal('User Already Exist!', 'Error', 'error');
                }
                else
                {
                  // alert(data); 
                  swal({
                  title: "Profile Successfully Updated!",
                  text: 'Success',
                  type: "success",
                  showCancelButton: false,
                  confirmButtonColor: "#5cb85c",
                  confirmButtonText: '<span class="fa fa-check"></span>&nbspProceed',
                  confirmButtonClass: "btn"
                  }).then((result) => {
                    if (result.value) {

                        location.reload();
                    }
                  });            
                }

                
              }
            }); 
          //ajax end
        }
        // else
      });



    </script>



  </body>
</html>