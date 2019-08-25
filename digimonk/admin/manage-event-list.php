<?php include('include/header.php');

   if(@$_GET['status_id'])
  {
      $status = @$_GET['status_id'];

      $update_status = mysqli_query($conn,"UPDATE event SET status='".$_GET['status']."' WHERE id='"
        .$status."'");

    
  }

 ?>

    
<div class="container-fluid">
<div class="page-header filled full-block light">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Event Gallery list</h2>
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


                  <div class="alert alert-success sequece_updated" style="display: none;">
                      <a href="manage-event-list.php" class="close">&times;</a>
                      <strong>Sequence Updated</strong> Successfully.
                    </div>

                 <?php if(@$_GET['delete']) { ?>
                     <div class="alert alert-success alert-dismissible">
                          <a href="manage-event-list.php" class="close">&times;</a>
                          <strong>Deleted</strong> Successfully!.
                     </div>
                <?php } ?>

                   <?php if(@$_GET['update_event']) { ?>
                    <div class="alert alert-success alert-dismissible">
                      <a href="manage-event-list.php" class="close">&times;</a>
                      <strong>Updated</strong> Successfully.
                    </div>
              <?php } ?>

              <?php if(@$_GET['update-fail']) { ?>
                    <div class="alert alert-success alert-dismissible">
                      <a href="manage-event-list.php" class="close">&times;</a>
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
                              <li><a href="javascript:;" class="btn add-row btn-primary" id="sequence_update">
                                <i class="fa fa-list"></i> Update Sequence</a>
                                  <input type="hidden" id="types_set_dsp" value="event_gallery">
                              </li>
                             <li><a href="add-event.php" class="btn add-row btn-info">
                                <i class="fa fa-plus"></i> Add Event</a></li>
                               <li><a id="get_event_ids_for_delete" class="btn add-row btn-danger">
                                <i class="fa fa-trash"></i> Delete</a></li>
                            </ul>
                        </div>
                    </div>
                  </div>
                  </div>
              </div>
 
                 <table class="table table-striped data-tbl" id="diagnosis_list">
                        <thead>
                        <tr>
                            <th><input type="checkbox" id="checkall" name="cagree" data-error=".errorTxt9"></th>
                            <th class="td-center">Image</th>
                            <th>Heading</th>
                            <th>Short Description</th>
                            <th>Date/Time</th>
                            <th class="td-center">Action</th> 
                            <th class="td-center">Action</th> 
                        </tr>
                        </thead>
                        <tbody>

                <?php
                    $query = mysqli_query($conn,"SELECT * FROM event ORDER BY priority ASC");
                    $sno = 1;
                    while($row = mysqli_fetch_assoc($query))
                    {
                ?>
                <tr>
                    <td>
                      <input type="hidden" name="priority_<?php echo $row['id']; ?>" data-id="<?php echo $row['id']; ?>" class="priority" value="<?php echo @$row["priority"]; ?>">
                      <input type="checkbox" class="checkitem" name="cagree[]" value="<?php echo $row['id'];?>" data-error=".errorTxt9"></td>
                      <td class="td-center">
                        <a href="#" class="td-profile-thumb">
                            <img src="images/event_gallery_img/<?php echo $row['image']; ?>" alt="image">
                        </a>
                    </td>
                     
                    <td><?php echo $row['heading']; ?></td>
                     <!-- <td><?php echo $row['project_url']; ?></td>  -->
                    <td><a href="event-view-detail.php?view_id=<?php echo $row['id']; ?>" target="_blank">Click View Description</a></td>
                    <td><?php echo $row['date_time']; ?></td>

                     <?php if($row['status']=='0'){ ?>
                      <td><a href="manage-event-list.php?status_id=<?php echo $row['id']; ?>&status=1">
                      <button class="btn btn-danger"><i class="fa fa-eye-slash"></i>  Deactive</button>
                       </a>
                     </td>
                     
               <?php } else { ?>

                    <td><a href="manage-event-list.php?status_id=<?php echo $row['id']; ?>&status=0">
                      <button class="btn btn-primary"><i class="fa fa-eye"></i>  Active</button>
                       </a>
                     </td>
                  <?php } ?>
                    <td><a href="edit-event.php?id=<?php echo $row['id']; ?>">
                      <button class="btn btn-warning"><i class="fa fa-edit"></i> Edit</button></a>
                    </td>
                  
                    <!-- <td><label class="label label-warning">Pending</label></td> -->
                  <!--   <td class="td-center">
                        <div class="btn-toolbar" role="toolbar">
                            <div class="btn-group" role="group">
                                <a href="#" class="btn btn-default btn-sm m-user-edit"><i class="zmdi zmdi-edit"></i></a> 
                                <a href="#" class="btn btn-danger btn-sm m-user-delete"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                    </td> -->
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