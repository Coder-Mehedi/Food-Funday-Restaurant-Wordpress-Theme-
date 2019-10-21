<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Food Funday Restaurant - One page HTML Responsive</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/images/apple-touch-icon.png">

    <?php wp_head(); ?>
    <link id="changeable-colors" rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/colors/orange.css" />

</head>

<body>
    <!-- <div id="loader">
        <div id="status"></div>
    </div> -->
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="#banner">Home</a></li>
                                    <li><a href="#about">About us</a></li>
                                    <li><a href="#menu">Menu</a></li>
                                    <li><a href="#our_team">Team</a></li>
                                    <li><a href="#gallery">Gallery</a></li>
                                    <li><a href="#blog">Blog</a></li>
                                    <li><a href="#pricing">pricing</a></li>
                                    <li><a href="#reservation">Reservaion</a></li>
                                    <li><a href="#footer">Contact us</a></li>
                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
    <!-- end site-header -->
    
    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1>Dinner with us  <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Friends:Family:Officemates" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                            <h2>Accidental appearances </h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem nonummy nibh euismod</p>
                            <div class="book-btn">
                                <a href="#reservation" class="table-btn hvr-underline-from-center">Book my Table</a>
                            </div>
                            <a href="#about">
                                <div class="mouse"></div>
                            </a>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->

    <div id="about" class="about-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">

                    <?php if(get_field('change_about_us_section_title','option')): ?>
                        <h2 class="block-title"> <?php the_field('change_about_us_section_title','option') ?> </h2>
                    <?php endif ?>

                    <?php if(get_field('tag_line_optional','option')): ?>
                        <h3><?php the_field('tag_line_optional','option') ?></h3>
                    <?php endif ?>

                    <?php if(get_field('about_section_details','option')): ?>
                        <p><?php the_field('about_section_details','option') ?></p>
                    <?php endif ?>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="about-images">
                        <?php if(get_field('main_image','option')): ?>
                            <img class="about-main" src="<?php the_field('main_image','option') ?>" alt="About Main Image">
                        <?php endif ?>

                        <?php if(get_field('secondary_image', 'option')): ?>
                            <img class="about-inset" src="<?php the_field('secondary_image','option') ?>" alt="About Inset Image">
                        <?php endif ?>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <div class="special-menu pad-top-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
<?php if( get_field('todays_special_section_heading', 'option') ): ?>
                        <h2 class="block-title color-white text-center"> <?php the_field('todays_special_section_heading', 'option') ?> </h2>
    <?php else: ?>
                            <h2 class="block-title color-white text-center">Today's Special</h2>
<?php endif ?>

<?php if( get_field('todays_special_section_details', 'option') ): ?>
                        <h5 class="title-caption text-center">
    <?php the_field('todays_special_section_details', 'option') ?> 
                        </h5>
    <?php else: ?>
                        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia,nostrud exercitation ullamco.</h5>
<?php endif ?>
                    </div>
                    <div class="special-box">
                        <div id="owl-demo">

<?php if( have_rows('todays_special_recipe', 'option') ): ?>
    <?php while( have_rows('todays_special_recipe', 'option') ): the_row(); ?>

                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            <?php the_sub_field('recipe_name'); ?>
                                            <div class="line"></div>
                                            <div class="dit-line">
                                                <?php the_sub_field('recipe_details') ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="<?php the_sub_field('photo'); ?>" alt="sp-menu">
                                </div>
                            </div>
    <?php endwhile ?>
<?php endif ?>
                        </div>
                    </div>
                    <!-- end special-box -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end special-menu -->

    <div id="menu" class="menu-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                <?php if(get_field('recipe_menu_section__title','option')): ?>
                        <h2 class="block-title text-center"><?php the_field('recipe_menu_section__title','option') ?></h2>
                <?php endif ?>
                <?php if(get_field('recipe_menu_section__description','option')): ?>
                        <p class="title-caption text-center"><?php the_field('recipe_menu_section__description','option') ?></p>
                <?php endif ?>
                    </div>
                    <div class="tab-menu">
                        <div class="slider slider-nav">
                            <div class="tab-title-menu">
                                <h2>STARTERS</h2>
                                <p> <i class="flaticon-canape"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>MAIN DISHES</h2>
                                <p> <i class="flaticon-dinner"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>DESERTS</h2>
                                <p> <i class="flaticon-desert"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>DRINKS</h2>
                                <p> <i class="flaticon-coffee"></i> </p>
                            </div>
                        </div>
                        <div class="slider slider-single">
                            <div>

