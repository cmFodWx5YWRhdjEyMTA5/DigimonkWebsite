<footer class="footer">
  <div class="footer_top clearfix">
     <div class="wrapper">
        <div class="">
          <!-- row -->
   <div class="region region-footer-top">
     <?php 
        $blog_query1 = mysqli_query($conn,"SELECT * FROM our_blog WHERE status='0' ORDER BY RAND() LIMIT 2");
            while($blog_row1 = mysqli_fetch_assoc($blog_query1))
            {

      ?>
     <div id="block-newsblockblock" class="newsletter ttn-form col-sm-6 block block-custom block-news-block">
        <div class="content">
            <div class="blog-posts">
               <div class="blg-head">
                  <a href="blog-details.php?ab=<?php echo $blog_row1['id']; ?>" rel="nofollow"><?php echo $blog_row1['heading']; ?></a>
                  
				      </div>
            </div>
          </div>
		  <a href="blog.php" class="view_all_btn_blog_desg" id="view-all-blogs">View All Blogs</a>
        </div>
      <?php } ?>
    </div>
      <!-- <div id="block-wpblogblockblock" class="footer-block col-sm-6 block block-custom block-wpblog-block">
         <div class="heading">Latest from our blog</div>
         <div class="content">
            <div class="blog-posts">
               <div class="blg-head"><a href="javascript:void(0)" rel="nofollow">&quot;Controlled Chaos&quot; - Moderating the User Generated Content</a></div>
               <div class=" "></div>
               <a rel="nofollow" href="blog.php" class="btn" id="view-all-blogs">View All Blogs</a></div>
         </div>
      </div> -->
               </div>
            </div>
         </div>
      </div>
      <div class="footer__mid clearfix">
         <div class="wrapper">
            <div class="footer-menus">
               <div class="region region-footer-menu">
                  <nav id="block-company" class="block block-menu navigation menu--company">
                     <div id="block-company-menu" class="f-heading n-heading">Who We Are</div>
                     <ul class="clearfix menu">
                        <li class="menu-item">
                         <a href="index.php" id="f-home" rel="nofollow">Home</a> 
                       </li>
						      <li class="menu-item"> 
                           <a href="portfolio.php" id="f-about" rel="nofollow">Portfolio</a> 
                        </li>
                        <li class="menu-item">
                          <a href="reviews.php" id="f-leadership" rel="nofollow">Reviews</a>
                       </li>
                        <li class="menu-item"> 
                          <a href="gallery.php" id="" rel="nofollow">Gallery</a>
                        </li>
                        <li class="menu-item"> 
                         <a href="career.php" id="f-news" rel="nofollow">Career</a> </li>
                        <li class="menu-item">
                         <a href="blog.php" id="f-awards" rel="nofollow">Blog</a> 
                       </li>
                        <li class="menu-item"> 
                          <a href="about-us.php" id="f-media-coverage" rel="nofollow">About Us</a> 
                        </li>
                        <li class="menu-item"> 
                           <a href="contact-us.php" id="f-events" rel="nofollow">Contact</a>
                        </li>
                        <li class="menu-item">
                          <a href="privacy-policy.php" id="" rel="">Privacy Policy</a> </li>
                        <li class="menu-item"> 
                          <a href="terms-conditions.php" id="f-terms-conditions" rel="nofollow">Terms & Conditions</a>
                       </li>
                     </ul>
                  </nav>
                  <nav id="block-whatwedo" class="block block-menu navigation menu--what-we-do">
                     <div id="block-whatwedo-menu" class="f-heading n-heading ">What We Do</div>
                     <ul class="clearfix menu">
                        <li class="menu-item">
                         <a href="web-development.php" id="f-Services" rel="">Website Development</a>
                        </li>
                        <li class="menu-item">
                         <a href="mobile-app-development.php" id="f-Technologies" rel="">Android/IOS Development</a>
                       </li>
                        <li class="menu-item">
                          <a href="devops-development.php" id="f-Success-Stories" rel="nofollow">DevOps Development</a>
                       </li>
                        
                        <li class="menu-item">
                          <a href="digital-marketing.php" id="" rel="">Digital Marketing/SEO</a>
                       </li>
      						<li class="menu-item">
                          <a href="ui-design.php" id="" rel="">UI Design</a>
                        </li>
      						<li class="menu-item">
                         <a href="graphic-designing.php" id="" rel="">Graphic Designing</a>
                        </li>
                    </ul>
                  </nav>
               </div>
            </div>
<div class="footer-right">
<div class="region region-footer-right-section">
  <div id="block-socialandcopyright" class="block block-block-content block-block-content85ec4c71-4a6e-435a-a9ee-d744f265af85">
     <div class="content">
        <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
           <div class="social">
              <div class="f-heading n-heading">Connect With Us</div>
              <ul>
                <?php if(!empty($setting_row['linkedin'])) { ?>
                 <li class="ln">
                  <a href="<?php echo $setting_row['linkedin']; ?>" onclick="window.open(this.href);return false;" rel="nofollow" title="linked-in"> 
                  </a>
                </li>
              <?php } ?>

              <?php if(!empty($setting_row['twitter'])) { ?>

                 <li class="twt"><a href="<?php echo $setting_row['twitter']; ?>" onclick="window.open(this.href);return false;" rel="nofollow" title="Twitter"> </a>
                 </li>
               <?php } ?>

                <?php if(!empty($setting_row['facebook'])) { ?>
                 <li class="fb"><a href="<?php echo $setting_row['facebook']; ?>" onclick="window.open(this.href);return false;" rel="nofollow" title="Facebook"> </a>
                 </li>
                <?php } ?>
              </ul>
           </div>
        
    <div class="copyright"><img alt="ttn logo" data-entity-type="file" data-entity-uuid="86fdf287-46c8-4009-afb5-feb6441e9658" src="../static1.digimonk/sites/default/files/inline-images/footer-logo.png" />
    
    <p>©2019 Digimonk Technologies</p>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
      <a href="https://api.whatsapp.com/send?phone=917722845500&text=&text=Hi%20There%2c%20I%20am%20interested.&source=&data=" class="float" target="_blank"><i class="fa fa-whatsapp my-float"></i>
      </a>
      <!--<a href="https://api.whatsapp.com/send?phone=917722845500&text=&text=Hi%20There%2c%20I%20am%20interested%20in%20your%20Products%2fService.&source=&data=" class="float" target="_blank"><i class="fa fa-whatsapp my-float"></i>
      </a>-->
        
            
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
</div>
</div>
<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
<script type="text/javascript">
		$('#blogCarousel').carousel({
				interval: 5000
		});

 	  </script>

  
