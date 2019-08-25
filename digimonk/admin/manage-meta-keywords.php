<?php include('include/header.php'); ?>


<div class="container-fluid">
        <div class="page-header filled full-block light">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Manage Meta keywords </h2>
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
            $query = mysqli_query($conn,"SELECT * FROM meta_keywords WHERE id='".$id."'");
            $row = mysqli_fetch_array($query);

         ?>
          <div class="widget-container">
              <div class="widget-content">
                 <?php if(@$_GET['update']) { ?>
                    <div class="alert alert-success alert-dismissible">
                      <a href="manage-meta-keywords.php" class="close">&times;</a>
                      <strong>Updated</strong> Successfully.
                    </div>
              <?php } ?>

              <?php if(@$_GET['update_fail']) { ?>
                    <div class="alert alert-danger alert-dismissible">
                      <a href="manage-meta-keywords.php" class="close">&times;</a>
                      <strong>Not Update</strong> Please try Again!...
                    </div>
              <?php } ?>
                <div class="row">
                  <form action="update_meta_keywords.php" class="j-forms" method="POST" enctype="multipart/form-data">
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
                              <label for="page_title">Page Title </label>
                              <div>
                                  <input class="form-control" type="text" placeholder="Enter Page Title" id="page_title" name="page_title" value="<?php echo $row['page_title']; ?>">
                              </div>
                          </div>
     

                           <div class="col-md-6 unit">
                              <label>Meta Keywords</label>
                              <div>
                                   <textarea class="form-control" rows="5" name="meta_keywords"><?php echo $row['mete_keywords']; ?></textarea>
                              </div>
                          </div>

                           <div class="col-md-6 unit">
                              <label>Meta Description</label>
                              <div>
                                   <textarea class="form-control" rows="5" name="meta_description"><?php echo $row['meta_description']; ?></textarea>
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
    
  <?php include('include/footer.php'); ?>