<!doctype html>
<html lang="en">
<head>
    <!-- important for compatibility charset -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title><?php echo $__env->yieldContent('title'); ?></title>
    
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    
    <!-- important for responsiveness remove to make your site non responsive. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- FavIcon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(base_url('assets/frontend/')); ?>images/favicon.png">
    
    <!-- Animation CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(base_url('assets/frontend/')); ?>css/animate.css" media="all" />
    
    <!-- Foundation CSS File -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(base_url('assets/frontend/')); ?>css/foundation.min.css" media="all" />
    
    <!-- Font Awesome CSS File -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(base_url('assets/frontend/')); ?>css/font-awesome.min.css" media="all" />
    
    <!-- Owl Carousel CSS File -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(base_url('assets/frontend/')); ?>css/owl.carousel.css" media="all" />
    
    <!-- Lightbox IMage Gallery Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(base_url('assets/frontend/')); ?>css/lightbox.min.css" media="all" />
    
    <!-- Theme Styles CSS File -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(base_url('assets/frontend/')); ?>style.css" media="all" />
    
    <!-- Google Fonts For Stylesheet --> 
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:400,700%7CRoboto+Slab:400%7CRoboto:900,700" rel="stylesheet" type="text/css" />
    
    <!-- REVOLUTION STYLE SHEETS Delete If not using Revolution Slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(base_url('assets/frontend/')); ?>lib/revolution/css/settings.css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(base_url('assets/frontend/')); ?>lib/revolution/css/layers.css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(base_url('assets/frontend/')); ?>lib/revolution/css/navigation.css">
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v5.0"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62711679-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>
	<!-- Page Preloader -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
            	<div id="object"></div>
            </div>
        </div>
    </div>
    <!-- Page Preloader Ends /-->
    
	<!-- Main Container -->
    <div class="main-container">
    	
        <!-- Top Bar Starts -->
        <!-- Top bar Ends /-->
        
        <!-- Header Starts -->
        <?php echo $__env->make('frontend.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Header Ends /-->
        
        <?php echo $__env->yieldContent('container'); ?>
        
        <!-- Footer -->
        <?php echo $__env->make('frontend.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Footer Ends here /-->
        
    </div>
    <!-- Main Container /-->
	
    <a href="<?php echo e(base_url('assets/frontend/')); ?>index.html#top" id="top" class="animated fadeInUp start-anim"><i class="fa fa-angle-up"></i></a>

    <!-- Including Jquery so All js Can run -->
    <script type="text/javascript" src="<?php echo e(base_url('assets/frontend/')); ?>js/jquery.js"></script>
    
    <!-- Including Foundation JS so Foundation function can work. -->
    <script type="text/javascript" src="<?php echo e(base_url('assets/frontend/')); ?>js/foundation.min.js"></script>
    
    <!-- Including Owl Carousel File -->
    <script type="text/javascript" src="<?php echo e(base_url('assets/frontend/')); ?>js/owl.carousel.min.js"></script>
    
    <!-- Webful JS -->
    <script src="<?php echo e(base_url('assets/frontend/')); ?>js/webful.js"></script>
    
    <!-- Including LightBox Plugin Delete if not using -->
    <script src="<?php echo e(base_url('assets/frontend/')); ?>js/lightbox.min.js"></script>
    
    <!-- REVOLUTION JS FILES Delete if Not Using Revolution Slider -->
	<script type="text/javascript" src="<?php echo e(base_url('assets/frontend/')); ?>lib/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?php echo e(base_url('assets/frontend/')); ?>lib/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
        (Load Extensions only on Local File Systems ! 
         The following part can be removed on Server for On Demand Loading) -->	
    <script type="text/javascript" src="<?php echo e(base_url('assets/frontend/')); ?>lib/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="<?php echo e(base_url('assets/frontend/')); ?>lib/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo e(base_url('assets/frontend/')); ?>lib/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="<?php echo e(base_url('assets/frontend/')); ?>lib/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="<?php echo e(base_url('assets/frontend/')); ?>lib/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="<?php echo e(base_url('assets/frontend/')); ?>lib/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="<?php echo e(base_url('assets/frontend/')); ?>lib/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="<?php echo e(base_url('assets/frontend/')); ?>lib/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="<?php echo e(base_url('assets/frontend/')); ?>lib/revolution/js/extensions/revolution.extension.video.min.js"></script>
</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pramuka/application/views/frontend/layout/master.blade.php ENDPATH**/ ?>