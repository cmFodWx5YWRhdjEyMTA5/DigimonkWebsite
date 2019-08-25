<?php include('include/header.php'); ?>

<div class="node-557 path-node page-node-type-career">
   <div class="banner">
      <div class="region region-banner">
         <div id="block-bannerblock" class="block block-banner-alter">
            <div class="content">
               <div id="single-image-banner">
                  <div class="overlay olay1">
                 <img src="../static1.digimonk/sites/default/files/styles/banner_image_inner_large/public/2016-07/Newers-World-TTN.jpg" alt="newers-world-ttn" /> </div>
                  <div class="banner-text2">
                     <h1>Learn, Grow and DO THE NEW</h1>
                  </div>
               </div>
               <span class="scroll-btn-down"></span> </div>
         </div>
         <div id="block-breadcrumbblock" class="block block-custom block-breadcrumb-block">
            <div class="content">
               <nav class="breadcrumb">
                  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                     <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> <a itemprop="item" rel="nofollow" href="index.php" ><span itemprop="name">Home</span></a>
                        <meta itemprop="position" content="1" />
                     </li>
                     <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> Gallery
                        <meta itemprop="position" content="2" />
                     </li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>
   <div id="main-wrapper" class="layout-main-wrapper layout-container clearfix">
      <div id="main" class="layout-main clearfix section">
         <main id="content" class="column main-content">
         <section class="section">
         <div class="wrapper"> <a id="main-content" tabindex="-1"></a>
            <div class="region region-content"> </div>
      </div>
      </section>

   <?php 
         $id = @$_GET['ab'];
         $event_ql = mysqli_query($conn,"SELECT * FROM event WHERE status='0' AND id='".$id."'");
         $event_row = mysqli_fetch_array($event_ql);
   ?>
      <div class="page-bottom">
         <div class="region region-bottom">
            <div class="views-element-container white-bg fun block block-views block-views-blocknewers-world-growth-block-3" id="block-views-block-newers-world-growth-block-3">
               <div class="content">
                  <div>
                     <div class="view view-newers-world-growth view-id-newers_world_growth view-display-id-block_3 js-view-dom-id-89ef17b5bceaad6da66ec3b1f20cb6baf23385ff25f7b1adfc1ad06c5028b1b3">
                        <div class="view-header">
                           <div class="wrap center">
                              <h2 class="heading"><?php echo $event_row['heading']; ?></h2>
                              <p>Leverage our open-minded, vibrant and collaborative work environment which keeps our employees happy and energized. We do not believe in work hard-party harder. We believe in making Work a Party in itself; every day!</p>
                           </div>
                        </div>
               <div class="view-content">
                  <div>
                     <ul>

                  
                        <li>
                           <div class="views-field views-field-field-our-client-logo">
                              <div class="field-content">
                                 <div class="item-list">
                              <ul>
                        <?php
                              if($event_row['multi_image'])
                              {
                              $get_multi_img = explode("*#*", $event_row['multi_image']);

                              for($i=0;$i<count($get_multi_img);$i++)
                              {


                        ?>
                           <li class="gallery"> 
   								  <a href="admin/images/event_gallery_img/<?php echo $get_multi_img[$i]; ?>" width="980" height="654" data-lightbox="mygallery">
   									<img src="admin/images/event_gallery_img/<?php echo $get_multi_img[$i]; ?>">
										</a>
									</li>
                           <?php } 
                                }
                              ?>
									<!-- <li class="gallery"> 
										<a href="img/events/holi2.jpg" width="980" height="654" data-lightbox="mygallery">
											<img src="img/events/holi2.jpg">
										</a>
									</li>
									<li class="gallery"> 
										<a href="img/events/holi3.jpg" width="980" height="654" data-lightbox="mygallery">
											<img src="img/events/holi3.jpg">
										</a>
									</li>
									<li class="gallery"> 
										<a href="img/events/holi4.jpg" width="980" height="654" data-lightbox="mygallery">
											<img src="img/events/holi4.jpg">
										</a>
									</li>
									<li class="gallery"> 
										<a href="img/events/holi5.jpg" width="980" height="654" data-lightbox="mygallery">
											<img src="img/events/holi5.jpg">
										</a>
									</li>
									<li class="gallery"> 
										<a href="img/events/holi6.jpg" width="980" height="654" data-lightbox="mygallery">
											<img src="img/events/holi6.jpg">
										</a>
									</li>
									<li class="gallery"> 
										<a href="img/events/holi7.jpg" width="980" height="654" data-lightbox="mygallery">
											<img src="img/events/holi7.jpg">
										</a>
									</li>
									<li class="gallery"> 
										<a href="img/events/holi7.jpg" width="980" height="654" data-lightbox="mygallery">
											<img src="img/events/holi1.jpg">
										</a>
									</li>
									<li class="gallery"> 
										<a href="img/events/holi7.jpg" width="980" height="654" data-lightbox="mygallery">
											<img src="img/events/holi1.jpg">
										</a>
									</li> -->
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
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
<style>
.gallery img {
    width: auto !important;
}
</style>
<link rel="stylesheet" type="text/css" href="lightcss/style.css">
  	<link rel="stylesheet" type="text/css" href="lightcss/lightbox.min.css">
<script type="text/javascript" src="lightcss/lightbox-plus-jquery.min.js"></script>
<?php include('include/footer.php'); ?>
