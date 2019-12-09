<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title> <?php echo bloginfo(); ?> </title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                    <?php
                        if(function_exists('the_custom_logo')){
                          the_custom_logo();
                        }

                        ?>
                        <h1 class="th1">
                    <?php echo bloginfo('description'); ?>
                        </h1>
                    </div>
                    <!--col-6-->
                    <div class="col-xs-6 col-md-6">
                        <a href="#" title="" class="btn-theme inquire"> inquire now </a>
                    </div>
                    <!--col-6-->
                </div>
                <!--row-->
            </div>
            <!--container-->
        </div>
        <!--top-header-->


        <div class="header-menu">
            <div class="container">
            
            <nav class="navbar navbar-expand-md navbar-light">
                    <!-- Toggler/collapsibe Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

                      <!-- Brand -->

                

                            <!-- Navbar links -->                  
                            <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'my-custom-menu',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>



              
              </nav>





            </div>
            <!--container-->
        </div>
        <!--main-menu-->
    </header>

    <main>