<?php include('include/header.php'); ?>


<div class="path-jobs">
   
   <div class="banner">
      <div class="region region-banner">
         <div id="block-bannerblock" class="block block-banner-alter">
            <div class="content">
               <div id="play-mute-video">
                  <div class="overlay nonmuted">
                   <img src="../static1.digimonk/themes/ttnd/images/careerpage.jpg" alt="Jobs-at-ToTheNew" />
                     <div id="bgndVideo" class="player opacity" data-property=""> </div>
                     <!-- {videoURL:'https://www.youtube.com/watch?v=-zkL_5Q7vFk',containment:'.overlay',autoPlay:false, mute:false, startAt:0, opacity:1} -->
                     <div id="mute-video-description" class="banner-text center">
                        <h1>Explore The New with us!</h1>
                       
                     </div>
                  </div>
               </div>
               <span class="scroll-btn-down"></span> </div>
         </div>
         <div id="block-breadcrumbblock" class="block block-custom block-breadcrumb-block">
            <div class="content">
               <nav class="breadcrumb">
                  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                  </ol>
               </nav>
            </div>
         </div>
         <div id="block-ttnd-breadcrumbs" class="block block-system block-system-breadcrumb-block">
            <div class="content">
               <!--<nav class="breadcrumb">-->
               <!--   <ol itemscope itemtype="http://schema.org/BreadcrumbList">-->
               <!--      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> -->
               <!--         <a itemprop="item" rel="nofollow" href="index.php">Home</a>-->
               <!--         <meta itemprop="position" content="1" />-->
               <!--      </li>-->
               <!--      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> Jobs-->
               <!--         <meta itemprop="position" content="2" />-->
               <!--      </li>-->
               <!--   </ol>-->
               <!--</nav>-->
            </div>
         </div>
      </div>
   </div>
   <div id="main-wrapper" class="layout-main-wrapper layout-container clearfix">
      <div id="main" class="layout-main clearfix section">
         <main id="content" class="column main-content">
         <section class="section">
         <div class="wrapper"> <a id="main-content" tabindex="-1"></a>
            <div class="region region-content">
            <!--   <nav id="block-career" class="block block-menu navigation menu--career">-->
            <!--   <div class="visually-hidden f-heading" id="block-career-menu" class="f-heading">-->
            <!--   Career</div>-->
            <!--<ul class="clearfix menu">-->
            <!--   <li class="menu-item menu-item--active-trail"> -->
            <!--      <a href="career.php" id="Join-us" rel="">Join us</a> </li>-->
              
            <!--</ul>-->
            <!--</nav>-->
