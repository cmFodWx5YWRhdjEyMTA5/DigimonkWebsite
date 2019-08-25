<!--Footer Start Here -->
<footer class="footer-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="footer-left">
                    <span>© 2019 <a href="">Digimonk</a></span>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="footer-right">
                    <span class="footer-meta">Crafted with&nbsp;<i class="fa fa-heart"></i>&nbsp;by&nbsp;<a href="">Digimonk</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer End Here -->
</section>
<!--Page Container End Here-->
 
<!--Rightbar End Here-->
<script src="js/lib/jquery.js"></script>
<script src="js/lib/jquery-migrate.js"></script>
<script src="js/lib/bootstrap.js"></script>
<script src="js/lib/jquery.ui.js"></script>
<script src="js/lib/jRespond.js"></script>
<script src="js/lib/nav.accordion.js"></script>
<script src="js/lib/hover.intent.js"></script>
<script src="js/lib/hammerjs.js"></script>
<script src="js/lib/jquery.hammer.js"></script>
<script src="js/lib/jquery.fitvids.js"></script>
<script src="js/lib/scrollup.js"></script>
<script src="js/lib/smoothscroll.js"></script>
<script src="js/lib/jquery.slimscroll.js"></script>
<script src="js/lib/jquery.syntaxhighlighter.js"></script>
<script src="js/lib/velocity.js"></script>
<script src="js/lib/smart-resize.js"></script>

<!--Data Tables-->
<script src="js/lib/jquery.dataTables.js"></script>
<script src="js/lib/dataTables.responsive.js"></script>
<script src="js/lib/dataTables.tableTools.js"></script>
<script src="js/lib/dataTables.bootstrap.js"></script>

<!--Exportable Data Tables-->
<script src="js/lib/tableExport.js"></script>
<script src="js/lib/jquery.base64.js"></script>
<script src="js/lib/sprintf.js"></script>
<script src="js/lib/jspdf.js"></script>
<script src="js/lib/base64.js"></script>

<!--Forms-->
<script src="js/lib/jquery.maskedinput.js"></script>
<script src="js/lib/jquery.validate.js"></script>
<script src="js/lib/jquery.form.js"></script>
<script src="js/lib/additional-methods.js"></script>
<!--Select2-->
<script src="js/lib/select2.full.js"></script>
<script src="js/lib/j-forms.js"></script>
<script src="js/apps.js"></script>
<script src="js\summernote\summernote.min.js"></script>
<script src="js\custom.js"></script>
<!-- jQuery UI CSS Start -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript">
 $(document).ready(function() {

    //Helper function to keep table row from collapsing when being sorted

  var fixHelperModified = function(e, tr) {

    var $originals = tr.children();

    var $helper = tr.clone();

    $helper.children().each(function(index)

    {

      $(this).width($originals.eq(index).width())

    });

    return $helper;

  };



  //Make diagnosis table sortable

  $("#diagnosis_list tbody").sortable({

      helper: fixHelperModified,

    stop: function(event,ui) {renumber_table('#diagnosis_list')}

  }).disableSelection();





  //Delete button in table rows

  $('table').on('click','.btn-delete',function() {

    tableID = '#' + $(this).closest('table').attr('id');

    r = confirm('Delete this item?');

    if(r) {

      $(this).closest('tr').remove();

      renumber_table(tableID);

      }

  });



});



//Renumber table rows

function renumber_table(tableID) {

  $(tableID + " tr").each(function() {

    count = $(this).parent().children().index($(this)) + 1;

    $(this).find('.priority').val(count);

  });

}

 $(document).on("click","#sequence_update",function()
 {

   var ids=[];
   var priority=[];

  $(".priority").each(function(){

    ids.push($(this).data("id"));
    priority.push($(this).val());

  });

    var types=$("#types_set_dsp").val();

    console.log(ids);

    console.log(priority);

    $.ajax({

      method:"POST",
      url:"sequence_update.php",
      data:{"ids":ids,"priority": priority,"types":types },
      dataType:"html",
      success:function(data)
      {
        
        $('.sequece_updated').fadeIn();
              setTimeout(function(){
          $('.sequece_updated').fadeOut("slow");
        },6000);


        // location.reload();

      }

});



});



