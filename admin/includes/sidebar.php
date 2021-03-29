<?php 
session_start();

if (!isset($_SESSION['usertype'])) 
{
    header('location: admin-login.php');
}

 ?>

<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
        <!-- sidebar-brand  -->
        <div class="sidebar-item sidebar-brand">
            <a href="#">Admin Menu</a>
        </div>
        <!-- sidebar-header  -->
        <div class="sidebar-item sidebar-header d-flex flex-nowrap">
            <div class="user-pic">
                <!-- <img class="img-responsive img-rounded" src="../images/lgrc_logo.png" alt="User picture"> -->
                <img class="img-responsive img-rounded" src="../images/lgrc_logo.png" alt="User picture">
            </div>
            <div class="user-info">
                <span class="user-name">
                    <strong>LGRRC</strong>
                </span>
                <span class="user-role">Administrator</span>
               <!--  <span class="user-status">
                    <i class="fa fa-circle"></i>
                    <span>Online</span>
                </span> -->
            </div>
        </div>
        <!-- sidebar-search  -->
        <!-- <div class="sidebar-item sidebar-search">
            <div>
                <div class="input-group">
                    <input type="text" class="form-control search-menu" placeholder="Search...">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- sidebar-menu  -->
        <div class=" sidebar-item sidebar-menu">
            <ul>
                <li class="header-menu">
                    <span>Menu</span>
                </li>
                <li class="">
                    <a href="index.php">
                        <i class="fa fa-tachometer-alt"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>
                <li class="">
                    <a href="users.php">
                        <i class="fa fa-users-cog"></i>
                        <span class="menu-text">Users</span>
                    </a>
                </li>
                <li class="">
                    <a href="msac.php">
                        <i class="fa fa-sitemap"></i>
                        <span class="menu-text">MSAC</span>
                    </a>
                </li>
                <li class="">
                    <a href="news.php">
                        <i class="fa fa-rss-square"></i>
                        <span class="menu-text">News</span>
                    </a>
                </li>


                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa fa-book"></i>
                        <span class="menu-text">Knowledge Product</span>
                        <!-- <span class="badge badge-pill badge-danger">3</span> -->
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="knowledge-product.php">Product Management</a>
                            </li>
                            <li>
                                <a href="borrowed-product-logs.php">Borrowed Product Logs</a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa fa-chalkboard-teacher"></i>
                        <span class="menu-text">Directory of Experts</span>
                        <!-- <span class="badge badge-pill badge-danger">3</span> -->
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="directory.php">Directory</a>
                            </li>
                            <li>
                                <a href="requests.php">Expert Requests</a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="">
                    <a href="program.php">
                        <i class="fa fa-project-diagram"></i>
                        <span class="menu-text">Program Facility Panel</span>
                    </a>
                </li>


                <li class="">
                    <a href="content.php">
                        <i class="fa fa-images"></i>
                        <span class="menu-text">Images and Quotations Content</span>
                    </a>
                </li>


                <li class="">
                    <a href="about.php">
                        <i class="fa fa-address-card"></i>
                        <span class="menu-text">About Module</span>
                    </a>
                </li>

                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa fa-play-circle"></i>
                        <span class="menu-text">Videos</span>
                        <!-- <span class="badge badge-pill badge-danger">3</span> -->
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="sagisag-ng-pagasa.php">Sagisag ng Pag-asa</a>
                            </li>
                            <li>
                                <a href="linawin-natin.php">Linawin Natin</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="">
                    <a href="faq.php">
                        <i class="fa fa-question-circle"></i>
                        <span class="menu-text">FAQ</span>
                    </a>
                </li>

            
                <!-- <li class="">
                    <a href="../function php/logout.php">
                        <i class="fa fa-sign-out-alt"></i>
                        <span class="menu-text">Logout</span>
                    </a>
                </li> -->
                
            </ul>
        </div>
        <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-footer  -->
    <div class="sidebar-footer">
        <!-- <div class="dropdown">

            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bell"></i>
                <span class="badge badge-pill badge-warning notification">3</span>
            </a>
            <div class="dropdown-menu notifications" aria-labelledby="dropdownMenuMessage">
                <div class="notifications-header">
                    <i class="fa fa-bell"></i>
                    Notifications
                </div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                    <div class="notification-content">
                        <div class="icon">
                            <i class="fas fa-check text-success border border-success"></i>
                        </div>
                        <div class="content">
                            <div class="notification-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. In totam explicabo</div>
                            <div class="notification-time">
                                6 minutes ago
                            </div>
                        </div>
                    </div>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="notification-content">
                        <div class="icon">
                            <i class="fas fa-exclamation text-info border border-info"></i>
                        </div>
                        <div class="content">
                            <div class="notification-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. In totam explicabo</div>
                            <div class="notification-time">
                                Today
                            </div>
                        </div>
                    </div>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="notification-content">
                        <div class="icon">
                            <i class="fas fa-exclamation-triangle text-warning border border-warning"></i>
                        </div>
                        <div class="content">
                            <div class="notification-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. In totam explicabo</div>
                            <div class="notification-time">
                                Yesterday
                            </div>
                        </div>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-center" href="#">View all notifications</a>
            </div>
        </div>

        <div class="dropdown">
            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-envelope"></i>
                <span class="badge badge-pill badge-success notification">7</span>
            </a>
            <div class="dropdown-menu messages" aria-labelledby="dropdownMenuMessage">
                <div class="messages-header">
                    <i class="fa fa-envelope"></i>
                    Messages
                </div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                    <div class="message-content">
                        <div class="pic">
                            <img src="../images/lgrc_logo.png" alt="">
                        </div>
                        <div class="content">
                            <div class="message-title">
                                <strong> Jhon doe</strong>
                            </div>
                            <div class="message-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. In totam explicabo</div>
                        </div>
                    </div>

                </a>
                <a class="dropdown-item" href="#">
                    <div class="message-content">
                        <div class="pic">
                            <img src="../images/lgrc_logo.png" alt="">
                        </div>
                        <div class="content">
                            <div class="message-title">
                                <strong> Jhon doe</strong>
                            </div>
                            <div class="message-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. In totam explicabo</div>
                        </div>
                    </div>

                </a>
                <a class="dropdown-item" href="#">
                    <div class="message-content">
                        <div class="pic">
                            <img src="../images/lgrc_logo.png" alt="">
                        </div>
                        <div class="content">
                            <div class="message-title">
                                <strong> Jhon doe</strong>
                            </div>
                            <div class="message-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. In totam explicabo</div>
                        </div>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-center" href="#">View all messages</a>

            </div>
        </div> -->

        <div class="dropdown">
            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-cog"></i>
                <span class="badge-sonar"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuMessage">
               <!--  <a class="dropdown-item" href="#">My profile</a>
                <a class="dropdown-item" href="#">Help</a>
                <a class="dropdown-item" href="#">Setting</a> -->
                <center>
                    Update Password <br>
                    <input type="password" class="form-control mb-2" placeholder="New Password" style="width: 70%;" id="updatePassword">
                    <input type="password" class="form-control mb-2" placeholder="Confirm Password" style="width: 70%;" id="confirmPassword">
                    <button class="btn btn-primary" id="btnUpdate">Update <i class="fa fa-sync"></i></button>
                </center>
            </div>
        </div>

        <div>
            <a href="../function php/logout.php">
                <i class="fa fa-power-off"></i>
            </a>
        </div>
        <div class="pinned-footer">
            <a href="#">
                <i class="fas fa-ellipsis-h"></i>
            </a>
        </div>
    </div>
