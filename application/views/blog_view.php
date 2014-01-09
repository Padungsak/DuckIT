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

    <!-- Custom Styles -->
        <style>
            .breadcrumb-place{background: url(<?php echo base_url(); ?>theme/official/images/breadcrumb10.jpg)}
        </style>

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
                        <li> Blog Medium Image </li>
                    </ul>
                </div><!-- breadcrumbIn -->
            </div><!-- row -->
        </div><!-- breadcrumb -->

        <div class="page-content">
            <div class="row clearfix mbs">
                <div class="grid_8 posts m-thumbnails">
                    <?php 
                        $blog_length = count($blog_type);
                        for($index = 0; $index < BLOG_IN_PAGE_NUMBER; $index++)
                        {
                            if($index < $blog_length)
                            {
                     ?>
                           <div class="post clearfix">      
                            <?php                     
                            if( $blog_type[$index]->blog_type == 'image')
                            {
                                echo '<a href="blog-single-image.html" class="thumb-medium fll"><img src="' . base_url() . 'theme/official/' . $stuff_link[$index]->stuff_link . '" alt="#"></a>';
                            }   
                            else 
                            {
                                echo '<div class="iframe-thumb fll"><iframe src=' . $stuff_link[$index]->stuff_link. ' width="100%" height="240"></iframe></div>';
                            }                     
                            ?>
                            
                            <div class="content-half">
                                <div class="meta-box">
                                    <h3> <a href="<?php echo base_url(); ?>index.php/blog_page_controller?no=<?php echo $no[$index]->no; ?>"><?php echo $blog_title[$index]->blog_title ?></a> </h3>
                                    <div class="meta-more">
                                        <span><i class="icon-user"></i> <a href="#"><?php echo $auther_name[$index]->auther_name ?></a></span>
                                        <span><i class="icon-time"></i> <a href="#"><?php echo $post_date[$index]->post_date ?></a></span>
                                    </div><!-- meta more -->
                                </div><!-- meta box -->
                                <p><?php echo $shot_description[$index]->shot_description ?></p>
                                <a href="<?php echo base_url(); ?>index.php/blog_page_controller?no=<?php echo $no[$index]->no; ?>" class="tbutton small"><span>Read More<i class="mii icon-angle-right"></i></span></a>
                            </div><!-- content half -->
                        </div>
                        <?php
                            }
                         }
                        ?>                   
                        
                    <div class="pagination-tt clearfix">
                        <ul>
                            <?php 
                                if($page_number == 1)
                                {
                                    echo '<li><span>'.$page_number.'</span></li>';
                                    if(1*BLOG_IN_PAGE_NUMBER < $record_count)
                                    {                                                          
                                        for($index = 1; ($index <= 4) && ($index*BLOG_IN_PAGE_NUMBER) < $record_count; $index++)
                                        {
                                            echo '<li><a href="'. base_url(). 'index.php/blog_controller?page_number=' . (string)($page_number + $index) .'">' . (string)($page_number + $index) . '</a></li>';
                                        }
                                    }
                                }
                                else 
                                {
                                    echo '<li><a href="'. base_url(). 'index.php/blog_controller?page_number=' . (string)($page_number -1) .'">' . (string)($page_number -1) . '</a></li>';
                                    echo '<li><span>'.$page_number.'</span></li>';
                                    if($page_number*BLOG_IN_PAGE_NUMBER < $record_count)
                                    {
                                        for($index = $page_number; $index <= ($page_number+PAGE_NUMBER) ; $index++)
                                        {
                                            if(($index*BLOG_IN_PAGE_NUMBER) > $record_count)
                                            {
                                                break;
                                            }
                                            echo '<li><a href="'. base_url(). 'index.php/blog_controller?page_number=' . (string)($index+1) .'">' . (string)($index+1) . '</a></li>';
                                        }
                                    }
                                }
                                      
                            ?>
                        </ul>
                        <span class="pages"><?php echo 'Page '. $page_number. ' of '. ($record_count/BLOG_IN_PAGE_NUMBER) ?></span>
                    </div><!-- pagination -->
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