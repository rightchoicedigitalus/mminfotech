<?php
get_header();
?>


<!-- Spinner Start -->
<!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <i class="fa fa-laptop-code fa-2x text-primary position-absolute top-50 start-50 translate-middle"></i>
    </div> -->
<!-- Spinner End -->


<!-- Topbar / Call To Action Start -->
<div id="callToAction" class="container-fluid bg-light px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="row gx-0 align-items-center d-flex">
        <div class="col-md-8 px-5 text-start">
            <ol class="breadcrumb mb-0 left">
                <li class="small">
                    <i class="fa-solid fa-phone-volume"></i> <?php echo get_theme_mod('mm_phone'); ?>
                </li>
                <li class="small">
                    <i class="fa-solid fa-envelope"></i> <?php echo get_theme_mod('mm_email'); ?>
                </li>
                <li class="small d-none d-lg-flex">
                    <i class="fa-solid fa-location-dot"></i> <?php echo get_theme_mod('mm_address'); ?>
                </li>
            </ol>
        </div>
        <div class="col-md-4 px-5 text-end right">
            <div class="h-100 d-flex align-items-center inner_right justify-content-end">
                <a target="_blank" class="btn-square text-primary border-end rounded-0"
                    href="<?php echo get_theme_mod('mm_facebook'); ?>"><i class="fab fa-facebook-f"></i></a>
                <a target="_blank" class="btn-square text-primary border-end rounded-0"
                    href="<?php echo get_theme_mod('mm_twitter'); ?>"><i class="fab fa-twitter"></i></a>
                <a target="_blank" class="btn-square text-primary border-end rounded-0"
                    href="<?php echo get_theme_mod('mm_instagram'); ?>"><i class="fab fa-instagram"></i></a>
                <a target="_blank" class="btn-square text-primary border-end rounded-0"
                    href="<?php echo get_theme_mod('mm_linkedin'); ?>"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="#" class="navbar-brand ms-3">
        <!-- <span>MENU</span> -->
        <img src="<?php echo get_theme_mod('header_logo'); ?>" alt="">
    </a>
    <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse <?php echo get_theme_mod('menu_position_change'); ?> navbar-collapse" id="navbarCollapse">
        <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'navbar-nav')); ?>
    </div>
</nav>
<!-- Navbar End -->


<!-- Carousel Start -->
<div class="home_slider container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <!-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                    <img class="img-fluid" src="" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
                    <img class="img-fluid" src="" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3">
                    <img class="img-fluid" src="" alt="Image">
                </button>
            </div> -->
        <div class="carousel-inner">


            <?php
            query_posts('post_type=slider&post_status=publish&posts_per_page=-1&order=ASC');

            if (have_posts()):
                while (have_posts()):
                    the_post();
                    ?>

                    <div class="carousel-item active">
                        <?php echo the_post_thumbnail('slider'); ?>
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase mb-4 animated zoomIn"><?php the_title(); ?></h4>
                                <h1 class="display-1 text-white mb-0 animated zoomIn"><?php the_content(); ?></h1>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>




        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- Facts Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="fact-item bg-light rounded text-center h-100 p-5">
                    <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
                    <h5 class="mb-3">Years Experience</h5>
                    <h1 class="display-5 mb-0" data-toggle="counter-up"><?php echo get_theme_mod('mm_experience'); ?>
                    </h1>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="fact-item bg-light rounded text-center h-100 p-5">
                    <i class="fa fa-users-cog fa-4x text-primary mb-4"></i>
                    <h5 class="mb-3">Team Members</h5>
                    <h1 class="display-5 mb-0" data-toggle="counter-up"><?php echo get_theme_mod('mm_team_members'); ?>
                    </h1>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="fact-item bg-light rounded text-center h-100 p-5">
                    <i class="fa fa-users fa-4x text-primary mb-4"></i>
                    <h5 class="mb-3">Satisfied Clients</h5>
                    <h1 class="display-5 mb-0" data-toggle="counter-up"><?php echo get_theme_mod('mm_clients'); ?></h1>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="fact-item bg-light rounded text-center h-100 p-5">
                    <i class="fa fa-check fa-4x text-primary mb-4"></i>
                    <h5 class="mb-3">Projects Done</h5>
                    <h1 class="display-5 mb-0" data-toggle="counter-up"><?php echo get_theme_mod('mm_projects_done'); ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="img-border">
                    <img class="img-fluid" src="<?php echo get_theme_mod('about_us_section_image'); ?>" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="section-title bg-white text-start text-primary pe-3">
                        <?php echo get_option('about_us_section_name'); ?>
                    </h6>
                    <h1 class="display-6 mb-4"><?php echo get_option('about_us_section_sub_title'); ?></h1>
                    <p><?php echo nl2br(get_option('about_us_section_description')); ?></p>
                    <div class="d-flex align-items-center mb-4 pb-2">
                        <img class="flex-shrink-0 rounded-circle"
                            src="<?php echo get_theme_mod('about_us_section_image'); ?>" alt=""
                            style="width: 50px; height: 50px;">
                        <div class="ps-4">
                            <h6><?php echo get_option('about_us_your_name'); ?></h6>
                            <small><?php echo get_option('about_us_your_designation'); ?></small>
                        </div>
                    </div>
                    <a class="btn btn-primary rounded-pill py-3 px-5"
                        href="<?php echo get_option('about_us_button_link'); ?>"><?php echo get_option('about_us_button_name'); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3"><?php echo get_option('section_name'); ?>
            </h6>
            <h1 class="display-6 mb-4"><?php echo get_option('section_sub_title'); ?></h1>
        </div>
        <div class="row g-4">

            <?php
            query_posts('post_type=service&post_status=publish&posts_per_page=6&order=ASC');

            if (have_posts()):
                while (have_posts()):
                    the_post();
                    ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="service-item d-block rounded text-center h-100 p-4" href="">
                            <img class="img-fluid rounded mb-4" src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                            <h4 class="mb-0"><?php the_title(); ?></h4>
                        </a>
                    </div>

                    <?php
                endwhile;
            endif;
            ?>



        </div>
    </div>
