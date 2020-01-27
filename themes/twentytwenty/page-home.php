<?php
/*
Template Name: Home
*/
?>

<?php

global $siteUrl;
function mypage_head() {
    echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('stylesheet_directory').'/assets/css/home.css">'."\n";
    echo '<script defer src="'.get_bloginfo('stylesheet_directory').'/assets/js/home.js"></script>'."\n";
    }
    add_action('wp_head', 'mypage_head');
?>

<?php get_header(); ?>

<?php $arrow = get_field('svg_arrow'); ?>

<div id="banners">

    <?php
    if( have_rows('banner') ): while ( have_rows('banner') ) : the_row();
    $image = get_sub_field('image'); 
    ?>

        <div class="banner">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

            <div class="intro">
                <div class="banner-standard">
                    <h2><?php the_sub_field('title'); ?></h2>
                </div>

                <div class="banner-detailed">
                    <h2><?php the_sub_field('hover_title'); ?></h2>
                    <p><?php the_sub_field('hover_description'); ?></p>
                    <a href="<?php the_sub_field('hover_link'); ?>"><?php the_sub_field('hover_link_text'); ?><img src="<?php echo $arrow['url']; ?>" alt="<?php echo $arrow['alt']; ?>"></a>
                </div>

                <div class="arrow">
                    <img src="<?php echo $arrow['url']; ?>" alt="<?php echo $arrow['alt']; ?>">
                </div>
            </div>
        </div>

        <?php

        endwhile;

    else :
        // no rows found
    endif;
    ?>
</div>

<div id="content">

    <?php
    $info_bubble_black = get_field('info_bubble_black');
    if( $info_bubble_black ): ?>
        <div id="info_bubble_black">
            <p><?php echo $info_bubble_black['text']; ?></p>
        </div>
    <?php endif; ?>

    <?php
    $info_bubble_white = get_field('info_bubble_white');
    if( $info_bubble_white ): ?>
        <div id="info_bubble_white">
            <h2><?php echo esc_html($info_bubble_white['title']); ?></h2>
            <?php echo $info_bubble_white['text']; ?>
            <a href="<?php echo esc_url($info_bubble_white['link']); ?>">Le magasin<img src="<?php echo $arrow['url']; ?>" alt="<?php echo $arrow['alt']; ?>"></a>
        </div>
    <?php endif; ?>

    <?php
    $vertical_image = get_field('vertical_image');
    ?>
        <div id="vertical_image">
            <img src="<?php echo $vertical_image['url']; ?>" alt="<?php echo $vertical_image['alt']; ?>">
        </div>
    <?php ?>

    <?php
    $info_bubble_mixed = get_field('info_bubble_mixed');
    if( $info_bubble_mixed ): ?>
        <div id="info_bubble_mixed">
            <img src="<?php echo esc_url($info_bubble_mixed['logo']['url']); ?>" alt="<?php echo esc_html($info_bubble_mixed['logo']['alt']); ?>">
                <p><?php echo esc_html($info_bubble_mixed['text']); ?></p>
                <a href="<?php echo esc_url($info_bubble_mixed['link']); ?>">Services d'archi d'intérieur<img src="<?php echo $arrow['url']; ?>" alt="<?php echo $arrow['alt']; ?>"></a>
        </div>
    <?php endif; ?>

    <?php
    $article = get_field('article');
    if( $article ): ?>
        <div id="article">
            <img class="article-image" src="<?php echo esc_url($article['image']['url']); ?>" alt="<?php echo esc_html($article['image']['alt']); ?>">
            <div class="infos">
                <h2><?php echo esc_html($article['title']); ?></h2>
                <p><?php echo $article['text']; ?></p>
                <a href="<?php echo esc_url($article['link']); ?>">Tapisserie d'ameublement<img src="<?php echo $arrow['url']; ?>" alt="<?php echo $arrow['alt']; ?>"></a>
            </div>
        </div>
    <?php endif; ?>

</div>


<!-- <div id="content">

    <div id="info-bubble">
        <p><strong><?php the_field('info_bubble_catch_phrase'); ?></strong><?php the_field('info_bubble_text'); ?></p>
    </div>
    <div id="info-bubble-2">
        <h3><?php the_field('info_bubble_2_title'); ?></h3>
        <p><?php the_field('info_bubble_2_text'); ?></p>
        <a href="<?php the_field('info_bubble_2_link'); ?>">Le magasin<img src="" alt=""></a>
    </div>

    <?php $image = get_field('vertical_image'); ?>
    <img id="vertical-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

    <div id="catch-phrase">

        <?php $logo = get_field('catch_phrase_logo'); ?>
        <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">

        <h4><?php the_field('catch_phrase_title'); ?></h4>
        <a href="<?php the_field('catch_phrase_link'); ?>">Services d'archi d'intérieur<img src="" alt=""></a>
    </div>
    <div id="home-article-image">

        <?php $image = get_field('home_article_image') ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    </div>
    <div id="home-article-content">
        <h3><?php the_field('home_article_title'); ?></h3>
        <p><?php the_field('home_article_text'); ?></p>
        <a href="<?php the_field('home_article_link'); ?>">Tapisserie d'ameublement<img src="" alt=""></a>
    </div>

</div> -->

<?php get_footer(); ?>