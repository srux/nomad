<div class="header <?php the_field('css_classes')?>">
        <div class="h-left">
            <div class="logo">
                <a href="<?php the_field('logo_link')?>">
                    <img src="<?php the_field('logo')?>">
                </a>
            </div>
        </div>
        <div class="h-center">
        <?php 
                                $args = array(
                                    'theme-location'=>'main-menu',
                                    'container'=>'ul',
                                    'menu_class'=>'navbar-nav'
                                );
                            wp_nav_menu($args);
        ?>
        </div>
        <div class="h-right"><h3></h3></div>
</div>

<div class="header-mob">
<div class="logo">
                <img src="<?php the_field('mobile_logo')?>">
            </div>
    <div class="burger-container">
        <div id="burger">
            <div class="bar topBar"></div>
            <div class="bar btmBar"></div>
        </div>
        </div>
        <div class="icon icon-apple"></div>
        <?php 
                                $args = array(
                                    'theme-location'=>'main-menu',
                                    'container'=>'ul',
                                    'menu_class'=>'navbar-nav'
                                );
                            wp_nav_menu($args);
        ?>
    <div class="shop icon icon-bag"></div>
</div>
