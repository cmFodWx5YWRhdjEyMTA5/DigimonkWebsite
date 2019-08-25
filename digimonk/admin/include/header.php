<?php include('connection.php'); 

  if(!@$_SESSION['admin'])
  {
    header('location:index.php');
  }
  
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">


      <?php
                function current_url()
                {
                    $url =  $_SERVER['REQUEST_URI'];
                    
                    $page=explode("/",$url);
                   
                    // $page_title=explode(".", $page["1"]);
                    $page_title=explode(".", $page["4"]);
                    
                    $p_name=$page_title["0"];
                    $validURL =$p_name;
                    return $validURL;
                  }
                //echo "page URL is : ".current_url();

                $page_name = current_url();
          ?>

            <?php
                   if ($page_name=="contact-us-list") {?>
                      
                      <title>Contact us list  | Digimonk Technologies</title>
                  <?php }

                    if($page_name=="account-profile") {?>
                      
                      <title>Account Profile  | Digimonk Technologies</title>
                  <?php } 

                     if($page_name=="setting") {?>
                      
                      <title>Settings  | Digimonk Technologies</title>
                <?php } 

                   if($page_name=="meta-keywords-list") {?>
                      
                      <title>Meta keywords list  | Digimonk Technologies</title>
                  <?php }

                  if($page_name=="manage-meta-keywords") {?>
                      
                      <title>Manage Meta keywords  | Digimonk Technologies</title>
                  <?php }

                  if($page_name=="manage-testimonials-list") {?>
                      
                      <title>Manage Testimonials list  | Digimonk Technologies</title>
                  <?php }

                  if($page_name=="add-testimonials") {?>
                      
                      <title>Add Testimonials  | Digimonk Technologies</title>
                  <?php }

                  if($page_name=="edit-testimonials") {?>
                      
                      <title>Edit Testimonials  | Digimonk Technologies</title>
                  <?php }

                  if($page_name=="manage-about-us") {?>
                      
                      <title>Manage About us  | Digimonk Technologies</title>
                  <?php }

                    if($page_name=="manage-privacy-policy") {?>
                      
                      <title>Manage Privacy Policy  | Digimonk Technologies</title>
                  <?php }

                  if($page_name=="manage-term-and-condition") {?>
                      
                      <title>Manage Terms & Conditions  | Digimonk Technologies</title>
                  <?php }
                

                     if($page_name=="subscribe-list") {?>
                      
                      <title>Subscribe list  | Digimonk Technologies</title>
                  <?php }

                  if($page_name=="request-quote-list") {?>
                      
                      <title>Request Quote List  | Digimonk Technologies</title>
                  <?php }

                   if($page_name=="job-career-list") {?>
                      
                      <title>Job Career list  | Digimonk Technologies</title>
                  <?php }

                   if($page_name=="our-expert-list") {?>
                      
                      <title>Our Expert list  | Digimonk Technologies</title>
                  <?php }

                    if($page_name=="manage-our-blog-list") {?>
                      
                      <title>Manage Our Blog list  | Digimonk Technologies</title>
                  <?php }

                  if($page_name=="add-our-blog") {?>
                      
                      <title>Add Our Blog  | Digimonk Technologies</title>
                  <?php }


                  if($page_name=="edit-our-blog") {?>
                      
                      <title>Edit Our Blog  | Digimonk Technologies</title>
                  <?php }

                  if($page_name=="blog-view-detail") {?>
                      
                      <title>Blog View Detail  | Digimonk Technologies</title>
                  <?php }

                  if($page_name=="google-analytics") {?>
                      
                      <title>Google Analytics  | Digimonk Technologies</title>
                  <?php }

                  if($page_name=="manage-portfolio-list") {?>
                      
                      <title>Manage Portfolio list  | Digimonk Technologies</title>
                  <?php }

                    if($page_name=="add-portfolio") {?>
                      
                      <title>Add Portfolio  | Digimonk Technologies</title>
                  <?php }
                    
                    if($page_name=="edit-portfolio") {?>
                      
                      <title>Edit Portfolio  | Digimonk Technologies</title>
                  <?php }

                    if($page_name=="portfolio-view-detail") {?>
                      
                      <title>Portfolio view detail  | Digimonk Technologies</title>
                  <?php }
                   
                   if($page_name=="team-list") {?>
                      
                      <title>Team list  | Digimonk Technologies</title>
                  <?php }

                  if($page_name=="add-team") {?>
                      
                      <title>Add Team  | Digimonk Technologies</title>
                  <?php }

                  if($page_name=="edit-team") {?>
                      
                      <title>Edit Team  | Digimonk Technologies</title>
                  <?php }

                  if($page_name=="manage-review-list") {?>
                      
                      <title>Manage Review list  | Digimonk Technologies</title>
                  <?php }

                  if($page_name=="add-review") {?>
                      
                      <title>Add Review  | Digimonk Technologies</title>
                  <?php }

                    if($page_name=="edit-review") {?>
                      
                      <title>Edit Review  | Digimonk Technologies</title>
                  <?php }

                  if($page_name=="add-job") {?>
                      
                      <title>Add job  | Digimonk Technologies</title>
                  <?php }

                  if($page_name=="edit-job") {?>
                      
                      <title>Edit Job  | Digimonk Technologies</title>
                  <?php }

                  if($page_name=="manage-job-list") {?>
                      
                      <title>Manage job list  | Digimonk Technologies</title>
                  <?php }

                     if($page_name=="add-event") {?>
                      
                      <title>Add Event  | Digimonk Technologies</title>
                  <?php }


                   if($page_name=="edit-event") {?>
                      
                      <title> Edit Event  | Digimonk Technologies</title>
                  <?php }


                   if($page_name=="manage-event-list") {?>
                      
                      <title>Manage Event list  | Digimonk Technologies</title>
                  <?php }

                  if($page_name=="event-view-detail") {?>
                      
                      <title>Event View Detail  | Digimonk Technologies</title>
                  <?php }

                  if($page_name=="manage-slider-list") {?>
                      
                      <title>Manage Slider list  | Digimonk Technologies</title>
                  <?php }
                  if($page_name=="add-slider-image") {?>
                      
                      <title>Add Slider Image  | Digimonk Technologies</title>
                  <?php }

                  if($page_name=="edit-slider-image") {?>
                      
                      <title>Edit Slider Image  | Digimonk Technologies</title>
                  <?php }
                    ?>

                    
     <!-- <link rel="icon" href="images/favicon.png"> -->
     <!-- <link rel="shortcut icon" href="../images/logo.png" /> -->
     <link rel="shortcut icon" href="../sites/default/files/fevicon-icon.png" type="image/vnd.microsoft.icon" />
    <link type="text/css" rel="stylesheet" href="css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="css/material-design-iconic-font.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="css/animate.css">
    <link type="text/css" rel="stylesheet" href="css/layout.css">
    <link type="text/css" rel="stylesheet" href="css/components.css">
    <link type="text/css" rel="stylesheet" href="css/widgets.css">
    <link type="text/css" rel="stylesheet" href="css/plugins.css">
    <link type="text/css" rel="stylesheet" href="css/pages.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap-extend.css">
    <link type="text/css" rel="stylesheet" href="css/common.css">
    <link type="text/css" rel="stylesheet" href="css/responsive.css">
    <link href="css\summernote\summernote.css" rel="stylesheet">
    
    <style type="text/css">

      .ui-sortable tr 
      {
        cursor:all-scroll;
      }
      .ui-sortable tr:hover
      {
        background:rgba(244,251,17,0.45);
       }
   
     
     #sub-header ul li:hover{ background-color: #000;};
      #sub-header ul li:hover a{ color: #fff; };
      #sub-header ul li.active{ background-color: #000; };
      #sub-header ul li.active a{ color: #fff; };
      .active { background-color: #000; };
      /* to override the existing css for "a" tag */
      #sub-header .active a{ color: #fff;};


   </style>
</head>
<body class="leftbar-view">
<!--Topbar Start Here-->
<header class="topbar clearfix">
    <!--Top Search Bar Start Here-->
    <div class="top-search-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="search-input-addon">
                        <span class="addon-icon"><i class="zmdi zmdi-search"></i></span>
                        <input type="text" class="form-control top-search-input" placeholder="Search">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Top Search Bar End Here-->
    <!--Topbar Left Branding With Logo Start-->
    <div class="topbar-left pull-left" style="background-image: linear-gradient(to right, #d23b3b 0%, #f52929 51%, #ad1010 100%);">
        <div class="clearfix">
            <ul class="left-branding pull-left clickablemenu ttmenu dark-style menu-color-gradient">
                <li><span class="left-toggle-switch"><i class="zmdi zmdi-menu"></i></span></li>
                <li>
                    <div class="logo" style="margin: 10px;">
                        <a href="" title="Admin">
                         <img src="images/digimonk-logo.png" alt="logo" style="position: absolute;width:12%;">
                         <!-- <p style="font-size: 22px; color: white; position: absolute; left: 9%;">Megacube</p> -->
                       </a>
                    </div>
                </li>
            </ul>
            <!--Mobile Search and Rightbar Toggle-->
            <ul class="branding-right pull-right">
                <li><a href="#" class="btn-mobile-search btn-top-search"><i class="zmdi zmdi-search"></i></a></li>
                <li><a href="#" class="btn-mobile-bar"><i class="zmdi zmdi-menu"></i></a></li>
            </ul>
        </div>
    </div>
    <!--Topbar Left Branding With Logo End-->
    <!--Topbar Right Start-->
    <div class="topbar-right pull-right">
        <div class="clearfix">
            <!--Mobile View Leftbar Toggle-->
            <ul class="left-bar-switch pull-left">
                <li><span class="left-toggle-switch"><i class="zmdi zmdi-menu"></i></span></li>
            </ul>
      
       <!-- <ul class="pull-right top-right-icons">
                <li><a href="#" class="btn-top-search"><i class="zmdi zmdi-search"></i></a></li>
                <li class="dropdown apps-dropdown">
                    <a href="#" class="btn-apps dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-apps"></i></a>
                    <div class="dropdown-menu">
                        <ul class="apps-shortcut clearfix">
                            <li>
                                <a href="#"><i class="zmdi zmdi-email"></i>
                                    <span class="apps-noty">23</span>
                                    <span class="apps-label">Email</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-accounts-alt"></i>
                                    <span class="apps-noty">15</span>
                                    <span class="apps-label">Forum</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-file-text"></i>
                                    <span class="apps-label">Note</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-chart"></i>
                                    <span class="apps-label">Analytics</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="more-apps">
                            <li><a href="#"><i class="zmdi zmdi-camera"></i> Gallery</a></li>
                            <li><a href="#"><i class="zmdi zmdi-comments"></i> Chat</a></li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown notifications-dropdown">
                    <a href="#" class="btn-notification dropdown-toggle" data-toggle="dropdown"><span class="noty-bubble">10</span><i class="zmdi zmdi-globe"></i></a>
                    <div class="dropdown-menu notifications-tabs">
                        <div>
                            <ul class="nav material-tabs nav-tabs" role="tablist">
                                <li class="active"><a href="#message" aria-controls="message" role="tab" data-toggle="tab">Message</a></li>
                                <li><a href="#notifications" aria-controls="notifications" role="tab" data-toggle="tab">Notifications</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="message">
                                    <div class="message-list-container">
                                        <h4>You have 15 new messages</h4>
                                        <ul class="clearfix">
                                            <li class="clearfix">
                                                <a href="#" class="message-thumb"><img src="images/avatar/robertoortiz.jpg" alt="image">
                                                </a><a href="#" class="message-intro"><span class="message-meta">Robertoortiz </span>Nunc aliquam dolor... <span class="message-time">today at 10:20 pm</span></a>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#" class="message-thumb"><span class="message-letter w_bg_purple">A</span>
                                                </a><a href="#" class="message-intro"><span class="message-meta">Allisongrayce </span>In hac habitasse ... <span class="message-time">today at 8:29 pm</span></a>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#" class="message-thumb"><img src="images/avatar/michael-owens.jpg" alt="image">
                                                </a><a href="#" class="message-intro"><span class="message-meta">Michael </span>Suspendisse ac mauris ... <span class="message-time">yesterday at 12:29 pm</span></a>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#" class="message-thumb"><span class="message-letter w_bg_blue">B</span>
                                                </a><a href="#" class="message-intro"><span class="message-meta">Bobbyjkane </span>Vivamus lacinia facilisis... <span class="message-time">yesterday at 11:48 pm</span></a>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#" class="message-thumb"><img src="images/avatar/bobbyjkane.jpg" alt="image">
                                                </a><a href="#" class="message-intro"><span class="message-meta">Bobbyjkane </span>Donec vel iaculis ... <span class="message-time">1 month ago</span></a>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#" class="message-thumb"><span class="message-letter w_bg_teal">C</span>
                                                </a><a href="#" class="message-intro"><span class="message-meta">Chexee </span> Curabitur eget blandit...<span class="message-time">3 months ago</span></a>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#" class="message-thumb"><img src="images/avatar/coreyweb.jpg" alt="image">
                                                </a><a href="#" class="message-intro"><span class="message-meta">Coreyweb </span>Etiam molestie nulla... <span class="message-time">1 year ago</span></a>
                                            </li>
                                        </ul>
                                        <a class="btn btn-link btn-block btn-view-all" href="#"><span>View All</span></a>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="notifications">
                                    <div class="notification-wrap">
                                        <h4>You have 10 new notifications</h4>
                                        <ul>
                                            <li><a href="#" class="clearfix"><span class="ni w_bg_purple"><i class="fa fa-bullhorn"></i></span><span class="notification-message">Pellentesque semper posuere. <span class="notification-time clearfix">3 Min Ago</span></span></a>
                                            </li>
                                            <li><a href="#" class="clearfix"><span class="ni w_bg_orange"><i class="fa fa-life-ring"></i></span><span class="notification-message">Nulla commodo sem at purus. <span class="notification-time clearfix">1 Hours Ago</span></span></a>
                                            </li>
                                            <li><a href="#" class="clearfix"><span class="ni w_bg_red"><i class="fa fa-star-o"></i></span><span class="notification-message">Fusce condimentum turpis. <span class="notification-time clearfix">3 Hours Ago</span></span></a>
                                            </li>
                                            <li><a href="#" class="clearfix"><span class="ni w_bg_light_blue"><i class="fa fa-trophy"></i></span><span class="notification-message">Pellentesque habitant morbi. <span class="notification-time clearfix">Yesterday</span></span></a>
                                            </li>
                                            <li><a href="#" class="clearfix"><span class="ni w_bg_cyan"><i class="fa fa-bolt"></i></span><span class="notification-message">Fusce bibendum lacus mauris.<span class="notification-time clearfix">1 Month Ago</span></span></a>
                                            </li>
                                            <li><a href="#" class="clearfix"><span class="ni w_bg_yellow"><i class="fa fa-bookmark-o"></i></span><span class="notification-message">Donec id mi placerat, scelerisque.<span class="notification-time clearfix">3 Months Ago</span></span></a>
                                            </li>
                                        </ul>
                                        <a class="btn btn-link btn-block btn-view-all clearfix" href="#"><span>View All</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="#" class="right-toggle-switch"><i class="zmdi zmdi-format-align-left"></i><span class="more-noty"></span></a></li>
            </ul> -->
        </div>
    </div>
    <!--Topbar Right End-->
</header>
<!--Topbar End Here-->

<?php include('sidebar.php'); ?>

