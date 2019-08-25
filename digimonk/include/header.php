<?php include('admin/connection.php'); 

 
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
 <meta name="MobileOptimized" content="width" />

   <meta name="HandheldFriendly" content="true" />

   <meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />

    <?php 

              $google_ana="SELECT * FROM google_analytics_code WHERE page_name='Home/index'";
              $goo=mysqli_query($conn,$google_ana);
              $google=mysqli_fetch_array($goo);

               echo $google["google_analy_code"];
            ?>

      <?php
             function current_url()
             {
                 $url =  $_SERVER['REQUEST_URI'];
                 
                 $page=explode("/",$url);
                
                 // $page_title=explode(".", $page["1"]);
                 $page_title=explode(".", $page["3"]);
                 
                 $p_name=$page_title["0"];
                 $validURL =$p_name;
                 return $validURL;
               }
             //echo "page URL is : ".current_url();

             $page_name = current_url();
                
        ?>


        <?php
           if ($page_name=="") { ?>
             
              <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='Home/index'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>

             <meta name="description" content="<?php echo $meta_des['meta_description']; ?>" />

             <meta name="keywords" content="<?php echo $meta_des['mete_keywords']; ?>">
            
            <title><?php echo $meta_des['page_title']; ?></title>

            <?php }

              if ($page_name=="index") { ?>
            <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='Home/index'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
              
              <meta name="description" content="<?php echo $meta_des['meta_description']; ?>" />
              <meta name="keywords" content="<?php echo $meta_des['mete_keywords']; ?>">
            
              <title><?php echo $meta_des['page_title']; ?></title>
         
          <?php }

            if ($page_name=="about-us") { ?>

              <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='About-us'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
            
              <meta name="description" content="<?php echo $meta_des['meta_description']; ?>" />
              <meta name="keywords" content="<?php echo $meta_des['mete_keywords']; ?>">

              <title><?php echo $meta_des['page_title']; ?></title>

           <?php }


            if ($page_name=="privacy-policy") { ?>

              <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='Privacy-policy'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
            
              <meta name="description" content="<?php echo $meta_des['meta_description']; ?>" />
              <meta name="keywords" content="<?php echo $meta_des['mete_keywords']; ?>">

              <title><?php echo $meta_des['page_title']; ?></title>
            

           <?php }


         if($page_name=="reviews") { ?>

           <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='Reviews'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
            
              <meta name="description" content="<?php echo $meta_des['meta_description']; ?>" />
              <meta name="keywords" content="<?php echo $meta_des['mete_keywords']; ?>">

              <title><?php echo $meta_des['page_title']; ?></title>
             

           <?php }


            if($page_name=="career") { ?>
            
            <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='Career'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
            
              <meta name="description" content="<?php echo $meta_des['meta_description']; ?>" />
              <meta name="keywords" content="<?php echo $meta_des['mete_keywords']; ?>">

              <title><?php echo $meta_des['page_title']; ?></title>

           <?php }


         if($page_name=="portfolio") { ?>
            
           <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='Portfolio'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
            
              <meta name="description" content="<?php echo $meta_des['meta_description']; ?>" />
              <meta name="keywords" content="<?php echo $meta_des['mete_keywords']; ?>">

              <title><?php echo $meta_des['page_title']; ?></title>

           <?php }

           if($page_name=="gallery") { ?>
            
          <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='Gallery'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
            
              <meta name="description" content="<?php echo $meta_des['meta_description']; ?>" />
              <meta name="keywords" content="<?php echo $meta_des['mete_keywords']; ?>">

              <title><?php echo $meta_des['page_title']; ?></title>

           <?php }

           if($page_name=="contact-us") { ?>
            
          <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='Contact-us'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
            
              <meta name="description" content="<?php echo $meta_des['meta_description']; ?>" />
              <meta name="keywords" content="<?php echo $meta_des['mete_keywords']; ?>">

              <title><?php echo $meta_des['page_title']; ?></title>

        <?php }

           if($page_name=="terms-conditions") { ?>
            
          <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='Terms-conditions'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
            
              <meta name="description" content="<?php echo $meta_des['meta_description']; ?>" />
              <meta name="keywords" content="<?php echo $meta_des['mete_keywords']; ?>">

              <title><?php echo $meta_des['page_title']; ?></title>

           <?php }

             if($page_name=="web-development") { ?>
            
         <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='Web-development'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
            
              <meta name="description" content="<?php echo $meta_des['meta_description']; ?>" />
              <meta name="keywords" content="<?php echo $meta_des['mete_keywords']; ?>">

              <title><?php echo $meta_des['page_title']; ?></title>

           <?php }

               if($page_name=="devops-development") { ?>
            
          <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='Devops-development'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
            
              <meta name="description" content="<?php echo $meta_des['meta_description']; ?>" />
              <meta name="keywords" content="<?php echo $meta_des['mete_keywords']; ?>">

              <title><?php echo $meta_des['page_title']; ?></title>

           <?php }

             if($page_name=="digital-marketing") { ?>
            
          <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='Digital-marketing'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
            
              <meta name="description" content="<?php echo $meta_des['meta_description']; ?>" />
              <meta name="keywords" content="<?php echo $meta_des['mete_keywords']; ?>">

              <title><?php echo $meta_des['page_title']; ?></title>

           <?php }

             if($page_name=="graphic-designing") { ?>
            
          <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='Graphic-designing'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
            
              <meta name="description" content="<?php echo $meta_des['meta_description']; ?>" />
              <meta name="keywords" content="<?php echo $meta_des['mete_keywords']; ?>">

              <title><?php echo $meta_des['page_title']; ?></title>

           <?php }

           if($page_name=="mobile-app-development") { ?>
            
          <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='Mobile-app-development'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
            
              <meta name="description" content="<?php echo $meta_des['meta_description']; ?>" />
              <meta name="keywords" content="<?php echo $meta_des['mete_keywords']; ?>">

              <title><?php echo $meta_des['page_title']; ?></title>

           <?php }

            if($page_name=="digital-transformation") { ?>
            
        <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='Digital-transformation'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
            
              <meta name="description" content="<?php echo $meta_des['meta_description']; ?>" />
              <meta name="keywords" content="<?php echo $meta_des['mete_keywords']; ?>">

              <title><?php echo $meta_des['page_title']; ?></title>

           <?php }

             if($page_name=="ui-design") { ?>
            
          <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='Ui-design'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
            
              <meta name="description" content="<?php echo $meta_des['meta_description']; ?>" />
              <meta name="keywords" content="<?php echo $meta_des['mete_keywords']; ?>">

              <title><?php echo $meta_des['page_title']; ?></title>

           <?php }

              if($page_name=="services") { ?>
            
         <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='Services'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
            
              <meta name="description" content="<?php echo $meta_des['meta_description']; ?>" />
              <meta name="keywords" content="<?php echo $meta_des['mete_keywords']; ?>">

              <title><?php echo $meta_des['page_title']; ?></title>

           <?php }

            if($page_name=="technologies") { ?>
            
         <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='Technologies'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
            
              <meta name="description" content="<?php echo $meta_des['meta_description']; ?>" />
              <meta name="keywords" content="<?php echo $meta_des['mete_keywords']; ?>">

              <title><?php echo $meta_des['page_title']; ?></title>

           <?php }


            if($page_name=="success-stories") { ?>
            
          
              <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='Success-stories'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
            
              <meta name="description" content="<?php echo $meta_des['meta_description']; ?>" />
              <meta name="keywords" content="<?php echo $meta_des['mete_keywords']; ?>">

              <title><?php echo $meta_des['page_title']; ?></title>
           <?php }

             if($page_name=="job-campus") { ?>
            
          <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='job-campus'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
            
              <meta name="description" content="<?php echo $meta_des['meta_description']; ?>" />
              <meta name="keywords" content="<?php echo $meta_des['mete_keywords']; ?>">

              <title><?php echo $meta_des['page_title']; ?></title>

           <?php }


           if($page_name=="blog") { ?>
            
          <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='Blog'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
            
              <meta name="description" content="<?php echo $meta_des['meta_description']; ?>" />
              <meta name="keywords" content="<?php echo $meta_des['mete_keywords']; ?>">

              <title><?php echo $meta_des['page_title']; ?></title>

           <?php }
           
           
           if($page_name=="blog-details") { ?>
            
          <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='Blog-details'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
            <?php 
                $blog_deti_id = @$_GET['ab'];
                $blog_query11 = mysqli_query($conn,"SELECT * FROM our_blog WHERE id='".$blog_deti_id."'");
                $blog_row11 = mysqli_fetch_array($blog_query11);
               ?>
              <meta name="description" content="<?php echo $blog_row11['short_description']; ?>" />
              <meta name="keywords" content="<?php echo $blog_row11['meta_keyword']; ?>">
              
              <title><?php echo $blog_row11['heading']; ?> | Digimonk Technologies</title>

           <?php }


            if($page_name=="know-more") { ?>
            
          <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='know-more'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>

          <?php 
            $proid = @$_GET['ab'];
            $project_query11 = mysqli_query($conn,"SELECT * FROM project WHERE id='".$proid."' AND status='0' ");
            $project_row11 = mysqli_fetch_array($project_query11);

          ?>
            
              <meta name="description" content="<?php echo $project_row11['short_description']; ?>" />
              <meta name="keywords" content="<?php echo $project_row11['meta_keyword']; ?>">

              <title><?php echo $project_row11['heading']; ?> | Digimonk Technologies</title>

           <?php }  


            if($page_name=="leadership") { ?>
            
          <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='leadership'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
            
              <meta name="description" content="<?php echo $meta_des['meta_description']; ?>" />
              <meta name="keywords" content="<?php echo $meta_des['mete_keywords']; ?>">

              <title><?php echo $meta_des['page_title']; ?></title>

           <?php }

           if($page_name=="job-description") { ?>
            
          <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='job-description'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
            
              <meta name="description" content="<?php echo $meta_des['meta_description']; ?>" />
              <meta name="keywords" content="<?php echo $meta_des['mete_keywords']; ?>">

              <title><?php echo $meta_des['page_title']; ?></title>

           <?php }

            if($page_name=="event-detail") { ?>
            
          <?php 

              $meta_tag="SELECT * FROM meta_keywords WHERE page_name='event-detail'";
              $meta=mysqli_query($conn,$meta_tag);
              $meta_des=mysqli_fetch_array($meta)
          
             ?>
            
             <?php 
                  $eventid = @$_GET['ab'];
                  $event_ql11 = mysqli_query($conn,"SELECT * FROM event WHERE status='0' AND id='".$eventid."'");
                  $event_row11 = mysqli_fetch_array($event_ql11);
             ?>
               <meta name="description" content="<?php echo $event_row11['short_description']; ?>" />
              <meta name="keywords" content="<?php echo $event_row11['meta_keyword']; ?>">

               
              <title><?php echo $event_row11['heading']; ?> | Digimonk Technologies </title>

           <?php }

            ?>

   
    <meta name="author" content="DigiMonk Technologies">

   <link rel="shortcut icon" href="sites/default/files/fevicon-icon.png" type="image/vnd.microsoft.icon" />

   

   <link rel="stylesheet" href="sites/default/files/css/style2.css" />
   <link rel="stylesheet" href="sites/default/files/css/style.css" />
   <link rel="stylesheet" href="sites/default/files/css/mobile.css" />
   <script src='https://www.google.com/recaptcha/api.js'></script>

