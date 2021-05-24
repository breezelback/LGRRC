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
            </div>
        </div>
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
                
            </ul>
        </div>
        <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-footer  -->
    <div class="sidebar-footer">

        <div class="dropdown">
            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-cog"></i>
                <span class="badge-sonar"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuMessage">
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
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/main.js"></script>
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