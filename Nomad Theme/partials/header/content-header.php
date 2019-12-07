<div class="header">
        <div class="h-left">
            <div class="logo">
                <img src="http://localhost/onepage/wp-content/uploads/2019/11/nomad-trading-co-logo.png">
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
                <img src="http://localhost/onepage/wp-content/uploads/2019/11/nomad-trading-co-logo.png">
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
