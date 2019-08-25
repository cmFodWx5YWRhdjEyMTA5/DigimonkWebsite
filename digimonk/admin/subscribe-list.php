<?php include('include/header.php'); ?>

    
<div class="container-fluid">
<div class="page-header filled full-block light">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Subscribe list</h2>
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
                                      <a href="subscribe-list.php" class="close">&times;</a>
                                      <strong>Deleted</strong> Successfully!.
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
                             <li>
                                <a href="#" class="btn btn-info dropdown-toggle" onclick="$('#exportable-tbl').tableExport({type:'excel',escape:'false'});">
                                  <i class="fa fa-file-excel-o"></i> XLS File <i class="fa fa-download"></i></a>
                                   
                                  <!--   <ul class="dropdown-menu">
                                     <li><a href="#" onclick="$('#exportable-tbl').tableExport({type:'excel',escape:'false'});"> 
                                       <i class="fa fa-file-excel-o"></i> XLS</a></li>
                                       <li><a href="#" onclick="$('#exportable-tbl').tableExport({type:'csv',escape:'false'});">
                                       <i class="fa fa-file-code-o"></i> CSV</a></li>

                                      <li><a href="#" onclick="$('#exportable-tbl').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"> <i class="fa fa-file-pdf-o"></i> PDF</a></li>
                               </ul> -->
                            </li>
                             <li><a id="get_ids_subscribe_for_delete" class="btn add-row btn-danger">
                                <i class="fa fa-trash"></i> Delete</a></li>
                         </ul>

                            <!-- <ul>
                               <li><a id="get_ids_subscribe_for_delete" class="btn add-row btn-danger">
                                <i class="fa fa-trash"></i> Delete</a></li>
                            </ul> -->
                        </div>
                    </div>
                  </div>
                  </div>
              </div>
 
                
 

              
                    <table id="exportable-tbl" class="table table-striped data-tbl">
                        <thead>
                        <tr>
                            <th><input type="checkbox" id="checkall" name="cagree" data-error=".errorTxt9"></th>
                              <th>Name</th>
                              <th>Email Id</th>
                             <th>Date/Time</th>
                            <!-- <th class="td-center">Action</th> -->
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                            $contact_query = mysqli_query($conn,"SELECT * FROM subscribe_now ORDER BY id DESC");
                            $sno = 1;
                            while($row = mysqli_fetch_assoc($contact_query))
                            {
                        ?>
                        <tr>
                            <td><input type="checkbox" class="checkitem" name="cagree[]" value="<?php echo $row['id'];?>" data-error=".errorTxt9"></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email_id']; ?></td>
                             <td><?php echo $row['date_time']; ?></td>
                           <!--  <td class="td-center">
                                <a href="#" class="td-profile-thumb">
                                    <img src="images/avatar/amarkdalen.jpg" alt="user">
                                </a>
                            </td> -->
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