<?php include('include/header.php'); ?>


<div class="container-fluid">
        <div class="page-header filled full-block light">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Update Account Setting</h2>
                    <!-- <p>All kind of form elements here </p> -->
                </div>
               <!--  <div class="col-md-6">
                    <ul class="list-page-breadcrumb">
                        <li><a href="#">Home <i class="zmdi zmdi-chevron-right"></i></a></li>
                        <li><a href="#">Forms <i class="zmdi zmdi-chevron-right"></i></a></li>
                        <li class="active-page"> Form Elements</li>
                    </ul>
                </div> -->
           </div>
        </div>


                

                
          <?php
                $profile_query = mysqli_query($conn,"SELECT * FROM admin_login");
                $profile_row = mysqli_fetch_array($profile_query);

                  // var_dump($profile_row);
        ?>
        <div class="row">
            <div class="col-md-6">
                <div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <h2 class="text-center">Update User name & email id</h2>
                            <!-- <p>All kind of text input </p> -->
                        </div>
                      <!--   <div class="pull-right w-action">
                            <ul class="widget-action-bar">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-more"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="widget-reload"><a href="#"><i class="zmdi zmdi-refresh-alt"></i></a></li>
                                        <li class="widget-toggle"><a href="#"><i class="zmdi zmdi-chevron-down"></i></a></li>
                                        <li class="widget-fullscreen"><a href="#"><i class="zmdi zmdi-fullscreen"></i></a></li>
                                        <li class="widget-exit"><a href="#"><i class="zmdi zmdi-power"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div> -->
                    </div>
            <div class="widget-container">
                <div class="widget-content">
                   <?php if(@$_GET['update_username']) { ?>
                    <div class="alert alert-success alert-dismissible">
                      <a href="account-profile.php" class="close">&times;</a>
                      <strong> Updated</strong> Username Successfully.
                    </div>
                  <?php } ?>

                  <?php if(@$_GET['user_fail']) { ?>
                    <div class="alert alert-danger alert-dismissible">
                      <a href="account-profile.php" class="close">&times;</a>
                      <strong>Username</strong> Not Update!..
                    </div>
                <?php } ?>
                    <div class="row">

                      <div class="col-md-12">
                       <form action="update_account_profile.php" method="post" class="j-forms">
                        <input type="hidden" name="username_update" value="<?php echo $profile_row['id']; ?>">
                        <div class="form-content">
                          <div class="row">
                            <div class="col-md-12 unit">
                                <label class="label">User Name</label>
                                <div class="input">
                                    <label class="icon-left" for="user">
                                        <i class="fa fa-edit"></i>
                                    </label>
                                    <input class="form-control" type="text" value="<?php echo $profile_row['1']; ?>" name="username" placeholder="User Name" id="user">
                                </div>
                            </div>
                            <div class="col-md-7 unit">
                             <div class="form-footer">
                               <button type="submit" class="btn btn-info primary-btn" name="user_name_update">Update</button>
                               </div>       
                            </div>
                        </div>
                     </div>
                   </form>
                </div>

                  
                   <div class="col-md-12">
                     <?php if(@$_GET['update_email']) { ?>
                    <div class="alert alert-success alert-dismissible">
                      <a href="account-profile.php" class="close">&times;</a>
                      <strong>Email Id</strong> Updated Successfully.
                    </div>
                  <?php } ?>

                   <?php if(@$_GET['update_email_fail']) { ?>
                    <div class="alert alert-danger alert-dismissible">
                      <a href="account-profile.php" class="close">&times;</a>
                      <strong>Username</strong> Not Update!..
                    </div>
                <?php } ?>
                       <form action="update_account_profile.php" method="POST" class="j-forms">
                        <input type="hidden" name="update_email" value="<?php echo $profile_row['id']; ?>">
                        <div class="form-content">
                          <div class="row">
                            <div class="col-md-12 unit">
                                <label class="label">Email Id </label>
                                <div class="input">
                                    <label class="icon-left" for="email">
                                        <i class="fa fa-edit"></i>
                                    </label>
                                    <input class="form-control" type="email" value="<?php echo $profile_row['3']; ?>" placeholder="Enter email id" name="email" id="email">
                                </div>
                            </div>
                            <div class="col-md-7 unit">
                             <div class="form-footer">
                               <button type="submit" class="btn btn-info primary-btn" name="email_update">Update</button>
                               </div>       
                            </div>
                        </div>
                     </div>
                   </form>
                </div>
                </div>
                </div>
              </div>
           </div>
          </div>



             <div class="col-md-6">
                <div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <h2>Update Password</h2>
                            <!-- <p>All kind of text input </p> -->
                        </div>
                      <!--   <div class="pull-right w-action">
                            <ul class="widget-action-bar">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-more"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="widget-reload"><a href="#"><i class="zmdi zmdi-refresh-alt"></i></a></li>
                                        <li class="widget-toggle"><a href="#"><i class="zmdi zmdi-chevron-down"></i></a></li>
                                        <li class="widget-fullscreen"><a href="#"><i class="zmdi zmdi-fullscreen"></i></a></li>
                                        <li class="widget-exit"><a href="#"><i class="zmdi zmdi-power"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div> -->
                    </div>
              <div class="widget-container">
                  <div class="widget-content">
                      <?php if(@$_GET['update_password']) { ?>
                    <div class="alert alert-success alert-dismissible">
                      <a href="account-profile.php" class="close">&times;</a>
                      <strong>Password</strong> Updated Successfully.
                    </div>
                  <?php } ?>

                 <div class="row">
                        <div class="col-md-12">
                          <form action="update_account_profile.php" class="j-forms" method="POST">
                          <input type="hidden" name="update_pass" value="<?php echo $profile_row['id']; ?>">
                          <div class="form-content">

                          <!-- start text password -->
                          <div class="row">
                              <div class="col-md-12 unit">
                                  <label class="label">Old Password</label>
                                  <div class="input">
                                      <label class="icon-left" for="oldpassword">
                                          <i class="fa fa-lock"></i>
                                      </label>
                                      <input class="form-control" type="password" placeholder="Old Password" id="oldpassword" name="old_pass">
                                  </div>
                              </div>
                              <div class="col-md-12 unit">
                                  <label class="label">New Password</label>
                                  <div class="input">
                                      <label class="icon-left" for="newpassword">
                                          <i class="fa fa-lock"></i>
                                      </label>
                                      <input class="form-control" type="password" placeholder="New password" id="newpassword" name="new_pass">
                                  </div>
                              </div>

                                 <div class="col-md-12 unit">
                                  <label class="label">Confirm Password</label>
                                  <div class="input">
                                      <label class="icon-left" for="confirm_password">
                                          <i class="fa fa-lock"></i>
                                      </label>
                                      <input class="form-control" type="password" placeholder="Confirm password" id="confirm_password">
                                  </div>
                              </div>

                           <div class="col-md-7">
                              <div class="form-footer">
                              <br>
                              <button type="submit" id="btn_submit" class="btn btn-info primary-btn" name="update_password">Update</button>
                          </div>
                           </div>
                          </div>
                          <!-- end text password -->
                      </div>
                      </form>
                    </div>

                      </div>
                  </div>
              </div>
          </div>
       </div>


             <div class="col-md-6">
                <div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <h3>Update Profile Image</h3>
                            <!-- <p>All kind of text input </p> -->
                        </div>

                    <!--<div class="pull-right w-action">
                            <ul class="widget-action-bar">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-more"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="widget-reload"><a href="#"><i class="zmdi zmdi-refresh-alt"></i></a></li>
                                        <li class="widget-toggle"><a href="#"><i class="zmdi zmdi-chevron-down"></i></a></li>
                                        <li class="widget-fullscreen"><a href="#"><i class="zmdi zmdi-fullscreen"></i></a></li>
                                        <li class="widget-exit"><a href="#"><i class="zmdi zmdi-power"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div> -->
                     </div>
        

    <div class="widget-container">
      <div class="widget-content">

           <?php if(@$_GET['update_profile']) { ?>
                    <div class="alert alert-success alert-dismissible">
                      <a href="account-profile.php" class="close">&times;</a>
                      <strong>Profile Image</strong> Updated Successfully.
                    </div>
          <?php } ?>

           <?php if(@$_GET['update_profile_fail']) { ?>
                    <div class="alert alert-danger alert-dismissible">
                      <a href="account-profile.php" class="close">&times;</a>
                      <strong>Profile Not</strong> Updated Successfully.
                    </div>
          <?php } ?>

       <div class="row">
        <center> <div class="col-md-12">
           <form action="update_account_profile.php" method="POST" class="j-forms" enctype="multipart/form-data">
            <input type="hidden" name="update_image" value="<?php echo $profile_row['id']; ?>">
              <div class="form-content">
                <div class="row">
                   <div class="col-md-12 unit">
                     <!-- <label class="label text-center">Profile Image</label> -->
                    <div class="col-md-12"> 
                      <div class="form-control" style="width:61%; height:236px; margin-top:10px;">
                         <img id="img1" src="images/profile_img/<?php echo $profile_row['4']; ?>" alt="" style="width:100%;height:219px;object-fit: cover;">
                       </div>
                 <label for="field1" class="form-control btn btn-primary" style="text-align:center; margin-top:5px;width:61%" id="image1">Upload picture</label>

               <input type="file" id="field1" class="form-control" style="visibility:hidden;" name="img" onchange="readURL(this);">
            <script>
                function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('#img1')
                                    .attr('src', e.target.result)
                                    .width(221)
                                    .height(218);
                            };

                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                </script>
           </div>
          </div>
                                

                    <div class="col-md-7">
                      <div class="form-footer">
                        <button type="submit" class="btn btn-info primary-btn" name="update_img">Update</button>
                    </div>
                    </div>
                </div>
              </div>
               </form>
              </div></center>

                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>

    </div>
  <?php include('include/footer.php'); ?>