</div>
<!-- Service End -->


<!-- Feature Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="h-100">
                    <h6 class="section-title bg-white text-start text-primary pe-3">
                        <?php echo get_option('skills_section_name'); ?>
                    </h6>
                    <h1 class="display-6 mb-4"><?php echo get_option('skills_section_sub_title'); ?></h1>
                    <p class="mb-4"><?php echo nl2br(get_option('section_paragraph')); ?></p>
                    <div class="row g-4">
                        <?php
                        query_posts('post_type=skills&post_status=publish&posts_per_page=-1&order=ASC');

                        if (have_posts()):
                            while (have_posts()):
                                the_post();
                                ?>
                                <div class="col-12">
                                    <div class="skill">
                                        <div class="d-flex justify-content-between">
                                            <?php the_content(); ?>
                                            <?php the_excerpt(); ?>
                                            <!-- <p class="mb-2">85%</p> -->
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="<?php the_title(); ?>"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            endwhile;
                        endif;
                        ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="img-border">
                    <img class="img-fluid" src="<?php echo get_theme_mod('skill_section_image'); ?>" alt="">
                    <!-- echo wp_get_attachment_url( get_theme_mod('skill_section_image')) -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<!-- Project Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Our Projects</h6>
            <h1 class="display-6 mb-4">Learn More About Our Complete Projects</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="project-item border rounded h-100 p-4" data-dot="01">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="img/project-1.jpg" alt="">
                    <a href="img/project-1.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="02">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="img/project-2.jpg" alt="">
                    <a href="img/project-2.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="03">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="img/project-3.jpg" alt="">
                    <a href="img/project-2.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="04">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="img/project-4.jpg" alt="">
                    <a href="img/project-4.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="05">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="img/project-5.jpg" alt="">
                    <a href="img/project-5.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="06">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="img/project-6.jpg" alt="">
                    <a href="img/project-6.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="07">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="img/project-7.jpg" alt="">
                    <a href="img/project-7.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="08">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="img/project-8.jpg" alt="">
                    <a href="img/project-8.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="09">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="img/project-9.jpg" alt="">
                    <a href="img/project-9.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
            <div class="project-item border rounded h-100 p-4" data-dot="10">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded" src="img/project-10.jpg" alt="">
                    <a href="img/project-10.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                </div>
                <h6>UI / UX Design</h6>
                <span>Digital agency website design and development</span>
            </div>
        </div>
    </div>
</div>
<!-- Project End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Our Team</h6>
            <h1 class="display-6 mb-4">We Are A Creative Team For Your Dream Project</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center p-4">
                    <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="img/team-1.jpg" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-primary rounded-circle" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item text-center p-4">
                    <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="img/team-2.jpg" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-primary rounded-circle" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item text-center p-4">
                    <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="img/team-3.jpg" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-primary rounded-circle" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
            <h1 class="display-6 mb-4">What Our Clients Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item bg-light rounded p-4">
                <div class="d-flex align-items-center mb-4">
                    <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-1.jpg" alt="">
                    <div class="ms-4">
                        <h5 class="mb-1">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita
                    erat ipsum et lorem et sit.</p>
            </div>
            <div class="testimonial-item bg-light rounded p-4">
                <div class="d-flex align-items-center mb-4">
                    <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-2.jpg" alt="">
                    <div class="ms-4">
                        <h5 class="mb-1">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita
                    erat ipsum et lorem et sit.</p>
            </div>
            <div class="testimonial-item bg-light rounded p-4">
                <div class="d-flex align-items-center mb-4">
                    <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-3.jpg" alt="">
                    <div class="ms-4">
                        <h5 class="mb-1">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita
                    erat ipsum et lorem et sit.</p>
            </div>
            <div class="testimonial-item bg-light rounded p-4">
                <div class="d-flex align-items-center mb-4">
                    <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-4.jpg" alt="">
                    <div class="ms-4">
                        <h5 class="mb-1">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita
                    erat ipsum et lorem et sit.</p>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Footer Start -->
<div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <?php dynamic_sidebar('footer_1'); ?>
            </div>
            <div class="col-lg-3 col-md-6">
                <?php dynamic_sidebar('footer_2'); ?>
            </div>
            <div class="col-lg-3 col-md-6">
                <?php dynamic_sidebar('footer_3'); ?>
            </div>
            <div class="col-lg-3 col-md-6">
                <?php dynamic_sidebar('footer_4'); ?>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-lg-square back-to-top"><i class="fa fa-solid fa-angle-up"></i></a>



<?php
get_footer();
?>