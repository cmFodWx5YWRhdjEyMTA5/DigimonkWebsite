<?php include('include/header.php'); ?>
 <div class="node-992 path-node page-node-type-industry">
   <div class="banner">
      <div class="region region-banner">
         <div id="block-bannerblock" class="block block-banner-alter">
            <div class="content">
               <div id="single-image-banner">
                  <div class="overlay"><img src="../static1.digimonk/sites/default/files/styles/banner_image_inner_large/public/2018-11/industries-we-serve_0.png" alt="Industry" /></div>
                  <div class="banner-text">
                     <div class="left">
                        <h1>Our Portfolio</h1>
                        <p>Leveraging the power of disruptive digital technologies, we empower businesses across industries to transform digitally</p>
                     </div>
                  </div>
               </div>
               <span class="scroll-btn-down"></span> 
            </div>
         </div>
         <div id="block-breadcrumbblock" class="block block-custom block-breadcrumb-block">
            <div class="content">
               
            </div>
         </div>
      </div>
   </div>
   <div id="main-wrapper" class="layout-main-wrapper layout-container clearfix">
      <div id="main" class="layout-main clearfix section">
         <main id="content" class="column main-content">
            <section class="section">
               <div class="wrapper">
                  <a id="main-content" tabindex="-1"></a>
                  <div class="region region-content">
                     <div id="block-ttnd-content" class="block block-system block-system-main-block">
                        <div class="content">
                           <article data-history-node-id="992" about="/industries" class="node node--type-industry node--promoted node--view-mode-full clearfix">
         <header>
            <div class="node__meta">
               <article typeof="schema:Person" about="/user/1027" class="profile"> </article>
               <span> Submitted by 
                  <span class="field field--name-uid field--type-entity-reference field--label-hidden">
                  <span lang="" about="/user/1027" typeof="schema:Person" property="schema:name" datatype="">admin3</span>
               </span> on 
               <span class="field field--name-created field--type-created field--label-hidden">Thu, 11/22/2018 - 16:22</span> 
            </span> 
            </div>
         </header>
      <div class="node__content clearfix">
         <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
            <div class="flik-content new-flik-content blue-flikcontent">
               <div class="wrapper">
                  <div class="inner-flik-content">
                     <h2 class="time-heading mainhead">Portfolio We Serve</h2>
                     <div class="flik-content-para">
                        <p>We deliver bespoke industry specific solutions leveraging our extensive digital experience, design-led engineering approach and agile processes backed by our strong expertise in cutting edge technologies.</p>
                  </div>
                  
                  
                  
 <div class="container">
         <div class="row">
            <div class="col-sm-6">
               <div class="tab">
                  <button class="tablink kkki" onclick="openPage('Home', this, '#e40000' )" id="defaultOpen">WEB DEVELOPMENT</button>
                  
               </div>
            </div>
            <div class="col-sm-6">
               <div class="tab">
                  <button class="tablink kkki" onclick="openPage('second', this, '#e40000')"> MOBILE APPLICATION</button>
                  
               </div>
            </div>
   </div>
   
    <div class="row">
      <div id="Home" class="tabcontent">
         <div class="timeline">
            
            <?php 

                  $portfolio_web = mysqli_query($conn,"SELECT * FROM project WHERE status='0' AND types_web='Web Development' ORDER BY priority ASC");
              

                $sno = 1;
                 while($portfolio_row = mysqli_fetch_assoc($portfolio_web))
                  {
                      $sno = $sno + 1;
                      if($sno%2==0) { 
                       
                ?>

            <section class="col-md-12 absOnmob">
               <div class="col-md-6 image wire eqhight" style="height: 268px;">
                  <img alt="<?php echo $portfolio_row['heading']; ?>" src="admin/images/project_img/<?php echo $portfolio_row['image']; ?>">
               </div>
               <div class="col-md-6 event eqhight" style="height: 268px;">
                  <h3 class="heading_color_h3"><?php echo $portfolio_row['heading']; ?></h3>
                  <p><?php echo substr($portfolio_row['short_description'], 0,200)."..."; ?> </p>
                  <div class="cta-btn">
                     <a class="btn" href="know-more.php?ab=<?php echo $portfolio_row['id']; ?>">Know More</a>
                  </div>
            </div>
            </section>

          <?php } else { ?>

            <section class="col-md-12 absOnmob">
               
               <div class="col-md-6 event eqhight" style="height: 268px;">
                  <h3 class="heading_color_h3"><?php echo $portfolio_row['heading']; ?></h3>
                  <p><?php echo substr($portfolio_row['short_description'], 0,200)."..."; ?> </p>
                  <div class="cta-btn">
                     <a class="btn" href="know-more.php?ab=<?php echo $portfolio_row['id']; ?>">Know More</a>
                  </div>
            </div>

               <div class="col-md-6 image wire eqhight" style="height: 268px;">
                  <img alt="<?php echo $portfolio_row['heading']; ?>" src="admin/images/project_img/<?php echo $portfolio_row['image']; ?>">
               </div>

            </section>
         <?php  }

                   
              } ?>
           
               
            </div>
         </div>
         
         
         <div id="second" class="tabcontent">
            <div class="timeline">
               
               <?php 

                  $portfolio_mobile = mysqli_query($conn,"SELECT * FROM project WHERE status='0' AND types_web='Mobile Application' ORDER BY priority ASC");
              

                $sno = 1;
                 while($portfolio_mob_row = mysqli_fetch_assoc($portfolio_mobile))
                  {
                      $sno = $sno + 1;
                      if($sno%2==0) { 
                       
                ?>
               <section class="col-md-12 absOnmob">
                  <div class="col-md-6 image wire eqhight" style="height: 268px;">
                     <img alt="<?php echo $portfolio_mob_row['heading']; ?>" src="admin/images/project_img/<?php echo $portfolio_mob_row['image']; ?>">
                  </div>
                  <div class="col-md-6 event eqhight" style="height: 268px;">
                     <h3 class="heading_color_h3"><?php echo $portfolio_mob_row['heading']; ?></h3>
                     <p><?php echo substr($portfolio_mob_row['short_description'], 0,200)."..."; ?></p>
                     <div class="cta-btn">
                        <a class="btn" href="know-more.php?ab=<?php echo $portfolio_mob_row['id']; ?>">Know More</a>
                     </div>
                  </div>
               </section>
            <?php }else{ ?>

            <section class="col-md-12 absOnmob">
                  
                  <div class="col-md-6 event eqhight" style="height: 268px;">
                     <h3 class="heading_color_h3"><?php echo $portfolio_mob_row['heading']; ?></h3>
                     <p><?php echo substr($portfolio_mob_row['short_description'], 0,200)."..."; ?></p>
                     <div class="cta-btn">
                        <a class="btn" href="know-more.php?ab=<?php echo $portfolio_mob_row['id']; ?>">Know More</a>
                     </div>
                  </div>

               <div class="col-md-6 image wire eqhight" style="height: 268px;">
                     <img alt="<?php echo $portfolio_mob_row['heading']; ?>" src="admin/images/project_img/<?php echo $portfolio_mob_row['image']; ?>">
                  </div>
               </section>
          <?php 

            } } ?>
 
            </div>
         </div>
      </div>
   </div>
   
   
          
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </article>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <div class="page-bottom">
               <div class="region region-bottom">
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
         
         
         
         
