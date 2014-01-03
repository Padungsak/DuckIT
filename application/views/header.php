
                <header id="header" class="header_v1">
                    <div class="extrabox">
                        <div class="row clearfix">
                            <div class="extra-content">
                                <div class="grid_8">
                                    <div id="map1" class="official-map"></div>
                                </div><!-- grid 8 -->
        
                                <div class="grid_4">
                                    <h3 class="col-title"> Quick Contact </h3><span class="liner"></span>
                                    <div class="widget-content">
                                        <form method="post" id="contactForm-widget" action="http://theme20.com/demo/official/processForm.php">
                                            <div class="clearfix">
                                                <div class="grid_6 alpha fll"><input type="text" name="senderName" id="senderName" placeholder="Name *" class="requiredField" /></div>
                                                <div class="grid_6 omega flr"><input type="text" name="senderEmail" id="senderEmail" placeholder="Email Address *" class="requiredField email" /></div>
                                            </div>
                                            <div><textarea name="message" id="message" placeholder="Message *" class="requiredField" rows="6"></textarea></div>
                                            <input type="submit" id="sendMessage" name="sendMessage" value="Send Email" />
                                            <span>  </span>
                                        </form><!-- end form -->
                                    </div><!-- widget content -->
                                </div><!-- grid 4 -->
                            </div><!-- extra content -->
        
                            <div class="arrow-down"><i class="icon-angle-down"></i></div><!-- arrow down -->
                        </div><!-- end row -->
                    </div>  <!-- end extrabox -->
        
                    <div class="head">
                        <div class="row clearfix">
                            <div class="logo">
                                <a href="<?php echo base_url(); ?>" title="Duck IT"><img src="<?php echo base_url(); ?>theme/official/images/duckitlogo.png" alt="Duck IT"></a>
                            </div><!-- end logo -->
        
                            <div class="social social-head">
                                <a href="#" class="toptip" title="Linkedin"><i class="icon-linkedin"></i></a>
                                <a href="#" class="toptip" title="Github"><i class="icon-github"></i></a>
                                <a href="#" class="toptip" title="Dribbble"><i class="icon-dribbble"></i></a>
                                <a href="#" class="toptip" title="instagram"><i class="icon-instagram"></i></a>
                                <a href="#" class="toptip" title="Google Plus"><i class="icon-google-plus"></i></a>
                                <a href="https://www.facebook.com/itbyduck" class="toptip" title="Facebook"><i class="icon-facebook"></i></a>
                                <a href="#" class="toptip" title="Twitter"><i class="icon-twitter"></i></a>
                            </div><!-- end social -->
        
                            <div class="info">
                                <span><i class="icon-envelope-alt"></i> suntonpon@hotmail.com</span>
                                <pan><i class="icon-phone"></i> +66 91034 4556</span>
                            </div><!-- end info -->
                        </div><!-- row -->
                    </div><!-- head -->
        
                    <div class="headdown">
                        <div class="row clearfix">
                            <nav>
                                <ul class="sf-menu">
                                    <li <?php 
                                    if ($controller == 'home')
                                        echo 'class="current selectedLava"';
                                    ?>>
                                        <a href="<?php echo base_url(); ?>">Home</a>
                                    </li>
                                    <li <?php 
                                    if ($controller == 'blog')
                                        echo 'class="current selectedLava"';
                                    ?>>
                                       <a href="<?php echo base_url(); ?>index.php/blog_controller">Blog</a>                       
                                    </li>

                                </ul><!-- end menu -->
                            </nav><!-- end nav -->
        
        
        
                            <div class="search">
                                <form action="http://theme20.com/demo/official/search.html" id="search" method="get">
                                    <input id="inputhead" name="search" type="text" onfocus="if (this.value=='Start Searching...') this.value = '';" onblur="if (this.value=='') this.value = 'Start Searching...';" value="Start Searching..." placeholder="Start Searching ...">
                                    <button type="submit"><i class="icon-search"></i></button>
                                </form><!-- end form -->
                            </div><!-- search -->
                        </div><!-- row -->
                    </div><!-- headdown -->
                </header><!-- end header -->

                