<?php if( have_rows('starter', 'option') ): ?>
    <?php while( have_rows('starter', 'option') ): the_row(); ?>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="<?php the_sub_field('starter_recipe_image') ?>" alt="" class="img-responsive">
                                        <div>
                                            <h3><?php the_sub_field('starter_recipe_name') ?></h3>
                                            <p><?php the_sub_field('starter_recipe_description') ?></p>
                                        </div>
                                        <span class="offer-price">$<?php the_sub_field('starter_price') ?></span>
                                    </div>
                                </div>
                                <!-- end col -->
    <?php endwhile ?>
<?php endif ?>
                            
                            </div>
                            <div>

<?php if( have_rows('main_dishes', 'option') ): ?>
    <?php while( have_rows('main_dishes', 'option') ): the_row(); ?>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="<?php the_sub_field('main_dishes_recipe_image') ?>" alt="" class="img-responsive">
                                        <div>
                                            <h3><?php the_sub_field('main_dishes_recipe_name') ?></h3>
                                            <p><?php the_sub_field('main_dishes_recipe_description') ?></p>
                                        </div>
                                        <span class="offer-price">$<?php the_sub_field('main_dishes_price') ?></span>
                                    </div>
                                </div>
                                <!-- end col -->
    <?php endwhile ?>
<?php endif ?>

                            </div>

                            <div>

<?php if( have_rows('deserts', 'option') ): ?>
    <?php while( have_rows('deserts', 'option') ): the_row(); ?>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="<?php the_sub_field('deserts_recipe_image') ?>" alt="" class="img-responsive">
                                        <div>
                                            <h3><?php the_sub_field('deserts_recipe_name') ?></h3>
                                            <p><?php the_sub_field('deserts_recipe_description') ?></p>
                                        </div>
                                        <span class="offer-price">$<?php the_sub_field(
                                            'deserts_price') ?></span>
                                    </div>
                                </div>          
    <?php endwhile ?>
<?php endif ?>

                            </div>
                            <div>
<?php if( have_rows('drinks', 'option') ): ?>
    <?php while( have_rows('drinks', 'option') ): the_row(); ?>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="<?php the_sub_field('drinks_recipe_image') ?>" alt="" class="img-responsive">
                                        <div>
                                            <h3><?php the_sub_field('drinks_recipe_name') ?></h3>
                                            <p><?php the_sub_field('drinks_recipe_description') ?></p>
                                        </div>
                                        <span class="offer-price">$<?php the_sub_field('drinks_price') ?></span>
                                    </div>
                                </div>
                                <!-- end col -->
    <?php endwhile ?>
<?php endif ?>

                            </div>
                        </div>
                    </div>
                    <!-- end tab-menu -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end menu -->
    <?php 
    $args = array('post_type' => 'team_member', 'posts_per_page' => 3);
    $the_query = new WP_Query( $args ); ?>
     
    <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <div id="our_team" class="team-main pad-top-100 pad-bottom-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
                        <?php the_title(); ?>   
                    </h2>
                        <div class="title-caption text-center">
                            <?php the_content() ?>
                        </div>
                    </div>
                    <div class="team-box">

                        <div class="row">
     
        <!-- pagination here -->
     
        <!-- the loop -->
        
            <?php 
                if( have_rows('members') ):

                     // loop through the rows of data
                    while ( have_rows('members') ) : the_row();

                        if( get_row_layout() == 'Member' ):

 ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="sf-team">
                                    <div class="thumb">
                                    <?php 
                                        $image = get_sub_field('photo');
                                        if( !empty( $image ) ): ?>

                                        <a href="#"><img src="<?php echo esc_url($image); ?>" alt=""></a>
                                        
                                    <?php endif; ?>
                                    </div>

                                    <div class="text-col">
                                        <h3><?php the_sub_field('name'); ?></h3>
                                        <p><?php the_sub_field('member_details') ?></p>
                                        <ul class="team-social">
                                            
                                            <li><a href="<?php the_sub_field('facebook') ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="<?php the_sub_field('twitter') ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="<?php the_sub_field('linkedin') ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php 
                            endif;
                                endwhile;
                            else :

                                echo 'nothing found';

                            endif;

                         ?>
                    <?php endwhile; ?>
                 
                    <?php wp_reset_postdata(); ?>
 
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                            <!-- end col -->
                            
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end team-box -->

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end team-main -->







    <div id="gallery" class="gallery-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
