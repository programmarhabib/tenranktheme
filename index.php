<?php
/**
 * This template for displaying the header
*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes() ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(  ); ?>
</head>
<body <?php body_class(  );?> >
    
<header class="header_area <?php echo get_theme_mod('habib_menu_position'); ?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="logo">
                    
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('habib_logo'); ?>" alt=""></a>
                </div>
            </div>
            <div class="col-md-9">
            
            <?php wp_nav_menu( array('theme_location' => 'primary Menu', 'menu_id' => 'nav') ); ?>
            </div>
            <!-- <div class="col-md-3"></div> -->
        </div>
    </div>
</header>


<section id=body_area>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php the_content() ?>
            
            </div>
        </div>
    </div>
</section>


<?php wp_footer(  ); ?>
</body>
</html>