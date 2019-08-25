<?php include('include/header.php'); 

   if(isset($_GET['status_id']))
    {
      $id = $_GET['status_id'];

      $update_query = mysqli_query($conn,"UPDATE job_type SET status='".$_GET['status']."' WHERE id='".$id."'");
    }
?>

    
<div class="container-fluid">
<div class="page-header filled full-block light">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Job Type list</h2>
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
                                      <a href="manage-job-list.php" class="close">&times;</a>
                                      <strong>Deleted</strong> Successfully!.
                                 </div>
                            <?php } ?>
                                <!-- <div class="widget-header" style="display: none;">
                                    <h3>User table</h3>
                                    <p>
                                        A table example with profile thumbnail
                                    </p>
                                </div> -->

                     <div class="alert alert-success sequece_updated" style="display: none;">
                      <a href="manage-job-list.php" class="close">&times;</a>
                      <strong>Sequence Updated</strong> Successfully.
                    </div>
                            <?php if(@$_GET['update']) { ?>
                                 <div class="alert alert-success alert-dismissible">
                                      <a href="manage-job-list.php" class="close">&times;</a>
                                      <strong>Updated Job</strong> Successfully!.
                                 </div>
                            <?php } ?>

                            <?php if(@$_GET['update-fail']) { ?>
                                 <div class="alert alert-success alert-dismissible">
                                      <a href="manage-job-list.php" class="close">&times;</a>
                                      <strong>Not Update Job</strong> Please try again!.
                                 </div>
                            <?php } ?>
                            </div>

                 <div class="col-md-6">
                    <div class="data-align-right">
                        <div class="tbl-action-toolbar">
                          <ul>
                              <li><a href="javascript:;" class="btn add-row btn-primary" id="sequence_update">
                                <i class="fa fa-list"></i> Update Sequence</a>
                                  <input type="hidden" id="types_set_dsp" value="job_sequence">
                              </li>
                             <li><a href="add-job.php" class="btn add-row btn-primary">
                                <i class="fa fa-plus"></i> Add Job</a></li>
                        

                        
                               <li><a id="get_ids_job_type_for_delete" class="btn add-row btn-danger">
                                <i class="fa fa-trash"></i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                  </div>
                  </div>
              </div>
 
                <table id="diagnosis_list" class="table table-striped data-tbl">
                        <thead>
                        <tr>
                            <th><input type="checkbox" id="checkall" name="cagree" data-error=".errorTxt9"></th>
                              <th>Language Type</th>
                              <th>Education</th>
                              <th>Experience Year</th>
                              <th>Location</th>
                              <th>Date/Time</th> 
                              <th>Action</th>
                              <th>Action</th>
                            <!-- <th class="td-center">Action</th> -->
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                            $contact_query = mysqli_query($conn,"SELECT * FROM job_type ORDER BY priority ASC");
                            $sno = 1;
                            while($row = mysqli_fetch_assoc($contact_query))
                            {
                        ?>
                        <tr>
                            <td><input type="hidden" name="priority_<?php echo $row['id']; ?>" data-id="<?php echo $row['id']; ?>" class="priority" value="<?php echo @$row["priority"]; ?>">
                              <input type="checkbox" class="checkitem" name="cagree[]" value="<?php echo $row['id'];?>" data-error=".errorTxt9"></td>
                            <td><?php echo $row['language_type']; ?></td>
                            <td><?php echo $row['education']; ?></td>
                            <td><?php echo $row['experience']; ?></td>
                            <td><?php echo $row['location']; ?></td>
                            <td><?php echo $row['date_time']; ?></td>
                           <?php if($row['status']=='0'){ ?>

                     <td><a href="manage-job-list.php?status_id=<?php echo $row['id']; ?>&status=1">
                      <button class="btn btn-danger"><i class="fa fa-eye-slash"></i>  Deactive</button>
                       </a>
                     </td>
                   <?php } else { ?>

                    <td><a href="manage-job-list.php?status_id=<?php echo $row['id']; ?>&status=0">
                      <button class="btn btn-primary"><i class="fa fa-eye"></i>  Active</button>
                       </a>
                     </td>
                    <?php } ?>

                       <td><a href="edit-job.php?id=<?php echo $row['id']; ?>">
                        <button class="btn btn-warning"><i class="fa fa-edit"></i> Edit</button></a>
                      </td>
                        
                        </tr>
                    <?php $sno =$sno+1; } ?>
               

                        </tbody>


                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include('include/footer.php'); ?>