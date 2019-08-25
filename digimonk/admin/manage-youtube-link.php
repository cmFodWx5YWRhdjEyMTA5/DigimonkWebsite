<?php include('include/header.php'); ?>


<div class="container-fluid">
        <div class="page-header filled full-block light">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Manage Youtube Video</h2>
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

              $query = mysqli_query($conn,"SELECT * FROM youtube_link");
              $row = mysqli_fetch_array($query);

              $set_youtube_url  = explode("*#*", $row['youtube1']);
         ?>
          <div class="widget-container">
              <div class="widget-content">
                 <?php if(@$_GET['update']) { ?>
                    <div class="alert alert-success alert-dismissible">
                      <a href="manage-youtube-link.php" class="close">&times;</a>
                      <strong>Updated</strong> Successfully.
                    </div>
              <?php } ?>

              <?php if(@$_GET['update_fail']) { ?>
                    <div class="alert alert-danger alert-dismissible">
                      <a href="manage-youtube-link.php" class="close">&times;</a>
                      <strong>Not Save</strong> Please try Again!...
                    </div>
              <?php } ?>
              <div class="row">
               <form action="update_youtube_video.php" class="j-forms" method="POST" enctype="multipart/form-data">
                 <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                  <div class="col-md-6">
                   <div class="form-content">
                      <div class="row">
 

                <div class="col-md-12"><br>
                  <button type="button" class="btn btn-success" id="add_data">
                   <i class="fa fa-plus"></i> Add more</button>
                 <div id="show-my-services">
                
                  <?php 
                        for($i=0; $i<count($set_youtube_url); $i++)
                        {

                  ?>
                 <div class="row remove_div">
                   <div class="col-md-12">  <br>
                    <label class="control-label"><i class=""></i>Youtube Url</label>
                     <input class="form-control"  placeholder="Enter Youtube Url"  name="youtube_linl1[]" id="youtube_linl1" value="<?php echo $set_youtube_url[$i]; ?>"> 
                    </div>
                     
                     <div class="col-md-6"> 
                      <button type="button" class="btn btn-danger remove_services_btn" style="margin-top:26px;"><i class="fa fa-trash"></i> Remove</button>
                   </div> 
                     
                   </div>
                 <?php } ?>
               </div>
            </div>
                         <div class="col-md-7">
                          <div class="form-footer">
                          <br>
                          <button type="submit" id="btn_submit" class="btn btn-success primary-btn" name="update1">Update</button>
                      </div>
                   </div>
                      </div>
                  </div>
               </div>
           </form>

 
             <div class="col-md-6">
                <div class="form-content">
                   <div class="row">
                      <div class="col-md-12 unit">
                     <!-- <label class="label text-center"></label>  -->
                    <div class="col-md-12"> 
                      <!-- <div class="embed-section">
                      <div class="embed-responsive embed-responsive-16by9">

                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="<?php echo $row['youtube1']?>">
                           <span></span>
                        </a>
                        <iframe width="560" height="315" src="<?php echo $row['youtube1']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       


                      </div>
                    </div> -->

                    <!-- <div class="embed-section">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="<?php echo $row['youtube1']; ?>" allowfullscreen=""></iframe>
                      </div>
                    </div> -->


                  </div>
          </div>
        </div>
      </div>
    </div>
    </div>



              <div class="row">
                  <!-- <form action="update_youtube_video.php" class="j-forms" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="col-md-6">
                     <div class="form-content">
                        <div class="row">
                          <div class="col-md-12 unit">
                              <label>Youtube Url 2</label>
                              <div>
                                <textarea class="form-control" rows="5" placeholder="Enter Youtube Url" name="youtube_linl2"><?php echo $row['2']; ?></textarea>
                                  
                              </div>
                          </div>

                           <div class="col-md-7">
                            <div class="form-footer">
                            <br>
                            <button type="submit" id="btn_submit" class="btn btn-success primary-btn" name="update2">Update</button>
                        </div>
                     </div>
                        </div>
                    </div>
                 </div>
             </form> -->


          <!--    <div class="col-md-6">
                <div class="form-content">
                   <div class="row"><br>
                      <div class="col-md-12 unit">
                  <label class="label text-center">Image</label>  
                   <div class="col-md-12"> 
                      <div class="embed-section">
                      <div class="embed-responsive embed-responsive-16by9">
                      <?php echo $row['youtube2']; ?>
                      </div>
                    </div>
                  </div>
          </div>
        </div>
      </div>
    </div> -->
    </div>
          </div>
          </div>
      </div>
    </div>
   </div>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  <?php include('include/footer.php'); ?>