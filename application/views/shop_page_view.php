<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" lang="en-US"><!--<![endif]-->
<head>
    <title>Shop Fullwide | Official - Premium Site Template</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Seo Meta -->
        <meta name="description" content="Official - Premium Multi-purpose HTML5 Template">
        <meta name="keywords" content="official, corporate, light, dark, Shop Fullwide, multi purpose, shop, magazine, premium">

    <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/official/bootstrap/css/bootstrap.min.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/official/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/official/styles/icons.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/official/styles/animate.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/official/styles/shop.css" media="screen" /><!-- Shop CSS -->
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
    <div id="layout" class="full shop_page">
        <?php include 'header.php'; ?>
        <div class="breadcrumb-place">
            <div class="row clearfix">
                <h3 class="page-title"> Shop </h3>
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
            <div class="row products official-shop clearfix mbs">
                <div class="clearfix mb">
                    <div class="grid_6">
                        <div class="product_256 flexslider">
                            <ul class="slides">
                                <?php 
                                    $handle = opendir('./theme/official/' . $image_folder[0]->image_folder);
                                    if ($handle != false) 
                                    {
                                        while (false !== ($file = readdir($handle)))
                                        {
                                            if ($file != "." && $file != "..")
                                            {
                                                echo '<li><img src="' . base_url(). 'theme/official/' . $image_folder[0]->image_folder . '/' . $file . '"' . ' alt="" /></li>';
                                                echo "\r\n";
                                            }
                                        }
                                        closedir($handle);
                                    }
                                   
                                ?>                                
                            </ul>
                        </div>
                    </div>
    
                    <div class="grid_6">
                        <div class="single-first-row mbt clearfix">
                            <div class="project-links">
                                <a href="portfolio-single-wide-slider.html"><i class="icon-angle-left mi"></i>Previous</a>
                                <a href="portfolio4.html"> <i class="icon-male toptip" title="Back to Men's Clothing"></i> </a>
                                <a href="portfolio-single-wide-video.html">Next<i class="icon-angle-right mii"></i></a>
                            </div><!-- links -->
                        </div>
                        <h3> <?php echo $title[0]->title; ?> </h3>
    
                        <p class="item_price"><span class="from">Price: </span> <span class="amount"><?php echo $price[0]->price; ?></span></p>
    
                        <p class="review">
                            <span class="mid">2 Reviews</span> 
                            <i class="icon-star" title="Rated 3.40 out of 5"></i>
                            <i class="icon-star" title="Rated 3.40 out of 5"></i>
                            <i class="icon-star" title="Rated 3.40 out of 5"></i>
                            <i class="icon-star-half-empty" title="Rated 3.40 out of 5"></i>
                            <i class="icon-star-empty" title="Rated 3.40 out of 5"></i>
                        </p>
                        <p><?php echo $short_description[0]->short_description; ?></p>
    
                        <form action="#">
                            <div class="pa_selection mb">
                                <select>
                                    <option value="" selected="selected" class="active">Choose an option…</option>
                                    <option value="free-size">Free Size</option>
                                    <option value="s">Small</option>
                                    <option value="m">Medium</option>
                                    <option value="l">Large</option>
                                    <option value="xl">XLarge</option>
                                </select>
                            </div>
                        
                            <div class="single_variation_wrap">                                
                                <div class="variations_button">
                                    <button type="submit" class="tbutton medium"><span>Add to shopping bag</span></button>
                                </div>
                            </div>
                            <div><input type="hidden" name="product_id" value=""></div>
                        </form>
                    </div>
                </div><!-- clear -->

                <div class="clearfix mbs">
                    <ul class="tabs">
                        <li><a href="#t-1" class="active">Full Description</a></li>
                        <li><a href="#t-2">ADDITIONAL INFORMATION</a></li>
                        <li><a href="#t-3">REVIEWS (2)</a></li>
                    </ul><!-- tabs -->
    
                    <ul class="tabs-content">
                        <li id="t-1" class="active">
                            <?php echo $full_description[0]->full_description; ?>
                        </li><!-- tab content -->
    
                        <li id="t-2">
                        </li><!-- tab content -->
    
                        <li id="t-3">
                            <ul class="showcomments clearfix">                      
                                <li class="clearfix">
                                    <div class="thumb">
                                        <a href="#"><img src="images/assets/user1.jpg" alt="#"></a>
                                    </div>
                                    <h5 class="entry-title"><a href="#" class="title">Jessica Alba</a><i>30 September, 2013</i>
                                        <span class="date review">
                                            <i class="icon-star" title="Rated 3.40 out of 5"></i>
                                            <i class="icon-star" title="Rated 3.40 out of 5"></i>
                                            <i class="icon-star" title="Rated 3.40 out of 5"></i>
                                            <i class="icon-star-half-empty" title="Rated 3.40 out of 5"></i>
                                            <i class="icon-star-empty" title="Rated 3.40 out of 5"></i>
                                        </p>
                                    </h5>
                                    <p>Nam vitae tellus lectus. Vivamus et ultrices urna. Morbi et elit odio, vel cursus sapien. Curabitur ac turpis et velit hendrerit commodo. Curabitur orci erat. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                                </li>                       
                                <li class="clearfix">
                                    <div class="thumb">
                                        <a href="#"><img src="images/assets/user2.jpg" alt="#"></a>
                                    </div>
                                    <h5 class="entry-title"><a href="#" class="title">John Doe</a><i>18 September, 2013</i>
                                        <span class="date review">
                                            <i class="icon-star" title="Rated 2 out of 5"></i>
                                            <i class="icon-star" title="Rated 2 out of 5"></i>
                                            <i class="icon-star-empty" title="Rated 2 out of 5"></i>
                                            <i class="icon-star-empty" title="Rated 2 out of 5"></i>
                                            <i class="icon-star-empty" title="Rated 2 out of 5"></i>
                                        </p>
                                    </h5>
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham. making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                                </li>
                            </ul>
                        </li><!-- tab content -->
                    </ul><!-- end tabs -->
                </div><!-- clearfix -->
            </div><!-- row -->

        </div><!-- end page content -->

        <?php include 'footer.php'; ?>
    </div><!-- end layout -->
    </div><!-- end frame -->
    
    <div id="toTop"><i class="icon-angle-up"></i></div><!-- Back to top -->
    <?php include 'needed_script.php'; ?>
</body>
 
</html>
