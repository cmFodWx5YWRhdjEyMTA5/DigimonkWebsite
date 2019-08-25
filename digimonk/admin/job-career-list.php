<?php include('include/header.php');

  //  if(@$_GET['status_id'])
  // {
  //     $status = @$_GET['status_id'];

  //     $update_status = mysqli_query($conn,"UPDATE specialities SET status='".$_GET['status']."' WHERE id='"
  //       .$status."'");

    
  // }

 ?>

    
<div class="container-fluid">
<div class="page-header filled full-block light">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Job Career List</h2>
            <!-- <p>Responsive data tables</p> -->
        </div>
       <!--  <div class="col-md-6">
            <ul class="list-page-breadcrumb">
                <li><a href="#">Home <i class="zmdi zmdi-chevron-right"></i></a></li>
                <li><a href="#">Layout <i class="zmdi zmdi-chevron-right"></i></a></li>
                <li class="active-page"> Data Tables</li>
            </ul>
        </div> -->
    </div>
</div>



<div class="row">
    <div class="col-md-12">
        <div class="widget-wrap  material-table-widget">
            <div class="widget-container margin-top-0">
                <div class="widget-content">
                    <div class="data-action-bar">
                        <div class="row">
                            <div class="col-md-6">


                 <?php if(@$_GET['delete']) { ?>
                     <div class="alert alert-success alert-dismissible">
                          <a href="job-career-list.php" class="close">&times;</a>
                          <strong>Deleted</strong> Successfully!.
                     </div>
                <?php } ?>

                   <?php if(@$_GET['update_project']) { ?>
                    <div class="alert alert-success alert-dismissible">
                      <a href="job-career-list.php" class="close">&times;</a>
                      <strong>Updated</strong> Successfully.
                    </div>
              <?php } ?>

              <?php if(@$_GET['update-fail']) { ?>
                    <div class="alert alert-success alert-dismissible">
                      <a href="job-career-list.php" class="close">&times;</a>
                      <strong>Not Update</strong> Please try Again!...
                    </div>
              <?php } ?>

                  <!-- <div class="widget-header" style="display: none;">
                      <h3>User table</h3>
                      <p>
                          A table example with profile thumbnail
                      </p>
                  </div> -->
              </div>

                 <div class="col-md-6">
                    <div class="data-align-right">
                        <div class="tbl-action-toolbar">
                            <ul>
                             <!-- <li><a href="add-specialities.php" class="btn add-row btn-info">
                                <i class="fa fa-plus"></i> Add Specialities</a></li> -->
                               <li><a id="get_job_career_ids_for_delete" class="btn add-row btn-danger">
                                <i class="fa fa-trash"></i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                  </div>
                  </div>
              </div>
 
                 <table class="table table-striped data-tbl">
                        <thead>
                        <tr>
                          <th><input type="checkbox" id="checkall" name="cagree" data-error=".errorTxt9"></th>
                            <th>Name</th>
                            <th>Email Id</th> 
                            <th>Phone</th>
                            <!-- <th>Experience</th> -->
                            <th>Skill</th>
                            <th>Location</th>
                            <!-- <th>Resume</th>  -->
                            <th>Date/Time</th> 
                            <th>Action</th> 
                         </tr>
                        </thead>
                        <tbody>

                <?php
                    $query = mysqli_query($conn,"SELECT * FROM career ORDER BY id DESC");
                    $sno = 1;
                    while($row = mysqli_fetch_assoc($query))
                    {
                ?>
                <tr>
                    <td><input type="checkbox" class="checkitem" name="cagree[]" value="<?php echo $row['id'];?>" data-error=".errorTxt9"></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone_no']; ?></td> 
                   <!--  <td><?php echo $row['exprience']; ?></td> -->
                    <td><?php echo $row['skills']; ?></td>
                    <td><?php echo $row['location']; ?></td>
                    <!-- <td><a href="../img/resume_file/<?php echo $row['resume_file']; ?>" target="_blank"><?php echo $row['resume_file']; ?></a></td> -->
                     <td><?php echo $row['date_time']; ?></td>
                     <td><a href="" class="btn btn-default" data-toggle="modal" data-target="#view_detail_<?php echo $row['id']; ?>">View Detail</a></td>
                   
                
  <!--  Start user detail Modal  -->
    <div class="modal fade" id="view_detail_<?php echo $row['id']; ?>">
     <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> 
              <h4 class="modal-title w-100 font-weight-bold"> 
                   <b>View all detail</b></h4>
            </div>
            <form method="POST">
                <div class="modal-body mx-3">
                   <div class="md-form mb-12">
                     <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-3"></div>
                           <div class="col-md-6">
                                <label for="defaultForm-email">Experience</label>
                                <input type="text" name="" id="" class="form-control inp-desg" placeholder="" value="<?php echo $row['exprience']; ?>" readonly=""><br>
                            </div>
                              
                        </div>
                    </div> 
                    <br>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <label for="defaultForm-email">
                                     Resume File</label>
                                <a href="../img/resume_file/<?php echo $row['resume_file']; ?>" target="_blank"><?php echo $row['resume_file']; ?></a>
                            </div>
                        </div>
                    </div>
                 </div> 
            <center>
             &nbsp; &nbsp;
            
                <a href="job-career-list.php">
                <button type="button" class="btn btn-danger" style="margin-top: 17px;">Close</button>
                </a>&nbsp; &nbsp;
               <!--  <button  type="submit" class="btn btn-primary" id="btn_submit" name="s_pass" style="margin-top: 17px;">Next to Submit</button> -->
            </center>
                </div>
                 
            </form>
        </div>
    </div>
</div>
     <!--  End User detail Modal  -->

                </tr>
                    <?php 
                          $sno =$sno+1; 
                     } ?>
               

                        </tbody>


                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include('include/footer.php'); ?>