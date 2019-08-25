<?php include('include/header.php'); ?>


<div class="container-fluid">
        <div class="page-header filled full-block light">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Edit Review</h2>
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
                $query = mysqli_query($conn,"SELECT * FROM review WHERE id='".$id."'");
                $row = mysqli_fetch_array($query);
                 
         ?>
          <div class="widget-container">
              <div class="widget-content">
                 <?php if(@$_GET['save']) { ?>
                    <div class="alert alert-success alert-dismissible">
                      <a href="edit-review.php" class="close">&times;</a>
                      <strong>Save</strong> Successfully.
                    </div>
              <?php } ?>

              <?php if(@$_GET['save_fail']) { ?>
                    <div class="alert alert-success alert-dismissible">
                      <a href="edit-review.php" class="close">&times;</a>
                      <strong>Not Save</strong> Please try Again!...
                    </div>
              <?php } ?>
                <div class="row">
                  <form action="save_review.php" class="j-forms" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="updateid" value="<?php echo $row['id']; ?>">
                    <div class="col-md-6">
                     <div class="form-content">
                        <div class="row">
                          <div class="col-md-12 unit">
                              <label for="name">Name</label>
                              <div>
                                  <input class="form-control" type="text" placeholder="Enter Name" id="name" name="name" value="<?php echo $row['name']; ?>">
                              </div>
                          </div>

                          <div class="col-md-12 unit">
                              <label for="designation">Country</label>
                              <div>
                                  <input class="form-control" type="text" placeholder="Enter Country" id="designation" name="designation" value="<?php echo $row['designation']; ?>">
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
                      <div class="form-control" style="width:56%; height:242px; margin-top:10px;">
                         <img id="img1" src="images/testimonials_img/<?php echo $row['image']; ?>" alt="" style="width:100%;height:219px;object-fit: cover;">
                       </div>
                    <label for="field1" class="form-control btn btn-primary" style="text-align:center; margin-top:5px;width:56%" id="image1">Upload picture</label>
                    <input type="file" id="field1" class="form-control" style="visibility:hidden;" name="img" onchange="readURL(this);">
                  <script>
                      function readURL(input) {
                          if (input.files && input.files[0]) {
                              var reader = new FileReader();

                              reader.onload = function (e) {
                                  $('#img1')
                                      .attr('src', e.target.result)
                                      .width(222)
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
                       <div class="col-md-12 unit">
                          <label>Description</label>
                          <div>
                            <textarea class="form-control summernote" name="description"><?php echo $row['description']; ?></textarea>
                          </div>
                      </div>

                   <div class="col-md-7">
                      <div class="form-footer">
                      <br>
                      <button type="submit" id="btn_submit" class="btn btn-info primary-btn" name="update">Update</button>
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