<?php if( get_field('gallery_title', 'option') ): ?>

                        <h2 class="block-title text-center">

                            <?php the_field('gallery_title', 'option'); ?>
                        </h2>
<?php endif ?>

<?php if( get_field('gallery_description', 'option') ): ?>
                        <p class="title-caption text-center"><?php the_field('gallery_description', 'option'); ?></p>
<?php endif ?>
                    </div>

                    <div class="gal-container clearfix">

<?php $images = get_field('gallery','option'); 
    if($images):
        foreach($images as $image): ?>

                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="<?php echo esc_url($image['url']); ?>" data-toggle="modal" data-target="#1">
                                    <img src="<?php echo esc_url($image); ?>" alt="" />
                                </a>
                                <div class="modal fade" id="1" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="<?php echo esc_url($image); ?>" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 1 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        <?php endforeach;endif; ?>

                    </div>
                    <!-- end gal-container -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end gallery-main -->

    <div id="blog" class="blog-main pad-top-100 pad-bottom-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php if(get_field("our_blog_section_title",'option')): ?>
                    <h2 class="block-title text-center">
                    <?php the_field('our_blog_section_title','option') ?>
                </h2>
            <?php endif ?>
                    <div class="blog-box clearfix">
    <?php 
    $blog_args = array('post_type' => 'our_blog', 'posts_per_page' => 4);
    $blog_query = new WP_Query( $blog_args ); ?>
     
    <?php if ( $blog_query->have_posts() ) : ?>
        <?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>

                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <div class="blog-img-box">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="post thumbnail" />
                                        <div class="overlay">
                                            <a href="<?php the_permalink(); ?>"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-dit">
                                        <p><span><?php echo get_the_date(); ?></span></p>
                                        <h2><?php the_title() ?></h2>
                                        <h5><?php the_author( ) ?></h5>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>

        <?php endwhile;endif ?>
                        
                    </div>
                    <!-- end blog-box -->
                    
<?php if( have_rows('action_button', 'option') ): ?>
    <?php while( have_rows('action_button', 'option') ): the_row(); ?>

                    <div class="blog-btn-v">
                        <a class="hvr-underline-from-center" href="<?php the_sub_field('our_blog_action_button_url') ?>"><?php the_sub_field('our_blog_action_button_text') ?></a>
                    </div>
<?php endwhile;endif ?>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end blog-main -->

    <div id="pricing" class="pricing-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="block-title text-center">
                        Pricing     
                    </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut orci varius, elementum lectus nec, aliquam lectus. Duis neque augue, maximus in sapien ut, porta pharetra odio.</p>
                </div>
                <div class="panel-pricing-in">

