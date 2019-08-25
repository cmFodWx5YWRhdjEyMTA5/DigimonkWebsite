<?php include('include/header.php'); ?>


<div class="container-fluid">
        <div class="page-header filled full-block light">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Manage Google Analytics </h2>
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
              $id = @$_GET['id'];
            $query = mysqli_query($conn,"SELECT * FROM google_analytics_code WHERE id='".$id."'");
            $row = mysqli_fetch_array($query);

         ?>
          <div class="widget-container">
              <div class="widget-content">
                 <?php if(@$_GET['update']) { ?>
                    <div class="alert alert-success alert-dismissible">
                      <a href="edit-google-analytics.php" class="close">&times;</a>
                      <strong>Updated</strong> Successfully.
                    </div>
              <?php } ?>

              <?php if(@$_GET['update_fail']) { ?>
                    <div class="alert alert-danger alert-dismissible">
                      <a href="edit-google-analytics.php" class="close">&times;</a>
                      <strong>Not Update</strong> Please try Again!...
                    </div>
              <?php } ?>
                <div class="row">
                  <form action="update_google_analytics.php" class="j-forms" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="update_id" value="<?php echo $row['id']; ?>">
                    <div class="col-md-12">
                     <div class="form-content">
                        <div class="row">
                          <div class="col-md-6 unit">
                              <label for="page_name">Page Name</label>
                              <div>
                                  <input class="form-control" type="text" placeholder="Enter Page Name" id="page_name" name="page_name" value="<?php echo $row['page_name']; ?>" readonly>
                              </div>
                          </div>
                            <div class="col-md-6 unit">
                              <label>Google Analytical Code</label>
                              <div>
        <textarea class="form-control" rows="5" name="google_code"><?php echo $row['google_analy_code']; ?></textarea>
                              </div>
                          </div>
                          <div class="col-md-12">
                             <center><button type="submit" class="btn btn-warning" name="update">Update</button></center>
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
    <br>
    <br>
    <br>
    <br>
    
  <?php include('include/footer.php'); ?>