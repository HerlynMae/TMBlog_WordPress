
<?php get_header() ?> 
<!-- to get the header -->
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

<!-- latest blog starts here -->
        <section class="latestBlog py--10">
            <div class="container">
                <div class="latestBlog__wrapper"> 
                    <!-- to get the post use 1 -->
                        <?php 
                            $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 1,
                            );
                            $newQuery = new WP_Query($args)
                        ?>

                        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
                    <div class="latestBlog__desc">
                        <h2 class="mb--1 text--secondary"><?php the_title() ?></h3>
                        <h1 class="mb--1 text--primary"><?php the_title() ?></h2>
                        <p class="mb--3">
                           <?php echo get_the_excerpt() ?>
                        </p>
                        <a class="text--secondary t--bold" href="<?php the_permalink() ?>">Read More</a>
                    </div>
                    <div class="latestBlog__img">
                                 <!-- to get the featured image -->
                                 <?php echo get_the_post_thumbnail() ?>
                    </div>

                    <?php
                                endwhile;
                                else :
                                    echo "no available content yet";
                                endif;
                                wp_reset_postdata();
                            ?>

                            <!-- card ends here -->
                </div>
            </div>
        </section>
<!-- latest blog ends here -->

<!-- allpost starts here -->
        <section class="allPost text--center py--10">
            <h2 class="text--primary mb--4">All Post</h2>

                <div class="allPost__category py--6">
                    <div class="container">
                        <div class="allPost__title">
                            <p class="title">Category 1</p>
                        </div>
                        <div class="allPost__wrapper">
                        <!-- card starts here -->

                        <!-- to get all the post use -1 -->
                        <?php 
                        
                            $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'offset' => 1,  //this is used for ignoring the first post
                            
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms' => 'Toys and Games',
                                ),
                               ),
        
                            );
                            $newQuery = new WP_Query($args)
                        ?>

                        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

                            <div class="allPost__card">
                                <!-- to get the featured image -->
                            <?php echo get_the_post_thumbnail() ?>
                                <div class="allPost__card__desc text--left">
                                    <!-- to get the title -->
                                    <h3 class="text--primary mb--1"><?php the_title() ?></h3>
                                    <!-- to get the excerpt -->
                                    <p class="mb--4"><?php echo get_the_excerpt() ?></p>
                                    <div class="readMore-share d--flex justify--between align--center">
                                        <!-- to get the permalink which is single -->
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

                            <!-- card ends here -->

                        </div>
                        <a class="viewAll text--secondary" href=" http://localhost/tmblog/view-by-category/?categ=toys-and-games">View All</a>
                    </div>
                </div>

                <div class="allPost__category py--6 bg--dark-gray">
                    <div class="container">
                        <div class="allPost__title">
                            <p class="title">Category 2</p>
                        </div>
                        <div class="allPost__wrapper">
                        <?php 
                            $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            // 'offset' => 1,  //this is used for ignoring the first post
                            
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms' => 'second',
                                ),
                               ),
        
                            );
                            $newQuery = new WP_Query($args)
                        ?>

                        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
                            <div class="allPost__card">
                                <!-- to get the featured image -->
                            <?php echo get_the_post_thumbnail() ?>
                                <div class="allPost__card__desc text--left">
                                    <h3 class="text--primary mb--1"><?php the_title() ?></h3>
                                    <p class="mb--4"><?php echo  get_the_excerpt() ?></p>
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
                        <a href="http://localhost/tmblog/view-by-category/?categ=second" class="viewAll text--secondary">View All</a>
                    </div>
                </div>

                <div class="allPost__category py--6"> 
                    <div class="container">
                        <div class="allPost__title">
                            <p class="title">Category 3</p>
                        </div>
                        <div class="allPost__wrapper">
                        <?php 
                            $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            // 'offset' => 1, //this is used for ignoring the first post
                            
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'slug',
                                    'terms' => 'third',
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
                                    <p class="mb--4"><?php echo  get_the_excerpt() ?></p>
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
                        <a href="http://localhost/tmblog/view-by-category/?categ=third" class="viewAll text--secondary">View All</a>
                    </div>
                </div>

        </section>
<!-- allpost ends here -->

<!-- to get the footer -->
<?php get_footer() ?> 