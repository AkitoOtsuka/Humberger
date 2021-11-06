        <?php get_header(); ?>
            <main class="l-main">
                <div class="l-main__inner">
                    <div class="p-top p-top--archive">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/archive-img01.png" alt="Menu" class="p-top__archive-img">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/archive-img01-pc.png" alt="Menu" class="p-top__archive-img-pc">
                        <h1 class="c-top-title c-top-title--archive p-top__title">Menu:<br>
                            <span class="c-top-subtitle p-top__subtitle"><?php wp_title(''); ?></span>
                        </h1>
                    </div>
                    <div class="l-main__archive-inner-block">
                        <section class="p-text">
                            <h2 class="p-text__heading">小見出しが入ります</h2>
                            <p class="p-text__txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </section>
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <section id="post-<?php the_ID(); ?>" <?php post_class('p-card'); ?>>
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php else: ?>
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/noimage.png" alt="noimage">
                                    <?php endif; ?>
                                    <div class="p-card__body">
                                        <div class="p-card__block">
                                            <h3 class="c-card-title p-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <?php the_content(); ?>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="c-card-btn p-card__btn">詳しく見る</a>
                                    </div>
                                </section>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <div class="c-pagenation">
                            <ul class="c-pagenation__sp">
                                <li><?php previous_posts_link('&laquo; 前へ'); ?></li>
                                <li><?php next_posts_link('次へ &raquo;'); ?></li>
                            </ul>
                            <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
                        </div>
                    </div>
                </div>    
            </main>
        </div>
        <?php get_sidebar(); ?>
        <div class="l-wrapper__mask js-mask"></div>
    </div>
<?php get_footer(); ?>