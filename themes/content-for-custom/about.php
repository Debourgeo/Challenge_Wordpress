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
        <div class="black-background"></div>
        <h1><?php the_title()?></h1>
        <div class="slider">
        <!-- Récupérer le slider et l'image contenue dedans -->
            <?php if(have_rows('slider')):?>
            <ul class="slides">
            <?php while(have_rows('slider')): the_row();
                $imageSlider = get_sub_field('image');
            ?>
            <li class="slide">
            <img src="<?php echo $imageSlider['url']; ?>" alt="<?php echo $imageSlider['alt'] ?>" />
            </li>
            <?php endwhile; ?>
            <div class="buttonsContainer">
                <div class="boutonNext">
                    <?php $flecheNext = get_field('fleche_next'); ?>
                    <img class="flecheNext" alt="<?php echo $flecheNext['alt'];?>" src="<?php echo $flecheNext['url'];?>">
                </div>
                <div class="boutonPrevious">
                    <?php $flechePrevious = get_field('fleche_previous'); ?>
                    <img class="flechePrevious" alt="<?php echo $flechePrevious['alt'];?>" src="<?php echo $flechePrevious['url'];?>">
                </div>
            </div>
            </ul>
            <?php endif; ?>
        </div> 
    </div>
    
    <!-- Récupérer le wysiwyg notre histoire -->
    <div class="histoire col col-left">
        <?php the_field('notre_histoire'); ?>
    </div>
    <!-- Récupérer la timeline et ses sous-champs -->
    <div class="timeline col col-right">
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
    <!-- Récupérer l'image' -->
    <div class="photoFemme col col-left">
        <?php $image = get_field('photo_femme');?>
        <img class="femme" alt="<?php echo $image['alt'];?>" src="<?php echo $image['url'];?>">
    </div>
    
    <!-- Récupérer le wysiwyg caractère -->
    <div class="caractere">
        <?php the_field('caractere'); ?>
    </div>
    <div class="bannerBottom"> 
        <div class="photoLit">
            
            <!-- Récupérer la photo-->
            <?php $image = get_field('photo_conditions');?>
            <img class="lit" alt="<?php echo $image['alt'];?>" src="<?php echo $image['url'];?>"/> 
        </div>
        <div class="conditions">
        <h3>Je souhaite connaitre les conditions</h3>
        <p class="contact">Contact</p>
        </div>
    </div>

    <!-- Récupérer le footer -->
    <?php get_footer();?>
</div>
