  // alert message automatic hide start 

  $(".alert-dismissible").fadeTo(5000, 900).slideUp(2000, function(){
      $(".alert-dismissible").alert('close');
  });
 
 // alert message automatic hide End


// start subscribe code ajax

  $(document).ready(function() {
    var subscribeForm = $("#custom-newsletter-form");
      //We set our own custom submit function
      subscribeForm.on("submit", function(e) {
      //Prevent the default behavior of a form
      e.preventDefault();
    //Get the values from the form
    var name = $("#subscribe_fname").val();
    var lname = $("#subscribe_lname").val();
    var subscribe_email = $("#subscribe_email").val();
    //Our AJAX POST
    //alert(grecaptcha.getResponse());
     // && grecaptcha.getResponse()!=''
    if(name!='' && lname!='' && subscribe_email!=''){
      $("#result").html("<img alt='ajax search' src='img/ajax-loader.gif' class='mobile_design'/>");

      $.ajax({
      type: "POST",
      url: "save_subscribe.php",
      data: {
        name: name,
        lname: lname,
        subscribe_email:subscribe_email,
        //THIS WILL TELL THE FORM IF THE USER IS CAPTCHA VERIFIED.
        // captcha: grecaptcha.getResponse()
      },
      beforeSend: function() { 

       $(".subscribe_sub").prop('disabled', true); // disable button
      },
      success: function(response) {

          // alert(response);
          $("#result").html("");
          $('#custom-newsletter-form')[0].reset();
          $(".subscribe_sub").prop('disabled',false); //enable button

          $('.subscribe_success').fadeIn();
              setTimeout(function(){
          $('.subscribe_success').fadeOut("slow");
        },6000);
        // alert(response);
        console.log("OUR FORM SUBMITTED CORRECTLY");
      }
    })
    }
   
  });
}); 

// End subscribe code ajax


// start talk to our expert ajax

$(document).ready(function() {
  var contactForm = $("#talk-to-our-experts-form");
  //We set our own custom submit function
  contactForm.on("submit", function(e) {
    //Prevent the default behavior of a form
    e.preventDefault();
    //Get the values from the form
    var fname = $("#first_name").val();
    var last_name = $("#last_name").val();
    var company_name = $("#company_name").val();
    var phone_number = $("#phone_number").val();
    var business_email = $("#business_email").val();
    var expert_msg = $("#expert_msg").val();
    //Our AJAX POST
    //alert(grecaptcha.getResponse());
    if(fname!='' && last_name!='' && company_name!='' && phone_number!='' && business_email!='' && expert_msg!=''  && grecaptcha.getResponse()!=''){
      $("#result1").html("<img alt='ajax search' src='img/ajax-loader.gif' class='mobile_design1'/>");

      $.ajax({
      type: "POST",
      url: "save_talk_to_expert.php",
      data: {
        fname: fname,
        lname: last_name,
        company_name:company_name,
        phone_number:phone_number,
        business_email:business_email,
        expert_msg:expert_msg,
        //THIS WILL TELL THE FORM IF THE USER IS CAPTCHA VERIFIED.
        captcha: grecaptcha.getResponse()
      },
      beforeSend: function() { 
       $(".our_to_expert").prop('disabled', true); // disable button
      },
      success: function(response) {

          // alert(response);
         $("#result1").html("");
         $('#talk-to-our-experts-form')[0].reset();
         $(".our_to_expert").prop('disabled',false); //enable button

          $('.success').fadeIn();
        setTimeout(function(){
          $('.success').fadeOut("slow");
        },6000);
        // alert(response);
        console.log("OUR FORM SUBMITTED CORRECTLY");
      }
    })
    }
   
  });
}); 

// End talk to our expert ajax


