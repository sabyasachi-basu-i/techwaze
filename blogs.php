<?php
require "admin/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Techwaze</title>
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- style -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- jquery  -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-duotone-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-light.css">

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.css">
    <link rel="stylesheet" href="assets/css/owl.theme.green.css">
    <script src="assets/js/owl.carousel.js"></script>

    <!-- fancy box -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>

    <!-- lottie -->
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
</head>

<body>

<!-- header  -->
<header class="nav_bar">
    <div class="container">

        <div class="nav_bar_in d-flex align-items-center justify-content-between">

            <a href="index" class="logo">
                <img src="assets/images/logo.png" alt="">
            </a>

            <ul class="menu">
                <li> 
                    <a href="index">Home</a>
                </li>
                
                <li class="dropdown service_dropdown">
                    <a class="d-flex align-items-center gap-1" href="services">
                        <span>Services</span>
                        <i class="fa-regular fa-angle-down"></i>
                    </a>

                    <div class="dropdown_era">
                        <div class="container">
                            <div class="dropdown_era_in">

                                <a href="analytics_data_science" class="dropdown_era_item">
                                    <div class="dropdown_era_img">
                                        <dotlottie-player src="assets/images/analytics2.json" background="transparent" loop autoplay></dotlottie-player>
                                    </div>
                                    <div class="dropdown_era_content">
                                        <h4 data-href="analytics_data_science">Analytics & Data Science <i class="fa-sharp far fa-arrow-right"></i></h4>
                                        <p>Predict Trends, Optimize Business Growth</p>
                                    </div>
                                </a>

                                <a href="product_development" class="dropdown_era_item">
                                    <div class="dropdown_era_img">
                                        <dotlottie-player src="assets/images/product_development.json" background="transparent" loop autoplay></dotlottie-player>
                                    </div>
                                    <div class="dropdown_era_content">
                                        <h4 data-href="product_development">Product Development <i class="fa-sharp far fa-arrow-right"></i></h4>
                                        <p>From Concept to Launch, Seamlessly</p>
                                    </div>
                                </a>

                                <a href="ai_automation" class="dropdown_era_item">
                                    <div class="dropdown_era_img">
                                        <dotlottie-player src="assets/images/ai.json" background="transparent" loop autoplay></dotlottie-player>
                                    </div>
                                    <div class="dropdown_era_content">
                                        <h4 data-href="ai_automation">AI & Automation <i class="fa-sharp far fa-arrow-right"></i></h4>
                                        <p>AI-Driven Solutions for Smarter Business</p>
                                    </div>
                                </a>

                                <a href="cloud_solution" class="dropdown_era_item">
                                    <div class="dropdown_era_img">
                                        <dotlottie-player src="assets/images/google_cloud.json" background="transparent" loop autoplay></dotlottie-player>
                                    </div>
                                    <div class="dropdown_era_content">
                                        <h4 data-href="cloud_solution">Cloud Solutions <i class="fa-sharp far fa-arrow-right"></i></h4>
                                        <p>Cloud Adoption Made Simple and Secure</p>
                                    </div>
                                </a>

                                <a href="crm" class="dropdown_era_item">
                                    <div class="dropdown_era_img">
                                        <dotlottie-player src="assets/images/crm.json" background="transparent" loop autoplay></dotlottie-player>
                                    </div>
                                    <div class="dropdown_era_content">
                                        <h4 data-href="crm">CRM (Salesforce & D365)<i class="fa-sharp far fa-arrow-right"></i></h4>
                                        <p>Managing customer relations</p>
                                    </div>
                                </a>
                               
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <a href="about">About Us</a>
                </li>

                <li class="dropdown insight_dropdown">
                    <a class="d-flex align-items-center gap-1" href="javascript:void(0)">
                        <span>Insights</span> 
                        <i class="fa-regular fa-angle-down"></i>
                    </a>

                    <div class="dropdown_era">
                        <div class="container">
                            <div class="dropdown_era_in">

                                <a href="blogs" class="dropdown_era_item">
                                    <div class="dropdown_era_img">
                                        <dotlottie-player src="assets/images/blog.json" background="transparent" loop autoplay></dotlottie-player>
                                    </div>
                                    <div class="dropdown_era_content">
                                        <h4 data-href="blogs">Blogs <i class="fa-sharp far fa-arrow-right"></i></h4>
                                        <p>Explore Exciting Updates and Innovations!</p>
                                    </div>
                                </a>

                                <a href="case_studies" class="dropdown_era_item">
                                    <div class="dropdown_era_img">
                                        <dotlottie-player src="assets/images/case_studies.json" background="transparent" loop autoplay></dotlottie-player>
                                    </div>
                                    <div class="dropdown_era_content">
                                        <h4 data-href="case_studies">Case Studies <i class="fa-sharp far fa-arrow-right"></i></h4>
                                        <p>Explore Case Studies Driving Digital Transformation</p>
                                    </div>
                                </a>
                               
                            </div>
                        </div>
                    </div>

                </li>

                <li>
                    <a href="contact">Contact Us</a>
                </li>
            </ul>

            <a href="https://techwaze.youcanbook.me/" class="cmn_btn lets_talk_btn">
                Let's Talk
            </a>

            <button class="mobile-nav-toggler">
                <i class="fa fa-bars"></i>
            </button>

        </div>

    </div>
