// start subscribe code 
   
      function get_action() {
            var v = grecaptcha.getResponse();
            // console.log("Resp" + v);
            if (v == '') {
                document.getElementById('captcha_subscribe').innerHTML = "Please click on captcha!";
                return false;
            }
            else {
                document.getElementById('captcha_subscribe').innerHTML = "";
                return true;
            }
        }
 

  // End subscribe code

// start our to expert code 
 
  function our_to_expert_action()
  {
    var our = grecaptcha.getResponse();

    if(our=='')
    {
      document.getElementById('captcha_our_to').innerHTML = "Please click on captcha!";
      return false;
    }
    else{

      document.getElementById('captcha_our_to').innerHTML = " ";
      return true;
    }
  }
 

// End our to expert code 


// start resume application code

   function get_application_form()
   {
      var application = grecaptcha.getResponse();

      if(application=='')
      {
        document.getElementById('captcha_application').innerHTML = "Please click on captcha!";
        return false;
      }else{
        document.getElementById('captcha_application').innerHTML = "";
        return true;
      }
   }
// End resume application code

// start contact us page request for service

function request_for_service()
{
    var request_service = grecaptcha.getResponse();
    if(request_service=='')
    {
       document.getElementById('captcha_request_service').innerHTML="Please click on captcha!";
       return false;
    }else{

      document.getElementById('captcha_request_service').innerHTML="";
      return true;
    }
}


// function join_our_team_action()
// {
//     var join_team = grecaptcha.getResponse();
//     if(join_team=='')
//     {
//        document.getElementById('captcha_join_our_team').innerHTML="Please click on captcha!";
//        return false;
//     }else{

//       document.getElementById('captcha_join_our_team').innerHTML="";
//       return true;
//     }
// }

 function media_query_action()
 {
    var media_queryget = grecaptcha.getResponse();
    if(media_queryget=='')
    {
      document.getElementById('captcha_media_query_msg').innerHTML="Please click on captcha!";
      return false;
    }else{
      document.getElementById('captcha_media_query_msg').innerHTML="";
      return true;
    }
 }
// End contact us page request for service


// Start contact us page recaptcha  validation
   function teamvali()
    {
      var $captcha_queryget = $('#recaptcha_join_team'),
          response = grecaptcha.getResponse();
      
      if (response.length == 0) {
        
          document.getElementById("captcha_join_our_team").style.display = "block";
           return false;
      }else{
       
         document.getElementById("captcha_join_our_team").style.display = "none";
          return true;
      }
    }

  

  // function teamvali()
  //  {
  //     var v1 = grecaptcha.getResponse();
     
  //     if (v1== '') {
  //         document.getElementById('captcha_join_our_team').innerHTML = "Please click on captcha!";
  //         return false;
  //     }
  //     else {
  //         document.getElementById('captcha_join_our_team').innerHTML = "";
  //         return true;
  //     }
  // }
 
 // Start contact us page recaptcha  validation