// start submit application form ajax

 
$(document).ready(function() {
  var contactForm = $(".join-our-team-form");
  //We set our own custom submit function
    contactForm.on("submit", function(e) {
        
   //Prevent the default behavior of a form
    e.preventDefault();
    // alert("jhbhvbfvf");
    //  alert("sdkjnfdjvfv");
//     //Get the values from the form
    var teamname = $("#team_name").val();
    var team_email = $("#team_email").val();
    var team_phone = $("#team_phone").val();
    var team_experience = $("#team_experience").val();
    var team_skill = $("#team_skill").val();
    var team_location = $("#team_location").val();
    var team_files = $("#resume_file_set").val();


    if(teamname!='' && team_email!='' && team_phone!='' && team_experience!='' && team_skill!='' && team_location!='' && team_files!='' && grecaptcha.getResponse()!='')
    {
      $("#result2").html("<img alt='ajax search' src='img/ajax-loader.gif' class='mobile_design2'/>");

      $.ajax({
      type: "POST",
      dataType:"html",
      url: "save_career.php",
      // cache: false,
      // contentType: false,
      // processData: false,
      data: {
        teamname: teamname,
        team_email: team_email,
        team_phone:team_phone,
        team_experience:team_experience,
        team_skill:team_skill,
        team_location:team_location,
        team_resume:team_files,

        // THIS WILL TELL THE FORM IF THE USER IS CAPTCHA VERIFIED.
      captcha: grecaptcha.getResponse()
     },
      
      beforeSend: function() { 
      $(".our_team").prop('disabled', true); // disable button
      },
      success: function(response) {

         // alert(response);

         $("#result2").html("");
         $('#join-our-team-form')[0].reset();
         $(".our_team").prop('disabled',false); //enable button

          $('.success').fadeIn();
          setTimeout(function(){
          $('.success').fadeOut("slow");
        },6000);
       

        // alert(response);

        console.log("OUR FORM SUBMITTED CORRECTLY");
      }
    });
    }
   
  });
}); 


  // $(document).ready(function(e)
  // {
  //   $("#join-our-team-form").on('submit', function(e){
  //       e.preventDefault();
  //       $.ajax({
  //           type: 'POST',
  //           url: 'save_career.php',
  //           data: new FormData(this),
  //           contentType: false,
  //           cache: false,
  //           processData:false,
  //           beforeSend: function(response){
  //               // alert(response);
  //               // console.log(response);
  //               $('.our_team').attr("disabled","disabled");
  //               $('#join-our-team-form').css("opacity",".5");
  //           },
  //           success: function(msg){
  //               // alert(msg);
  //               $('.statusMsg').html('');
  //               if(msg){
  //                   $('#join-our-team-form')[0].reset();
  //                   $('.statusMsg').html('<span style="font-size:18px;color:#34A853">Form data submitted successfully.</span>');
  //               }else{
  //                   $('.statusMsg').html('<span style="font-size:18px;color:#EA4335">Some problem occurred, please try again.</span>');
  //               }
  //               $('#join-our-team-form').css("opacity","");
  //               $(".our_team").removeAttr("disabled");
  //           }
  //       });
  //   });
    
  //   //file type validation
  //   $("#team_resume").change(function() {
  //       var file = this.files[0];
  //       var imagefile = file.type;
  //       var match= ["image/pdf","image/doc","image/docx"];
  //       if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
  //           alert('Please select a valid image file (pdf/doc/docx).');
  //           $("#team_resume").val('');
  //           return false;
  //       }
  //   });
  // });
 

// $(document).ready(function(){

//   $('.our_team').click(function(event) {
//     event.preventDefault()
//     var file = $('#team_resume').get(0).files[0];
//     var teamname = $("#team_name").val();
//     var team_email = $("#team_email").val();
//     var team_phone = $("#team_phone").val();
//     var team_experience = $("#team_experience").val();
//     var team_skill = $("#team_skill").val();
//     var team_location = $("#team_location").val();
//     var formData = new FormData();
   
//    formData.append('file', file);
//    formData.append('teamname', teamname);
//    formData.append('team_email', team_email);
//    formData.append('team_phone', team_phone);
//    formData.append('team_experience', team_experience);
//    formData.append('team_skill', team_skill);
//    formData.append('team_location', team_location);
   