</header>

<!-- mobile menu  -->
<div class="mobile-menu">

    <div class="menu-backdrop"></div>

    <nav class="menu-box">
        
        <div class="upper-box">

            <div class="nav-logo">
                <a href="index">
                    <img src="assets/images/logo.png">
                </a>
            </div>

            <div class="close-btn">
                <i class="fa-solid fa-xmark"></i>
            </div>

        </div>

        <ul class="navigation">
            <li>
                <a href="index">Home</a>
            </li>


            <li>
                <a href="services" class="d-flex align-items-center justify-content-between">
                    <span>Services</span>
                    <span class="mobile_dropdown">
                        <i class="fa-regular fa-angle-down"></i>
                    </span>
                </a>
                <ul class="mobile_dropdown_ul">
                    <li><a href="analytics_data_science">Analytics & Data Science</a></li>
                    <li><a href="product_development">Product Development</a></li>
                    <li><a href="ai_automation">AI & Automation</a></li>
                    <li><a href="cloud_solution">Cloud Solutions</a></li>
                    <li><a href="crm">CRM (Salesforce & D365)</a></li>
                </ul>
            </li>

            <li>
                <a href="about">About Us</a>
            </li>

            <li>
                <a href="javascript:void(0)" class="d-flex align-items-center justify-content-between">
                    <span>Insights</span>
                    <span class="mobile_dropdown">
                        <i class="fa-regular fa-angle-down"></i>
                    </span>
                </a>
                <ul class="mobile_dropdown_ul">
                    <li><a href="blogs">Blogs</a></li>
                    <li><a href="case_studies">Case Studies</a></li>
                </ul>
            </li>

            <li>
                <a href="contact">Contact Us</a>
            </li>
        </ul>

        <ul class="contact-list-one">
            <li>
                <div class="contact-info-box">
                    <i class="fa-sharp fa-light fa-phone icon"></i>

                    <span class="title">Call Now</span>

                    <a href="tel:+1 80 TECHWAZE">+1 80 TECHWAZE</a>
                </div>
            </li>
            <li>

                <div class="contact-info-box">

                    <i class="fa-sharp fa-light fa-envelope icon"></i>

                    <span class="title">Send Email</span>

                    <a href="mailto:info@techwaze.com">info@techwaze.com</a>

                </div>
            </li>
        </ul>

        <ul class="social-links">
            <li>
                <a href="https://x.com/techwaze">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="https://www.facebook.com/techwaze">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/techwaze">
                    <i class="fab fa-linkedin"></i>
                </a>
            </li>
        </ul>

    </nav>

</div>

<!-- sub banner  -->
<section class="banner-section sub-banner-full">
    <div class="banner-slider">

        <div class="banner-slide">

            <img src="assets/images/slider9.png" alt>

            <div class="outer-box">

                <div class="container">
                <div class="content-box" data-animation-in="fadeInLeft" data-delay-in="0.2">
                    
                    <h1 data-animation-in="fadeInLeft" data-delay-in="0.2">Blogs</h1>

                    <h6 data-animation-in="fadeInUp" data-delay-in="0.3">Big things are happening! Check out our latest blog to discover the updates and innovations we’ve been working on. Your next big idea could be just a click away!</h6>
                    
                </div>
                </div>

            </div>

        </div>


    </div>

    <span class="scroll-btn">
        <a href="javascript:void(0)">
            <span class="mouse">
                <span></span>
            </span>
        </a>
        <p>Scroll Down</p>
    </span>
</section>

