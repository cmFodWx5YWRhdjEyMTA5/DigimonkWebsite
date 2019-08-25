<?php include('include/header.php'); ?>


<div class="container-fluid">
        <div class="page-header filled full-block light">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Manage Settings</h2>
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
  
        <div class="row">
            <div class="col-md-12">
                <div class="widget-wrap">
                    <!-- <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <h3>Input</h3>
                            <p>All kind of text input </p>
                        </div>
                        <div class="pull-right w-action">
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
                        </div>
                    </div> -->
         <?php

            $query = mysqli_query($conn,"SELECT * FROM manage_setting");
            $row = mysqli_fetch_array($query);

         ?>
          <div class="widget-container">
              <div class="widget-content">
                 <?php if(@$_GET['update']) { ?>
                    <div class="alert alert-success alert-dismissible">
                      <a href="setting.php" class="close">&times;</a>
                      <strong>Details Updated</strong> Successfully.
                    </div>
              <?php } ?> 

              <?php if(@$_GET['update_fail']) { ?>
                    <div class="alert alert-danger alert-dismissible">
                      <a href="setting.php" class="close">&times;</a>
                      <strong>Not Update</strong> Please try Again!...
                    </div>
              <?php } ?>
                <div class="row">
                  <form action="update_setting.php" class="j-forms" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="update_id" value="<?php echo $row['id']; ?>">
                    <div class="col-md-12">
                     <div class="form-content">
                        <div class="row">
                          <div class="col-md-6 unit">
                              <label for="phone_no"><i class="fa fa-phone"></i> Phone Number</label>
                              <div>
                                  <input class="form-control" type="text" placeholder="Enter Phone Number" id="phone_no" name="phone_no" value="<?php echo $row['1']; ?>">
                              </div>
                          </div>

                          <div class="col-md-6 unit">
                              <label for="email_id"><i class="fa fa-envelope"></i> From  Email id </label>
                              <div>
                                  <input class="form-control" type="email" placeholder="Enter Email id" id="email_id" name="email_id" value="<?php echo $row['2']; ?>">
                              </div>
                          </div>

                          <div class="col-md-6 unit">
                              <label for="alternate_email"> <i class="fa fa-envelope"></i> Received Email id</label>
                              <div>
                                  <input class="form-control" type="email" placeholder="Enter Title" id="alternate_email" name="alternate_email" value="<?php echo $row['3']; ?>">
                              </div>
                          </div>


                          <div class="col-md-6 unit">
                              <label for="host_mail">Host Mail</label>
                              <div>
                                  <input class="form-control" type="text" placeholder="Enter host mail" id="host_mail" name="host_mail" value="<?php echo $row['4']; ?>">
                              </div>
                          </div>

                          <div class="col-md-6 unit">
                              <label for="password"> Host Email id Password</label>
                              <div>
                                  <input class="form-control" type="text" placeholder="Enter Password" id="password" name="password" value="<?php echo $row['5']; ?>">
                              </div>
                          </div>
                      </div>
                    </div>
                 </div>
                 <div class="col-md-12">
                    <div class="row">
                      

                          <div class="col-md-6 unit">
                              <label><i class="fa fa-map-marker"></i> Corporate Office address</label>
                              <div>
                                <textarea class="form-control" rows="5" name="corporate_addresss"><?php echo $row['15']; ?></textarea>
                              </div>
                          </div>
                    </div>
                 </div>
                
                <h3 class="text-center">Manage Social Link </h3>

                <div class="col-md-12">
                     <div class="form-content">
                        <div class="row">
                          <div class="col-md-6 unit">
                              <label for="facebook_link"><i class="fa fa-facebook"></i> Facebook Link</label>
                              <div>
                                  <input class="form-control" type="url" placeholder="Enter facebook url" id="facebook_link" name="facebook" value="<?php echo $row['7']; ?>">
                              </div>
                          </div>

                          <!-- <div class="col-md-6 unit">
                              <label for="instagram"><i class="fa fa-instagram"></i> Instagram Link </label>
                              <div>
                                  <input class="form-control" type="url" placeholder="Enter instagram url" id="instagram" name="instagram" value="<?php echo $row['8']; ?>">
                              </div>
                          </div> -->

                         <!--  <div class="col-md-6 unit">
                              <label for="googlep"><i class="fa fa-google-plus-square"></i>  Google+</label>
                              <div>
                                  <input class="form-control" type="url" placeholder="Enter Google plus url" id="googlep" name="google_plus" value="<?php echo $row['9']; ?>">
                              </div>
                          </div> -->


                          <div class="col-md-6 unit">
                              <label for="linkedin"><i class="fa fa-linkedin-square"></i> linked-in</label>
                              <div>
                                  <input class="form-control" type="url" placeholder="Enter linked-in url" id="linkedin" name="linkedin" value="<?php echo $row['10']; ?>">
                              </div>
                          </div>

                           <div class="col-md-6 unit">
                              <label for="twitter"><i class="fa fa-linkedin-square"></i> Twitter Url</label>
                              <div>
                                  <input class="form-control" type="url" placeholder="Enter Twitter url" id="twitter" name="twitter" value="<?php echo $row['11']; ?>">
                              </div>
                          </div>

                          <!-- <div class="col-md-6 unit">
                              <label for="youtube"> <i class="fa fa-youtube-play"></i>  YouTube</label>
                              <div>
                                   <input class="form-control" type="url" placeholder="Enter youtube url" id="youtube" name="youtube" value="<?php echo $row['12']; ?>">
                              </div>
                          </div> -->

                          <!-- <div class="col-md-6 unit">
                              <label for="pinterest"> <i class="fa fa-pinterest"></i>Pinterest</label>
                              <div>
                                   <input class="form-control" type="url" placeholder="Enter pinterest url" id="pinterest" name="pinterest" value="<?php echo $row['13']; ?>">
                              </div>
                          </div> -->
                          

                          <div class="col-md-7 unit">
                            <button type="submit" id="btn_submit" class="btn btn-info primary-btn" name="update">Update</button>
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

    </div>
  <?php include('include/footer.php'); ?>