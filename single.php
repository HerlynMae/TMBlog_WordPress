<?php get_header() ?> 
<!-- to get the header -->
    <section class="singleBlog">
            <div class="container">
                <h2 class="text--secondary"><?php  ?></h2>
                <h1 class="text--primary"><?php the_title() ?></h1>
                <div class="singleBlog__wrapper py--5">
                    <!-- single blog start -->
                    <div class="singleBlog__content">
                    <!-- to get the featured image -->
                    <?php echo get_the_post_thumbnail() ?>
                        <ul class="d--flex justify--between align--center mb--4">
                            <li>
                                <p class="text--accent">

                                    <b>
                                        <!-- to get the tag -->
                                    <?php  $posttags = get_the_tags();
                                    if ($posttags) {
                                    foreach($posttags as $tag) {
                                        echo $tag->name . ' '; 
                                    }
                                     }?>
                                </b>
                                ,<b>
                                    <!-- to get the category -->
                                <?php 
                                    $categories = get_the_category();

                                    if ( ! empty( $categories ) ) {
                                        echo esc_html( $categories[0]->name );  
                                    }
                                
                                ?>
                                </b></p>
                            </li>
                            <li> <p class="text--dark--gray"><b><?php echo get_the_date() ?></b></p></li>
                        </ul>
                        <div class="singleBlog__text">
                          <?php the_content() ?>
                        </div>
                    </div>
                    <!-- single blog end -->
                    <div class="recentPost">
                        <ul>
                            <li>
                                <p><i class="fa-solid fa-chevron-right"></i></p>
                                <div class="titleDesc">
                                    <a href="./single-blog.html">
                                        <h4 class="text--primary">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, eum!
                                        </h4>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <p><i class="fa-solid fa-chevron-right"></i></p>
                                <div class="titleDesc">
                                    <a href="./single-blog.html">
                                        <h4 class="text--primary">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, eum!
                                        </h4>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <p><i class="fa-solid fa-chevron-right"></i></p>
                                <div class="titleDesc">
                                    <a href="./single-blog.html">
                                        <h4 class="text--primary">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, eum!
                                        </h4>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <p><i class="fa-solid fa-chevron-right"></i></p>
                                <div class="titleDesc">
                                    <a href="./single-blog.html">
                                        <h4 class="text--primary">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, eum!
                                        </h4>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        
        <section class="allPost py--5 text--center">
            <div class="container">
                <h2 class="text--left text--d-gray">You may also like</h2>
                <div class="allPost__wrapper">

                    <div class="allPost__card">
                        <img src="./img/blog-card-img.png" alt="">
                        <div class="allPost__card__desc text--left">
                            <h3 class="text--primary mb--1">Lorem ipsum dolor sit amet.</h3>
                            <p class="mb--4">Lorem ipsum dolor sit amet consectetur adipisicing elit. natus placeat qui, nisi voluptatem.</p>
                            <div class="readMore-share d--flex justify--between align--center">
                                <a class="text--primary" href="./single-blog.html">READ MORE ></a>
                                <i class="fa-solid fa-share-nodes"></i>
                            </div>
                        </div>
                    </div>

                    <div class="allPost__card">
                        <img src="./img/blog-card-img.png" alt="">
                        <div class="allPost__card__desc text--left">
                            <h3 class="text--primary mb--1">Lorem ipsum dolor sit amet.</h3>
                            <p class="mb--4">Lorem ipsum dolor sit amet consectetur adipisicing elit. natus placeat qui, nisi voluptatem.</p>
                            <div class="readMore-share d--flex justify--between align--center">
                                <a class="text--primary" href="./single-blog.html">READ MORE ></a>
                                <i class="fa-solid fa-share-nodes"></i>
                            </div>
                        </div>
                    </div>

                    <div class="allPost__card">
                        <img src="./img/blog-card-img.png" alt="">
                        <div class="allPost__card__desc text--left">
                            <h3 class="text--primary mb--1">Lorem ipsum dolor sit amet.</h3>
                            <p class="mb--4">Lorem ipsum dolor sit amet consectetur adipisicing elit. natus placeat qui, nisi voluptatem.</p>
                            <div class="readMore-share d--flex justify--between align--center">
                                <a class="text--primary" href="./single-blog.html">READ MORE ></a>
                                <i class="fa-solid fa-share-nodes"></i>
                            </div>
                        </div>
                    </div>


                </div>
                <a class="viewAll text--secondary" href="#">Load More</a>
            </div>
        </section>

 <!-- to get the footer -->
<?php get_footer() ?> 