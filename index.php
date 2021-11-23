        <?php get_header(); ?>
            <main class="l-main">
                <div class="l-main__inner">
                    <div class="p-top">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/front-img01.png" alt="ダミーサイト" class="p-top__img">
                        <h2 class="c-top-title p-top__title"><?php echo __('dummysite', 'hamburger'); ?></h2><!-- テーマチェック 対応 -->
                    </div>
                    <div class="l-main__inner-block">
                        <section class="p-service">
                            <?php
                            $takeout = get_term_by('slug', 'takeout', 'category');
                            $takeout_link = get_term_link($takeout, 'category');
                            ?>
                            <a href="<?php echo esc_url( $takeout_link ); ?>">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/front-img02.png" alt="Take Out" class="p-service__img">
                                <h2 class="c-service-title p-service__title">Take Out</h2>
                                <div class="p-service__content p-service__content--1">
                                    <h3 class="p-service__heading">小見出しが入ります</h3>
                                    <p class="p-service__txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                </div>
                                <div class="p-service__content p-service__content--2">
                                    <h3 class="p-service__heading">小見出しが入ります</h3>
                                    <p class="p-service__txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                </div>
                            </a>
                        </section>
                        <section class="p-service">
                            <?php
                            $eatin = get_term_by('slug', 'eatin', 'category');
                            $eatin_link = get_term_link($eatin, 'category');
                            ?>
                            <a href="<?php echo esc_url( $eatin_link ); ?>">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/front-img03.png" alt="Eat In" class="c-img__service">
                                <h2 class="c-service-title p-service__title">Eat In</h2>
                                <div class="p-service__content p-service__content--1">
                                    <h3 class="p-service__heading">小見出しが入ります</h3>
                                    <p class="p-service__txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                </div>
                                <div class="p-service__content p-service__content--2">
                                    <h3 class="p-service__heading">小見出しが入ります</h3>
                                    <p class="p-service__txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                </div>
                            </a>
                        </section>
                    </div>
                    <section class="p-map">
                        <h2 class="c-map-title p-map__title">見出しが入ります</h2>
                        <p class="p-map__txt">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </section>
                </div>
            </main>
        </div>
        <?php get_sidebar(); ?>
        <div class="l-wrapper__mask js-mask"></div>
    </div>
<?php get_footer(); ?>