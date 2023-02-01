<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INTAAP - Web and Mobility Solution Architect</title>
    <!-- ==================Start Css Link===================== -->
    <link rel="icon" type="image/png" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/icofont.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <!-- ==================End Css Link===================== -->


    <!--[if lt IE 9]>
<script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

     <!-- !============= Header Area Start ===========! -->
 
 <?php include_once("header.php") ?>

   
<!-- !============= Banner Area Start ===========! -->

    <!-- 
    !============= breadcum Area Start ===========!
    -->

    <section class="breadcump-area page-banner-height"
        style="background-image: url(assets/images/all-img/vacancy-banner.jpg)">
        <div class="container">
            <div class="row page-banner-height">
                <div class="col-12 text-center">
                    <div class="bread-cumb-content">
                        <h3>Latest Vacancies</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Latest Vacancies</li>
                            </ol>
                        </nav>
                    </div><!-- ./ breadcumb content -->
                </div><!-- ./coulmn -->
            </div><!-- ./row -->
        </div><!-- ./container -->
    </section>

    <!-- 
        !============= Content Area Start ===========!
        -->
    <div class="blog-content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="all-blog-post">
                        <article class="single-blg-post">
                            <a href="#" class="post-thumbnail">
                                <img src="assets/images/all-img/post1.jpg" alt="">
                            </a>
                            <div class="entry-content">
                                <header class="entry-header">
                                    <div class="entry-meta">
                                        <span><a href="#"><i class="far fa-calendar-alt"></i>08 Dec,
                                                2021</a></span><span><a href="#"><i
                                                    class="fas fa-user"></i>Admin</a></span> <span><a href="#"><i
                                                    class="fas fa-tag"></i>Design, Aaency</a></span>
                                    </div><!-- .entry-meta -->
                                    <h2 class="entry-title">
                                        <a href="#" rel="bookmark">Senior Full Stack Developer</a>
                                    </h2>
                                </header><!-- .entry header -->

                                <h4>About INTAAP</h4>
                                <p>
                                INTAAP is seeking a skilled and experienced Full Stack Developer to join our agency. 
                                We have been providing digital marketing solutions for over a decade and have a 
                                talented strategy and production team in place to support you. As a member of our 
                                Development Department, you will play a crucial role in our front and back-end development team.

                                </p>

                                <p>The ideal candidate must have a strong background in coding and software development, 
                                    as well as the ability to communicate effectively and work well in a team. You should have a 
                                    passion for all things technical and a drive to deliver exceptional results on big brand projects.</p>

                                <h5>Key responsibilities include :</h5>

                                <ul>
                                    <li>Designing, developing, modifying, documenting, testing, implementing, installing and supporting software applications and systems. </li>
                                    <li>Be responsible for researching, consulting, and analyzing to evaluate needs, and identifying technology limitations and deficiencies in existing systems and associated processes, procedures and methods.</li>
                                </ul>

                                <h5>To be considered, you must :</h5>
                                <ul>
                                    <li>Have a minimum of 2 years of experience </li>
                                    <li>Be proficient in front-end and back-end languages, frameworks and libraries such as HTML/CSS, 
                                        JavaScript, jQuery, React, PHP, Laravel, databases such as MySQL, MongoDB, and web servers like Apache, Nginx. </li>
                                    <li>Familiarity with version control systems like Git, web development best-practices, and the ability to work in a 
                                        fast-paced Agile environment is also required. If you have the experience, composure, technical skillset and desire to 
                                        succeed, we would love to hear from you.</li>
                                </ul>

                                
                                <!-- <div class="row mt-4 mb-4">
                                    <div class="col-md-6">
                                        <a href="#">
                                            <img src="assets/images/all-img/video_pay.jpg" alt="" draggable="false">
                                        </a>
                                    </div> 
                                    <div class="col-md-6">
                                       <blockquote>
                                        Data including read length distribution and uniformity uniformity
                                       </blockquote>
                                    </div>
                                </div> -->
                                
                            </div><!-- .entry content -->
                        </article><!-- ./artice single blog -->


                        <!--============apply form starts===============-->
                        
                <div class="design-box style-three">
                    <h4>Contact Us</h4>
                    <form id="form-id">
                        <input type="text" class="from-control" placeholder="Your Name">
                        <input type="email" class="from-control" placeholder="Your Mail">
                        <input type="tel" class="from-control" placeholder="Your Phone">
                        <input type="text" class="from-control" placeholder="Your Address">
                        <input type="file" class="from-control" accept="image/*,.pdf" />
                        <textarea class="from-control" placeholder="Your Messege"></textarea>
                        <input type="submit" value="Send messege" class="rt-btn rt-light pill">
                    </form>
                    <script>
    $('#form-id').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: 'form-handler.php',
            data: formData,
            success: function(response) {
                $('#response').html(response);
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });
</script>
                
            </div><!-- ./ column -->
            <!--============apply form ends===============-->
                        
                        
                        
                    </div>
                </div><!-- ./column -->


               <!--=========================sidebar starts===============-->
               <?php include_once("sidebar.php") ?>
               <!--=========================sidebar ends===============-->


            </div><!-- ./row -->
        </div><!-- ./ copntainer -->
    </div>
    <!-- 
    !============= Footer Area Start ===========!
    -->
    <footer class="rt-site-footer main-footer">
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 mx-auto">
                        <div class="rt-single-widget">
                            <a href="index.html">
                                <img src="assets/images/logo/logo.png" alt="" draggable="false" class="rt-footer-logo">
                            </a>
                            <p>Landing Page Builder is a hosted platform powered by the Brizy builder aiming to connect
                                you with
                                potential clients.</p>
                            <div class="copy-text">
                                <p>2021 Copyright <a href="#">Rashni</a> . All Rights Reserved</p>
                            </div>
                        </div><!-- ./ single widget -->
                    </div><!-- ./ column -->
                    <div class="col-lg-2 col-md-4">
                        <div class="rt-single-widget">
                            <h4 class="rt-footer-title">Company</h4>
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Team</a></li>
                                <li><a href="#">Products</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">About us</a></li>
                            </ul>
                        </div><!-- ./ single widget -->
                    </div><!-- ./column -->
                    <div class="col-lg-2 col-md-4">
                        <div class="rt-single-widget">
                            <h4 class="rt-footer-title">Product</h4>
                            <ul>
                                <li><a href="#">Feature</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Credit</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div><!-- ./ single widget -->
                    </div><!-- ./column -->
                    <div class="col-lg-2 col-md-4">
                        <div class="rt-single-widget">
                            <h4 class="rt-footer-title">Download</h4>
                            <ul>
                                <li><a href="#">iOS</a></li>
                                <li><a href="#">Android</a></li>
                                <li><a href="#">Microsoft</a></li>
                                <li><a href="#">Desktop</a></li>
                            </ul>
                        </div><!-- ./ single widget -->
                    </div><!-- ./column -->
                    <div class="col-lg-2 col-md-4">
                        <div class="rt-single-widget">
                            <h4 class="rt-footer-title">Support</h4>
                            <ul>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div><!-- ./ single widget -->
                    </div><!-- ./column -->
                </div><!-- ./row -->
            </div><!-- ./ container -->
        </div><!-- ./ footer bottom -->
    </footer>






    <!-- ==================Start Js Link===================== -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/scrollax.min.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- ==================End Js Link===================== -->

</body>

</html>