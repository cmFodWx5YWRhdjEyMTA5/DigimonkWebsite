<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="sites/default/files/css/blog.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

 <?php include('include/header.php'); ?>

 <div class="banner">
      <div class="region region-banner">
         <div id="block-bannerblock" class="block block-banner-alter">
            <div class="content">
               <div id="single-image-banner">
                  <div class="overlay"><img src="../static1.digimonk/sites/default/files/styles/banner_image_inner_large/public/2018-03/enterprise-mobile-application-development-services.jpg" alt=""></div>
                  <div class="banner-text"> </div>
               </div>
               <span class="scroll-btn-down"></span> </div>
         </div>
         <div id="block-breadcrumbblock" class="block block-custom block-breadcrumb-block">
            <div class="content">
               
            </div>
         </div>
      </div>
   </div>


<!-- blog AREA  -->

    <section class="blog-details latest-blog-area wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
        <div class="container">
            <div class="row">
        <?php 
            $id = @$_GET['ab'];
            $blog_query = mysqli_query($conn,"SELECT * FROM our_blog WHERE id='".$id."'");
            $blog_row = mysqli_fetch_array($blog_query);
        ?>
                 <div class="col-md-8">
                    <div class="single-blog-box">
                        <img src="admin/images/our_blog_img/<?php echo $blog_row['image']; ?>" class="blog_desig_gm" alt="details-page-bg">
                        <div class="post-meta clearfix">
                            <div class="posted-by pull-left">
                                <p><a><span class="ti-user"></span><?php echo $blog_row['date_time']; ?></a></p>
                            </div>
                            <div class="post-date pull-right">
                            
                            </div>
                        </div>
                        <div class="blog-heading">
                          <h1 class="blog_detail_hed"><?php echo $blog_row['heading']; ?></h1>
                        </div>
                        <div class="blog-box-content" id="short_desc_desg">
                           <?php echo $blog_row['description']; ?> 
                            
                            <div class="blog-social-links">
	                        
	                         <div class="pull-right">
		                      <div class="social-links">
                    
                  		 <div class="fb-share-button">
                        <a target="_blank" href="" class="fb-xfbml-parse-ignore" rel="nofollow">
                         <span class="ti-facebook"></span>
                      </a>
                  </div>
                  		             
						  
		              </div>
					          </div>
			              </div>
                        </div>
                    </div>
                  
                </div>
                <div class="col-md-4">
                    
                    <div class="blog-recent-post" style="margin-top: 0px;">
                        <h3>Recent Post</h3>

                      <div class="row">
                         <?php 
                              
                              $blog_query1 = mysqli_query($conn,"SELECT * FROM our_blog WHERE status='0' ");
                              while($blog_row1 = mysqli_fetch_array($blog_query1))
                              {
                          ?>
                            <div class="col-md-5 col-sm-5 col-xs-5">
                                <div class="blog-recent-post-image-1">
                                    <a href="blog-details.php?ab=<?php echo $blog_row1['id']; ?>">
                                    <img src="admin/images/our_blog_img/<?php echo $blog_row1['image']; ?>" alt="recent-post-bg" class="recent_blog_dg"></a>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-7">
                                <div class="blog-recent-post-content">
                                    <p><?php echo $blog_row1['date_time']; ?></p>
                                    <a href="blog-details.php?ab=<?php echo $blog_row1['id']; ?>">
                                        <h2><?php echo substr($blog_row1['short_description'] , 0,100).".."; ?></h2>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                        <a href="blog.php" class="button3 button3">View all</a>
                     </div>
                  </div>
            </div>
        </div>
    </section>



   <footer class="footer">
  <div class="footer_top clearfix">
     <div class="wrapper"> 
        <div class="">
           <div class="region region-footer-top">
            <?php 
                $blog_query12 = mysqli_query($conn,"SELECT * FROM our_blog WHERE status='0' ORDER BY RAND() LIMIT 2");
                    while($blog_row12 = mysqli_fetch_assoc($blog_query12))
                    {

              ?>
              <div id="block-newsblockblock" class="newsletter ttn-form col-sm-6 block block-custom block-news-block">
                   <div class="content">
                        <div class="blog-posts">
                           <div class="blg-head">
                             <a href="blog-details.php?ab=<?php echo $blog_row12['id']; ?>" rel="nofollow"><?php echo $blog_row12['heading']; ?></a>
                           </div>
                          
                          <a rel="nofollow" href="blog.php" class="btn" id="view-all-blogs">View All Blogs</a>
                           <!--<a rel="nofollow" href="blog.php" class="btn" id="view-all-blogs">View All Blogs</a>-->
                           </div>
                     </div>
                  </div>
              <?php } ?>
            </div>
                 <!--  <div id="block-wpblogblockblock" class="footer-block col-sm-6 block block-custom block-wpblog-block">
                     <div class="heading">Latest from our blog</div>
                     <div class="content">
                        <div class="blog-posts">
                           <div class="blg-head"><a href = "" rel="nofollow">&quot;Controlled Chaos&quot; - Moderating the User Generated Content</a></div>
                           <div class="blog-cont"></div>
                           <a rel="nofollow" href="blog.php" class="btn" id="view-all-blogs">View All Blogs</a></div>
                     </div>
                  </div> -->
               </div>
            </div>
         </div>
      </div>
      <div class="footer__mid clearfix">
         <div class="wrapper">
            <div class="footer-menus">
               <div class="region region-footer-menu">
                  <nav id="block-company" class="block block-menu navigation menu--company">
                     <div id="block-company-menu" class="f-heading n-heading">Who We Are</div>
                     <ul class="clearfix menu">
                        <li class="menu-item">
                         <a href="index.php" id="f-home" rel="nofollow">Home</a> 
                       </li>
						      <li class="menu-item"> 
                           <a href="portfolio.php" id="f-about" rel="nofollow">Portfolio</a> 
                        </li>
                        <li class="menu-item">
                          <a href="testimonials.php" id="f-leadership" rel="nofollow">Reviews</a>
                       </li>
                        <li class="menu-item"> 
                          <a href="gallery.php" id="" rel="nofollow">Gallery</a>
                        </li>
                        <li class="menu-item"> 
                         <a href="jobs.php" id="f-news" rel="nofollow">Career</a> </li>
                        <li class="menu-item">
                         <a href="blog.php" id="f-awards" rel="nofollow">Blog</a> 
                       </li>
                        <li class="menu-item"> 
                          <a href="about-us.php" id="f-media-coverage" rel="nofollow">About Us</a> 
                        </li>
                        <li class="menu-item"> 
                           <a href="contact-us.php" id="f-events" rel="nofollow">Contact</a>
                        </li>
                        <li class="menu-item">
                          <a href="privacy-policy.php" id="" rel="">Privacy Policy</a> </li>
                        <li class="menu-item"> 
                          <a href="terms-conditions.php" id="f-terms-conditions" rel="nofollow">Terms & Conditions</a>
                       </li>
                     </ul>
                  </nav>
                  <nav id="block-whatwedo" class="block block-menu navigation menu--what-we-do">
                     <div id="block-whatwedo-menu" class="f-heading n-heading ">What We Do</div>
                     <ul class="clearfix menu">
                        <li class="menu-item">
                         <a href="web-development.php" id="f-Services" rel="">Website Development</a>
                        </li>
                        <li class="menu-item">
                         <a href="mobile-app-development.php" id="f-Technologies" rel="">Android/IOS Development</a>
                       </li>
                        <li class="menu-item">
                          <a href="devops-development.php" id="f-Success-Stories" rel="nofollow">DevOps Development</a>
                       </li>
                        <li class="menu-item">
                         <a href="digital-transformation.php" id="" rel="">Digital Transformation</a>
                       </li>
                        <li class="menu-item">
                          <a href="digital-marketing.php" id="" rel="">Digital Marketing/SEO</a>
                       </li>
      						<li class="menu-item">
                          <a href="ui-design.php" id="" rel="">UI Design</a>
                        </li>
      						<li class="menu-item">
                         <a href="product-engineering.php" id="" rel="">Graphic Designing</a>
                        </li>
                    </ul>
                  </nav>
               </div>
            </div>
            <div class="footer-right">
               <div class="region region-footer-right-section">
                  <div id="block-socialandcopyright" class="block block-block-content block-block-content85ec4c71-4a6e-435a-a9ee-d744f265af85">
                     <div class="content">
                        <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                           <div class="social">
                              <div class="f-heading n-heading">Connect With Us</div>
                              <ul>
                                <?php if(!empty($setting_row['linkedin'])) { ?>
                                 <li class="ln">
                                  <a href="<?php echo $setting_row['linkedin']; ?>" onclick="window.open(this.href);return false;" rel="nofollow" title="linked-in"> 
                                  </a>
                                </li>
                              <?php } ?>

                              <?php if(!empty($setting_row['twitter'])) { ?>

                                 <li class="twt"><a href="<?php echo $setting_row['twitter']; ?>" onclick="window.open(this.href);return false;" rel="nofollow" title="Twitter"> </a>
                                 </li>
                               <?php } ?>

                                <?php if(!empty($setting_row['facebook'])) { ?>
                                 <li class="fb"><a href="<?php echo $setting_row['facebook']; ?>" onclick="window.open(this.href);return false;" rel="nofollow" title="Facebook"> </a>
                                 </li>
                                <?php } ?>
                              </ul>
                           </div>
                           <div class="copyright"><img alt="ttn logo" data-entity-type="file" data-entity-uuid="86fdf287-46c8-4009-afb5-feb6441e9658" src="../static1.digimonk/sites/default/files/inline-images/footer-logo.png" />
                              <p>©2019 Digimonk Technologies</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
</div>
</div>
<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
<!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
<script type="application/json" data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/","scriptPath":null,"pathPrefix":"","currentPath":"node\/9","currentPathIsAdmin":false,"isFront":true,"currentLanguage":"en"},"pluralDelimiter":"\u0003","ajaxTrustedUrl":{"form_action_cc611e1d":true},"user":{"uid":0,"permissionsHash":"d6a2ccc8d7a2b5c0e5c72673f77cc9bac385bb8dfe94a399f5e03462a9b247ab"}}</script>
<script src="../static2.digimonk/sites/default/files/js/validation_js.js"></script><!--[if lte IE 8]><script src="http://static2.digimonk/sites/default/files/js/js_VtafjXmRvoUgAzqzYTA3Wrjkx9wcWhjP0G4ZnnqRamA_FC-L6SiPHwdFNVsL5MfwzRQZp8iaNxnCNQDG51-Covk.js"></script><![endif]-->

<script type="application/ld+json">
  {   "@context" : "http://schema.org",   "@type" : "Organization",  "address": {   "@type": "PostalAddress",  "addressLocality": "New Jersey, USA",  "postalCode": "08902-3040",   "streetAddress": "1588 US Highway 130 - North Brunswick" }, "name" : "TO THE NEW",  "url" : "http://www.tothenew.com",  "logo" : "http://static1.digimonk/blog/wp-content/themes/ttn/images/logo-large.png",   "sameAs" : [   "https://www.linkedin.com/company/tothenew", "https://twitter.com/TOTHENEW",  "https://www.facebook.com/TOTHENEWDigital/", "https://plus.google.com/+TOTHENEW",   "https://www.youtube.com/c/tothenew",  "http://www.slideshare.net/tothenewtech", "http://www.slideshare.net/tothenew"   ]  }</script>

<script type="text/javascript">
     var bcrumb1;	
      jQuery(document).ready(function()
      {
     	 var all = [];
    	 var s = 0;
   	jQuery('#block-ttnd-breadcrumbs li').each(function ()
      {
        all[s++] = jQuery(this).text().trim();

   	});
   	   jQuery('#block-breadcrumbblock li').each(function()
         {
          all[s++] = jQuery(this).text().trim();
      	});	

        bcrumb1 = all.join('|');
        jQuery('#talk-to-our-experts-form').submit(function()
        {	
         var url = window.location.pathname;
         var final = url.substr(url.lastIndexOf('index.php') + 1);
      	bcrumb = bcrumb1+'|'+final;
      	window.localStorage.setItem('bcrumb', bcrumb);
    	});	
       bcrumb = window.localStorage.getItem('bcrumb');	
    });
 </script>

<script type="text/javascript" src="js/validation_custom_code.js"></script>
<script type="text/javascript" src="js/save_all_form.js"></script>
 <!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->

 
 <script type="text/javascript">
        function validateFileType(){
            var fileName = document.getElementById("team_resume").value;
            var idxDot = fileName.lastIndexOf(".") + 1;
            var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
            if (extFile=="pdf" || extFile=="docx" ||  extFile=="doc"){
                //TO DO
            }else{
                alert("Only pdf/docs/ and docx files are allowed!");
                // window.location.reload();
            }   
        }
</script>


    
</body>

</html>
