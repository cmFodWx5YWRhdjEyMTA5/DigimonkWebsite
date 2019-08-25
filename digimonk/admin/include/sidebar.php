<!--Leftbar Start Here-->
<aside class="leftbar material-leftbar">
    <div class="left-aside-container">
        <div class="user-profile-container" id="sidebar_digs">

            <?php 

                    $pr_query = mysqli_query($conn,"SELECT * FROM admin_login"); 
                    $pr_row = mysqli_fetch_array($pr_query);
             ?>

            <div class="user-profile clearfix">
                <div class="admin-user-thumb">
                    <img src="images/profile_img/<?php echo $pr_row['image']; ?>" alt="admin">
                </div>
                <div class="admin-user-info">
                    <ul>
                        <li><a href="#"><?php echo $pr_row['user_name']; ?></a></li>
                        <li><a href="#"><?php echo $pr_row['email']; ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="admin-bar">
                <ul>
                    <li><a href="logout.php"><i class="zmdi zmdi-power"></i></a></li>
                    <li><a href="account-profile.php"><i class="zmdi zmdi-account"></i></a></li>
                    <!-- <li><a href="#"><i class="zmdi zmdi-key"></i></a></li>  -->
                    <li><a href="setting.php"><i class="zmdi zmdi-settings"></i>
                    </a>
                    </li>
                </ul>
            </div>
        </div>

     <div id="sub-header">
        <ul class="list-accordion">
          <li class="">
          <a href="manage-slider-list.php"><i class="zmdi zmdi-border-all"></i>
            <span class="list-label">Manage Slider </span>
          </a>
        </li>
           <!-- <li class="">
          <a href="subscribe-list.php"><i class="zmdi zmdi-phone"></i>
            <span class="list-label">Subscribe user </span>
          </a>
        </li> -->
        
         <li class=""> 
          <a href="our-expert-list.php"><i class="fa fa-user"></i>
            <span class="list-label"> Contact us Enquiry</span>
          </a>
        </li>

        <li class=""><a href="meta-keywords-list.php"><i class="zmdi zmdi-border-all"></i>
            <span class="list-label">Manage Meta Keywords</span>
           </a>
       </li>

        <li class="">
          <a href="job-career-list.php"><i class="fa fa-list"></i>
            <span class="list-label">Job Career List</span>
          </a>
        </li>

        <li class="">
          <a href="manage-our-blog-list.php"><i class="fa fa-bold"></i>
            <span class="list-label">Manage Our Blogs</span>
         </a>
       </li>

       <li class=""><a href="google-analytics.php"><i class="zmdi zmdi-border-all"></i>
            <span class="list-label">Manage Google Analytics</span>
           </a>
       </li>

       <li class="">
          <a href="manage-portfolio-list.php"><i class="zmdi zmdi-border-all"></i>
            <span class="list-label">Manage Portfolio </span>
          </a>
        </li>
        <li class=""><a href="team-list.php"><i class="fa fa-users"></i>
              <span class="list-label">Manage Team</span>
            </a>
         </li>

          <li class=""><a href="manage-review-list.php"><i class="zmdi zmdi-border-all"></i>
            <span class="list-label">Manage client testimonials </span>
           </a>
       </li>
       <li class=""><a href="manage-job-list.php"><i class="zmdi zmdi-border-all"></i>
            <span class="list-label">Manage Job </span>
           </a>
       </li>
        <li class=""><a href="manage-event-list.php"><i class="zmdi zmdi-border-all"></i>
            <span class="list-label">Manage Event </span>
           </a>
       </li>

      <!--  <li class=""><a href="manage-google-analytics-list.php"><i class="zmdi zmdi-border-all"></i>
            <span class="list-label">Manage Google Analytics</span>
           </a>
       </li> -->
          <!--  <li class="">
              <a href="manage-how-it-work.php"><i class="fa fa-question-circle"></i>
                <span class="list-label">Manage How it work</span>
             </a>
         </li> -->

        <!--  <li class=""><a href="manage-who-we-are.php"><i class="fa fa-question"></i>
            <span class="list-label"> Who We Are</span>
           </a>
       </li> -->

       

        <!--  <li class=""><a href="ours-customers-list.php"><i class="fa fa-users"></i>
              <span class="list-label">Manage Ours Customers</span>
            </a>
         </li> -->

        <!--  <li class="">
          <a href="faq-list.php"><i class="fa fa-question"></i>
            <span class="list-label">Manage Faq List</span>
          </a>
        </li> -->

        

      
       <!--  <li class=""> 
          <a href="request-quote-list.php"><i class="fa fa-user"></i>
            <span class="list-label">Request Quote list </span>
          </a>
        </li> -->

          
         

      <!-- <li class=""><a href="manage-testimonials-list.php"><i class="zmdi zmdi-border-all"></i>
            <span class="list-label">Manage Testimonials list</span>
           </a>
       </li>

       <li class=""><a href="manage-youtube-link.php"><i class="fa fa-youtube"></i>
            <span class="list-label">Manage Youtube Video</span>
           </a>
       </li> -->

       

 
       <!-- <li class="">
            <a href="#"><i class="zmdi zmdi-view-dashboard"></i>
                <span class="list-label">Services</span>
            </a>
            <ul>
                <li><a href="manage-who-we-are.php"><i class="fa fa-file-o"></i> Who We Are</a></li>
                <li><a href="manage-data-warehousing.php"><i class="fa fa-file-o"></i> Data warehousing & BI</a></li>
                <li><a href="manage-electronic-management.php"><i class="fa fa-info-circle"></i> Electronic Management</a></li>

                <li><a href="manage-custom-apps.php"><i class="fa fa-info-circle"></i> Custom Apps</a></li>
                <li><a href="manage-quality-assurance.php"><i class="fa fa-info-circle"></i> Quality Assurance</a></li>
                 <li><a href="404-error.html">404 Error Page</a></li> 
                </ul>
            </li> -->


        <li class="list-title">Pages</li>
          
         <li>
                <a href="#"><i class="zmdi zmdi-view-dashboard"></i>
                    <span class="list-label">CMS Pages</span>
                </a>
                <ul>
                    <li><a href="manage-about-us.php"><i class="fa fa-file-o"></i> About us</a></li>
                    <li><a href="manage-privacy-policy.php"><i class="fa fa-file-o"></i> Privacy Policy</a></li>
                    <li><a href="manage-term-and-condition.php"><i class="fa fa-info-circle"></i> Terms & Conditions</a></li>
                     <!-- <li><a href="manage-our-values.php"><i class="fa fa-file-o"></i> Our Values</a></li> -->
                     <!-- <li><a href="manage-consultant-network.php"><i class="fa fa-file-o"></i> Consultant Network</a></li>   -->
                    
                   <!-- <li><a href="404-error.html">404 Error Page</a></li>  -->
                </ul>
            </li>
        </ul>
    </div>

    </div>
</aside>

<!--Page Container Start Here-->
<section class="main-container">
    