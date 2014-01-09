<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" lang="en-US"><!--<![endif]-->
<head>
    <title>Blog Medium Image | Official - Premium Site Template</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Seo Meta -->
        <meta name="description" content="Official - Premium Multi-purpose HTML5 Template">
        <meta name="keywords" content="official, corporate, light, dark, themeforest, multi purpose, shop, magazine, premium">

    <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/official/bootstrap/css/bootstrap.min.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/official/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/official/styles/icons.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/official/styles/animate.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/official/styles/responsive.css" media="screen" />
        <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
        
    <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>theme/official/images/favicon.ico">
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>theme/official/images/apple-touch-icon.html">

    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EmulateIE8; IE=EDGE" />
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="frame_">
    <div id="layout" class="full">
        <?php include 'header.php'; ?>
        <div class="breadcrumb-place">
            <div class="row clearfix">
                <h3 class="page-title"> Blog </h3>
                <div class="breadcrumbIn">
                    <span> You are here: </span>
                    <ul>
                        <li><a href="index.html" title="Homepage"> <i class="icon-home"></i> </a></li>
                        <li><a href="blog-right-sidebar.html" title="Blog"> Blog </a></li>
                        <li> Neque porro quisquam est qui dolorem ipsum quia dolor </li>
                    </ul>
                </div><!-- breadcrumbIn -->
            </div><!-- row -->
        </div><!-- breadcrumb -->

        <div class="page-content">
            <div class="row clearfix mbs">
                <div class="grid_8 posts">
                         <div class="post">      
                            <?php                     
                            if( $blog_data[0]->blog_type == 'image')
                            {
                                echo '<a href="blog-single-image.html" class="thumb-big fll"><img src="' . base_url() . 'theme/official/' . $blog_data[0]->stuff_link . '" alt="#"></a>';
                            }   
                            else 
                            {
                                echo '<div class="iframe-thumb"><iframe src="' . $blog_data[0]->stuff_link. '?title=0&amp;byline=0&amp;portrait=0" width="100%" height="380"></iframe></div>';
                            }                     
                            ?>
                            
                            <div class="meta-box">
                                <img class="image-author" src="<?php echo base_url() . 'theme/official/' . $blog_data[0]->auther_image_link; ?>" alt="#">
                                <h3> <?php echo $blog_data[0]->blog_title ?> </h3>                              
                                <div class="meta-more">
                                    <span><i class="icon-user"></i> <a href="#"><?php echo $blog_data[0]->auther_name ?></a></span>
                                    <span><i class="icon-time"></i> <a href="#"><?php echo $blog_data[0]->post_date ?></a></span>
                                </div><!-- meta more -->
                            </div><!-- meta box -->
                            <p><?php echo $blog_data[0]->long_description ?></p>
                            
                            <div class="share-post mb mtf clearfix">
                                <div class="btn-share"><a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical">Tweet</a></div>
                                <div class="btn-share"><div id="fb-root"></div><div class="fb-like" data-send="false" data-layout="box_count" data-show-faces="false"></div></div>
                                <div class="btn-share"><script type="IN/Share" data-counter="top"></script></div>
                                <div class="btn-share"><script data-counter="top" type="XING/Share"></script></div>
                                <div class="btn-share"><g:plusone size="tall"></g:plusone></div>
                                <div class="btn-share"><a class='DiggThisButton DiggMedium'></a></div>
                                <div class="btn-share"><script type="text/javascript" src="../../../www.reddit.com/static/button/button2.js"></script></div>
                            </div><!-- close share post -->
                        </div>                                         
                </div><!-- grid 8 posts -->


            </div><!-- row -->
        </div><!-- end page content -->
        <?php include 'footer.php'; ?>
    </div><!-- end layout -->
    </div><!-- end frame -->

    <div id="toTop"><i class="icon-angle-up"></i></div><!-- Back to top -->
    <?php include 'needed_script.php'; ?>
</body>
 
</html>