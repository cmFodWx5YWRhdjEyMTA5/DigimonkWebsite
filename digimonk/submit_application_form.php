


<div class="page-bottom">
<div class="region region-bottom">
<div id="block-jobapplicationdetail" class="block block-ttnd-careers block-job-application-detail">
<div class="content">
<div class="popup-overlay"></div>
<div class="popup-form ttn-form">
       <div class="close-pop"></div>
               <form class="join-our-team-form" data-drupal-selector="join-our-team-form" enctype="multipart/form-data" method="post" id="join-our-team-form" accept-charset="UTF-8" onsubmit="return get_application_form()">
                  <div id="current-job-title" class="sub-title">Submit Your Application</div>
                      <div class="success alert alert-success" style="background: #31bc2f; display: none;">
                          <a href="" class="close" style="width: 45px;">&times;</a>
                          <strong style="color:#fff;">Thank You for Contacting With us...</strong>
                       </div>

                         <div class="error alert alert-danger" style="display: none; background: #ed0f0f">
                            <a href="" class="close" style="width: 45px;">&times;</a>
                            <strong style="color:#fff;">All Fields are required!..</strong>
                         </div>
                    <p class="statusMsg"></p>
                  <div class="col2">
                     <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-fname form-item-fname">
                        <label for="edit-fname">Full Name</label>
                        <input data-drupal-selector="edit-fname" type="text" id="team_name" name="fname" value="" size="60" maxlength="128" class="form-text" />
                     </div>
                     <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
                        <label for="edit-email">Email</label>
                        <input data-drupal-selector="edit-email" type="email" id="team_email" name="email" value="" size="60" maxlength="254" class="form-email" />
                     </div>
                     <div class="no-required">
                        <div class="js-form-item form-item js-form-type-tel form-type-tel js-form-item-phone form-item-phone">
                           <label for="edit-phone">Phone</label>
                           <input data-drupal-selector="edit-phone" type="tel" id="team_phone" name="phone" value="" size="30" maxlength="128" class="form-tel"/>
                        </div>
                     </div>
                     <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-requirement form-item-requirement">
                        <label for="edit-requirement">Experience</label>
                        <input data-drupal-selector="edit-requirement" type="text" id="team_experience" name="requirement" value="" size="60" maxlength="128" class="form-text" />
                     </div>
                     <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-skill form-item-skill">
                        <label for="edit-skill">Skill</label>
                        <input data-drupal-selector="edit-skill" type="text" id="team_skill" name="skill" value="" size="60" maxlength="128" class="form-text" />
                     </div>
                     <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-location form-item-location">
                        <label for="edit-location">Location</label>
                        <input data-drupal-selector="edit-location" type="text" id="team_location" name="location" value="" size="60" maxlength="128" class="form-text" />
                     </div>
                     <div class="files"><span id="fileName">Upload CV</span>
                     <input type="hidden" id="resume_file_set" value=""/>
                        <div class="js-form-item form-item js-form-type-file form-type-file js-form-item-files-resume form-item-files-resume form-no-label">
                           <input size="20" data-drupal-selector="edit-resume" type="file" id="team_resume" onchange="readURL(this);"  name="file_resume" class="js-form-file form-file" accept=".pdf,.doc,.docx" onchange="validateFileType(this);"/>
                           <!-- <span class="field-suffix">
                            <span class="text-error">Only .doc, .docx or .pdf file accepted</span>
                          </span> -->
                        </div>
                     </div>
                  </div>
                  <details class="captcha js-form-wrapper form-wrapper" open="open">
                     <summary role="button" aria-expanded="true" aria-pressed="true">CAPTCHA</summary>
                     <div class="details-wrapper">
                        <div class="details-description">This question is for testing whether or not you are a human visitor and to prevent automated spam submissions.</div>
                        <input data-drupal-selector="edit-captcha-sid" type="hidden" name="captcha_sid" value="279936" />
                        <input data-drupal-selector="edit-captcha-token" type="hidden" name="captcha_token" value="7a9394d1ad5b883e66c755c6bf528098" />
                       <div class="section-field captcha_gm">
                           <div class="g-recaptcha" id="recaptcha2" data-sitekey="6Le80agUAAAAAH9z2gAlRN2lafJmlr8nNJbJyeOU">
                         </div>
                             <center><span class="msg-error error" id="captcha_application" style="color:red; position: absolute; left: 69px;"></span>
                             </center>
                        </div>
                     </div>
                  </details>
                  <input data-drupal-selector="edit-submit" type="submit" id="edit-submit" name="op" value="Apply" class="button js-form-submit form-submit our_to_expert our_team" />

                  <input data-drupal-selector="form-tlff0pom5i-poha38j7-a8fzmeiysmd7e5tfyjxunbe" type="hidden" name="form_build_id" value="form-tLFF0POm5I_poHA38j7_a8fzmEIYsmD7E5TFyJXunbE" />
                  <input data-drupal-selector="edit-join-our-team-form" type="hidden" name="form_id" value="join_our_team_form" />
                  <input data-drupal-selector="edit-honeypot-time" type="hidden" name="honeypot_time" value="LPpZQKQOUSF6Iegs3dbxQH-vBY7ZEDuMZnnk2LzfV54" />
                  <div class="stopspam-textfield js-form-wrapper form-wrapper" style="display: none !important;">
                     <input autocomplete="off" data-drupal-selector="edit-stopspam" type="text" id="edit-stopspam" name="stopspam" value="" size="20" maxlength="128" class="form-text" />
                  </div>
               </form>

               <span id="result2"></span>

            </div>
</div>
</div>
</div>
</div>



  
            
            <script type="text/javascript">

                    function readURL(input) {

                    // console.log(input);
                    // $("#selected_images").html(input.files.length);
                       if(input.files.length>5)
                        {
                          alert("Upload file less than 5 in one time.");
                        }
                        else
                        {
                        for(var i=0; i<input.files.length; i++)
                        {
                          if (input.files && input.files[i]) {
                             var reader = new FileReader();
                             var files_data=input.files[i];

                            // console.log(input);
                            // console.log(reader);

               
                             reader.onload = function (files_data) {
                              // alert('hello');

                             var image_upload = files_data.target.result;
                               // console.log(image_upload);
                             $.ajax({

                                url:"upload_attachment_file_dsp.php",

                               type: "POST",

                              data:{"image": image_upload },
                              dataType: "html",

                              success:function(data){
                                
                                // $("#img2").append(data);
                            // alert(data);
                            $("#resume_file_set").val(data);

                              }
                             });
                         
                            
                             };
                      
                             reader.readAsDataURL(input.files[i]);
                         } 
                        } 
                      }
                       
                         
                      }

</script>