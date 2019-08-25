<?php include('include/header.php'); ?>


<div class="container-fluid">
        <div class="page-header filled full-block light">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">View Description</h2>
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

                $id =@$_GET['view_id'];

                $query = mysqli_query($conn,"SELECT * FROM event WHERE id='".$id."'");
                $row = mysqli_fetch_array($query);


         ?>
          <div class="widget-container">
              <div class="widget-content">
                  <div class="row">
                    <div class="col-md-12">
                     <div class="form-content">
                       <div class="row">  </div>
                        <div class="row">
                        	<div class="col-md-5">
                             	<img src="images/event_gallery_img/<?php echo $row['image']; ?>" style="width:100%;border: 1px solid #000;padding: 6px;" alt="s">
                            </div>
                      	<div class="col-md-7">
                        		<h4><?php echo $row['heading']; ?></h4>
                             <h4>Short Description</h4>
                      		<p><?php echo $row['short_description']; ?></p>	
                         
                	</div>
                </div>
                 <div class="row">
         					<h4>Related images</h4><br> 

                   <?php if(@$row["multi_image"]) { 
                  $get_image=explode("*#*", $row["multi_image"]);
                  for($i=0; $i<count($get_image); $i++) { 

                      // var_dump($get_image);
                    ?>
                 	<div class="col-md-3" style="margin-top: 4px;">				
              			<img src="images/event_gallery_img/<?php echo @$get_image[$i]; ?>" style="width:100%;border: 1px solid #000;  padding: 8px;  height: 200px;  object-fit: cover;" alt="s">	
        					</div> 

                <?php } } ?>
                     		
    			 

              					</div>
                    </div>
                 </div>
            
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
    <br>
    <br>
    <br>
    <br>
  <?php include('include/footer.php'); ?>