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
                    <h2 class="text-center">Update Portfolio</h2>
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

                $id =@$_GET['id'];

                $query = mysqli_query($conn,"SELECT * FROM project WHERE id='".$id."'");
                $row = mysqli_fetch_array($query);


         ?>
          <div class="widget-container">
              <div class="widget-content">
              
                <div class="row">
                  <form action="save_project.php" class="j-forms" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="update_project" value="<?php echo $row['id']; ?>">
                    <input type="hidden" name="single_old_img" value="<?php echo $row['image']; ?>">
                    <div class="col-md-6">
                     <div class="form-content">
                        <div class="row">
                          <div class="col-md-12 unit">
                              <label>Type Application</label>
                              <div>
                                 <select class="form-control" name="types_application">
                                  <?php if($row['types_web']=="Web Development") { ?>
                                   <option value="Web Development">Web Development</option>
                                   <option value="Mobile Application">Mobile Application</option>
                                 <?php }else { ?>

                                  <option value="Mobile Application">Mobile Application</option>
                                  <option value="Web Development">Web Development</option>
                                  <?php } ?>
                                 </select>
                              </div>
                          </div>
                          <div class="col-md-12 unit">
                              <label>Heading</label>
                              <div>
                                  <input class="form-control" type="text" placeholder="Enter Heading" id="heading" name="heading" value="<?php echo $row['heading']; ?>">
                              </div>
                          </div>
                           <div class="col-md-12 unit">
                              <label>Meta Keywords</label>
                              <div>
                                  <textarea class="form-control" rows="5" name="meta_keyword" placeholder="Enter Meta Keywords"><?php echo $row['meta_keyword']; ?></textarea>
                              </div>
                          </div>
                           <div class="col-md-12 unit">
                              <label>Short Description</label>
                              <div>
                                  <textarea class="form-control" rows="5" name="short_description" placeholder="Enter Short Description"><?php echo $row['short_description']; ?></textarea>
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
                         <img id="output" src="images/project_img/<?php echo $row['image']; ?>" alt="" style="width:100%;height:219px;object-fit:contain;">
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
                          <label>Advance settings</label>
                          <div>
                            <button id="add_field1" class="btn btn-primary" type="button">ADD</button>
                          </div>
                      </div>

                      <div class="col-md-12" id="add_field2">
                         <div class="row">
                            <div class="col-md-6 unit">
                             <label>Project Client name</label>
                            <div>
                               <input type="text" name="clien_name" class="form-control" placeholder="Enter Client name" value="<?php echo $row['client_name']; ?>"> 
                            </div>
                          </div>

                          <div class="col-md-6 unit">
                              <label>Project Url</label>
                              <div>
                                  <input class="form-control" type="url" placeholder="Enter Url" id="url" name="project_url" value="<?php echo $row['project_url']; ?>">
                              </div>
                          </div>

                          <div class="col-md-6 unit">
                              <label>Technology</label>
                              <div>
                                  <textarea class="form-control" name="technology_part" placeholder="Enter Technology"><?php echo $row['technology']; ?></textarea>
                              </div>
                          </div>

                          <div class="col-md-6 unit">
                              <label>Location</label>
                              <div>
                                  <input class="form-control" type="text" placeholder="Enter Location" id="location" name="location" value="<?php echo $row['location']; ?>">
                              </div>
                          </div>

                         <!--  <div class="col-md-6 unit">
                              <label>Project Complete</label>
                              <div>
                                  <input class="form-control" type="text" placeholder="Enter Project complete date" id="complete_date" name="complete_date" value="<?php echo $row['complete_date']; ?>">
                              </div>
                          </div> -->

          <div class="col-md-12">
             <div class="row">


               <?php if(@$row["multi_imag"]) { 
                  $get_image=explode("*#*", $row["multi_imag"]);
                  for($i=0; $i<count($get_image); $i++) { 

                      // var_dump($get_image);
                    ?>
               
               <div class="col-md-4 img-grid" id="img2" name="image2">
           
              
               <div class="fdj remove_image_gm kiop">
                 <input type="hidden" name="old_image[]" value="<?php echo @$get_image[$i]; ?>">

                  <span><i class="fa fa-times remove-img"></i></span>
                    <img src="images/project_img/<?php echo @$get_image[$i]; ?>" style="width:250px;">
             </div>
         </div>
           
       <?php } } ?>
                    </div>
                 </div> 
                <div class="col-md-6 unit">

                   <label for="field1" class="form-control btn btn-primary" style="text-align:center; margin-top:5px;width:70%;cursor: pointer;border: 1px solid #946ed5;" id="image2">Upload Image<span id="selected_images"></span></label>
                     <input type="file" id="field1" class="form-control" style="visibility:hidden;" name="project_img[]" onchange="readURL(this);" multiple>
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
     
                            
                            $("#img2").append('<div class="fdj remove_image_gm kiop"><span><i class="fa fa-times remove-img""></i></span><img src="'+files_data.target.result+'" style="width:100%;"></div>')
                        
                             
                             
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
                          <div class="col-md-12 unit">
                          <label>Description</label>
                          <div>
                            <textarea class="form-control summernote" name="description"><?php echo $row['description']; ?></textarea>
                          </div>
                      </div>
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