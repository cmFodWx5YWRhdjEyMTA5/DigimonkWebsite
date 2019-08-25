<?php include('include/header.php'); ?>


<div class="container-fluid">
        <div class="page-header filled full-block light">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Add Slider Image</h2>
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
                      <a href="add-slider-image.php" class="close">&times;</a>
                      <strong>Save</strong> Successfully.
                    </div>
              <?php } ?>

              <?php if(@$_GET['save-fail']) { ?>
                    <div class="alert alert-success alert-dismissible">
                      <a href="add-slider-image.php" class="close">&times;</a>
                      <strong>Not Save</strong> Please try Again!...
                    </div>
              <?php } ?>
                <div class="row">
                  <form action="save_slider_image.php" class="j-forms" method="POST" enctype="multipart/form-data">
                    <div class="col-md-6">
                     <div class="form-content">
                        <div class="row">
                          <div class="col-md-12 unit">
                              <label>Heading <span style="color: red;">(40-50 words)</span></label>
                              <div>
                                  <input class="form-control" type="text" placeholder="Enter Heading" id="heading" name="heading">
                              </div>
                          </div>

                          <div class="col-md-12 unit">
                              <label>Url</label>
                              <div>
                                  <input class="form-control" type="url" placeholder="Enter url" id="url_line" name="url_line">
                              </div>
                          </div>

                          <div class="col-md-12 unit">
                              <label>Short Description <span style="color: red;">(150-200 words)</span></label>
                              <div>
                                  <textarea class="form-control" rows="5" name="short_description" placeholder="Enter Short Description"></textarea>
                              </div>
                          </div>

                        </div>
                    </div>
                 </div>

             <div class="col-md-6">
                <div class="form-content">
                   <div class="row">
                      <div class="col-md-12 unit">
                   <label class="label text-center">Image</label> 
                    <div class="col-md-12"> 
                      <div class="form-control" style="width:100%; height:236px; margin-top:10px;">
                         <img id="img1" src="" alt="" style="width:100%;height:219px;object-fit: contain;">
                       </div>
                    <label for="field1" class="form-control btn btn-primary" style="text-align:center; margin-top:5px;width:100%" id="image1">Upload picture</label>
                    <input type="file" id="field1" class="form-control" style="visibility:hidden;" name="img" onchange="readURL(this);">
                  <script>
                      function readURL(input) {
                          if (input.files && input.files[0]) {
                              var reader = new FileReader();

                              reader.onload = function (e) {
                                  $('#img1')
                                      .attr('src', e.target.result)
                                      .width(420)
                                      .height(218);
                              };

                              reader.readAsDataURL(input.files[0]);
                          }
                      }
                  </script>
           </div>
          </div>
        </div>
      </div>
    </div>


             <div class="col-md-12">
                 <div class="form-content">
                    <div class="row">
                      <!--  <div class="col-md-12 unit">
                          <label>Description</label>
                          <div>
                            <textarea class="form-control summernote" name="description"></textarea>
                          </div>
                      </div> -->

                   <div class="col-md-7">
                      <div class="form-footer">
                      <br>
                      <button type="submit" id="btn_submit" class="btn btn-info primary-btn" name="save">Save</button>
                  </div>
                   </div>
                  </div>
                  <!-- end text password -->
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