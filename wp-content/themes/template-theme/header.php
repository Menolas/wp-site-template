<?php

/**
 * The header  
 *
 */ 



if( is_admin_bar_showing() ) {
    $admin_bar = 'admin';

} else {
    $admin_bar = '';
}

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body class="<?=$admin_bar;?>" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header class="main-header <?=$admin_bar;?>">
        <div class="container">
            <div class="logo">
                <a href="/">
                    <svg>
                        <use xlink:href="/wp-content/themes/template-theme/dist/img/svg/sprite.svg#cat"></use>
                    </svg>
                </a>
            </div>
            
            <nav class="main-menu">
                <?=get_template_part('template-parts/main-menu');?>
                <?=get_template_part('template-parts/social-menu');?>
            </nav>
            <button class="toggler">
                <span></span>
            </button>
        </div>
    </header>
