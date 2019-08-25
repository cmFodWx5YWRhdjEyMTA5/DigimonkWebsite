<?php include('include/header.php'); ?>

<div class="node-45 page-node-type-services">
  <div class="banner">
      <div class="region region-banner">
         <div id="block-bannerblock" class="block block-banner-alter">
            <div class="content">
               <div id="single-image-banner">
                  <div class="overlay"><img src="../static1.digimonk/sites/default/files/styles/banner_image_inner_large/public/2018-03/Reviewspage.jpg" alt="" /></div>
                  <div class="banner-text">
                     <h1>Reviews</h1>
                     
                  </div>
               </div>
               <span class="scroll-btn-down"></span>
           </div>
         </div>
        
      </div>
   </div>
   <div id="main-wrapper" class="layout-main-wrapper layout-container clearfix">
      <div id="main" class="layout-main clearfix section">
         <main id="content" class="column main-content">
            <div class="page-top">
               <div class="region region-top">
                  <div class="views-element-container block block-views block-views-blockcounter-block-1" id="block-views-block-counter-block-1">
                     <div class="content">
                        <div>
                           <div class="view view-counter view-id-counter view-display-id-block_1 js-view-dom-id-048294481982c083577d5a0cde929dfa0ce560305684f581eb6eea7ae940b23e"> </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <section class="section">
               <div class="wrapper"> <a id="main-content" tabindex="-1"></a>
                  <div class="region region-content">
                     <div id="block-ttnd-content" class="block block-system block-system-main-block">
                        <div class="content">
                           <article data-history-node-id="45" about="/mobile-application-development-services" class="node node--type-services node--view-mode-full clearfix">
                              <header> </header>
                              <div class="node__content clearfix">
                                 <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                    <p>Running a business is not simple and by giving quality service, we bring a smile on our client's face. We resolve many challenges faced by small medium enterprises and provide timely delivery. The pleasure we get by knowing that our client is profiting from our services is showcased</p>
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
               <div class="content">
                  <div class="testimonial">
                     <div class="wrapper">
                        <div class="heading">Reviews</div>
                        <div id="testimonial">
                           <div class="st_views">
                           <?php 
                                 $review_query = mysqli_query($conn,"SELECT * FROM review WHERE status='0' ORDER BY id DESC");
                                 while($review_row = mysqli_fetch_assoc($review_query))
                                 {
                           ?>
                              <div class="item-0_<?php echo $review_row['id']; ?> testi-text">
                                 <div><?php echo $review_row['description']; ?></div>
                              </div>
                           <?php } ?>

                             <!--  <div class="item-1 testi-text">
                                 <p>After 3 years of relationship and execution of some very large projects, TO THE NEW is no more a vendor or a partner. It has become our own development team (just sitting somewhere else). Agile methods combined with a crack development team make working with TO THE NEW a very smooth experience.</p>
                              </div> -->
                </div>
            <div class="st_tabs">
               <div>
                  <ul class="row">
                <?php 
                     $review_query = mysqli_query($conn,"SELECT * FROM review WHERE status='0' ORDER BY id DESC ");
                     while($review_row = mysqli_fetch_assoc($review_query))
                     {
               ?>
                        <li class="col-sm-3">
                           <div class="outer"><a href="#item-0_<?php echo $review_row['id']; ?>">&nbsp;</a>
                           <?php 
                               $rw=explode('.',$review_row['image']);
                              if($rw[0]!="")
                              {
                             ?>
                              <div class="img col">
                               <img src="admin/images/testimonials_img/<?php echo $review_row['image']; ?>" alt="<?php echo $review_row['name']; ?>">
                                </div>
                           <?php } else{ ?>
                              <div class="img col">
                               <img src="img/default_img/default_img_profile.jpg" alt="<?php echo $review_row['name']; ?>">
                              </div>
                           <?php } ?>
                              <div class="description col">
                                 <span class="c_name"><?php echo $review_row['name']; ?></span>
                                  <span class="c_desig"><?php echo $review_row['designation']; ?></span>
                               </div>
                           </div>
                        </li>
                     <?php } ?>
              <!--  <li class="col-sm-3">
                         <div class="outer"><a href="#item-1">&nbsp;</a>
                              <div class="img col"> <img src = "../static1.digimonk/sites/default/files/styles/thumbnail/public/2016-07/mikael-andersson-ecommerce-head-mat-se.jpg" alt="Mikael Andersson "></div>
                              <div class="description col"><span class="c_name">Mikael Andersson </span><span class="c_desig">E-commerce Head, Mat.se</span></div>
                           </div>
                </li> -->
                                       </ul>
                                    </div>
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

<?php include('include/footer.php'); ?>