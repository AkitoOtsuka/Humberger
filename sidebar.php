<aside class="l-sidebar js-slidemenu">
    <div class="p-sidebar-inner">
        <div class="c-icon__close js-close"></div>
        <div class="p-sidebar-inner__menu-wrapper">
            <h2 class="c-title__menu p-sidebar-inner__menu">Menu</h2>
            <?php
            $args = array(
                'menu' => 'categorymenu',
                'menu_class' => 'c-list__menu-category p-sidebar-inner__menu-category',
                'container' => 'false',
            );
            wp_nav_menu($args);
            ?>
        </div>
    </div>
</aside>