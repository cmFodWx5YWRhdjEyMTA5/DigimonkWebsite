<?php include('include/header.php'); ?>
   
   <div class="banner">
      <div class="region region-banner">
         <div id="block-bannerblock" class="block block-banner-alter">
            <div class="content">
               <div id="single-image-banner">
                  <div class="overlay"><img src="../static1.digimonk/sites/default/files/styles/banner_image_inner_large/public/2016-07/Leadershippage.jpg" alt="leadership" /></div>
                  <div class="banner-text">
                     <h1>Leadership</h1> 
                     <p>Meet the seasoned leaders who made TO THE NEW possible.</p>
                  </div>
               </div>
               <span class="scroll-btn-down"></span>
             </div>
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
              
            </div>
         </div>
      </div>
   </div>
   
   
   <!-- Teammember style3 -->
        <section class="flat-row what-we-do offer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-section">

                            <h2 class="title" align="center">Our Digital <span>Monks</span></h2>
                            <!--<div class="sub-title">What You Get Using Our SEO Company’s</div>-->                              
                        </div>
                    </div>
                </div>
				
				
				 
				
		<div class="row">
          <div class="col-sm-4">&nbsp;</div>
			 <?php 

                $team_query1 = mysqli_query($conn,"SELECT * FROM members WHERE id='12' AND status='0' ");
                $team_row1 = mysqli_fetch_assoc($team_query1);
                
            ?> 

              <?php 
                      if($team_row1['image'])
                      { ?>

                      <div class="col-sm-4">
                      <div class="block animatable bounceInLeft ih-item circle colored effect3 bottom_to_top">
                        <a href="javascript:void(0)">
                              <div class="img">
                                <img src="admin/images/members_img/<?php echo $team_row1['image']; ?>" alt="img">
                            </div>
                                <div class="info">
                                    <h3><?php echo $team_row1['name']; ?></h3>
                                    <p><?php echo $team_row1['designation']; ?></p>
                                </div>
                            </a>
                        </div>
                     </div>
                  <?php }else{ ?>

                      <div class="col-sm-4" style="display: none;">
                      <div class="block animatable bounceInLeft ih-item circle colored effect3 bottom_to_top">
                        <a href="javascript:void(0)">
                              <div class="img">
                                <img src="admin/images/members_img/<?php echo $team_row1['image']; ?>" alt="img">
                            </div>
                                <div class="info">
                                    <h3><?php echo $team_row1['name']; ?></h3>
                                    <p><?php echo $team_row1['designation']; ?></p>
                                </div>
                            </a>
                        </div>
                     </div>
                   <?php  }  ?>
                    
				</div>
          <div class="row">
            <?php 

                $team_query = mysqli_query($conn,"SELECT * FROM members WHERE id!='12' AND status='0' ORDER BY priority ASC");
                while($team_row = mysqli_fetch_assoc($team_query))
                {
            ?>      
                    <div class="col-sm-4">
                        <div class="block animatable bounceInRight ih-item circle effect3 bottom_to_top">
                          <a href="javascript:void(0)">
                              <div class="img"><img src="admin/images/members_img/<?php echo $team_row['image']; ?>" alt="<?php echo $team_row['name']; ?>"></div>
                              <div class="info">
                                  <h3><?php echo $team_row['name']; ?></h3>
                                  <p><?php echo $team_row['designation']; ?></p>
                              </div>
                          </a>
                        </div>
                   </div>
                <?php } ?>
              </div>
              <br>
             <br>
          <div class="row">  </div>
      </div>
            <!-- /.container -->
        </section>
      
       
      
      <?php include('include/footer.php'); ?>