<?php include('include/header.php'); ?>

<div class="node-557 path-node page-node-type-career">
   <div class="banner">
      <div class="region region-banner">
         <div id="block-bannerblock" class="block block-banner-alter">
            <div class="content">
               <div id="single-image-banner">
                  <div class="overlay">
                     <img src="../static1.digimonk/sites/default/files/styles/banner_image_inner_large/public/2016-07/job-description.png" alt="newers-world-ttn" />
                  </div>
                  <div class="banner-text">
                     <h1>Learn, Grow and DO THE NEW</h1>
                  </div>
               </div>
               <span class="scroll-btn-down"></span> </div>
         </div>
         <div id="block-breadcrumbblock" class="block block-custom block-breadcrumb-block">
            <div class="content">
               <!--<nav class="breadcrumb">-->
               <!--   <ol itemscope itemtype="http://schema.org/BreadcrumbList">-->
               <!--      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> <a itemprop="item" rel="nofollow" href="index.php" ><span itemprop="name">Home</span></a>-->
               <!--         <meta itemprop="position" content="1" />-->
               <!--      </li>-->
               <!--      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> job-description-->
               <!--         <meta itemprop="position" content="2" />-->
               <!--      </li>-->
               <!--   </ol>-->
               <!--</nav>-->
            </div>
         </div>
      </div>
   </div>
   

<div class="container">

  <div id="main-wrapper" class="layout-main-wrapper layout-container clearfix">
         <div id="main" class="layout-main clearfix section">
            <main id="content" class="column main-content">
               <section class="section">
                  <div class="wrapper">
                     <a id="main-content" tabindex="-1"></a> 
                     <div class="region region-content">
                        <!--<nav id="block-career" class="block block-menu navigation menu--career">-->
                        <!--   <div class="visually-hidden f-heading" id="block-career-menu" class="f-heading">Career</div>-->
                        <!--   <ul class="clearfix menu">-->
                        <!--      <li class="menu-item"> <a href="" id="Join-us" rel="">Join us</a> </li>-->
                              
                            
                        <!--   </ul>-->
                        <!--</nav>-->
<div id="block-ttnd-content" class="block block-system block-system-main-block">
   <div class="content">
      <div class="back-top">
          
         <a href="career.php">Back to Career</a>
      </div>
      <div class="job-description">

      <?php
            $id=@$_GET['ab'];
            $job_query = mysqli_query($conn,"SELECT * FROM job_type WHERE id='".$id."' AND status='0' ");
            $job_row = mysqli_fetch_array($job_query);
      ?>
         <div class="heading"><?php echo $job_row['language_type']; ?></div>
         <!--<a href="#" class="btn big send-resume pull-right">Apply</a>-->
         <div class="job-requirement"><span class="required-experience"><?php echo $job_row['experience']; ?></span><span class="job-location"><?php echo $job_row['location']; ?></span>
            <span class="job-qualification"><?php echo $job_row['education']; ?></span></div>
          
          <div class="jobDescription"> <?php echo $job_row['description']; ?> </div>

            <div class="wrap center">
               <a href="#" class="btn big send-resume">Apply</a>
               <div class="popup-overlay"></div>

                <?php include('submit_application_form.php'); ?>
            </div>

             <div id="block-testiblockblock" class="block block-custom block-testi-block">
               <div class="content"> </div>
            </div>
            
      </div>
   </div>
                  <div class="back-top">
                     <!-- <div class="share">
                        <div class="heading">Share</div>
                        <div class="sharethis-wrapper"><span class="st_facebook_large" displaytext="Facebook"></span><span class="st_twitter_large" displaytext="Tweet"></span><span class="st_linkedin_large" displaytext="LinkedIn"></span></div>
                     </div> -->
                     <a href="career.php">Back to Career</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
                   </div>
                   </div>
                   </div>
                   
                   
             
	<?php include('include/footer.php'); ?>