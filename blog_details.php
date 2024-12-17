<?php
    require "admin/config.php";
    //getting blog post based on ID
    if(isset($_GET['id']) && $_GET['id'] != "") 
    {
    $id = $_GET['id'];

    $get_blog = "SELECT * FROM `post` WHERE `id` = '$id'";
    $get_blog_res = mysqli_query($conn, $get_blog);
    if(mysqli_num_rows($get_blog_res) > 0)
    {
        $get_blog_row = mysqli_fetch_assoc($get_blog_res);
    }
    else 
    {
        echo "<script>window.location.assign('blog')</script>";
    }
    }
    else 
    {
        echo "<script>window.location.assign('blog')</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Techwaze</title>
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

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
                <img src="assets/images/logo.svg" alt="">
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
                    <img src="assets/images/logo.svg">
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
<section class="sub_banner">
    <div class="container">

        <div class="sub_banner_in">
            <h1><?php echo $get_blog_row['title'] ?></h1>
        </div>

    </div>
</section>

<!-- blog details  -->
<section class="blog-details">
    <div class="container">
        <div class="row">

            <div class="col-xl-8 col-lg-7">
                <div class="blog-details__left">
 
                    <div>
                      <?php echo $get_blog_row['details'] ?>
                    </div>
 

                    <div class="blog-details__bottom">
                        <p class="blog-details__tags"> 
                            <span>Tags</span> 

                            <?php 
                                $rawTags = $get_blog_row['tag'];
                                if (!empty($rawTags) && $rawTags !== '[]') {
                                $cleanedTags = preg_replace('/[\[\]]/', '', $rawTags);
                                $tags = array_map('trim', explode(',', $cleanedTags));

                                $tags = array_map(function ($tag) {
                                    return trim($tag, '"');
                                }, $tags);
                                } else {
                                    $tags = [];
                                }

                                if(!empty($tags))
                                {
                                    foreach ($tags as $index => $tag) {
                                        ?>
                                        <a href="javascript:void(0)"><?= $tag ?></a> 
                                        <?php    
                                    }
                                }
                            ?>
                           
                        </p>
                    </div>
                   
                </div>
            </div>

            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Latest Posts</h3>
                        <ul class="sidebar__post-list list-unstyled">

                            <?php 
                            // showing last 5 post without this
                            $last_post = "SELECT * FROM `post` WHERE `id` != '$id' ORDER BY `id` DESC LIMIT 5";
                            $last_post_res = mysqli_query($conn, $last_post);
                            if(mysqli_num_rows($last_post_res) > 0)
                            {
                                while($last_post_row = mysqli_fetch_assoc($last_post_res))
                                {
                                    ?>
                                    <li>
                                        <div class="sidebar__post-image"> <img src="admin/storage/blog/<?php echo $last_post_row['thumbnail'] ?>" alt> </div>
                                        <div class="sidebar__post-content">
                                            <h3> 
                                                <a href="blog_details?id=<?php echo $last_post_row['id'] ?>"><?php echo $last_post_row['title'] ?></a>
                                            </h3>
                                        </div>
                                    </li>
                                    <?php 
                                }
                            }
                            ?>
                        </ul>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</section>

<!-- footer  -->
<footer class="main_footer">

    <div class="container">
        <div class="row">

            <div class="footer_item col-sm-6 col-lg-3">

            <div class="footer_logo mb-4">
                    <a href="index" class="logo">
                        <img src="assets/images/logo_full_white.svg">
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