</nav>


<script src="assets/js/jquery3.min.js"></script>
<script>
    $('#btnUpdate').click(function(){
        var updatePassword = $('#updatePassword').val();
        var confirmPassword = $('#confirmPassword').val();

        if (updatePassword == '' || confirmPassword == '') 
        {
            swal('Error','Please input required fields!','error');
        }
        else if (updatePassword != confirmPassword) 
        {
            swal('Error','Password do not match!','error');
        }
        else
        {
            //confirmation start
              swal({
              title: "Are you sure?",
              text: "Update Password",
              type: "question",
              showCancelButton: true,
              confirmButtonColor: "#5cb85c",
              cancelButtonColor: "#d9534f",
              confirmButtonText: '<span class="fa fa-check"></span>&nbspProceed',
              cancelButtonText: '<span class="fa fa-remove"></span>&nbspDecline',
              confirmButtonClass: "btn",
              cancelButtonClass: "btn"
              }).then((result) => {
              if (result.value) {
                    
                    //ajax start
                    $.ajax({ 
                       url:"function php/updateAdminPassword.php?updatePassword="+updatePassword, 
                       method:"POST",  
                       //post:data  
                       contentType:false,
                       cache:false,
                       processData:false,

                       beforeSend:function() {

                              swal({
                              position: "top-end",
                              type: "info",
                              title: "Processing Data...",
                              showConfirmButton: false,
                              });

                      }, 

                       success:function(data){  
                        swal.close();
                        // alert(data); 
                        swal({
                        title: "Password Successfully Updated!",
                        text: data,
                        type: "success",
                        showCancelButton: false,
                        confirmButtonColor: "#5cb85c",
                        confirmButtonText: '<span class="fa fa-check"></span>&nbspProceed',
                        confirmButtonClass: "btn"
                        }).then((result) => {
                          if (result.value) {

                              // fetch_users();
                              //close modal
                              location.reload();
                          }
                        });

                        }
                            
                    });  
                    //ajax end 
              }
              });
              //confirmation end
        }
        //else


    });
</script>