<!-- blog  -->
<section class="blog">
    <div class="container">

        <div class="row">

        <?php 
         $get_blog = "SELECT * FROM `post` ORDER BY `id` DESC";
         $get_blog_res = mysqli_query($conn, $get_blog);

         if(mysqli_num_rows($get_blog_res) > 0)
         {
            while($get_blog_row = mysqli_fetch_assoc($get_blog_res))
            {
                ?>
                <div class="news-block col-lg-4 col-md-6">
                    <div class="inner-box">
    
                        <div class="image-box">
                            <figure class="image">
                                <a href="blog_details?id=<?php echo $get_blog_row['id'] ?>">
                                    <img src="admin/storage/blog/<?php echo $get_blog_row['thumbnail'] ?>" alt>
                                </a>
                            </figure>
                        </div>
    
                        <div class="content-box">
                            <ul class="post">
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                        <path opacity="0.8" d="M4.9 0V1.4H9.1V0H10.5V1.4H13.3C13.6866 1.4 14 1.7134 14 2.1V13.3C14 13.6866 13.6866 14 13.3 14H0.7C0.313404 14 0 13.6866 0 13.3V2.1C0 1.7134 0.313404 1.4 0.7 1.4H3.5V0H4.9ZM12.6 7H1.4V12.6H12.6V7ZM3.5 2.8H1.4V5.6H12.6V2.8H10.5V4.2H9.1V2.8H4.9V4.2H3.5V2.8Z" fill="#F94A29" />
                                    </svg><?php echo date('d-M-Y', strtotime($get_blog_row['added_on'])) ?>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="14" viewBox="0 0 10 14" fill="none">
                                        <path opacity="0.8" d="M0.625 0H9.375C9.72019 0 10 0.303636 10 0.678183V13.6608C10 13.8481 9.86006 14 9.6875 14C9.62881 14 9.57125 13.982 9.5215 13.9481L5 10.8722L0.478494 13.9481C0.332269 14.0476 0.139412 13.9997 0.0477311 13.841C0.0165436 13.787 0 13.7246 0 13.6608V0.678183C0 0.303636 0.279825 0 0.625 0ZM8.75 1.35637H1.25V11.8224L5 9.27123L8.75 11.8224V1.35637Z" fill="#F94A29" />
                                    </svg><?php echo $get_blog_row['product'] ?>
                                </li>
                            </ul>
                            <h6 class="title">
                                <a href="blog_details?id=<?php echo $get_blog_row['id'] ?>">
                                <?php echo $get_blog_row['title'] ?>
                                </a>
                            </h6>
                        </div>
    
                    </div>
                </div>
                <?php 
            }
         }
        ?> 

        </div>

        <!-- pagination here -->
        <!-- <div class="d-flex justify-content-end mt-3">
            <ul class="pagination blog_pagination">
                <li class="page-item"><a class="page-link active shadow-none" href="javascript:void(0)"><<</a></li>
                <li class="page-item"><a class="page-link shadow-none" href="javascript:void(0)">1</a></li>
                <li class="page-item"><a class="page-link shadow-none" href="javascript:void(0)">2</a></li>
                <li class="page-item"><a class="page-link shadow-none" href="javascript:void(0)">3</a></li>
                <li class="page-item"><a class="page-link shadow-none" href="javascript:void(0)">>></a></li>
            </ul>
        </div> -->

    </div>
</section>

<!-- footer  -->
<footer class="main_footer">

    <div class="container">
        <div class="row">

            <div class="footer_item col-sm-6 col-lg-3">

                <div class="footer_logo mb-4">
                    <a href="index" class="logo">
                        <img src="assets/images/logo.png">
                    </a>
                </div>

                <div class="contact_widget">
                    <div class="contact_widget_icon_box">
                        <i class="fa-sharp fa-light fa-phone icon"></i>
                    </div>

                    <div>
                        <span>Call Now</span>
                        <h6>
                            <a href="tel:+1 80 TECHWAZE">+1 80 TECHWAZE</a>
                        </h6>
                    </div>
                </div>

                <div class="contact_widget">
                    <div class="contact_widget_icon_box">
                        <i class="fa-sharp fa-light fa-envelope icon"></i>
                    </div>

                    <div>
                        <span>Mail</span>
                        <h6>
                            <a href="mailto:info@techwaze.com">info@techwaze.com</a>
                        </h6>
                    </div>
                </div>

                <!-- <ul class="social-icons">
                    <li>
                        <a href="https://x.com/techwaze"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/techwaze"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/techwaze"><i class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                </ul> -->

            </div>

            <div class="footer_item col-sm-6 col-lg-3 ps-lg-5">
                <h3>USEFUL LINK</h3>

                <ul class="footer_cmn_ul">
                    <li><a href="services">Services</a></li>
                    <li><a href="about">About Us</a></li>
                    <li><a href="contact">Contact Us</a></li>
                </ul>

            </div>

            <div class="footer_item col-sm-6 col-lg-3">
                <h3>OUR SERVICES</h3>

                <ul class="footer_cmn_ul">
                    <li><a href="services#analytic">Analytics & Data Science</a></li>
                    <li><a href="services#product_development">Product Development</a></li>
                    <li><a href="services#ai_automation">AI & Automation</a></li>
                    <li><a href="services#cloud_solutions">Cloud Solutions</a></li>
                    <li><a href="services#crm">CRM (Salesforce & D365)</a></li>
                </ul>

            </div>

            <div class="footer_item col-sm-6 col-lg-3">
                <h3>FOLLOW US ON</h3>

                <ul class="footer_cmn_ul">
                    <li><a href="https://x.com/techwaze">Twitter(X)</a></li>
                    <li><a href="https://www.facebook.com/techwaze">Facebook</a></li>
                    <li><a href="https://www.linkedin.com/techwaze">Linkedin</a></li>
                </ul>

            </div>

        </div>
    </div>

    <div class="footer-bottom">
    <div class="container">
        <p>© Copyright reserved by Techwaze</p>
    </div>
    </div>

</footer>

<!-- to top  -->
<div class="scroll-to-top">
<i class="fa-sharp fa-solid fa-arrow-up"></i>
</div> 

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- script  -->
<script src="assets/js/script.js"></script>
<!-- slick -->
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/slick-animation.min.js"></script>
<!-- fancy box -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css"/>

</body>
</html>