<!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
<script type="application/json" data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/","scriptPath":null,"pathPrefix":"","currentPath":"node\/9","currentPathIsAdmin":false,"isFront":true,"currentLanguage":"en"},"pluralDelimiter":"\u0003","ajaxTrustedUrl":{"form_action_cc611e1d":true},"user":{"uid":0,"permissionsHash":"d6a2ccc8d7a2b5c0e5c72673f77cc9bac385bb8dfe94a399f5e03462a9b247ab"}}</script>
<script src="../static2.digimonk/sites/default/files/js/validation_js.js"></script><!--[if lte IE 8]><script src="http://static2.digimonk/sites/default/files/js/js_VtafjXmRvoUgAzqzYTA3Wrjkx9wcWhjP0G4ZnnqRamA_FC-L6SiPHwdFNVsL5MfwzRQZp8iaNxnCNQDG51-Covk.js"></script><![endif]-->

<script type="application/ld+json">
  {   "@context" : "http://schema.org",   "@type" : "Organization",  "address": {   "@type": "PostalAddress",  "addressLocality": "New Jersey, USA",  "postalCode": "08902-3040",   "streetAddress": "1588 US Highway 130 - North Brunswick" }, "name" : "TO THE NEW",  "url" : "http://www.tothenew.com",  "logo" : "http://static1.digimonk/blog/wp-content/themes/ttn/images/logo-large.png",   "sameAs" : [   "https://www.linkedin.com/company/tothenew", "https://twitter.com/TOTHENEW",  "https://www.facebook.com/TOTHENEWDigital/", "https://plus.google.com/+TOTHENEW",   "https://www.youtube.com/c/tothenew",  "http://www.slideshare.net/tothenewtech", "http://www.slideshare.net/tothenew"   ]  }</script>

<script type="text/javascript">
     var bcrumb1;	
      jQuery(document).ready(function()
      {
     	 var all = [];
    	 var s = 0;
   	jQuery('#block-ttnd-breadcrumbs li').each(function ()
      {
        all[s++] = jQuery(this).text().trim();

   	});
   	   jQuery('#block-breadcrumbblock li').each(function()
         {
          all[s++] = jQuery(this).text().trim();
      	});	

        bcrumb1 = all.join('|');
        jQuery('#talk-to-our-experts-form').submit(function()
        {	
         var url = window.location.pathname;
         var final = url.substr(url.lastIndexOf('index.php') + 1);
      	bcrumb = bcrumb1+'|'+final;
      	window.localStorage.setItem('bcrumb', bcrumb);
    	});	
       bcrumb = window.localStorage.getItem('bcrumb');	
    });
 </script>

<script type="text/javascript" src="js/validation_custom_code.js"></script>
<script type="text/javascript" src="js/save_all_form.js"></script>
 <!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->

 
 <script type="text/javascript">
        function validateFileType(){
            var fileName = document.getElementById("team_resume").value;
            var idxDot = fileName.lastIndexOf(".") + 1;
            var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
            if (extFile=="pdf" || extFile=="docx" ||  extFile=="doc"){
                //TO DO
            }else{
                alert("Only pdf/docs/ and docx files are allowed!");
                // window.location.reload();
            }   
        }
</script>

<!-- <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>-->

<script type="text/javascript">
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
        tabcontent[i].style.color = "white";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
        tablinks[i].style.color = "black";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;
    elmnt.style.color = 'white';

}
// Get the element with id="defaultOpen" and click on it
   document.getElementById("defaultOpen").click();
</script>


<script type="text/javascript">

let modalId = $('#image-gallery');

$(document).ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector)
       {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// build key actions
$(document).keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });




</script>
	  

 <script type="text/javascript"> 
	  
	  $(function(){
     var centerShelfs,
      $body = $('body'),
      $topShelf = $('.shelf.top'),
      $middleShelf = $('.shelf.middle'),
      $bottomShelf = $('.shelf.bottom');

  centerShelfs = function(){
    var topShelfPosition = $body.height()/2;

    $topShelf.css('top', topShelfPosition);
    $middleShelf.css('top', topShelfPosition + 200);
    $bottomShelf.css('top', topShelfPosition + 400);
  };

  moveToShelf = function(e){
    e.preventDefault();
    $body.attr('class', '');
    $body.addClass(e.target.id);
  };

  // bind events
  $(window).on('resize', centerShelfs);
  $('.nav a').on('click', moveToShelf);

  // move to start position
  centerShelfs();
  
  window.setTimeout(function(){
    $body.addClass('view-middle-shelf');
  }, 500);
});

	  
</script>	  

</body>

</html>

