<?php
/*
Template Name: About
*/
?>

<?php

    global $siteUrl;
    function mypage_head() {
        echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('stylesheet_directory').'/assets/css/about.css">'."\n";
        }
        add_action('wp_head', 'mypage_head');

?>

<?php get_header(); ?>

<div id="content">
    <div class="banner-top">
            <h1><?php the_title()?></h1>
            <div class="slider">
            <?php echo do_shortcode('[wonderplugin_slider id=1]'); ?>
        </div> 
        
    </div>
    
    <div class="histoire">
        <?php the_field('notre_histoire'); ?>
    </div>

    <div class="photoFemme">
        <?php $image = get_field('photo_femme');?>
        <img class="femme" alt="<?php echo $image['alt'];?>" src="<?php echo $image['url'];?>">
    </div>

    <div class="caractere">
        <?php the_field('caractere'); ?>
    </div>

    <div class="timeline">
    <?php if( have_rows('timeline') ): ?>
    <ul>
    <?php while ( have_rows('timeline') ) : the_row(); ?>
    <ul>
        <li><?php the_sub_field('date'); ?> <?php the_sub_field('evenement'); ?></li>
        
    </ul>
    <?php endwhile; ?>
    </ul>
<?php else : ?>
<?php endif; ?>
</div>

<div class="bannerBottom">
    <div class="photoLit">
        <?php $image = get_field('photo_conditions');?>
        <img class="lit" alt="<?php echo $image['alt'];?>" src="<?php echo $image['url'];?>"/> 
        <div class="conditions">
            <h2>Je souhaite connaitre les conditions</h2>
            <div class="contact">Contact</div>
        </div>
    </div>
    </div>
</div>
</div>

<?php get_footer(); ?>