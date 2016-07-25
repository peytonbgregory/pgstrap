<?php /* * The Header for our theme. */?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>><head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Cache-control" content="public">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<!--[if lt IE 9]> <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> 
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
    /*!
    loadCSS: load a CSS file asynchronously.
    [c]2014 @scottjehl, Filament Group, Inc.
    Licensed MIT
    */
    function loadCSS( href, before, media ){
        "use strict";
        var ss = window.document.createElement( "link" );
        var ref = before || window.document.getElementsByTagName( "script" )[ 0 ];
        var sheets = window.document.styleSheets;
        ss.rel = "stylesheet";
        ss.href = href;
        ss.media = "only x";
        ref.parentNode.insertBefore( ss, ref );
        function toggleMedia(){
            var defined;
            for( var i = 0; i < sheets.length; i++ ){
                if( sheets[ i ].href && sheets[ i ].href.indexOf( href ) > -1 ){
                    defined = true;
                }
            }
            if( defined ){
                ss.media = media || "all";
            }
            else {
                setTimeout( toggleMedia );
            }
        }
        toggleMedia();
        return ss;
    }
</script>
<script>
        // load a file
        loadCSS("/wp-content/themes/pgstrap/css/bootstrap.min.css");
</script>
<noscript><link rel="stylesheet" href="/wp-content/themes/pgstrap/css/bootstrap.min.css"</noscript>
<link rel="icon" type="image/png" href="" />
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css">
</head>
<?php $options=get_option( 'theme_settings' ); ?>
<?php flush(); ?><body <?php body_class(); ?>>
<div id="container">
      
        <?php do_action( 'before' ); ?>
		<header class="container-fluid">
			<?php get_template_part('includes/fluidstart'); ?>
                <div class="col-md-3 col-xs-12">
                    <a class="main-logo-link" href="<?php echo home_url(); ?>" rel="home" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                        <img src="<?php echo $options['main_logo']; ?>" class="img-responsive main-logo" />
                    </a>
                </div>
                <div class="col-md-9 col-xs-12 text-right" id="header-right">
                	<a class="phone-number" href="tel:<?php echo $options['phone_number_url']; ?>"><?php echo $options['phone_number']; ?></a>
                   <?php get_template_part ('includes/social'); ?>
                </div><!-- col-md 10 -->
            <?php get_template_part('includes/fluidend'); ?>
		</header> 
        <nav class="container-fluid">
			<?php get_template_part('includes/fluidstart'); ?>        
                <div class="navbar">
                    <div class="navbar-header">
                        <button class="navbar-toggle glyphicon glyphicon-align-justify" data-target=".navbar-collapse" data-toggle="collapse" type="button"></button>
                    </div>
                    <?php $args = array('theme_location' => 'primary', 
                                        'container_class' => 'navbar-collapse collapse', 
                                        'menu_class' => 'nav navbar-nav',
                                        'fallback_cb' => '',
                                        'menu_id' => 'main-menu',
                                        'walker' => new wp_bootstrap_navwalker()); 
                                        wp_nav_menu($args); ?>
                </div>
        	<?php get_template_part('includes/fluidend'); ?>
		</nav>          