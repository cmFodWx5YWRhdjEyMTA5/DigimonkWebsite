<?php include('include/header.php'); ?>

<div class="node-557 path-node page-node-type-career">
   <div class="banner">
      <div class="region region-banner">
         <div id="block-bannerblock" class="block block-banner-alter">
            <div class="content">
               <div id="single-image-banner">
                  <div class="overlay olay1"> <img src="../static1.digimonk/sites/default/files/styles/banner_image_inner_large/public/2016-07/Newers-World-TTN.jpg" alt="newers-world-ttn" /> </div>
                  <div class="banner-text2 olay1">
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
               <!--      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> Gallery-->
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
      <!--   <section class="section">-->
      <!--   <div class="wrapper"> <a id="main-content" tabindex="-1"></a>-->
      <!--      <div class="region region-content">-->
            <!--   <nav id="block-career" class="block block-menu navigation menu--career">-->
            <!--   <div class="visually-hidden f-heading" id="block-career-menu" class="f-heading">-->
            <!--   Career</div>-->
            <!--<ul class="clearfix menu">-->
            <!--   <li class="menu-item menu-item--active-trail"> <a href="gallery.php" id="Newers-World" rel="">Gallery</a> </li>-->
            <!--</ul>-->
            <!--</nav>-->
      <!--   </div>-->
      <!--</div>-->
      <!--</section>-->
<div class="page-bottom">
<div class="region region-bottom">
   <div class="views-element-container gray-bg growth block block-views block-views-blocknewers-world-growth-block-2" id="block-views-block-newers-world-growth-block-2">
      <div class="content">
         <div>
            <div class="growth view view-newers-world-growth view-id-newers_world_growth view-display-id-block_2 js-view-dom-id-cf9f8bf4f8b0715d10a28433c592064f2ef2a20d0c3a0a5903ba33595f236242">
               <div class="view-header">
                  <center>
                     <h2>Life at Digimonk</h2>
                     <div class="container">
                        <div class="row sp-life">
                           <div class="col-md-12">
                              <p>We are a team of CREATIVE WORKERS WHO REJOICE IN COLLECTIVE EFFORTS OF BRINGING IMAGINATION TO LIFE. We enjoy festivities with fervor. We work on concepts that bring to life ideas with a colorful shade.We are the harbingers of change, the architects of vision, the engineers of direction, the techies of execution, the marketers of acumen, the designers of imagination, the storytellers of persuasion and activists who create excitement nearby a name assiduously. Put together we bring unlimited potential which gets employed in productive expression.</p>

         <div class="container">
            <div class="row">
               <div class="col-md-12 galldesk-new">
                  <ul>
                     <?php 
                           $gallery_query = mysqli_query($conn,"SELECT * FROM event WHERE status='0' ORDER BY priority ASC");
                           while($gallery_row = mysqli_fetch_assoc($gallery_query))
                           {
                     ?>
                     <li> 
							  <a href="event-detail.php?ab=<?php echo $gallery_row['id']; ?>"> 
							  <img src="admin/images/event_gallery_img/<?php echo $gallery_row['image']; ?>" alt="tital"> 
                                    <!--<h2>Title #1</h2>-->
							    <div class="hover-layer">&nbsp;</div>
                           <p><?php echo $gallery_row['heading']; ?></p>
                     </a>
							</li>
                  <?php } ?>

							<!-- <li> 
							  <a href="event-detail.php"> 
							    <img src="../static1.digimonk/sites/default/files/2016-07/bd1.jpg" alt="tital"> 
                         
							    <div class="hover-layer">&nbsp;</div>
                          <p>Happy holi</p>
                        </a>
							</li> -->
						 	
                  </ul>
               </div>
            </div>
         </div>
                                    </div>
                                 </div>
                              </div>
                           </center>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </main>
   </div>
</div>
</div>
<?php include('include/footer.php'); ?>
