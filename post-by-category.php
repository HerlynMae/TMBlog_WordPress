<?php

/**
 * 
 * Template Name: Post by Category
 * 
 */
?>

<?php get_header() ?> 
<!-- banner starts here -->
<section class="banner text--center" style="background-image: url('<?php echo get_field('banner_image')?>);">
            <div class="container">
                <div class="banner__intro">
                    <h1 class="text--light"><?php echo get_field('banner_text')?></h1>
                    <p class="text--light"><?php echo get_field('banner_writeup')?></p>
                </div>
            </div>
</section>
<!-- banner ends here -->
<section class="allPost text--center py--10">
            <h2 class="text--primary mb--4">All Post</h2>
            <div class="allPost__category py--6">
                    <div class="container">
                      
                        <div class="allPost__wrapper">
                        <?php 
                          $category = $_GET['categ'];
                            $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            // 'offset' => 1,  //this is used for ignoring the first post
                            
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms' =>   $category,
                                ),
                               ),
        
                            );
                            $newQuery = new WP_Query($args)
                        ?>

                        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
                            <div class="allPost__card">
                                <?php echo get_the_post_thumbnail() ?>
                                <div class="allPost__card__desc text--left">
                                    <h3 class="text--primary mb--1"><?php the_title() ?></h3>
                                    <p class="mb--4"><?php echo get_the_excerpt() ?></p>
                                    <div class="readMore-share d--flex justify--between align--center">
                                        <a class="text--primary" href="<?php the_permalink() ?>">READ MORE ></a>
                                        <i class="fa-solid fa-share-nodes"></i>
                                    </div>
                            </div>
                         </div>
                         <?php
                                endwhile;
                                else :
                                    echo "no available content yet";
                                endif;
                                wp_reset_postdata();
                             ?>
                    </div>
                </div>
            </div>
</section>

<?php get_footer() ?> 