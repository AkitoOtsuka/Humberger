<?php get_header(); ?>
            <div class="l-container__error">
                <h1>404 NOT FOUND</h1>
                <p>お探しのページが見つかりませんでした。</p>
                <p>申し訳ございませんが、<a href="<?php echo esc_url( home_url('/') ); ?>">こちらのリンク</a>からトップページにお戻りください。</p>
            </div>
        </div>
        <?php get_sidebar(); ?>
        <div class="l-wrapper__mask js-mask"></div>
    </div>
<?php get_footer(); ?>