<?php include('include/header.php'); ?>
<style type="text/css">
  .fdj{
  position: relative;
  float: left;
}
.fdj:hover span{
  display:block;
  position: absolute;
  top:6px;
  cursor: pointer;
  left:17px;
}
.fdj span{
  display:none;
      position: absolute;
    top: 6px;
    cursor: pointer;
    left: 17px;
}
.fdj.remove_image_gm.kiop {
    border: 1px solid #ccc;
    margin: 10px 0px; text-align:center;min-height: 262px;
}
.fdj.remove_image_gm.kiop img{    width: 100% !important;
    height: 260px;    padding: 2px;
    object-fit: cover;}
</style>

<div class="container-fluid">
        <div class="page-header filled full-block light">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Add Event</h2>
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
                      <a href="add-event.php" class="close">&times;</a>
                      <strong>Save</strong> Successfully.
                    </div>
              <?php } ?>

              <?php if(@$_GET['save-fail']) { ?>
                    <div class="alert alert-success alert-dismissible">
                      <a href="add-event.php" class="close">&times;</a>
                      <strong>Not Save</strong> Please try Again!...
                    </div>
              <?php } ?>
                <div class="row">
                  <form action="save_event.php" class="j-forms" method="POST" enctype="multipart/form-data">
                    <div class="col-md-6">
                     <div class="form-content">
                        <div class="row">
                            <div class="col-md-12 unit">
                              <label>Heading</label>
                              <div>
                                  <input class="form-control" type="text" placeholder="Enter Heading" id="heading" name="heading" required="">
                              </div>
                          </div>
                           <div class="col-md-12 unit">
                              <label>Meta Keywords</label>
                              <div>
                                  <textarea class="form-control" rows="5" name="meta_keyword" placeholder="Enter Meta Keywords"></textarea>
                              </div>
                          </div>
                            <div class="col-md-12 unit">
                              <label>Short Description</label>
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
                         <img id="output" src="" alt="" style="width:100%;height:219px;object-fit: contain;">
                       </div>
                      <label for="field2" class="form-control btn btn-primary" style="text-align:center; margin-top:5px;width:100%" id="image1">Upload picture</label>
                    <input type="file" id="field2" class="form-control filename" style="visibility:hidden;" name="img" onchange="loadFile(event)">
                 <script>
                    var loadFile = function(event) {
                      var output = document.getElementById('output');
                      output.src = URL.createObjectURL(event.target.files[0]);
                    };
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
                          <label>Add More Image</label>
                          <div>
                            <button id="add_field1" class="btn btn-primary" type="button">Add Image</button>
                          </div>
                      </div>

                      <div class="col-md-12" id="add_field2" style="display: none;">
                         <div class="row">
                            

                    <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-12 img-grid" id="img2" name="image2">
                            
                          </div>
                        </div>
                     </div> 
                <div class="col-md-6 unit">

                   <label for="field1" class="form-control btn btn-primary" style="text-align:center; margin-top:5px;width:70%;cursor: pointer;border: 1px solid #946ed5;" id="image2">Upload Image<span id="selected_images"></span></label>
                     <input type="file" id="field1" class="form-control" style="visibility:hidden;" name="event_img[]" onchange="readURL(this);" multiple>
                </div>
              
               <script>
                  function readURL(input) {
                   $("#selected_images").html(input.files.length);
                    if(input.files.length>20)
                    {
                      alert("Upload images less than 20");
                    }
                    else
                    {
                    for(var i=0; i<input.files.length; i++)
                    {
                      if (input.files && input.files[i]) {
                         var reader = new FileReader();
                         var files_data=input.files[i];

                         reader.onload = function (files_data) {
     
                            
                            $("#img2").append('<div class="fdj remove_image_gm kiop"><span><i class="fa fa-times remove-img""></i></span><img src="'+files_data.target.result+'" style="width:50%;"></div>')
                        
                              // $('.img1')
                             //     .attr('src', e.target.result)
                             //     .width(250)
                             //     .height(50);
                         };
                  
                         reader.readAsDataURL(input.files[i]);
                     } 
                    } 
                  }
               }
           </script>
                    
                         </div>
            </div>
                    

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