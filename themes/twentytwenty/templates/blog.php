                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <?php
/*
* Template Name: Blog List
* Template Post Type: post, page
*/

function mypage_head()
{
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/assets/css/blog.css">' . "\n";
}

add_action('wp_head', 'mypage_head');


get_header();

?>

<!-- banner with title -->

<div class="banner">
    <h1><?php the_title(); ?></h1>
</div>

<!-- insertion des vignettes -->


<?php
$posts = get_posts(array(
    'posts_per_page' => 6,
    'post_type' => 'blog_card',
    'order' => 'ASC'
));
//var_dump($posts);

// we get the post of blog
if ($posts):
    $dateDiapo = get_post_time();
    echo $dateDiapo;


        if (have_rows('group_diapo')): //parent group field
            echo get_field('date');
            $g_diapo = get_field('group_diapo'); // 'our_services' is your parent group
            $g_flex = $g_diapo['flex_diapo']; // 'service_one' is your child group


            ?>

            <div class="blog-list-container">

                <?php
                foreach ($g_flex as $key => $value) {

                    $titleOfDiapo = $value['diapo_titre'];
                    $pictureOfDiapo = $value['diapo_image'];
                    $linkOfDiapo = $value['article_link'];

                    //var_dump($posts);
                    ?>

                    <div class="blog-list-item">

                        <div class="blog-item-image">
                            <img src="<?php echo $pictureOfDiapo['url']; ?>">
                        </div>
                        <div class="blog-item-title">

                            <?php echo $titleOfDiapo; ?>


                        </div>
                        <div class="blog-item-link">
                            <a href="<?php echo $linkOfDiapo; ?>">
                                <?php echo $value->post_date; ?>
                            </a>
                        </div>

                    </div>

                    <?php

                }
                ?>
            </div>
            <?php

        endif;
endif;
?>


<!--  insertion du jumbotron -->
<div class="container">
    <div class="jumbotron">
        <?php
        $jumbo = get_posts(array(
            'posts_per_page' => 1,
            'post_type' => 'jumbo_object',
            'order' => 'ASC'
        ));
        echo "ici" . get_field('jumbo_img');
        foreach ($jumbo as $jumbos):
            setup_postdata($jumbos);
            //var_dump($jumbos);

            if ($jumbos->post_title == 'jumboblog') {
                $jumboText = $jumbos->jumbo_text;
                $jumboHref = $jumbos->jumbo_link;
                $jumboLabel = $jumbos->jumbo_label;
                $jumboImg = $jumbos->jumbo_img;
                var_dump($jumboImg);

                echo "<img src=\"" . $jumboImg . "\">";

            }
        endforeach;
        wp_reset_postdata();

        ?>
    </div>
</div>