//    $.ajax({
//        url: 'save_career.php',
//        //Ajax events
//        beforeSend: function (e) {
//          alert('Are you sure you want to upload document.');
//        },
//        success: function (e) {
//         alert(e);
//         document.write(e);
//          alert('Upload completed');
//        },
//        error: function (e) {
//          alert('error ' + e.message);
//        },
//        // Form data
//        data: formData,
//        type: 'POST',
//        //Options to tell jQuery not to process data or worry about content-type.
//        cache: false,
//        contentType: false,
//        processData: false
//     });
//     return false;
//   });
// });


 
// End submit application form ajax


// start contact us page talk to our expert ajax

$(document).ready(function() {
  var contactForm = $("#talk-to-our-experts-form");
  //We set our own custom submit function
  contactForm.on("submit", function(e) {
    //Prevent the default behavior of a form
    e.preventDefault();
    //Get the values from the form
    var fname = $("#first_name").val();
    var last_name = $("#last_name").val();
    var company_name = $("#company_name").val();
    var phone_number = $("#phone_number").val();
    var business_email = $("#business_email").val();
    var expert_msg = $("#expert_msg").val();
    //Our AJAX POST
    //alert(grecaptcha.getResponse());
    if(fname!='' && last_name!='' && company_name!='' && phone_number!='' && business_email!='' && expert_msg!=''  && grecaptcha.getResponse()!=''){
      $("#result3").html("<img alt='ajax search' src='img/ajax-loader.gif' class='mobile_design3'/>");

      $.ajax({
      type: "POST",
      url: "save_talk_to_expert.php",
      data: {
        fname: fname,
        lname: last_name,
        company_name:company_name,
        phone_number:phone_number,
        business_email:business_email,
        expert_msg:expert_msg,
        //THIS WILL TELL THE FORM IF THE USER IS CAPTCHA VERIFIED.
        captcha: grecaptcha.getResponse()
      },
      beforeSend: function() { 
       $(".our_to_expert1").prop('disabled', true); // disable button
      },
      success: function(response) {

          // alert(response);
         $("#result3").html("");
         $(".our_to_expert1").prop('disabled',false); //enable button

          $('.success').fadeIn();
        setTimeout(function(){
          $('.success').fadeOut("slow");
        },6000);
        // alert(response);
        console.log("OUR FORM SUBMITTED CORRECTLY");
      }
    })
    }
   
  });
}); 

// End contact page talk to our expert ajax



// start Contact us page Join Our team submit application form ajax

$(document).ready(function() {
  var contactForm = $("#join-our-team-form1");
  //We set our own custom submit function
  contactForm.on("submit", function(e) {
   

   //Prevent the default behavior of a form
    e.preventDefault();

    //Get the values from the form
    var teamname1 = $("#team_name").val();
    var team_email1 = $("#team_email").val();
    var team_phone1 = $("#team_phone").val();
    var team_experience1 = $("#team_experience").val();
    var team_skill1 = $("#team_skill").val();
    var team_location1 = $("#team_location").val();
    var team_resume1 = $("#team_resume").val();
    //Our AJAX POST
    //alert(grecaptcha.getResponse());
    if(teamname1!='' && team_email1!='' && team_phone1!='' && team_experience1!='' && team_skill1!='' && team_location1!='' && team_resume1!='' && grecaptcha.getResponse()!=''){
     
      $("#result4").html("<img alt='ajax search' src='img/ajax-loader.gif' class='mobile_design4'/>");

      $.ajax({
      type: "POST",
      url: "save_career.php",
      data: {
        teamname1: teamname1,
        team_email1: team_email1,
        team_phone1:team_phone1,
        team_experience1:team_experience1,
        team_skill1:team_skill1,
        team_location1:team_location1,
        team_resume1:team_resume1,
        //THIS WILL TELL THE FORM IF THE USER IS CAPTCHA VERIFIED.
        captcha: grecaptcha.getResponse()
     },

      beforeSend: function() { 
       $(".our_team").prop('disabled', true); // disable button
      },
      success: function(response) {

          // alert(response);
         $("#result4").html("");
         $(".our_team").prop('disabled',false); //enable button

          $('.success').fadeIn();
        setTimeout(function(){
          $('.success').fadeOut("slow");
        },6000);
        // alert(response);
        console.log("OUR FORM SUBMITTED CORRECTLY");
      }
    })
    }
   
  });
}); 

// End Contact us page submit application form ajax


 