<style type="text/css">
   .set_err_class{
    border: 1px solid red !important;
    box-shadow:1px 1px #ff0000;
 }
</style>
</head>
 <?php
       $setting_query = mysqli_query($conn,"SELECT * FROM manage_setting");
       $setting_row = mysqli_fetch_array($setting_query);
 ?>
<body class="layout-no-sidebars node-308 path-node page-node-type-about-us">
 <div id="page-wrapper">
   <div id="page">
      <header id="header" class="header " aria-label="Site header">
      <div class="layout-container">
         <div class="wrapper">
            <div class="clearfix region region-header">
               
               <div id="block-searchblock" class="block block-block-content block-block-content1af39615-d837-45c3-ae29-ba1aaae5774c">
                  <div class="content">
                     <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                        <form action="#" class="search">
                           <input class="form-text" name="combine" placeholder="Enter search term" type="search" />
                           <div class="form-actions js-form-wrapper form-wrapper" data-drupal-selector="edit-actions" id="edit-actions">
                              <input class="button js-form-submit form-submit" data-drupal-selector="edit-submit-search-result" id="edit-submit-search-result" type="submit" value="Search" />
                           </div>
                        </form>
                     </div>
                  </div>
              </div>

               <div id="block-ttnd-branding" class="clearfix site-branding block block-system block-system-branding-block"> 
               	<a href="index.php" title="Home" class="site-logo">Logo </a> 
               </div>
               <nav id="block-ttnd-main-menu" class="block block-menu navigation menu--main">
               <div class="visually-hidden f-heading" id="block-ttnd-main-menu-menu">
               Main navigation</div>
            <div id="menu">
               <ul class="clearfix menu">
                  <li> <a href="index.php" id="" rel="">Home</a> </li>
				  <li> <a href="javascript:void(0)" id="h-Services" rel="">What We Work</a> 
					<ul class="menu2" style="display:none;">
					  <li> <a href="web-development.php" id="" rel="">Website/Software Development</a> </li>
					  <li> <a href="mobile-app-development.php" id="" rel="">Android/IOS Mobile App Development</a> </li>
					  <li> <a href="devops-development.php" id="" rel="">DevOps Development</a> </li>
					  <!--<li> <a href="digital-transformation.php" id="h-Technologies" rel="">Digital Transformation</a> </li>-->
					  <li> <a href="digital-marketing.php" id="h-career" rel="">Digital Marketing/SEO</a> </li>
					  <li> <a href="ui-design.php" id="h-contact-us" rel="">UI Design</a> </li>
					  <li> <a href="graphic-designing.php" id="h-contact-us" rel="">Graphic Designing</a> </li>
				    </ul>
				  </li>
                  <li> <a href="portfolio.php" id="" rel="">Portfolio</a> </li>
                  <li> <a href="gallery.php" id="" rel="">Gallery</a> </li>
                  <li> <a href="javascript:void(0)" id="h-Technologies" rel="">About Us</a> 
					  <ul class="menu2" style="display:none;"> 
						 <li> <a href="about-us.php" id="" rel="">About Company</a> </li>
						 <li> <a href="leadership.php" id="" rel="">Leadership</a> </li>
					</ul>
				</li>
                  <li> <a href="reviews.php" id="h-Success-Stories" rel="">Reviews</a> </li>
                  <li> <a href="career.php" id="h-career" rel="">Career</a> </li>
                  <li> <a href="contact-us.php" id="h-contact-us" rel="">contact us</a> </li>
               </ul>
            </div>
            <div class="menu-btn">
               <div class="burger-container">
                  <div id="burger">
                     <div class="bar topBar"></div>
                     <div class="bar btmBar"></div>
                  </div>
               </div>
            </div>
            <!-- <a href="#" class="search-icon" rel="nofollow">search</a> -->
            </nav>
         </div>
      </div>
   </div>
   </header>