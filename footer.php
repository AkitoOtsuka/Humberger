    <footer class="l-footer"> 
        <div class="p-footer-inner">
                <?php 
                wp_nav_menu( array(
                    'menu' => 'footermenu',
                    'menu_class' => 'p-footer-inner__footer-nav',
                    'container' => 'false',
                    'theme_location' => 'footermenu'
                ) );
                ?>
            <p class="c-copyright-title">Copyright: RaiseTech</p>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>