</script>

<!-- jQuery UI CSS End  -->
<script>
     $(document).ready(function(){
        $('.summernote').summernote({
          height: 260,                 // set editor height
          minHeight: null,             // set minimum height of editor
          maxHeight: null,             // set maximum height of editor
          focus: true                  // set focus to editable area after initializing summernote
        });
        
        
    });
</script>

<script type="text/javascript">
  $(function(){
    // this will get the full URL at the address bar
    var url = window.location.href; 

    // passes on every "a" tag 
    $("#sub-header a").each(function() {
            // checks if its the same on the address bar
        if(url == (this.href)) { 
            $(this).closest("li").addClass("active");
            $(this).closest("li.acc-parent-li").addClass("active");
            $(this).closest("li.has-sub ul").addClass("in");
        }
    });
});

</script>
<!-- Start contact us list Check box -->
<script type="text/javascript">
     $(document).ready(function(){
       $("#get_ids_for_delete").click(function() {
          var select_id=$(".checkitem:checked").length;
          if(select_id==0)
          {
            alert("Please Select The CheckBox");
          }
          else
          {
            if(confirm("Are you sure you want to delete the selected  "+select_id+" Contact User"))
            {
              var yourArray=[];
             $(".checkitem:checked").each(function(){
                yourArray.push($(this).val());
              });
               window.location="delete-contact-us.php?id="+yourArray;  
            }
            else
            {
              window.location="contact-us-list.php"; 
            }
          }
          });

       


        // start our expert delete
        $("#get_ids_for_expert_delete").click(function() {
          var meta_id=$(".checkitem:checked").length;
          if(meta_id==0)
          {
            alert("Please Select The CheckBox");
          }
          else
          {
            if(confirm("Are you sure you want to delete the selected  "+meta_id+" Our Expert "))
            {
              var yourArray=[];
             $(".checkitem:checked").each(function(){
                yourArray.push($(this).val());
              });
               window.location="delete-our-expert.php?our_expertid="+yourArray;  
            }
            else
            {
              window.location="our-expert-list.php"; 
            }
          }
       });

        // End our expert delete

 
        // start Meta delete
        $("#get_ids_meta_for_delete").click(function() {
          var faq_id=$(".checkitem:checked").length;
          if(faq_id==0)
          {
            alert("Please Select The CheckBox");
          }
          else
          {
            if(confirm("Are you sure you want to delete the selected  "+faq_id+" Meta keyword?"))
            {
              var yourArray=[];
             $(".checkitem:checked").each(function(){
                yourArray.push($(this).val());
              });
               window.location="delete-meta.php?meta_id="+yourArray;  
            }
            else
            {
              window.location="meta-keywords-list.php"; 
            }
          }
       });

        // End  Faq delete


         // start subscribe delete
        $("#get_ids_subscribe_for_delete").click(function() {
          var subscribe_id=$(".checkitem:checked").length;
          if(subscribe_id==0)
          {
            alert("Please Select The CheckBox");
          }
          else
          {
            if(confirm("Are you sure you want to delete the selected  "+subscribe_id+" Subscribe User"))
            {
              var yourArray=[];
             $(".checkitem:checked").each(function(){
                yourArray.push($(this).val());
              });
               window.location="delete-subscribe.php?subscribe_id="+yourArray;  
            }
            else
            {
              window.location="subscribe-list.php"; 
            }
          }
       });

        // End  subscribe delete
 



        // start job Career  delete
        $("#get_job_career_ids_for_delete").click(function() {
          var request_id=$(".checkitem:checked").length;
          if(request_id==0)
          {
            alert("Please Select The CheckBox");
          }
          else
          {
            if(confirm("Are you sure you want to delete the selected  "+request_id+" Job career user"))
            {
              var yourArray=[];
             $(".checkitem:checked").each(function(){
                yourArray.push($(this).val());
              });
               window.location="delete-job-career.php?job_career_id="+yourArray;  
            }
            else
            {
              window.location="job-career-list.php"; 
            }
          }
       });

        // End  job Career delete

        // start blog delete
        $("#get_blog_ids_for_delete").click(function() {
          var blog_id=$(".checkitem:checked").length;
          if(blog_id==0)
          {
            alert("Please Select The CheckBox");
          }
          else
          {
            if(confirm("Are you sure you want to delete the selected  "+blog_id+" Blog"))
            {
              var yourArray=[];
             $(".checkitem:checked").each(function(){
                yourArray.push($(this).val());
              });
               window.location="delete-blog.php?blogid="+yourArray;  
            }
            else
            {
              window.location="manage-our-blog-list.php"; 
            }
          }
          });

        // End blog delete

        // start Project delete
        $("#get_project_ids_for_delete").click(function() {
          var request_id=$(".checkitem:checked").length;
          if(request_id==0)
          {
            alert("Please Select The CheckBox");
          }
          else
          {
            if(confirm("Are you sure you want to delete the selected  "+request_id+" Portfolio"))
            {
              var yourArray=[];
             $(".checkitem:checked").each(function(){
                yourArray.push($(this).val());
              });
               window.location="delete-portfolio.php?project_id="+yourArray;  
            }
            else
            {
              window.location="manage-portfolio-list.php"; 
            }
          }
       });

        // End  Project delete

        // start members delete
        $("#get_members_ids_for_delete").click(function() {
          var member_id=$(".checkitem:checked").length;
          if(member_id==0)
          {
            alert("Please Select The CheckBox");
          }
          else
          {
            if(confirm("Are you sure you want to delete the selected  "+member_id+" Team"))
            {
              var yourArray=[];
             $(".checkitem:checked").each(function(){
                yourArray.push($(this).val());
              });
               window.location="delete-members.php?memberid="+yourArray;  
            }
            else
            {
              window.location="team-list.php"; 
            }
          }
       });

        // End member delete

        // start testimonials delete
        $("#get_testimonials_ids_for_delete").click(function() {
          var testimonial_id=$(".checkitem:checked").length;
          if(testimonial_id==0)
          {
            alert("Please Select The CheckBox");
          }
          else
          {
            if(confirm("Are you sure you want to delete the selected  "+testimonial_id+" Review"))
            {
              var yourArray=[];
             $(".checkitem:checked").each(function(){
                yourArray.push($(this).val());
              });
               window.location="delete-review.php?testimonil_id="+yourArray;  
            }
            else
            {
              window.location="manage-review-list.php"; 
            }
          }
       });

        // End testimonials delete

        // start Job delete
        $("#get_ids_job_type_for_delete").click(function() {
          var testimonial_id=$(".checkitem:checked").length;
          if(testimonial_id==0)
          {
            alert("Please Select The CheckBox");
          }
          else
          {
            if(confirm("Are you sure you want to delete the selected  "+testimonial_id+" Job Types"))
            {
              var yourArray=[];
             $(".checkitem:checked").each(function(){
                yourArray.push($(this).val());
              });
               window.location="delete-job.php?job_id="+yourArray;  
            }
            else
            {
              window.location="manage-job-list.php"; 
            }
          }
       });

        // End job delete

        // start Event delete
        $("#get_event_ids_for_delete").click(function() {
          var testimonial_id=$(".checkitem:checked").length;
          if(testimonial_id==0)
          {
            alert("Please Select The CheckBox");
          }
          else
          {
            if(confirm("Are you sure you want to delete the selected  "+testimonial_id+" Event"))
            {
              var yourArray=[];
             $(".checkitem:checked").each(function(){
                yourArray.push($(this).val());
              });
               window.location="delete-event.php?event_id="+yourArray;  
            }
            else
            {
              window.location="manage-event-list.php"; 
            }
          }
       });

        // End Event delete


        // start slider delete
        $("#get_slider_ids_delete").click(function() {
          var slider_id=$(".checkitem:checked").length;
          if(slider_id==0)
          {
            alert("Please Select The CheckBox");
          }
          else
          {
            if(confirm("Are you sure you want to delete the selected  "+slider_id+" Slider Image"))
            {
              var yourArray=[];
             $(".checkitem:checked").each(function(){
                yourArray.push($(this).val());
              });
               window.location="delete-slider-image.php?slider_id="+yourArray;  
            }
            else
            {
              window.location="manage-slider-list.php"; 
            }
          }
       });

        // End slider delete
     
     });

     $("#checkall").change(function(){
    $(".checkitem").prop("checked",$(this).prop("checked"))
  });
  
  $(".checkitem").change(function(){
    if($(this).prop("checked")==false)
    {
      $("#checkall").prop("checked",false);
    }
    if($(".checkitem:checked").length==$(".checkitem").length)
    {
      $("#checkall").prop("checked",true);
    }
  })
   </script>

   <!-- End contact us list -->

     <!-- alert message automatic hide start -->
 <script type="text/javascript">
    $(".alert-dismissible").fadeTo(5000, 500).slideUp(500, function(){
    $(".alert-dismissible").alert('close');
});
</script>
 <!-- alert message automatic hide End -->

 
 <script type="text/javascript">
    $(function () {
        $("#btn_submit").click(function () {
            var password = $("#newpassword").val();
            var confirmPassword = $("#confirm_password").val();
            if (password != confirmPassword) {
                alert("Confirm Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>
 <!--  End confirm password -->


 <!-- Image size fixed start -->

 <!-- <script type="text/javascript">
   $(document).ready(function()
   {

     var _URL = window.URL || window.webkitURL;

    $('.filename').change(function () {
     var place=document.getElementById("field2").value;
     var height=794;
     var width=786;
  
  
    //    switch(place) {
    //   case "Top Section code":
    //      width=728;
    //      height=90;  
    //     break;
    //   case "Buttom Section code":
    //      width=728;
    //      height=90;
    //     break;
    //     case "Left Section code":
    //     width=140;
    //     height=600;
    //     break;
    //     case "Right Section code":
    //     width=140;
    //     height=600;
    //     break;
     
    // }


    var file = $(this)[0].files[0];

    img = new Image();
    var imgwidth = 0;
    var imgheight = 0;
    var maxwidth = width;
    var maxheight = height;

     img.src = _URL.createObjectURL(file);
     img.onload = function() {
     imgwidth = this.width;
     imgheight = this.height;
   
     $("#width").text(imgwidth);
     $("#height").text(imgheight);
     if(imgwidth <= maxwidth && imgheight <= maxheight){
   
      var formData = new FormData();
      formData.append('fileToUpload', $('.filename')[0].files[0]);

      // alert("done");
    }else{
     alert("The size of the image must be "+maxwidth+"X"+maxheight);
     window.location.reload();
    }
   };
      img.onerror = function() {
   
      alert("Allowed format jpeg, png, jpg");
      window.location.reload();
   }

 });
});
</script> -->

<script> 
$(document).ready(function(){
  $("#add_field1").click(function(){
    $("#add_field2").slideToggle("slow");
  });
});
</script>

<!-- Image size fixed End -->

<script type="text/javascript">
$(document).ready(function() {
  $.uploadPreview({
    input_field: "#image-upload",
    preview_box: "#image-preview",
    label_field: "#image-label"
  });
});
</script>


 <!-- start multiple image remove  -->

 <script type="text/javascript">
  $(document).on("click", ".remove_services_btn", function (e) {
    $(this).closest(".remove_div").remove();

});

$(document).on("click",".remove-img", function(e){ 
        $(this).closest(".remove_image_gm").remove();
        // $(this).closest(".selected_images").remove(); 


      });
</script>
 <!-- End multiple image remove  -->
</body>

</html>