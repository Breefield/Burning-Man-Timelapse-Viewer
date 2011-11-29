    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?= assets(); ?>js/libs/jquery-1.6.2.min.js"><\/script>')</script>

    <!-- Add fancyBox -->
    <script type="text/javascript" src="<?= assets(); ?>js/libs/jquery.easing-1.3.pack.js"></script>
    <link rel="stylesheet" href="<?= assets(); ?>css/jquery.fancybox.css?v=2.0.1" type="text/css" media="screen" />
    <script type="text/javascript" src="<?= assets(); ?>js/libs/jquery.fancybox.pack.js?v=2.0.1"></script>

    <!-- Infinite scroll -->
    <script type="text/javascript" src="<?= assets(); ?>js/libs/jquery.infinitescroll.min.js"></script>

    <!-- scripts concatenated and minified via ant build script-->
    <script defer src="<?= assets(); ?>js/plugins.js"></script>
    <script defer src="<?= assets(); ?>js/script.js"></script>
    <!-- end scripts-->


    <!--<script> // Change UA-XXXXX-X to be your site's ID
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
    </script>-->

    <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
    <![endif]-->
  
</body>
</html>