<?php include('include/header.php'); ?>


<div class="container-fluid">
        <div class="page-header filled full-block light">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Update Job Types</h2>
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
         
          <div class="widget-container">
              <div class="widget-content">
                 <?php if(@$_GET['save']) { ?>
                    <div class="alert alert-success alert-dismissible">
                      <a href="edit-job.php" class="close">&times;</a>
                      <strong>Updated Job</strong> Successfully.
                    </div>
              <?php } ?>  

              <?php if(@$_GET['save-fail']) { ?>
                    <div class="alert alert-success alert-dismissible">
                      <a href="edit-job.php" class="close">&times;</a>
                      <strong>Not Save</strong> Please try Again!...
                    </div>
              <?php } ?>
                <div class="row">
                <?php 
                      $id = @$_GET['id'];
                      $query_job = mysqli_query($conn,"SELECT * FROM job_type WHERE id='".$id."'");
                      $row = mysqli_fetch_array($query_job);
                ?>
                  <form action="save_job.php" class="j-forms" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="update_job" value="<?php echo $row['id']; ?>">
                    <div class="col-md-12">
                     <div class="form-content">
                        <div class="row">
                          <div class="col-md-6 unit">
                              <label for="language">Language Type</label>
                              <div>
                                  <input class="form-control" type="text" placeholder="Enter Language" id="language" name="language" value="<?php echo $row['language_type']; ?>">
                              </div>
                          </div>

                          <div class="col-md-6 unit">
                              <label for="education">Education</label>
                              <div>
                                  <input class="form-control" type="text" placeholder="Enter education" id="education" name="education" value="<?php echo $row['education']; ?>">
                              </div>
                          </div>
                          <div class="col-md-6 unit">
                              <label for="experience">Experience Year</label>
                              <div>
                                  <input class="form-control" type="text" placeholder="Enter Experience year" id="experience" name="experience" value="<?php echo $row['experience']; ?>">
                              </div>
                          </div>

                          <div class="col-md-6 unit">
                              <label for="facebook">Location</label>
                              <div>
                                  <input class="form-control" type="text" placeholder="Enter Location" id="location" name="location" value="<?php echo $row['location']; ?>">
                              </div>
                          </div>
  
                   <div class="col-md-12 unit">
                              <label> Description</label>
                              <div>
                                 <textarea class="form-control summernote" name="description"><?php echo $row['description']; ?></textarea>
                              </div>
                          </div>

                          <!-- <div class="col-md-6 unit">
                              <label for="pinterest"><i class="fa fa-pinterest"></i> Pinterest Url</label>
                              <div>
                                  <input class="form-control" type="url" placeholder="Enter Pinterest Url" id="pinterest" name="pinterest">
                              </div>
                          </div> -->


                        </div>
                    </div>
                 </div>
 

             <div class="col-md-12">
               <center><button type="submit" id="btn_submit" class="btn btn-info" name="update">Update</button></center>
            </div>
           </form>
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
  <?php include('include/footer.php'); ?>