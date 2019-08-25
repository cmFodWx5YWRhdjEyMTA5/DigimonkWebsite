<?php include('include/header.php'); ?>

<div class="node-487">
   

   <div class="banner">
      <div class="region region-banner">
         <div id="block-bannerblock" class="block block-banner-alter">
            <div class="content">
               <div id="single-image-banner">
                  <div class="overlay"><img src="../static1.digimonk/sites/default/files/styles/banner_image_inner_large/public/2016-07/Privacy_0.jpg" alt="privacy" /></div>
                  <div class="banner-text">
                     <h1>Privacy Policy</h1>
                     <h2>Words to live by!</h2>
                  </div>
               </div>
               <span class="scroll-btn-down"></span> </div>
         </div>
         <div id="block-breadcrumbblock" class="block block-custom block-breadcrumb-block">
            <div class="content">
               <!--<nav class="breadcrumb">-->
               <!--   <ol itemscope itemtype="http://schema.org/BreadcrumbList">-->
               <!--      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> <a itemprop="item" rel="nofollow" href = "index.php">-->
               <!--         <span itemprop="name">Home</span></a>-->
               <!--         <meta itemprop="position" content="1"/>-->
               <!--      </li>-->
               <!--      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> Privacy Policy-->
               <!--         <meta itemprop="position" content="2" />-->
               <!--      </li>-->
               <!--   </ol>-->
               <!--</nav>-->
            </div>
         </div>
      </div>
   </div>
   <?php
         $privacy_query = mysqli_query($conn,"SELECT * FROM privacy_policy");
         $privacy_row = mysqli_fetch_array($privacy_query);
   ?>
   <div id="main-wrapper" class="layout-main-wrapper layout-container clearfix">
      <div id="main" class="layout-main clearfix section">
         <main id="content" class="column main-content">
            <section class="section">
               <div class="wrapper"> <a id="main-content" tabindex="-1"></a>
                  <div class="region region-content">
                     <div id="block-ttnd-content" class="block block-system block-system-main-block">
                        <div class="content">
                           <article data-history-node-id="487" about="/privacy-policy" typeof="schema:WebPage" class="node node--type-page node--view-mode-full clearfix">
                              <header> <span property="schema:name" content="Privacy Policy" class="rdf-meta hidden"></span> </header>
                              <div class="node__content clearfix">
                                 <div property="schema:text" class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                    <div class="wrap">
                                       <!--<p>TO THE NEW Singapore ("TO THE NEW","we", or "us") knows that you care how information about you is used and shared. This Privacy Policy explains what information of yours will be collected by TO THE NEW when you access the TO THE NEW website. We will not use or share your information with anyone except as described in this Privacy Policy. This Privacy Policy does not apply to information we collect by other means (including offline) or from other sources.</p>-->
                                     <div class="heading"><?php echo $privacy_row['heading']; ?></div>
                            <div><?php echo $privacy_row['description']; ?></div>
                                       
                                    </div>
                                 </div>
                                 <ul class="action-links action-links-field-collection-add">
                                    <li></li>
                                 </ul>
                              </div>
                           </article>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <div class="page-bottom">
               <div class="region region-bottom">
                  <div class="views-element-container alternate temp-multi block block-views block-views-blockour-capability-2-col-block-5" id="block-views-block-our-capability-2-col-block-5">
                     <div class="content">
                        <div>
                           <div class="view view-our-capability-2-col view-id-our_capability_2_col view-display-id-block_5 js-view-dom-id-739e9b56faf6021864ffcc1e2009e746b54a4da5d448e40f98436a9d383791e7"> </div>
                        </div>
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