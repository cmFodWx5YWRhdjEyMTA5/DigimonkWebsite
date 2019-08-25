<?php include('include/header.php'); ?>


<div class="container-fluid">
        <div class="page-header filled full-block light">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">How It Works</h2>
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
                      <a href="manage-how-it-work.php" class="close">&times;</a>
                      <strong>Updated</strong> Successfully.
                    </div>
              <?php } ?>

              <?php if(@$_GET['save-fail']) { ?>
                    <div class="alert alert-success alert-dismissible">
                      <a href="manage-how-it-work.php" class="close">&times;</a>
                      <strong>Not Save</strong> Please try Again!...
                    </div>
              <?php } ?>
              <div class="main-content">

            
  
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-12">
    <div class="tabs-container">

    <a class="active" aria-expanded="true" href="#main_heading" data-toggle="tab">
      <button class="btn btn-primary advatage">
        Top Main Heading </button>
    </a>

    <a class="" aria-expanded="true" href="#cost" data-toggle="tab">
      <button class="btn btn-warning advatage">
      <i class="fa fa-dollar"></i> Cost </button>
    </a>

    <a aria-expanded="false" href="#cloud_clarity" data-toggle="tab">
      <button class="btn btn-info interest-rate">
      <i class="fa fa-cloud"></i> Cloud Clarity </button>
    </a>
    <a aria-expanded="false" href="#dedication_best" data-toggle="tab">
      <button class="btn btn-success">
      <i class="fa fa-man"></i> Dedication to best fit </button>
    </a>
     
      <br>
  <div class="tab-content">
    <div class="tab-pane active" id="main_heading">
      <div class="panel-body" style=" margin-top: 6px; border: 1px dashed #fad839; ">
      <h4 align="center" style="color: #000;"><b>Top Main Heading</b></h4>
      <h4 align="center" style="color: #000;">----------------------------</h4>
        
        <?php

            $top_heading_query = mysqli_query($conn,"SELECT * FROM how_it_works_heading");
            $top_heading_row = mysqli_fetch_array($top_heading_query);
        ?>
        <form method="post" action="save_top_heading.php" enctype="multipart/form-data">
        <input type="hidden" name="update_top_heading" value="<?php echo $top_heading_row['id']; ?>">
         <div class="col-md-12">
          <div class="row">
            
          <div class="col-md-6">
            <label>Heading</label>
            <input type="text" class="form-control" name="top_heading" value="<?php echo $top_heading_row['heading']; ?>" placeholder="Enter heading">
          </div>
 
            <br>
            <div class="col-md-8" style="margin-top: 20px;">
              <label>Description</label>
              <textarea class="form-control" name="top_description" rows="8" placeholder="Enter Description"><?php echo $top_heading_row['description']; ?></textarea>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-12" style="margin-top: 20px;">
              <center><button class="btn btn-warning btn-outline" name="top_update">Update</button></center>
            </div>
          </div>
         </div>
      </form>

      </div>
    </div>

    <div class="tab-pane" id="cost">
      <div class="panel-body" style=" margin-top: 6px; border: 1px dashed #5bc0de; ">
      <h4 align="center" style="color: #000;"><b>Cost</b></h4>
      <h4 align="center" style="color: #000;">---------------</h4>

       <?php

            $cost_heading_query = mysqli_query($conn,"SELECT * FROM how_it_works_cost");
            $cost_heading_row = mysqli_fetch_array($cost_heading_query);
            
        ?>

       <form method="post" action="save_cost.php" enctype="multipart/form-data">
        <input type="hidden" name="update_id" value="<?php echo $cost_heading_row['id']; ?>">
         <div class="col-md-12">
          <div class="row">
            
          <div class="col-md-6">
            <label>Heading</label>
            <input type="text" class="form-control" name="cost_heading" placeholder="Enter Heading" value="<?php echo $cost_heading_row['cost_heading']; ?>">
          </div>

            <!-- <div class="col-md-6">
              <label>Title</label>
              <input type="text" class="form-control" name="interest_title" value="">
            </div> -->

            <br>
            <div class="col-md-8" style="margin-top: 20px;">
              <label>Description</label>
              <textarea class="form-control" name="cost_description" rows="8" placeholder="Enter Description"><?php echo $cost_heading_row['cost_description']; ?></textarea>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-12" style="margin-top: 20px;">
              <center><button type="submit" class="btn btn-info btn-outline" name="update_cost">Update</button></center>
            </div>
          </div>
         </div>
      </form>
      </div>
    </div>

      <div class="tab-pane" id="cloud_clarity">
      <div class="panel-body" style=" margin-top: 6px; border: 1px dashed #029b17 ">
        <h4 align="center" style="color: #000;"><b>Cloud Clarity </b></h4>
        <h4 align="center" style="color: #000;">----------------------------</h4>

      <?php

            $cloud_heading_query = mysqli_query($conn,"SELECT * FROM how_it_works_cloud");
            $cloud_heading_row = mysqli_fetch_array($cloud_heading_query);
            
        ?>
       <form method="post" action="save_cost.php" enctype="multipart/form-data">
        <input type="hidden" name="update_cloud_id" value="<?php echo $cloud_heading_row['id']; ?>">
         <div class="col-md-12">
          <div class="row">
            
            <div class="col-md-6">
              <label>Heading</label>
              <input type="text" class="form-control" name="cloud_heading" value="<?php echo $cloud_heading_row['cloud_heading']; ?>" placeholder="Enter Heading">
            </div>

            <!-- <div class="col-md-6">
              <label>Title</label>
              <input type="text" class="form-control" name="f_title" value="" placeholder="Enter ">
            </div> -->
            <br>
            <div class="col-md-8" style="margin-top: 20px;">
              <label>Description</label>
              <textarea class="form-control" name="cloud_description" rows="8" placeholder="Enter Description"><?php echo $cloud_heading_row['cloud_description']; ?></textarea>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-12" style="margin-top: 20px;">
              <center><button class="btn btn-success btn-outline" name="update_cloud">Update</button></center>
            </div>
          </div>
         </div>
      </form>
      </div>
    </div>


      <div class="tab-pane " id="dedication_best">
      <div class="panel-body" style=" margin-top: 6px; border: 1px dashed #0057a1;">
        <h4 align="center" style="color: #000;"><b>Dedication to best fit </b></h4>
        <h4 align="center" style="color: #000;">----------------------------</h4>
     <?php

            $dedication_heading_query = mysqli_query($conn,"SELECT * FROM how_it_works_dedication");
            $dedication_heading_row = mysqli_fetch_array($dedication_heading_query);
            
        ?>
      <form method="post" action="save_cost.php" enctype="multipart/form-data">
        <input type="hidden" name="update_dedication_id" value="<?php echo $dedication_heading_row['id']; ?>">
         <div class="col-md-12">
          <div class="row">
            
            <div class="col-md-6">
              <label>Heading</label>
              <input type="text" class="form-control" name="dedication_heading" value="<?php echo $dedication_heading_row['dedication_heading']; ?>">
            </div>

            <!-- <div class="col-md-6">
              <label>Title</label>
              <input type="text" class="form-control" name="dedication_title" value="Lorem Ipsum">
            </div> -->
            <br>
            <div class="col-md-8" style="margin-top: 20px;">
              <label>Description</label>
              <textarea class="form-control" name="dedication_description" rows="8"><?php echo $dedication_heading_row['dedication_description']; ?></textarea>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-12" style="margin-top: 20px;">
              <center><button class="btn btn-blue btn-outline" name="update_dedication">Update</button></center>
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
   

 
     <!--End Interest Rate-->
    <br>
    <div class="clearfix">&nbsp;</div>
    <!-- Footer -->
      
    <!-- /footer -->
    
    </div>
          </div>
          </div>
      </div>
    </div>
   </div>

    </div>
  <?php include('include/footer.php'); ?>