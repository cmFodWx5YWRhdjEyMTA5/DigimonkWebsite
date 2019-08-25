<?php include('include/header.php'); ?>


<div class="container-fluid">
        <div class="page-header filled full-block light">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Add Ours Customers</h2>
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
                      <a href="add-ours-customer.php" class="close">&times;</a>
                      <strong>Member Added</strong> Successfully.
                    </div>
              <?php } ?>  

              <?php if(@$_GET['save-fail']) { ?>
                    <div class="alert alert-success alert-dismissible">
                      <a href="add-ours-customer.php" class="close">&times;</a>
                      <strong>Not Save</strong> Please try Again!...
                    </div>
              <?php } ?>
                <div class="row">
                  <form action="save_ours_customers.php" class="j-forms" method="POST" enctype="multipart/form-data">
                    <div class="col-md-12">
                     <div class="form-content">
                        <div class="row">
                          <div class="col-md-6 unit">
                              <label for="heading">Heading</label>
                              <div>
                                  <input class="form-control" type="text" placeholder="Enter Heading" id="heading" name="heading" required="">
                              </div>
                          </div>

                          <div class="col-md-6 unit">
                              <label for="title">Title</label>
                              <div>
                                  <input class="form-control" type="text" placeholder="Enter Title" id="title" name="title" required="">
                              </div>
                          </div>

                        <!--   <div class="col-md-6 unit">
                              <label for="facebook"> <i class="fa fa-facebook"></i> Facebook Url</label>
                              <div>
                                  <input class="form-control" type="url" placeholder="Enter Facebook Url" id="facebook" name="facebook">
                              </div>
                          </div> -->

                          <!-- <div class="col-md-6 unit">
                              <label for="instagram"><i class="fa fa-instagram"></i> Instagram Url</label>
                              <div>
                                  <input class="form-control" type="url" placeholder="Enter Instagram Url" id="instagram" name="instagram">
                              </div>
                          </div> -->

                         <!--  <div class="col-md-6 unit">
                              <label for="twitter"><i class="fa fa-twitter"></i> Twitter Url</label>
                              <div>
                                  <input class="form-control" type="url" placeholder="Enter twitter Url" id="twitter" name="twitter">
                              </div>
                          </div> -->

                         <!--   <div class="col-md-6 unit">
                              <label for="email"><i class="fa fa-envelope"></i> Email id</label>
                              <div>
                                  <input class="form-control" type="email" placeholder="Enter email id" id="email" name="email_id">
                              </div>
                          </div> -->

                           <!-- <div class="col-md-6 unit">
                              <label for="googlep"><i class="fa fa-google-plus-square"></i> Google+ Url</label>
                              <div>
                                  <input class="form-control" type="url" placeholder="Enter Google+ Url" id="googlep" name="googlep">
                              </div>
                          </div> -->

                          <!--  <div class="col-md-6 unit">
                              <label for="linkedin"><i class="fa fa-linkedin-square"></i> Linked-in Url</label>
                              <div>
                                  <input class="form-control" type="url" placeholder="Enter linkedin Url" id="linkedin" name="linkedin">
                              </div>
                          </div> -->

                          <!-- <div class="col-md-6 unit">
                              <label for="pinterest"><i class="fa fa-pinterest"></i> Pinterest Url</label>
                              <div>
                                  <input class="form-control" type="url" placeholder="Enter Pinterest Url" id="pinterest" name="pinterest">
                              </div>
                          </div> -->


                        </div>
                    </div>
                 </div>

             <div class="col-md-6">
                <div class="form-content">
                   <div class="row">
                      <div class="col-md-12 unit">
                   <label class="label text-center">Image</label> 
                    <div class="col-md-12"> 
                      <div class="form-control" style="width:61%; height:236px; margin-top:10px;">
                         <img id="img1" src="" alt="" style="width:100%;height:219px;object-fit: cover;">
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
                                      .width(244)
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


             <div class="col-md-6">
                 <div class="form-content">
                    <div class="row">
                       <div class="col-md-12 unit">
                          <label>Description</label>
                          <div>
                            <textarea class="form-control" rows="5" name="description" placeholder="Enter Description"></textarea>
                          </div>
                      </div>
                    </div>
                  <!-- end text password -->
              </div>
              </div>

             <div class="col-md-12">
               <center><button type="submit" id="btn_submit" class="btn btn-info" name="save">Save</button></center>
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