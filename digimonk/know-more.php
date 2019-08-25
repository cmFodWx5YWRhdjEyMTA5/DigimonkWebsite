<?php include('include/header.php'); ?>

<link rel="stylesheet" type="text/css" href="lightcss/style.css">
<link rel="stylesheet" type="text/css" href="lightcss/lightbox.min.css">
<link rel="stylesheet" href="dist/css/swiper.min.css">
<style type="text/css">
	.swiper-container {
      width: 100%;
      height: 300px;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
</style>
<div class="banner">
      <div class="region region-banner">
         <div id="block-bannerblock" class="block block-banner-alter">
            <div class="content">
               <div id="single-image-banner">
                  <div class="overlay"><img src="../static1.digimonk/sites/default/files/styles/banner_image_inner_large/public/2018-03/Works-Detailspage.jpg" alt=""></div>
                  <div class="banner-text">
                     <h1>Works Details</h1>
                     <!--<h2>Highly intuitive and experiential mobility solutions that provide compelling user experience</h2>-->
                  </div>
               </div>
               <span class="scroll-btn-down"></span> </div>
         </div>
         <div id="block-breadcrumbblock" class="block block-custom block-breadcrumb-block">
            <div class="content">
               <nav class="breadcrumb">
                  <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                     <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"> <a itemprop="item" rel="nofollow" href="index.php"><span itemprop="name">Home</span></a>
                        <meta itemprop="position" content="1">
                     </li>
                     <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"> <a itemprop="item" rel="nofollow" href="services.php"><span itemprop="name">Works Details</span></a>
                        <meta itemprop="position" content="2">
                     </li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>

     <?php 
            $id = @$_GET['ab'];
            $project_query = mysqli_query($conn,"SELECT * FROM project WHERE id='".$id."' AND status='0' ");
            $project_row = mysqli_fetch_array($project_query);

            

          ?>
 <!-- Start Project single -->
			<div class="project-page-single-area pt107-pb75">
				<div class="container">
					<div class="row">
						<div class="col">
							<!-- Start Section Title -->
							<div class="section-title text-center">
								<h3>Works Details</h3>
								<p><?php echo $project_row['heading']; ?></p>
							</div>
							<!-- End Section Title -->
						</div>
					</div>
					
					<div class="row">
						<div class="col">
							<div class="block animatable animated bounceIn">
							  <img src="admin/images/project_img/<?php echo $project_row['image']; ?>" alt="s">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="project-name">
								<h4><?php echo $project_row['heading']; ?></h4>
								<div><?php echo $project_row['description']; ?></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="project-details">
								<h4>Project Details</h4>
                <?php
                      if($project_row['client_name'])
                      { ?>
                        <p><span>Client:</span> <?php echo $project_row['client_name']; ?></p>
                <?php
                     }else
                      { ?>
                      <p style="display: none;"><span>Client:</span> <?php echo $project_row['client_name']; ?></p>
                  <?php }  ?>
								
                <?php 
                      if($project_row['location'])
                      { ?>
                      <p><span>Location:</span> <?php echo $project_row['location']; ?></p>
                  <?php
                      }else{ ?>
                      <p style="display: none;"><span>Location:</span> <?php echo $project_row['location']; ?></p>
                <?php
                      }
                ?>
								
                <?php 

                      if($project_row['technology'])
                      { ?>
                        <p><span>Technology:</span> <?php echo $project_row['technology']; ?></p>
                    <?php

                      }else{ ?><p style="display: none;"><span>Technology:</span> <?php echo $project_row['technology']; ?></p>
                <?php }
                ?>
								

            <?php 

              if($project_row['project_url']=="")
              {  ?>

              <a target="_blank" href="<?php echo $project_row['project_url']; ?>" rel="nofollow" class="btn big" style="display: none;">Visit Us Website</a>

            <?php } else{ ?> 

              <a target="_blank" href="<?php echo $project_row['project_url']; ?>" rel="nofollow" class="btn big">Visit Us Website</a>
          <?php } ?>

								<!-- <p><span> Visit Us:</span><a target="_blank" href="<?php echo $project_row['project_url']; ?>"> <?php echo $project_row['project_url']; ?></a></p> -->
								<!--<p><span>Year Completed:</span> <?php echo $project_row['complete_date']; ?></p>-->
							</div>
						</div>
					</div>
          

				</div>
			</div>
			<br>
	
	<?php
	  if($project_row['multi_imag']=="")
	  { ?>

	  <div class="container" style="display: none;">
		   <h4>Other Project</h4>
    </div>

<?php } else{ ?> 
<div class="container">
		<h4>Other Project</h4>
  <div class="swiper-container">
    <div class="swiper-wrapper">
     <?php 

		  $get_proj_img =explode("*#*", $project_row['multi_imag']);
		  for($i=0;$i<count($get_proj_img);$i++)
		  {
		  		$set_image = $get_proj_img[$i];
 	  ?>	


      <div class="swiper-slide gallery">
      	<a href="admin/images/project_img/<?php echo $set_image; ?>" data-lightbox="mygallery">
      		<img src="admin/images/project_img/<?php echo $set_image; ?>">
      	</a>
      </div>
    <?php } ?>
       
       
     </div>
    <!-- Add Pagination -->
     <div class="swiper-pagination"></div>
  </div>
			<!-- End Project single -->
 </div>
<?php } ?>

<script type="text/javascript" src="lightcss/lightbox-plus-jquery.min.js"></script>
 <script type="text/javascript" src="dist/swiper.min.js"></script>
 <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 5500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>
<?php include('include/footer.php'); ?>





			