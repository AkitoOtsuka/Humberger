        <?php get_header(); ?>
            <main class="l-main">
                <article class="l-main__inner">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="p-top">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else: ?>
                                    <div class="p-top__noimage">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/noimage.png" alt="noimage">
                                    </div>
                                <?php endif; ?>
                                <h1 class="c-top-title c-top-title--single p-top__title"><?php the_title(); ?></h1>
                            </div>
                            <section class="l-main__single-inner-block">
                                <?php the_content(); ?>
                            </section>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </article>    
            </main>
        </div>
        <?php get_sidebar(); ?>
        <div class="l-wrapper__mask js-mask"></div>
    </div>
<?php get_footer(); ?>