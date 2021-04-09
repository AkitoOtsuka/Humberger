    <footer class="l-footer"> 
        <div class="p-footer-inner">
            <nav>
                <?php 
                $args = array(
                    'menu' => 'footermenu',
                    'menu_class' => 'p-footer-inner__footer-nav',
                    'container' => 'false',
                );
                wp_nav_menu($args);
                ?>
            </nav>
            <p class="c-title__copyright">Copyright: RaiseTech</p>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>