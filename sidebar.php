<aside class="l-sidebar js-slidemenu">
    <div class="p-sidebar-inner">
        <div class="c-close-btn js-close"></div>
        <div class="p-sidebar-inner__menu-wrapper">
            <h2 class="c-menu-btn p-sidebar-inner__menu">Menu</h2>
            <nav>
                <?php
                $args = array(
                    'menu' => 'categorymenu',
                    'menu_class' => 'p-sidebar-inner__menu-category',
                    'container' => 'false',
                );
                wp_nav_menu($args);
                ?>
            </nav>
        </div>
    </div>
</aside>