<?php if( have_rows('pricing_plans', 'option') ): ?>
    <?php while( have_rows('pricing_plans', 'option') ): the_row(); ?>
                    <!-- item -->
                    <div class="col-md-4 col-sm-4 text-center">
                        <div class="panel panel-pricing">
                            <div class="panel-heading">
                                <div class="pric-icon">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/store.png" alt="" />
                                </div>
                                <h3><?php the_sub_field('plan_name'); ?></h3>
                            </div>
                            <div class="panel-body text-center">
                                <p><strong>$<?php the_sub_field('plan_price'); ?>/<span>Month</span></strong></p>
                            </div>
                            <ul class="list-group text-center">
    
    <?php if(have_rows('giving_what')): ?>
        <?php while(have_rows('giving_what')): the_row(); ?>
            <?php if(get_sub_field('option_1')): ?>
                <li class="list-group-item"><i class="fa fa-check"></i> One Website</li>
            <?php else: ?>
                <li class="list-group-item"><i class="fa fa-times"></i> One Website</li>
            <?php endif ?>

            <?php if(get_sub_field('option_2')): ?>
                <li class="list-group-item"><i class="fa fa-check"></i> One User</li>
            <?php else: ?>
                <li class="list-group-item"><i class="fa fa-times"></i> One User</li>
            <?php endif ?>

            <?php if(get_sub_field('option_3')): ?>
                <li class="list-group-item"><i class="fa fa-check"></i> 10 GB Bandwidth</li>
            <?php else: ?>
                <li class="list-group-item"><i class="fa fa-times"></i> 10 GB Bandwidth</li>
            <?php endif ?>

            <?php if(get_sub_field('option_4')): ?>
                <li class="list-group-item"><i class="fa fa-check"></i> 2GB Storage</li>
            <?php else: ?>
                <li class="list-group-item"><i class="fa fa-times"></i> 2GB Storage</li>
            <?php endif ?>

            <?php if(get_sub_field('option_5')): ?>
                <li class="list-group-item"><i class="fa fa-check"></i> Offline work</li>
            <?php else: ?>
                <li class="list-group-item"><i class="fa fa-times"></i> Offline work</li>
            <?php endif ?>

            <?php if(get_sub_field('option_6')): ?>
                <li class="list-group-item"><i class="fa fa-check"></i> 24x7 Support</li>
            <?php else: ?>
                <li class="list-group-item"><i class="fa fa-times"></i> 24x7 Support</li>
            <?php endif ?>
        <?php endwhile ?>
    <?php endif ?>

                            </ul>
                            <div class="panel-footer">
                                <a class="btn btn-lg btn-block hvr-underline-from-center" href="<?php the_sub_field('purchase_now_button_url'); ?>">Purchase Now!</a>
                            </div>
                        </div>
                    </div>
                    <!-- /item -->
    <?php endwhile ?>
<?php endif ?>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end pricing-main -->

    <div id="reservation" class="reservations-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="form-reservations-box">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">
                        Reservations            
                    </h2>
                        </div>
                        <h4 class="form-title">BOOKING FORM</h4>
                        <p>PLEASE FILL OUT ALL REQUIRED* FIELDS. THANKS!</p>
                        <?php echo do_shortcode('[contact-form-7 id="147" title="Reservations Form"]')  ?>

                        
                        <!-- end form -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end reservations-box -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end reservations-main -->

    <div id="footer" class="footer-main">
        <div class="footer-news pad-top-100 pad-bottom-70 parallax">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="ft-title color-white text-center"> Newsletter </h2>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                        <form>
                            <input type="email" placeholder="Enter your e-mail id">
                            <a href="#" class="orange-btn"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>
                        </form>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer-news -->
        <div class="footer-box pad-top-70">
            <div class="container">
                <div class="row">
                    <div class="footer-in-main">
                        <div class="footer-logo">
                            <div class="text-center">
                                <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-a">
                                <?php dynamic_sidebar( 'footer-1' ) ?>
                            </div>
                            <!-- end footer-box-a -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-b">
                                <?php dynamic_sidebar( 'footer-2' ) ?>
                            </div>
                            <!-- end footer-box-b -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-c">
                                <?php dynamic_sidebar( 'footer-3' ) ?>                   
                            </div>
                            <!-- end footer-box-c -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-d">
                                <?php dynamic_sidebar( 'footer-4' ) ?>
                            </div>
                            <!-- end footer-box-d -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end footer-in-main -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <div id="copyright" class="copyright-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h6 class="copy-title"> Copyright &copy; 2017 Food Funday is powered by <a href="#" target="_blank"></a> </h6>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end copyright-main -->
        </div>
        <!-- end footer-box -->
    </div>
    <!-- end footer-main -->

    <a href="#" class="scrollup" style="display: none;">Scroll</a>

    <section id="color-panel" class="close-color-panel">
        <a class="panel-button gray2"><i class="fa fa-cog fa-spin fa-2x"></i></a>
        <!-- Colors -->
        <div class="segment">
            <h4 class="gray2 normal no-padding">Color Scheme</h4>
            <a title="orange" class="switcher orange-bg"></a>
            <a title="strong-blue" class="switcher strong-blue-bg"></a>
            <a title="moderate-green" class="switcher moderate-green-bg"></a>
            <a title="vivid-yellow" class="switcher vivid-yellow-bg"></a>
        </div>
    </section>


    <?php wp_footer() ?>
</body>

</html>