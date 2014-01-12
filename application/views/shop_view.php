<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->

<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US">
<!--<![endif]-->

<head>
    <meta name="generator" content=
    "HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />

    <title>Shop Fullwide | Official - Premium Site Template</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /><!-- Seo Meta -->
    <meta name="description" content="Official - Premium Multi-purpose HTML5 Template" />
    <meta name="keywords" content="official, corporate, light, dark, Shop Fullwide, multi purpose, shop, magazine, premium" />
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/official/bootstrap/css/bootstrap.min.css" media=
    "screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/official/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/official/styles/icons.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/official/styles/animate.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/official/styles/shop.css" media="screen" />
    <!-- Shop CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/official/styles/responsive.css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css' /><!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>theme/official/images/favicon.ico" />
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>theme/official/images/apple-touch-icon.html" /><!--[if IE]>
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
                    <h3 class="page-title">Shop</h3>

                    <div class="breadcrumbIn">
                        <span>You are here:</span>

                        <ul>
                            <li>
                                <a href="index.html" title="Homepage"></a>
                            </li>

                            <li>Blog Medium Image</li>
                        </ul>
                    </div><!-- breadcrumbIn -->
                </div><!-- row -->
            </div><!-- breadcrumb -->

            <div class="page-content">
                <div class="row official-shop clearfix mbs">
                    <div class="woo-title">
                        <h3 class="col-title">Products <small>Showing 1–8 of 256 results</small></h3>

                        <div class="filter_wrapper">
                            <form class="woocommerce-ordering" method="get">
                                <select name="orderby" class="orderby hasCustomSelect">
                                    <option value="menu_order">
                                        Default sorting
                                    </option>

                                    <option value="popularity">
                                        Sort by popularity
                                    </option>

                                    <option value="rating">
                                        Sort by average rating
                                    </option>

                                    <option value="date" selected="selected">
                                        Sort by newness
                                    </option>

                                    <option value="price">
                                        Sort by price: low to high
                                    </option>

                                    <option value="price-desc">
                                        Sort by price: high to low
                                    </option>
                                </select>
                            </form>
                        </div>
                    </div><!-- woo title -->

                    <div id="masonry-container" class="mbt three-column transitions-enabled centered clearfix">
                        <div class="grid_12">
                            <ul class="products">
                                <?php 
                                $goods_number = count($no);
                                for($index = 0; $index < SHOP_IN_PAGE_NUMBER; $index++)
                                {
                                    if($index >= $goods_number)
                                    {
                                        break;
                                    }
                                ?>
                                <li class="grid_3">
                                    <div class="product-content">                                        
                                        <div class="product-img">
                                            <div class="product_1 flexslider">
                                                <ul class="slides">
                                                    <?php                                                 
                                                    $handle = opendir('./theme/official/' . $image_folder[$index]->image_folder);
                                                     if ($handle != false) {
                                                       while (false !== ($file = readdir($handle)))
                                                       {
                                                          if ($file != "." && $file != "..")
                                                          {
                                                              echo '<li>' . "\r\n";
                                                              echo '<a href="' . base_url() . 'index.php/shop_page_controller?item_number=' . $no[$index]->no .'"><img src="' . base_url(). 'theme/official/' . $image_folder[$index]->image_folder . '/' . $file .'"' ."\r\n";
                                                              echo ' alt="" /></a>'  . "\r\n";
                                                              echo '</li>'  . "\r\n";
                                                          }
                                                      }
                                                      closedir($handle);
                                                      }      
                                                    ?>
                                                </ul>
                                            </div>
                                        </div><a href="#" class="add-to">Add to Cart</a>                                                                              
                                    </div><!-- product content -->

                                    <h5><a href="shop-single-product.html"><?php echo $title[$index]->title ?></a></h5><span class=
                                    "price"><span class="from">ราคา: </span><strong><?php echo $price[$index]->price ?> บาท</strong></span>
                                </li><!-- product -->
                                <?php
                                }
                                ?> 
                            </ul><!-- products -->
                        </div><!-- grid full -->
                    </div><!-- masonry -->

                    <div class="pagination-tt clearfix">
                        <ul>
                            <?php 
                                    if($page_number == 1)
                                    {
                                        echo '<li><span>'.$page_number.'</span></li>';
                                        if(1*SHOP_IN_PAGE_NUMBER < $record_count)
                                        {                                                          
                                            for($index = 1; ($index <= 4) && ($index*BLOG_IN_PAGE_NUMBER) < $record_count; $index++)
                                            {
                                                echo '<li><a href="'. base_url(). 'index.php/shop_controller?page_number=' . (string)($page_number + $index) .'">' . (string)($page_number + $index) . '</a></li>';
                                            }
                                        }
                                    }
                                    else 
                                    {
                                        echo '<li><a href="'. base_url(). 'index.php/shop_controller?page_number=' . (string)($page_number -1) .'">' . (string)($page_number -1) . '</a></li>';
                                        echo '<li><span>'.$page_number.'</span></li>';
                                        if($page_number*BLOG_IN_PAGE_NUMBER < $record_count)
                                        {
                                            for($index = $page_number; $index <= ($page_number+PAGE_NUMBER) ; $index++)
                                            {
                                                if(($index*BLOG_IN_PAGE_NUMBER) > $record_count)
                                                {
                                                    break;
                                                }
                                                echo '<li><a href="'. base_url(). 'index.php/shop_controller?page_number=' . (string)($index+1) .'">' . (string)($index+1) . '</a></li>';
                                            }
                                        }
                                    }
                                          
                                ?>
                        </ul><span class=
                        "pages"><?php echo 'Page '. $page_number. ' of '. ($record_count/BLOG_IN_PAGE_NUMBER) ?></span>
                    </div><!-- pagination -->
                </div><!-- row -->
            </div><!-- end page content -->
            <?php include 'footer.php'; ?>
        </div><!-- end layout -->
    </div><!-- end frame -->

    <div id="toTop"></div><!-- Back to top -->
    <?php include 'needed_script.php'; ?>
</body>
</html>
