<?php include('include/header.php'); ?>

   <div class="banner">
      <div class="region region-banner">
         <div id="block-bannerblock" class="block block-banner-alter">
            <div class="content">
               <div id="single-image-banner">
                  <div class="overlay"><img src="../static1.digimonk/about company.png" alt="About-us" /></div>
                  <div class="banner-text">
                     <h1>About</h1>
                     <p>We are a digital technology company that drives digital transformation and builds disruptive technology solutions</p>
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
               <!--      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> About us-->
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
            <div class="page-top">
               <div class="region region-top">
                  <div class="views-element-container block block-views block-views-blockcounter-block-1" id="block-views-block-counter-block-1">
                     <div class="content">
                        <div>
                           <div class="view view-counter view-id-counter view-display-id-block_1 js-view-dom-id-27777483e0da1553b58c0b2749b71851dce381e297cd0813ff0c32d58a657fbd"> </div>
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
                  <article data-history-node-id="308" about="/about-us" class="node node--type-about-us node--view-mode-full clearfix">
                     <header> </header>
                     <div class="node__content clearfix">
                        <?php 

                              $about_query = mysqli_query($conn,"SELECT * FROM about_us");
                              $about_row = mysqli_fetch_array($about_query);
                        ?>
                        <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                           <h2 class="heading"><?php echo $about_row['heading']; ?></h2>
                           <p>
                            <img alt="about us" data-entity-type="file" data-entity-uuid="b256e9a5-dade-45eb-ab45-19a5c3c3a975" src="admin/images/about-img/<?php echo $about_row['image']; ?>" class="align-right" />
                          </p>
                           
                           <div><?php echo $about_row['description']; ?></div>
                                
                           </div>
                        </div>
                     </article>
                  </div>
               </div>
                     <div class="views-element-container what-we-stands block block-views block-views-blockabout-us-block-1" id="block-views-block-about-us-block-1">
                        <div class="content">
                           <div>
                              <div class="view view-about-us view-id-about_us view-display-id-block_1 js-view-dom-id-01bffb995236ed0b675dcadc4f59b88f807eeda0b8da0d538c4371d269f96b4b">
                                 <div class="view-header">
                                    <h2 class="heading">What do we stand for</h2>
                                 </div>
                                 <div class="view-content">
                                    <div>
                                       <ul class="row">
                                          <li class="col-sm-6">
                                             <div>
                                                <div class="lft"> <img src="../static1.digimonk/sites/default/files/2016-07/Social%20Customer%20Engagement_0.png" width="64" height="64" alt="Customer Success" title="Customer Success" typeof="Image" /></div>
                                                <div class="ryt">
                                                   <div class="sub-title">Integrated Search (SEO & PPC)</div>
                                                   <p>Customer success is more important than anything else</p>
                                                </div>
                                             </div>
                                          </li>
                                          <li class="col-sm-6">
                                             <div>
                                                <div class="lft"> <img src="../static1.digimonk/sites/default/files/2016-07/Governance_0.png" width="64" height="64" alt="Transparency" title="Transparency" typeof="Image" /></div>
                                                <div class="ryt">
                                                   <div class="sub-title">Pay Per Click Management</div>
                                                   <p>Transparency and honesty in whatever we do and say</p>
                                                </div>
                                             </div>
                                          </li>
                                          <li class="col-sm-6">
                                             <div>
                                                <div class="lft"> <img src="../static1.digimonk/sites/default/files/2016-07/Performance_0.png" width="64" height="64" alt="Agility" title="Agility" typeof="Image" /></div>
                                                <div class="ryt">
                                                   <div class="sub-title">Relevance, Authority & Trust</div>
                                                   <p>Speed and Agility in all our actions</p>
                                                </div>
                                             </div>
                                          </li>
                                          <li class="col-sm-6">
                                             <div>
                                                <div class="lft"> <img src="../static1.digimonk/sites/default/files/2016-07/Planning_1.png" width="64" height="64" alt="Constant Learning" title="Constant Learning" typeof="Image" /></div>
                                                <div class="ryt">
                                                   <div class="sub-title">Search Engine Optimization</div>
                                                   <p>Pushing ourselves for constant learning</p>
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
            </section>
            <!----------Events---Coverage----<div class="page_middle">
               <div class="outer">
                  <div class="region region-extra">
                     <div class="views-element-container col-sm-6 events-block news-events block block-views block-views-blocknewsroom-block-2" id="block-views-block-newsroom-block-2">
                        <div class="heading">Events</div>
                        <div class="content">
                           <div>
                              <div class="view view-newsroom view-id-newsroom view-display-id-block_2 js-view-dom-id-400c9e20d29050c470505dafabdacf0bae2004cf86454a47bb737970c64e7ebf">
                                 <div class="view-content">
                                    <div>
                                       <ul>
                                          <li>
                                             <div>
                                                <div class="date">16/May/2019</div>
                                                <div class="text">
                                                   <p><a href="events/to-the-new-sponsors-aws-summit-2019.html">TO THE NEW Sponsors AWS Summit,…</a></p>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <div>
                                                <div class="date">22/April/2019</div>
                                                <div class="text">
                                                   <p><a href="tothenew-organised-techfluence-2019.html">TO THE NEW Organised Techfluence,…</a></p>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <div>
                                                <div class="date">09/April/2019</div>
                                                <div class="text">
                                                   <p><a href="to-the-new-sponsors-6th-annual-smart-data-summit.html">TO THE NEW Sponsors 6th Annual…</a></p>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="view-footer">
                                  <a href="javascript:void(0)" class="btn big">View All</a> </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="views-element-container col-sm-6 news-block news-events block block-views block-views-blocknewsroom-block-1" id="block-views-block-newsroom-block-1">
                        <div class="heading">Media Coverage</div>
                        <div class="content">
                           <div>
                              <div class="view view-newsroom view-id-newsroom view-display-id-block_1 js-view-dom-id-405c58b8055bcf53f754fd8212e18c2de7d21867df3f9ceae4491376cd8d6361">
                                 <div class="view-content">
                                    <div>
                                       <ul>
                                          <li>
                                             <div>
                                                <div class="date">01/May/2019</div>
                                                <div class="text">
                                                   <p><a href="media-coverage/best-martech-company-2019.html">TO THE NEW Named Best MarTech…</a></p>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <div>
                                                <div class="date">01/May/2019</div>
                                                <div class="text">
                                                   <p><a href="media-coverage/social-network-within-the-office.html">The social network within the…</a></p>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <div>
                                                <div class="date">23/April/2019</div>
                                                <div class="text">
                                                   <p><a href="media-coverage/pahal-tree-plantation-drive.html">TO THE NEW promises to plant over…</a></p>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="view-footer"> 
                                    <a href="javascript:void(0)" class="btn big">View All</a> </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>-------->
            <div class="page-bottom">
               <div class="region region-bottom">
                  <div class="views-element-container alternate temp-multi block block-views block-views-blockour-capability-2-col-block-5" id="block-views-block-our-capability-2-col-block-5">
                     <div class="content">
                        <div>
                           <div class="view view-our-capability-2-col view-id-our_capability_2_col view-display-id-block_5 js-view-dom-id-cab2a69e1ac67df6dbcec84977b4065b3e7a7cd678973f3c7ab47e9fe4393b90"> </div>
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
                  <div id="block-testiblockblock" class="block block-custom block-testi-block">
                     <div class="content"> </div>
                  </div>
               </div>
            </div>
         </main>
      </div>
   </div>


<?php include('include/footer.php'); ?>