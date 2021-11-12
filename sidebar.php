<aside class="l-sidebar js-slidemenu">
    <div class="p-sidebar-inner">
        <div class="c-close-btn js-close"></div>
        <div class="p-sidebar-inner__menu-wrapper">
            <h2 class="c-menu-btn p-sidebar-inner__menu">Menu</h2>
            <nav>
                <?php
                wp_nav_menu( array(
                    'menu' => 'categorymenu',
                    'menu_class' => 'p-sidebar-inner__menu-category',
                    'container' => 'false',
                    'theme_location' => 'categorymenu',
                ) );
                ?>
            </nav>
        </div>
    </div>
</aside>