<div id="block-ttnd-content" class="block block-system block-system-main-block">
<div class="content">
   <div class="search-main-wrapper gray-bg">
      <div class="wrapper">
         <form class="ttnd-careers-search-form" data-drupal-selector="ttnd-careers-search-form" action="#" method="post" id="ttnd-careers-search-form" accept-charset="UTF-8" style="display: none;">
            <div class="js-form-item form-item js-form-type-select form-type-select js-form-item-services form-item-services">
               <label for="edit-services">Functions</label>
               <select data-drupal-selector="edit-services" multiple="multiple" name="services[]" id="edit-services" class="form-select">
                  <option value="Sales and Marketing">Sales and Marketing</option>
                  <option value="Video Solutions">Video Solutions</option>
                  <option value="Digital Marketing">Digital Marketing</option>
                  <option value="VDMA">VDMA</option>
               </select>
            </div>
            <div class="js-form-item form-item js-form-type-select form-type-select js-form-item-technologies form-item-technologies">
               <label for="edit-technologies">Technologies</label>
               <select data-drupal-selector="edit-technologies" multiple="multiple" name="technologies[]" id="edit-technologies" class="form-select">
                  <option value="MEAN">MEAN</option>
                  <option value="JAVA">JAVA</option>
                  <option value="Mobility">Mobility</option>
                  <option value="AEM">AEM</option>
                  <option value="FEEN">FEEN</option>
                  <option value="Experience Design">Experience Design</option>
                  <option value="Drupal">Drupal</option>
                  <option value=" Project Management"> Project Management</option>
                  <option value="Business Analysis">Business Analysis</option>
                  <option value="MSP">MSP</option>
                  <option value=".Net">.Net</option>
                  <option value="BigData">BigData</option>
                  <option value="DevOps">DevOps</option>
                  <option value="REACT Native">REACT Native</option>
               </select>
            </div>
            <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-search-text form-item-search-text form-no-label">
               <input placeholder="Search with location, title, expertise" data-drupal-selector="edit-search-text" type="text" id="edit-search-text" name="search_text" value="" size="60" maxlength="128" class="form-text" />
            </div>
            <span class="icon icon-refresh"></span>
            <input data-drupal-selector="form-kwqkrgaldj0m-kwjl4oj6hwawveltwphkwytktin1m" type="hidden" name="form_build_id" value="form-KwQKRgALdj0m-_KWJL4OJ6hwaWveltWPHkWytktIn1M" />
            <input data-drupal-selector="edit-ttnd-careers-search-form" type="hidden" name="form_id" value="ttnd_careers_search_form" />
         </form>

            <div id="add-all-data"></div>
            <div id="search-page">
               <div class="row">
            <?php
               $job_query = mysqli_query($conn,"SELECT * FROM job_type WHERE status='0' ORDER BY priority ASC ");
               while($job_row = mysqli_fetch_assoc($job_query))
               {

                   $time_zone='Asia/Calcutta';
                  //count time defrence start==============================================================
              if($time_zone!=$job_row['time_zone'])
               { 
               // echo "Not same";

                  $date = new DateTime($job_row['date_time'], new DateTimeZone($job_row['time_zone']));
                  $date->setTimezone(new DateTimeZone($time_zone));  
                  $time = $date->format('Y-m-d H:i:s'); 
                  //   echo "posted time :" .$time ;
                  date_default_timezone_set($time_zone);
                  $date1= date('Y-m-d H:i:s') ;
                 //echo " Current_time ".$date1;
                  $now = new DateTime($date1);
                  $ref = new DateTime($time);
                  $diff = $now->diff($ref);
                } else  
                 {                                                            
                   $gig_time_zone = !empty($gig_time_zone)?$gig_time_zone:'Asia/Kolkata';  
                   date_default_timezone_set($gig_time_zone);
                   $now = new DateTime(date('Y-m-d H:i:s')); 
                   $ref = new DateTime($job_row['date_time']); 
                   $diff = $now->diff($ref); 
                 }
                   $total_seconds = 0 ;       
                   $days = $diff->days;
                   $hours = $diff->h;
                   $mins = $diff->i;                                                            
                   if(!empty($days)&&($days>0)) 
                    {
                     $days_to_seconds = $diff->days*24*60*60;
                     $total_seconds = $total_seconds+$days_to_seconds;
                     }

                 if(!empty($hours)&&($hours>0)) 
                  {
                    $hours_to_seconds = $diff->h*60*60;
                    $total_seconds = $total_seconds+$hours_to_seconds;

                    }
                    if(!empty($mins)&&($mins>0)) 
                    {
                      $min_to_seconds = $mins*60;
                      $total_seconds = $total_seconds+$min_to_seconds;
                    }
                     $intervals = array (

                        'year' => 31556926, 'month' => 2629744, 'week' => 604800, 'day' => 86400, 'hour' => 3600, 'minute'=> 60

                      );

                      $time_difference = '';

                      //now we just find the difference

                      if ($total_seconds == 0)

                      {

                        $time_difference = 'just now';

                      }   

                     if($total_seconds < 60)
                      {

                        $time_difference = $total_seconds == 1 ? $total_seconds . ' second ago' : $total_seconds . ' seconds ago';

                      }       
                      if ($total_seconds >= 60 && $total_seconds < $intervals['hour'])

                      {

                        $total_seconds = floor($total_seconds/$intervals['minute']);

                         $time_difference =  $total_seconds == 1 ? $total_seconds . ' minute ago' : $total_seconds . ' minutes ago';

                      }       

                    if ($total_seconds >= $intervals['hour'] && $total_seconds < $intervals['day'])
                    {
                    $total_seconds = floor($total_seconds/$intervals['hour']);

                         $time_difference =  $total_seconds == 1 ? $total_seconds . ' hour ago' : $total_seconds . ' hours ago';
                     }   

                    

                      if ($total_seconds >= $intervals['day'] && $total_seconds < $intervals['week'])

                      {

                        $total_seconds = floor($total_seconds/$intervals['day']);

                         $time_difference =  $total_seconds == 1 ? $total_seconds . ' day ago' : $total_seconds . ' days ago';

                      }   

                    

                      if ($total_seconds >= $intervals['week'] && $total_seconds < $intervals['month'])

                      {

                        $total_seconds = floor($total_seconds/$intervals['week']);

                         $time_difference =  $total_seconds == 1 ? $total_seconds . ' week ago' : $total_seconds . ' weeks ago';

                      }   

                    

                      if ($total_seconds >= $intervals['month'] && $total_seconds < $intervals['year'])

                      {

                        $total_seconds = floor($total_seconds/$intervals['month']);

                         $time_difference =  $total_seconds == 1 ? $total_seconds . ' month ago' : $total_seconds . ' months ago';

                      }  
                    if ($total_seconds >= $intervals['year'])

                      {

                        $total_seconds = floor($total_seconds/$intervals['year']);
                        $time_difference =  $total_seconds == 1 ? $total_seconds . ' year ago' : $total_seconds . ' years ago';

                      }  
                   
                   // var_dump($time_difference);
           ?>
           <div class="col-sm-4 career-list">
            <a href="job-description.php?ab=<?php echo $job_row['id']; ?>" id="career-search-form-1">
               <span class="sub-title"><?php echo $job_row['language_type']; ?></span>
                <span class="job-experience"><?php echo $job_row['experience']; ?></span>
                <span class="job-location"><?php echo $job_row['location']; ?></span>
                <span class="job-clock"><?php echo $time_difference; ?></span>
             </a>
          </div>
           <?php } ?>
           <!-- <div class="col-sm-4 career-list">
            <a href="jjavascript:void(0)" id="career-search-form-1">
               <span class="sub-title">Garphics Designer</span>
               <span class="job-experience">3-5 YEARS</span>
               <span class="job-location">Gwalior</span>
            </a>
         </div> -->
           <!-- <div class="col-sm-4 career-list">
            <a href="javascript:void(0)" id="career-search-form-1">
               <span class="sub-title">Programmer</span>
               <span class="job-experience">3-5 YEARS</span>
               <span class="job-location">Gwalior</span>
            </a>
         </div>
           <div class="col-sm-4 career-list">
            <a href="javascript:void(0)" id="career-search-form-1">
               <span class="sub-title">Quality Assurance</span>
               <span class="job-experience">3-5 YEARS</span>
               <span class="job-location">Gwalior</span>
            </a>
         </div> -->
        </div>
      </div>
      <!-- <div class="jobs-loadm col-md-12 center">
         <a id="loadmore3" href="#" class="btn big">See More</a>
      </div> -->
    </div>
            </div>
         </div>
      </div>
   </div>
      </div>
      </section>
      <div class="page-bottom">
         <div class="region region-bottom">
            <div id="block-jobapplication" class="white-bg block block-ttnd-careers block-job-application">
               <div class="content">
                  <div class="heading"><span class="line-one">Excited to work with us...</span><span>But don&#39;t see your positions listed</span></div>
                  <a href="#" class="btn big send-resume">Send Your Resume</a>
                  <div class="popup-overlay"></div>
                  
                  <?php include('submit_application_form.php'); ?>
                    
                </div>
            </div>
            <div id="block-testiblockblock" class="block block-custom block-testi-block">
               <div class="content"> </div>
            </div>
         </div>
      </div>
      </main>
   </div>
</div>
</div>

   
<?php include('include/footer.php'); ?>