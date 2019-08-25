<?php include('include/header.php'); ?>

<div class="banner">
      <div class="region region-banner">
         <div id="block-bannerblock" class="block block-banner-alter">
            <div class="content">
               <ul class="bxslider">

                  <?php
                     $slider_query = mysqli_query($conn,"SELECT * FROM slider_img WHERE status='0' ORDER BY id DESC");
                     while($slider_row = mysqli_fetch_array($slider_query))
                     {
                ?>

                  <li>
                     <div class="overlay">
                     <span class="scroll-btn-down"></span>
                         <img src="admin/images/slider_image/<?php echo $slider_row['image']; ?>" alt="DIGIMONK GPTW" /></div>
                     <div class="banner-text">
                       
                        <h2 class="headingB"><?php echo $slider_row['heading']; ?></h2>
                        <p><?php echo $slider_row['description']; ?></p>
                        <br><?php
                             if($slider_row['url_link'])
                              { ?>
                          <p><a class="btn big" href="<?php echo $slider_row['url_link']; ?>">Know More</a></p> 
                        <?php }else { ?>
                            <p style="display: none;"><a class="btn big" href="<?php echo $slider_row['url_link']; ?>">Know More</a></p> 
                        <?php } ?>
                     </div>
                  </li>
               <?php } ?>
               

               </ul>
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
      </div>
   </div>

   <div id="main-wrapper" class="layout-main-wrapper layout-container clearfix">
      <div id="main" class="layout-main clearfix">
         <main id="content" class="column main-content"> <a id="main-content" tabindex="-1"></a>
            <section class="section">
               <div class="region region-content">
                  <div id="block-ttnd-content" class="block block-system block-system-main-block">
                     <div class="content">
                        <article data-history-node-id="9" about="/node/9" typeof="schema:WebPage" class="node node--type-page node--view-mode-full clearfix">
                           <header><meta http-equiv="Content-Type" content="text/html; charset=euc-jp"> 
                              <span property="schema:name" content="Home" class="rdf-meta hidden"></span> 
                             
                           </header>
                           <div class="node__content clearfix">
                              <div property="schema:text" class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                 <div class="wrap center">We are a one-stop destination for all digital solution, be it website designing, digital marketing, SEO, mobile apps. Our elegant group of Website Developers bestows their innovation and expertise who transform your idea into an amazing Website Design or Mobile App Development while keeping every custom project unique.</div>
                              </div>
                              <ul class="action-links action-links-field-collection-add">
                                 <li></li>
                              </ul>
                           </div>
                        </article>
                     </div>
                  </div>
       
         <div class="views-element-container call-out wrapper call-home block block-views block-views-blockservices-page-block-2" id="block-views-block-services-page-block-2">
            <div class="content">
              <div>
         <div class="view view-services-page view-id-services_page view-display-id-block_2 js-view-dom-id-8fb0a6403055650bb23aac0998f299233af3ca6fb2c194019d7c48eff6397806">
           
           <div class="view-header">
             <div class="wrapper center">
                 <p>We develop websites with the best technical expertise and creativity. We create a quality product with customer satisfaction and after sales support.</p>
             </div>
           </div>
            <div class="view-content">
               <div class="services equal hover-anime hardbg">
                  <ul class="row">
                     <li class="col-sm-4">
                        <div> <img src="../static1.digimonk/sites/default/files/styles/news_media/public/2016-07/Digital%20Transformation.png" width="64" height="64" alt="Digital Transformation" title="Digital Transformation" typeof="Image" class="image-style-news-media" />
                           <h3 class="title">Web Development</h3>
                           <div class="text">
                              <p>You can rely on DigiMonk for a highly experienced web development team...</p>
                              <p></p>
                           </div>
                           <div class="hover-text"><a href="web-development.php" id="services_Digital-Transformation" rel="nofollow"><span class="valign"><span class="name">Web Development</span><span class="cta">Read More</span></span></a></div>
                        </div>
                     </li>
                     <li class="col-sm-4">
                        <div> <img src="../static1.digimonk/sites/default/files/styles/news_media/public/2016-07/Product%20Eng.png" width="64" height="64" alt="Sofware Product Engineering" title="Product Engineering" typeof="Image" class="image-style-news-media" />
                           <h3 class="title">App Development</h3>
                           <div class="text">
                              <p>Android App Development, React Native App Development, iOS App Development..</p>
                           </div>
                           <div class="hover-text"><a href="mobile-app-development.php" id="services_Product-Engineering" rel="nofollow"><span class="valign"><span class="name">App Development</span><span class="cta">Read More</span></span></a></div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
                     <div class="view-footer">
                        <div class="wrapper center">
                        <a class="btn pink big tech" href="services.php" rel="nofollow">View all services</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
                  <div id="block-homepagetestimonialblock" class="technology-block-home block block-block-content block-block-content2196ce26-2f87-4082-b9c3-d336f2db80bb">
                     <div class="content">
                        <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                           <div class="wrapper center">
                              <div class="technology">
                                 <h1 class="heading">Digimonk Technologies</h1>
                                 <p>We are a one-stop destination for all digital solution, be it website designing,</p>
                                 <p>Online marketing isn't just about creating traffic (at least not anymore) because what brands actually want is to turn that traffic into sales. To see this through, we at Digimonk Technologies provide a complete digital marketing solution that not only help brands in improving their online visibility but also in generating leads and turning those leads into lasting customers.</p>
                                 <a class="btn pink big" href="technologies.php" rel="nofollow">View all technologies </a></div>
                            
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="block-storiesblockblock" class="block block-custom block-stories-block">
                     <div class="content">
                        <div class="success-story">
                           <div class="wrap head">
                              <div class="heading">Success Stories</div>
                              <p>We are a one-stop destination for all digital solution, be it website designing, digital marketing, SEO, mobile apps. </p>
                           </div>
                           <div class="row">
                              <div class="col-sm-4">
                                 <div class="inner"> <img src="../static1.digimonk/sites/default/files/styles/vertical_image/public/2016-07/Alibaba%20Cloud%20_%20Home%20Page.jpg" alt="Alibaba Cloud Product Development case study" title="Alibaba Cloud Product Development case study">
                                    <div class="hover-text"> <a rel="nofollow" href="portfolio.php" id = "home-success-stories-Alibaba-Cloud">
                                       <div class="valign"> <span class="name">Influencer On Demand</span>
                                          <div class="desc">
                                             <p>We are Influencer on Demand. We had a dream of creating a space where influencers could be discovered more easily.</p>
                                          </div>
                                       </div>
                                       </a> </div>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="inner"> <img src="../static1.digimonk/sites/default/files/styles/normal/public/2016-10/westcon_450_261.jpg" alt="westcon web application development services case study" title="westcon web application development services case study">
                                    <div class="hover-text"> <a rel="nofollow" href="portfolio.php" id = "home-success-stories-Westcon">
                                       <div class="valign"> <span class="name">The Halal Brothers </span>
                                          <div class="desc">
                                             <p>Halal Brothers is now franchising worldwide. Fans no longer have to be in NYC to experience The Halal Brothers! As a franchisee</p>
                                          </div>
                                       </div>
                                       </a> </div>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="inner"> <img src="../static1.digimonk/sites/default/files/styles/normal/public/2016-07/warner.jpg" alt="Time Warner Cable application development case study" title="Time Warner Cable application development case study">
                                    <div class="hover-text"> <a rel="nofollow" href="portfolio.php" id = "home-success-stories-Time-Warner-Cable">
                                       <div class="valign"> <span class="name">Louerma</span>
                                          <div class="desc">
                                             <p>Louerma is today the digital platform of reference in the rental sector in Senegal. Professionals and private individuals trust us to rent cars</p>
                                          </div>
                                       </div>
                                       </a> </div>
                                 </div>
                              </div>
                              <div class="col-sm-8">
                                 <div class="inner"> <img src="../static1.digimonk/sites/default/files/styles/horizontal_image/public/2016-07/matse.jpg" alt="Mat Se software application Development case study" title="Mat Se software application Development case study">
                                    <div class="hover-text"> <a rel="nofollow" href="portfolio.php" id = "home-success-stories-Mat.se">
                                       <div class="valign"> <span class="name">Solar The World</span>
                                          <div class="desc">
                                             <p>Your own photovoltaic system Upload a power bill for this, Then we determine the potential on your roof Or the potential on your open space</p>
                                          </div>
                                       </div>
                                       </a> </div>
                                 </div>
                              </div>
                           </div>
                           <a rel="nofollow" href="portfolio.php" class="btn big">Read All Success Stories</a></div>
                     </div>
                  </div>
                  <!--<div class="views-element-container block block-views block-views-blockinsight-block-block-2" id="block-views-block-insight-block-block-2">
                     <div class="content">
                        <div>
                           <div class="view view-insight-block view-id-insight_block view-display-id-block_2 js-view-dom-id-c5a67bbf46b6fd81d6772b752f879348eaee8ef8f9e3a7b2eb645bb5a0d14147">
                              <div class="view-header">
                                 <div class="head">
                                    <div class="heading">Insights</div>
                                    <p>Best of industry knowledge for you!</p>
                                 </div>
                              </div>
                              <div class="view-content">
                                 <div class="wrapper">
                                    <ul class="row">
                                       <li class="col-sm-3">
                                          <div>
                                             <div>
                                                <div class="inner hover-anime-v"> <img src="../static1.digimonk/sites/default/files/2017-09/300_232.png" width="300" height="232" alt="WP image" title="WP image" typeof="Image" />
                                                   <div class="text">
                                                      <div class="title">Whitepaper</div>
                                                      <p>[NASSCOM Whitepaper Series- I] How Is Digital Transformation Reshaping Businesses To Meet The Digital Age? The Customer Experience Context!</p>
                                                   </div>
                                                   <div class="hover-text"><a rel="nofollow" href="#" target="_blank"> <span class="valign"> <span class="Download-icon icons"></span> <span class="disc">Download Whitepaper</span> </span></a> </div>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                       <li class="col-sm-3">
                                          <div>
                                             <div>
                                                <div class="inner hover-anime-v"> <img src="../static1.digimonk/sites/default/files/2017-11/Banner%201_0.png" width="300" height="232" alt="The Kaizen Approach to Software Development" title="The Kaizen Approach to Software Development" typeof="Image" />
                                                   <div class="text">
                                                      <div class="title">Whitepaper</div>
                                                      <p class="MsoNormal">The Kaizen Approach to Software Development</p>
                                                   </div>
                                                   <div class="hover-text"><a rel="nofollow" href="#" target="_blank"> <span class="valign"> <span class="Download-icon icons"></span> <span class="disc">Download Whitepaper</span> </span></a> </div>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                       <li class="col-sm-3">
                                          <div>
                                             <div>
                                                <div class="inner hover-anime-v"> <img src="../static1.digimonk/sites/default/files/2017-09/2_20%20Tips%20and%20Tricks%20Companies%20Must%20Know%20While%20Working%20on%20AWS_DrupalIndexPageWebsite_300x232px_2.jpg" width="300" height="232" alt="20 Tips and Tricks Companies Must Know While Working on AWS" title="20 Tips and Tricks Companies Must Know While Working on AWS" typeof="Image" />
                                                   <div class="text">
                                                      <div class="title">Whitepaper</div>
                                                      <p>20 Tips and Tricks Companies Must Know While Working on AWS</p>
                                                   </div>
                                                   <div class="hover-text"><a rel="nofollow" href="#" target="_blank"> <span class="valign"> <span class="Download-icon icons"></span> <span class="disc">Download Whitepaper</span> </span></a> </div>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                       <li class="col-sm-3">
                                          <div>
                                             <div>
                                                <div class="inner hover-anime-v"> <img src="../static1.digimonk/sites/default/files/2017-09/DIGITAL%20Transformation.png" width="300" height="232" alt="Decoding Digital Transformation" title="Decoding Digital Transformation" typeof="Image" />
                                                   <div class="text">
                                                      <div class="title">Webinar</div>
                                                      <p>Decoding Digital Transformation For A Large Enterprise in India</p>
                                                   </div>
                                                   <div class="hover-text"><a rel="nofollow" href="https://www.youtube.com/watch?v=q1KBmmObcrE" target="_blank"> <span class="valign"> <span class="View-icon icons"></span> <span class="disc">View Webinar</span> </span></a> </div>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="view-footer">
                                 <div class="view view-insight-block view-id-insight_block view-display-id-block_3 js-view-dom-id-a3ff69ab850a2887a2aad65448648188bfd8d669166a00b0c2c3690f52888d01">
                                    <div class="view-content">
                                       <div class="wrapper center btn-wrap">
                                          <div>
                                             <div><a href="insights.html" rel="nofollow">Get More Insights</a> </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--ABC-->
       </section>
            <div class="page-bottom">
               <div class="region region-bottom">
                  <div class="views-element-container alternate temp-multi block block-views block-views-blockour-capability-2-col-block-5" id="block-views-block-our-capability-2-col-block-5">
                     <div class="content">
                        <div>
                           <div class="view view-our-capability-2-col view-id-our_capability_2_col view-display-id-block_5 js-view-dom-id-8756f1e30baad80be1e9d29adad6df0a5592513078933620ba2172ee1e598a4b"> </div>
                        </div>
                     </div>
                  </div>
                  <div class="views-element-container our-clients block block-views block-views-blockour-clients-block-1" id="block-views-block-our-clients-block-1">
                     <div class="content">
                        <div>
                           <div class="view view-our-clients view-id-our_clients view-display-id-block_1 js-view-dom-id-75964e17fa5098bd157ea3670cb158514e203b70a9b5692830a4992e5108c88b">
                              <div class="view-header">
                                 <div class="head">
                                    <div class="heading">Our Clients</div>
                                    <p>Names who trust us</p>
                                 </div>
                              </div>
                              <div class="view-content">
                                 <div class="wrapper">
                                    <div>
                                       <div>
                                          <div class="item-list">
                                             <ul>
                                               
                                                <li> <img src="../static1.digimonk/sites/default/files/2016-07/img-pro2.jpg" width="220" height="143" alt="P and G application development" title="Solar The World" typeof="foaf:Image" /></li>
                                                <li> <img src="../static1.digimonk/sites/default/files/2016-07/img-pro11.png" width="220" height="143" alt="sony software development" title="Wasilkom" typeof="foaf:Image" /></li>
                                                <li> <img src="../static1.digimonk/sites/default/files/2016-07/img-pro4.jpg" width="220" height="143" alt="pizza hut product development" title="Car Rental" typeof="foaf:Image" /></li>
                                                <li> <img src="../static1.digimonk/sites/default/files/2016-07/img-pro5.png" width="220" height="143" alt="time warner cable web development" title="Athelas Go" typeof="foaf:Image" /></li>
                                                <li> <img src="../static1.digimonk/sites/default/files/2016-07/img-prob6.png" width="220" height="143" alt="Dawerlee" title="Dawerlee" typeof="foaf:Image" /></li>
                                                <li> <img src="../static1.digimonk/sites/default/files/2016-07/img-prob7.png" width="220" height="143" alt="Carbiqi" title="Carbiqi" typeof="foaf:Image" /></li>
                                                <li> <img src="../static1.digimonk/sites/default/files/2016-07/img-prob8.png" width="220" height="143" alt="Influencer on demand" title="Influencer" typeof="foaf:Image" /></li>
                                                <li> <img src="../static1.digimonk/sites/default/files/2016-07/img-pro9.png" width="220" height="143" alt="Tynelz" title="Tynelz" typeof="foaf:Image" /></li>
                                                <li> <img src="../static1.digimonk/sites/default/files/2016-07/img-prob12.png" width="220" height="143" alt="Yes Renovations" title="Yes Renovations" typeof="foaf:Image" /></li>
                                                <li> <img src="../static1.digimonk/sites/default/files/2016-07/img-pro13.png" width="220" height="143" alt="Barbar Syndicate" title="Barbar Syndicate" typeof="foaf:Image" /></li>
                                                <li> <img src="../static1.digimonk/sites/default/files/2016-07/gastro&co.png" width="220" height="143" alt="gastro&co" title="gastro&co" typeof="foaf:Image" /></li>
                                                 <li> <img src="../static1.digimonk/sites/default/files/2016-07/The-Courtyard.png" width="220" height="143" alt="The-Courtyard" title="The-Courtyard" typeof="foaf:Image" /></li>
                                                <li> <img src="../static1.digimonk/sites/default/files/2016-07/parkbuzz.png" width="220" height="143" alt="parkbuzz" title="parkbuzz" typeof="foaf:Image" /></li>
                                                 <li> <img src="../static1.digimonk/sites/default/files/2016-07/Newsd.png" width="220" height="143" alt="Newsd" title="Newsd" typeof="foaf:Image" /></li>
                                                <li> <img src="../static1.digimonk/sites/default/files/2016-07/feelerz.png" width="220" height="143" alt="feelerz" title="feelerz" typeof="foaf:Image" /></li>
                                                 <li> <img src="../static1.digimonk/sites/default/files/2016-07/img-pro1.jpg" width="220" height="143" alt="time warner cable web development" title="Halal Brothers" typeof="foaf:Image" /></li>
                                                <li> <img src="../static1.digimonk/sites/default/files/2016-07/img-pro10.png" width="220" height="143" alt="Milk Basket" title="Milk Basket" typeof="foaf:Image" /></li>
                                                
                                                
                                                
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
               </div>
            </div>
         </main>
      </div>
   </div>

<?php include('include/footer.php'); ?>