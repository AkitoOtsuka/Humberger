        <?php get_header(); ?>
            <main class="l-main">
                <div class="l-main__inner">
                    <div class="p-top--archive">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/archive-img01.png" alt="Menu" class="c-img__archive-top">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/archive-img01-pc.png" alt="Menu" class="c-img__archive-top-pc">
                        <h1 class="c-title__archive-top p-top__top-title">Menu:<br>
                            <span class="c-title__top-subtitle p-top__top-subtitle">チーズバーガー</span>
                        </h1>
                    </div>
                    <div class="l-main__archive-inner-block">
                        <div class="p-text">
                            <h2 class="c-heading__txt p-text__heading">小見出しが入ります</h2>
                            <p class="c-txt p-text__txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </div>
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <div id="post-<?php the_ID(); ?>" <?php post_class('p-card'); ?>>
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                    <div class="p-card__body">
                                        <div class="p-card__block">
                                            <h3 class="c-title__card p-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <?php the_content(); ?>
                                        </div>
                                        <a href="#" class="c-btn__card p-card__btn">詳しく見る</a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>    
            </main>
        </div>
        <?php get_sidebar(); ?>
        <div class="l-wrapper__mask js-mask"></div>
    </div>
<?php get_footer(); ?>