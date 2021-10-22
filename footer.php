    <footer class="l-footer"> 
        <div class="p-footer-inner">
                <?php 
                $args = array(
                    'menu' => 'footermenu',
                    'menu_class' => 'p-footer-inner__footer-nav',
                    'container' => 'false',
                );
                wp_nav_menu($args);
                ?>
            <p class="c-copyright-title">Copyright: RaiseTech</p>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>