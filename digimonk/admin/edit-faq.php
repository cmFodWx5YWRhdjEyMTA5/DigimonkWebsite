<?php include('include/header.php'); ?>


<div class="container-fluid">
        <div class="page-header filled full-block light">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Update Faq?</h2>
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
              $query = mysqli_query($conn,"SELECT * FROM faq WHERE id='".$id."'");
              $row = mysqli_fetch_array($query);

       ?>
          <div class="widget-container">
              <div class="widget-content">
                 <?php if(@$_GET['update']) { ?>
                    <div class="alert alert-success alert-dismissible">
                      <a href="edit-faq.php" class="close">&times;</a>
                      <strong>Update</strong> Successfully.
                    </div>
              <?php } ?>

              <?php if(@$_GET['update_fail']) { ?>
                    <div class="alert alert-danger alert-dismissible">
                      <a href="edit-faq.php" class="close">&times;</a>
                      <strong>Not Update</strong> Please try Again!...
                    </div>
              <?php } ?>
                <div class="row">
                  <form action="save-faq.php" class="j-forms" method="POST" enctype="multipart/form-data">
                     <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="col-md-12">
                     <div class="form-content">
                        <div class="row">
                          <div class="col-md-6 unit">
                              <label for="question"><i class="fa fa-question"></i> Question</label>
                              <div>
                                  <input class="form-control" type="text" placeholder="Enter Question" id="question" name="question" value="<?php echo $row['question']; ?>">
                              </div>
                          </div>

                          <div class="col-md-6 unit">
                              <label for="answer">
                                <i class="fa fa-answer"></i>Answer</label>
                              <div>
                                <textarea class="form-control" name="answer" rows="5" placeholder="Enter Answer"><?php echo $row['answer']; ?></textarea>
                                   
                              </div>
                          </div>
                      
                       <div class="col-md-12 unit">
                            <center><button type="submit" id="btn_submit" class="btn btn-info" name="update">Update</button></center>
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
    <br>
    <br>
    <br>
  <?php include('include/footer.php'); ?>