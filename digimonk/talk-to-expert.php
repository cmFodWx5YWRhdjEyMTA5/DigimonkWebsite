 <div class="popup-form ttn-form talk-to-exp">
    
    <form class="talk-to-our-experts-form" data-drupal-selector="talk-to-our-experts-form" action="#" method="post" id="talk-to-our-experts-form" accept-charset="UTF-8" onsubmit="return our_to_expert_action()">
         <div class="close-pop">close</div>
               <div class="center">
                  <div class="heading">Let&#39;s Talk</div>
                  <p>We are keen to know about the services you need.</p>

              <div class="success alert alert-success" style="background: #31bc2f; display: none;">
                  <a href="" class="close" style="width: 45px;">&times;</a>
                  <strong style="color:#fff;">Thank You for Our Expert With us...</strong>
               </div>

                 <div class="error alert alert-danger" style="display: none; background: #ed0f0f">
                    <a href="" class="close" style="width: 45px;">&times;</a>
                    <strong style="color:#fff;">All Fields are required!..</strong>
                 </div>
               </div>
               <div class="form-row">
                  <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-fname form-item-fname">
                     <label for="edit-fname">First Name</label>
                     <input data-drupal-selector="edit-fname" type="text" id="first_name" name="fname" value="" size="60" maxlength="128" class="form-text" />
                     <!-- edit-fname -->
                  </div>
                  <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-lname form-item-lname">
                     <label for="edit-lname">Last Name</label>
                     <input data-drupal-selector="edit-lname" type="text" id="last_name" name="lname" value="" size="60" maxlength="128" class="form-text" />
                     <!-- edit-lname -->
                  </div>
               </div>
               <div class="form-row">
                  <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-company form-item-company">
                     <label for="edit-company">Company</label>
                     <input data-drupal-selector="edit-company" type="text" id="company_name" name="company" value="" size="60" maxlength="128" class="form-text" />
                     <!-- edit-company -->
                  </div>
                  <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-phone form-item-phone">
                     <label for="edit-phone">Phone</label>
                     <input data-drupal-selector="edit-phone" type="text" id="phone_number" name="phone" value="" size="60" maxlength="128" class="form-text"/>
                     <!-- edit-phone -->
                  </div>
               </div>
               <div class="form-row">
                  <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                     <label for="edit-email">Business Email</label>
                     <input data-drupal-selector="edit-email" type="email" id="business_email" name="email" value="" size="60" maxlength="254" class="form-email" />
                     <!-- edit-email -->
                  </div>
                  <div class="js-form-item form-item js-form-type-textarea form-type-textarea js-form-item-message form-item-message">
                     <label for="edit-message">Message</label>
                     <div class="form-textarea-wrapper">
                        <textarea data-drupal-selector="edit-message" id="expert_msg" name="message" rows="5" cols="60" class="form-textarea resize-vertical"></textarea>
                        <!-- edit-message -->
                     </div>
                  </div>
               </div>
               <input data-drupal-selector="edit-redirect-url" type="hidden" name="redirect_url" value="/services-thanks-form" />
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
                     <input data-drupal-selector="edit-captcha-sid" type="hidden" name="captcha_sid" value="279923" />
                     <input data-drupal-selector="edit-captcha-token" type="hidden" name="captcha_token" value="d94cb6ce4ac39ff93b24c608dda5606f" />
                    
                     <!-- <img data-drupal-selector="edit-captcha-image" src="image-captcha-generate/279923/1559031347.jpg" width="180" height="60" alt="Image CAPTCHA" title="Image CAPTCHA" typeof="foaf:Image" /> -->

                   <!--   <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-captcha-response form-item-captcha-response">
                       
                        <label for="edit-captcha-response" class="js-form-required form-required">What code is in the image?</label>
                        <input autocomplete="off" data-drupal-selector="edit-captcha-response" aria-describedby="edit-captcha-response--description" type="text" id="edit-captcha-response" name="captcha_response" value="" size="15" maxlength="128" class="form-text required" required="required" aria-required="true" />
                        <div id="edit-captcha-response--description" class="description"> Enter the characters shown in the image. </div>
                     </div> -->

                      <div class="section-field captcha_gm">
                           <div class="g-recaptcha" id="recaptcha2" data-sitekey="6Le80agUAAAAAH9z2gAlRN2lafJmlr8nNJbJyeOU">
                         </div>
                             <center><span class="msg-error error" id="captcha_our_to" style="color:red; position: absolute; left: 69px;"></span>
                             </center>
                        </div>
                  </div>
               </details>
               
               <input data-drupal-selector="edit-submit" type="submit" id="edit-submit" name="op" value="Talk to our Experts!" class="button js-form-submit form-submit our_to_expert" />

               <input data-drupal-selector="form-5eoznku2lkkflenaoupk8n-6p30oskfx4ag100q4yty" type="hidden" name="form_build_id" value="form-5EozNKU2lkkFLeNaoupk8n_6P30Oskfx4Ag100Q4yTY" />
               <input data-drupal-selector="edit-talk-to-our-experts-form" type="hidden" name="form_id" value="talk_to_our_experts_form" />
               <input data-drupal-selector="edit-honeypot-time" type="hidden" name="honeypot_time" value="MWgfDaGsbnnhQReP2pXHf8k9KsC65OYF3hGYASk4cv0" />
               <div class="stopspam-textfield js-form-wrapper form-wrapper" style="display: none !important;">
                  <input autocomplete="off" data-drupal-selector="edit-stopspam" type="text" id="edit-stopspam" name="stopspam" value="" size="20" maxlength="128" class="form-text" />
               </div>
            </form>

            <span id="result1"></span>
             
    </div>