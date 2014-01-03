
         <!-- Scripts -->
        <script type="text/javascript" src="<?php echo base_url(); ?>theme/official/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>theme/official/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>theme/official/js/rs-plugin/pluginsources/jquery.themepunch.plugins.min.js"></script>  
        <script type="text/javascript" src="<?php echo base_url(); ?>theme/official/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>theme/official/js/theme20.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>theme/official/js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>theme/official/js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>theme/official/js/jquery.knob.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>theme/official/js/jquery.nicescroll.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>theme/official/js/gmap3.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>theme/official/js/twitter/jquery.tweet.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>theme/official/js/custom.js"></script>
        <script type="text/javascript"> 
        /* <![CDATA[ */
            var tpj=jQuery;
            tpj.noConflict();
            tpj(document).ready(function() {
            if (tpj.fn.cssOriginal!=undefined)
                tpj.fn.css = tpj.fn.cssOriginal;
                var api= tpj('.revolution').revolution({
                    delay:9000,
                    startheight:380,
                    startwidth:960,
                    hideThumbs:200,
                    thumbWidth:100,
                    thumbHeight:50,
                    thumbAmount:5,
                    navigationType:"bullet",
                    navigationArrows:"verticalcentered",
                    navigationStyle:"square",   
                    touchenabled:"on", 
                    onHoverStop:"on", 
                    navOffsetHorizontal:0,
                    navOffsetVertical:20,
                    shadow:0
                });
            });
            
             var disqus_shortname = 'officialtemplate'; 
            (function () {
                var s = document.createElement('script'); s.async = true;
                s.type = 'text/javascript';
                s.src = '//' + disqus_shortname + '.disqus.com/count.js';
                (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
            }());
    
            // Twitter Share
            ! function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0],
                    p = /^http:/.test(d.location) ? 'http' : 'https';
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = p + '://platform.twitter.com/widgets.js';
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, 'script', 'twitter-wjs');
    
            // Facebook Like
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "../../../connect.facebook.net/en_US/all.js#xfbml=1&appId=138798126277575";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
    
            // Xing
            ;(function (d, s) {
                var x = d.createElement(s),
                s = d.getElementsByTagName(s)[0];
                x.src = "../../../www.xing-share.com/js/external/share.js";
                s.parentNode.insertBefore(x, s);
            })(document, "script");

        /* ]]> */
        </script>