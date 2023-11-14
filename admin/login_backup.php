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
                     <span style="font-family:monospace; font-size:20px;">Welcome</span><br>
                      <img src="images/attachedagency_dilgcentral.png" alt="" width="70">
                      <p>User ID: <b style="color:red;"><?php echo $resUser['borrowerId']; ?></b></p>
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
                                  $phpdate = strtotime( $resUser['birthday'] );
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
                                  <input type="password" class="form-control" id="updatePassword">
                                </div>
                                <div class="col-sm-4">
                                  Confirm Password:
                                  <input type="password" class="form-control" id="confirmPassword">
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
                                    <th>Requested Expertise</th>
                                    <th>Remarks</th>
                                    <th>Date Requested</th>
                                  </tr>
                                </thead>
                                <?php 
                                $x = 1;
                                $selectRequest = ' SELECT `id`, `expertId`, `expertName`, `expertExpertise`, `requestorId`, `requestorName`, `requestorAddress`, `dateRequested`, `reason`, `requested_expertise` FROM `tbl_request` WHERE `requestorId` = "'.$_SESSION['id'].'" ORDER BY `dateRequested` DESC ';
                                $execRequest = $conn->query($selectRequest);
                                while ($resRequest = $execRequest->fetch_assoc()) 
                                {
                                  $phpdate = strtotime( $resRequest['dateRequested'] );
                                  $mysqldate = date( 'M d, Y', $phpdate );

                                 ?>
                                 <tbody>
                                   <tr>
                                     <td><?php echo $x; ?></td>
                                     <td><?php echo $resRequest['expertName'].'<br><span style="font-size:11px;">'.$resRequest['expertExpertise'].'</span>'; ?></td>
                                     <td><?php echo $resRequest['requested_expertise']; ?></td>
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
                        <input type="submit" class="btn btn-primary btn-pill" value="Login" id="btnLogin" style="background-color: #c30718; border-color:#ad0735;"><br><br>
                        <button onclick="modalRegister();" style="background-color: transparent; border:0px; color: blue; cursor: pointer;"><i>Register new account</i></button>
                     
                      </div>
                      <hr>
                      <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" style="background-color: transparent; border:0px; color: blue; cursor: pointer;">Forgot Password?</button>
                    <?php } ?>

                    </div>
                    
                </div>
              </div>