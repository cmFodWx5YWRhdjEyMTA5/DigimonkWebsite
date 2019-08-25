<?php include('include/header.php'); ?>

<div class="node-75">
   <div class="banner">
      <div class="region region-banner">
         <div id="block-bannerblock" class="block block-banner-alter">
            <div class="content">
               <div id="single-image-banner">
                  <div class="overlay"><img src="../static1.digimonk/sites/default/files/styles/banner_image_inner_small/public/2016-10/Contact-Us_banner_0.png" alt="contact-to-the-new" /></div>
                  <div class="banner-text">
                     <h1>Contact Us</h1>
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
               <!--      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> Contact Us-->
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
            <section class="section">
               <div class="wrapper"> <a id="main-content" tabindex="-1"></a>
                  <div class="contact clearfix">
                     <!-- <div class="side-tabs">
                        <ul>
                           <li id="request"><a href="#request-for-services-form" class="tab1 active">Request for services</a></li>
                           <li id="join"><a href="#join-our-team-form" class="tab2">Join our team</a></li>
                           <li id="media"><a href="#media-queries-form" class="tab3">Media queries</a></li>
                           <li id="others"><a href="#others-form" class="tab4">Others</a></li>
                        </ul>
                     </div> -->
         <div class="contact-blocks">
            <div class="page-sidebar"> 
         <!-- <script type="text/javascript">
          (function($)
           {
             $('input').val(''); 
             $('textarea').val('');
           });
        </script> -->

             <div class="success alert alert-success" style="background: #31bc2f;display: none;">
                <a href="" class="close" style="width:50px;">&times;</a>
                <strong style="color:#fff;">Thank You for Our Expert With us...</strong>
             </div>

               <div class="error alert alert-danger" style="display: none; background: #ed0f0f">
                  <a href="" class="close" style="width: 45px;">&times;</a>
                  <strong style="color:#fff;">All Fields are required!..</strong>
               </div>

      <div class="region region-sidebar">

         <div id="block-requestservicesblock" class="tab tab1 open block block-custom block-request-services-block">
               <div class="content">
                  <div class="node__content clearfix">
                     <strong>We would love to hear from you</strong>
                  </div>
                  <form class="talk-to-our-experts-form" data-drupal-selector="talk-to-our-experts-form" action="" method="post" id="talk-to-our-experts-form" accept-charset="UTF-8" onsubmit="return request_for_service()">
                    <!-- save_request_service.php -->
                     <div class="col2">
                        <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-fname form-item-fname">
                           <label for="edit-fname">First Name</label>
                           <input data-drupal-selector="edit-fname" type="text" id="first_name" name="fname" value="" size="60" maxlength="128" class="form-text" />
                        </div>
                        <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-lname form-item-lname">
                           <label for="edit-lname">Last Name</label>
                           <input data-drupal-selector="edit-lname" type="text" id="last_name" name="lname" value="" size="60" maxlength="128" class="form-text" />
                        </div>
                     </div>
                     <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                        <label for="edit-email">Email</label>
                        <input data-drupal-selector="edit-email" type="email" id="business_email" name="email" value="" size="60" maxlength="254" class="form-email" />
                     </div>
                     <div class="no-required">
                        <div class="js-form-item form-item js-form-type-tel form-type-tel js-form-item-phone form-item-phone">
                           <label for="edit-phone">Phone</label>
                           <input data-drupal-selector="edit-phone" type="tel" id="phone_number" name="phone" value="" size="30" maxlength="128" class="form-tel" required=""/>
                        </div>
                     </div>
                     <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-company form-item-company">
                        <label for="edit-company">Company</label>
                        <input data-drupal-selector="edit-company" type="text" id="company_name" name="company" value="" size="60" maxlength="128" class="form-text" />
                     </div>
                     <div class="js-form-item form-item js-form-type-textarea form-type-textarea js-form-item-requirement form-item-requirement">
                        <label for="edit-requirement">Message</label>
                        <div class="form-textarea-wrapper">
                           <textarea data-drupal-selector="edit-requirement" id="expert_msg" name="requirement" rows="5" cols="60" class="form-textarea resize-vertical"></textarea>
                        </div>
                     </div>
                     <input data-drupal-selector="edit-utm-source" type="hidden" name="utm_source" value="" />
                     <input data-drupal-selector="edit-utm-medium" type="hidden" name="utm_medium" value="" />
                     <input data-drupal-selector="edit-utm-campaign" type="hidden" name="utm_campaign" value="" />
                     <input data-drupal-selector="edit-keyword" type="hidden" name="keyword" value="" />
                     <input data-drupal-selector="edit-device" type="hidden" name="device" value="" />
                     <input data-drupal-selector="edit-adposition" type="hidden" name="adposition" value="" />
                     <input data-drupal-selector="edit-matchtype" type="hidden" name="matchtype" value="" />
                     <details class="captcha js-form-wrapper form-wrapper" open="open">
                        <summary role="button" aria-expanded="true" aria-pressed="true">CAPTCHA</summary>
                        <div class="details-wrapper">
                           <div class="details-description">This question is for testing whether or not you are a human visitor and to prevent automated spam submissions.</div>
                           <input data-drupal-selector="edit-captcha-sid" type="hidden" name="captcha_sid" value="279927" />
                           <input data-drupal-selector="edit-captcha-token" type="hidden" name="captcha_token" value="a95f9999d167814e3a5d16689d1130f3" />
                           
                        <div class="section-field">
                           <div class="g-recaptcha" id="recaptcha_cont" data-sitekey="6Le80agUAAAAAH9z2gAlRN2lafJmlr8nNJbJyeOU">
                         </div>
                             <center><span class="msg-error error" id="captcha_request_service" style="color:red; position: absolute; left: 69px;"></span>
                             </center>
                        </div>
                        </div>
                     </details>
                     <input data-drupal-selector="edit-submit" type="submit" id="edit-submit" name="save_service" value="Talk to our Solutions Expert!" class="button js-form-submit form-submit our_to_expert1" />
                     
                     <input data-drupal-selector="form-vejtyzczv-5rpvhy7znipsdcerwxmnkck55hc8adho0" type="hidden" name="form_build_id" value="form-vEjTYZcZv-5rpvHY7ZNiPSdcErwxMNkCK55HC8Adho0" />
                     <input data-drupal-selector="edit-request-for-services-form" type="hidden" name="form_id" value="request_for_services_form" />
                     <input data-drupal-selector="edit-honeypot-time" type="hidden" name="honeypot_time" value="nb6jCPKn7yWUX80Q6UZCE3pe3dyiyXIBttBW9kcKq8o" />
                     <div class="stopspam-textfield js-form-wrapper form-wrapper" style="display: none !important;">
                        <input autocomplete="off" data-drupal-selector="edit-stopspam" type="text" id="edit-stopspam" name="stopspam" value="" size="20" maxlength="128" class="form-text" />
                     </div>
                  </form>

                    <span id="result3"></span>
                   
               </div>
            </div>

               <div id="block-mediaqueriesblock" class="tab tab3 block block-custom block-media-queries-block">
                  <div class="content">
                     <div class="node__content clearfix">
                        <strong>We create a media frenzy across the globe</strong>
                   </div>
                     <form class="media-queries-form" data-drupal-selector="media-queries-form" action="#" method="post" id="media-queries-form" accept-charset="UTF-8" onsubmit="return media_query_action()">
                        <div class="col2">
                           <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-fname form-item-fname">
                              <label for="edit-fname--2">First Name</label>
                              <input data-drupal-selector="edit-fname" type="text" id="edit-fname--2" name="fname" value="" size="60" maxlength="128" class="form-text" />
                           </div>
                           <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-lname form-item-lname">
                              <label for="edit-lname--2">Last Name</label>
                              <input data-drupal-selector="edit-lname" type="text" id="edit-lname--2" name="lname" value="" size="60" maxlength="128" class="form-text" />
                           </div>
                        </div>
                        <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                           <label for="edit-email--2">Business Email</label>
                           <input data-drupal-selector="edit-email" type="email" id="edit-email--2" name="email" value="" size="60" maxlength="254" class="form-email" />
                        </div>
                        <div class="no-required">
                           <div class="js-form-item form-item js-form-type-tel form-type-tel js-form-item-phone form-item-phone">
                              <label for="edit-phone--2">Phone</label>
                              <input data-drupal-selector="edit-phone" type="tel" id="edit-phone--2" name="phone" value="" size="30" maxlength="128" class="form-tel" />
                           </div>
                        </div>
                        <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-company form-item-company">
                           <label for="edit-company--2">Company</label>
                           <input data-drupal-selector="edit-company" type="text" id="edit-company--2" name="company" value="" size="60" maxlength="128" class="form-text" />
                        </div>
                        <div class="js-form-item form-item js-form-type-textarea form-type-textarea js-form-item-requirement form-item-requirement">
                           <label for="edit-requirement--2">Query</label>
                           <div class="form-textarea-wrapper">
                              <textarea data-drupal-selector="edit-requirement" id="edit-requirement--2" name="requirement" rows="5" cols="60" class="form-textarea resize-vertical"></textarea>
                           </div>
                        </div>
                        <details class="captcha js-form-wrapper form-wrapper" open="open">
                           <summary role="button" aria-expanded="true" aria-pressed="true">CAPTCHA</summary>
                           <div class="details-wrapper">
                              <div class="details-description">This question is for testing whether or not you are a human visitor and to prevent automated spam submissions.</div>
                              <input data-drupal-selector="edit-captcha-sid" type="hidden" name="captcha_sid" value="279928" />
                              <input data-drupal-selector="edit-captcha-token" type="hidden" name="captcha_token" value="f192b969279f38ff12028a1eea98e84e" />
                            <div class="section-field">
                              <div class="g-recaptcha" id="recaptcha_cont" data-sitekey="6Le80agUAAAAAH9z2gAlRN2lafJmlr8nNJbJyeOU">
                            </div>
                                <center><span class="msg-error error" id="captcha_media_query_msg" style="color:red; position: absolute; left: 69px;"></span>
                                </center>
                           </div>

                           </div>
                        </details>
                        <input data-drupal-selector="edit-submit" type="submit" id="edit-submit--2" name="op" value="Talk to our Media Contact!" class="button js-form-submit form-submit" />
                        <input data-drupal-selector="form-9q0jwdvyjmonf53agu9wtdwzwlewhmlhxxkdavjz2bo" type="hidden" name="form_build_id" value="form-9Q0JwDvyJmOnF53agU9WtdWZwlEwhmLhXXKdAVJz2Bo" />
                        <input data-drupal-selector="edit-media-queries-form" type="hidden" name="form_id" value="media_queries_form" />
                        <input data-drupal-selector="edit-honeypot-time" type="hidden" name="honeypot_time" value="ODcjTggstYAUz5CxOGHY8Iul1TIxtGBzvN28ECpgQ3g" />
                        <div class="stopspam-textfield js-form-wrapper form-wrapper" style="display: none !important;">
                           <input autocomplete="off" data-drupal-selector="edit-stopspam" type="text" id="edit-stopspam--2" name="stopspam" value="" size="20" maxlength="128" class="form-text" />
                        </div>
                     </form>
                  </div>
               </div>

   <div id="block-joinourteamblock" class="tab tab2 block block-custom block-joinourteam-block">
      <div class="content">
        <div class="node__content clearfix">
            <strong>Be a part of our high performing team</strong>
         </div>
                    
       <form class="join-our-team-form" enctype="multipart/form-data" action="" method="POST" id="join-our-team-form1" onsubmit="return teamvali()">
            <div class="col2">
               <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-fname form-item-fname">
                  <label for="team_name">Full Name</label>
                  <input data-drupal-selector="team_name" type="text" id="team_name" name="fname" value="" size="60" maxlength="128" class="form-text" />
               </div>
               <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                  <label for="team_email">Email</label>
                  <input data-drupal-selector="team_email" type="email" id="team_email" name="email" value="" size="60" maxlength="254" class="form-email" />
               </div>
               <div class="no-required">
                  <div class="js-form-item form-item js-form-type-tel form-type-tel js-form-item-phone form-item-phone">
                     <label for="team_phone">Phone</label>
                     <input data-drupal-selector="team_phone" type="tel" id="team_phone" name="phone" value="" size="30" maxlength="128" class="form-tel" required="" />
                  </div>
               </div>
               <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-requirement form-item-requirement">
                  <label for="team_experience">Experience</label>
                  <input data-drupal-selector="team_experience" type="text" id="team_experience" name="requirement" value="" size="60" maxlength="128" class="form-text" />
               </div>
               <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-skill form-item-skill">
                  <label for="team_skill">Skill</label>
                  <input data-drupal-selector="team_skill" type="text" id="team_skill" name="skill" value="" size="60" maxlength="128" class="form-text" />
               </div>
               <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-location form-item-location">
                  <label for="team_location">Location</label>
                  <input data-drupal-selector="team_location" type="text" id="team_location" name="location" value="" size="60" maxlength="128" class="form-text" />
               </div>
               <div class="files"><span id="fileName">Upload CV</span>
                  <div class="js-form-item form-item js-form-type-file form-type-file js-form-item-files-resume form-item-files-resume form-no-label">
                     <input size="20" data-drupal-selector="team_resume" type="file" id="team_resume" name="file" class="js-form-file form-file" />
                     <span class="field-suffix">
                       <span class="text-error">Only .doc, .docx or .pdf file accepted</span>
                     </span> 
                </div>
               </div>
            </div>
            <details class="captcha js-form-wrapper form-wrapper" open="open">
               <summary role="button" aria-expanded="true" aria-pressed="true">CAPTCHA</summary>
               <div class="details-wrapper">
                  <!-- <div class="details-description">This question is for testing whether or not you are a human visitor and to prevent automated spam submissions.</div> -->
                  <!-- <input data-drupal-selector="edit-captcha-sid" type="hidden" name="captcha_sid" value="279929" /> -->
                  <!-- <input data-drupal-selector="edit-captcha-token" type="hidden" name="captcha_token" value="44310251c414fd1586705b9b28049c99" /> -->
                  
                  <div class="section-field">
                     <div class="g-recaptcha" id="recaptcha_join_team" data-sitekey="6Le80agUAAAAAH9z2gAlRN2lafJmlr8nNJbJyeOU">
                   </div>
                    <center><span class="msg-error error" id="captcha_join_our_team" style="color:red; position: absolute; left: 69px; display: none;">Please click on captcha!</span>
                    </center>
                  </div>
               </div>

            </details>

            <input data-drupal-selector="edit-submit11" type="submit" id="edit-submit11" name="op11" value="Submit Now!" class="button js-form-submit form-submit our_team"/>
                <!-- 
                <input data-drupal-selector="form-k7aglr-quhko-blgfdltcl-053m1vluztfprabpq-ma" type="hidden" name="form_build_id" value="form-K7AgLr_qUhko_BLgFdlTcL-053M1VluzTfPRAbpq_mA" />
                <input data-drupal-selector="edit-join-our-team-form" type="hidden" name="form_id" value="join_our_team_form" />
                <input data-drupal-selector="edit-honeypot-time" type="hidden" name="honeypot_time" value="QCTCSVltWJjtttTBvkkdPCYxvOe3NozQVRCnwTh_C_g" />
                <div class="stopspam-textfield js-form-wrapper form-wrapper" style="display: none !important;">
                   <input autocomplete="off" data-drupal-selector="edit-stopspam" type="text" id="edit-stopspam--3" name="stopspam" value="" size="20" maxlength="128" class="form-text" /> -->
        
       </form>
       <span id="result4"></span>
   </div>
     </div>
    </div>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <div class="page-bottom">
               <div class="region region-bottom">
                  <div class="views-element-container addresses block block-views block-views-blockaddresses-for-contact-us-block-1" id="block-views-block-addresses-for-contact-us-block-1">
                     <div class="content">
                        <div>
                           <div class="wrapper center">
                              <div class="heading contact-head">Our Offices</div>
                           </div>
                           <div itemscope itemtype="http://schema.org/Organization">
                              <div class="wrapper center equal">
                                 <ul class="address row">
                                    <li class="col-xs-12 col-sm-6 col-md-4 col-md-offset-2">
                                       <div class="views-field views-field-nothing">
                                          <div class="cont" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span>Gwalior</span><br />
                                             <div><?php echo $setting_row['address2']; ?></div>
                                             <span class="hide-tel">Tel: <span class="telephone" itemprop="telephone"><a href="tel:+91 <?php echo $setting_row['phone_no'];?>">+91 <?php echo $setting_row['phone_no'];?></a></span></span></div>
                                       </div>
                                    </li>
                                    <li class="col-xs-12 col-sm-6 col-md-4">
                                       <div class="views-field views-field-nothing">
                                          <div class="cont" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span>Australia</span><br />
                                             <p>9 / 2A Federal Rd, Seven <br>HillsNSW - 2147,<br>Australia </p>
                                             <span class="hide-tel">Tel: <span class="telephone" itemprop="telephone"><a href="tel:+61 000 0000 ">+61 000 0000 </a></span></span></div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="write-us">
                              <div class="wrapper center"><span class="mail"> </span>
                                 <div class="heading">Write to Us</div>
                                 <a href="mailto:<?php echo $setting_row['alternate_email'];?>" class="btn big"><?php echo $setting_row['alternate_email'];?></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="views-element-container alternate temp-multi block block-views block-views-blockour-capability-2-col-block-5" id="block-views-block-our-capability-2-col-block-5">
                     <div class="content">
                        <div>
                           <div class="view view-our-capability-2-col view-id-our_capability_2_col view-display-id-block_5 js-view-dom-id-d4841b5f988735fed9bf9788b183f77a5c92920d253b42504ae35d13331a6fc8"> </div>
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