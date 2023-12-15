
<?php wp_footer()?>
<!-- to get the footer of wordpress -->

<?php $homepage_id = get_option('page_on_front'); ?>

<!-- footer starts here -->
<footer class="footer bg--primary text--light py--5">
            <div class="container">
                 <div class="footer__wrapper">
                    <ul class="contactUs"> 
                        <p>Contact Us</p>
                        <!-- <li>Contact us</li>
                        <li>C/O Two Miles, 400 N Tustin Ave Ste 240, Santa Ana, CA 92705</li>
                        <li>Telephone: +714-437-5823</li>
                        <li>Email: info@twomiles.net</li>
                        <li>Website: www.twomiles.net</li> -->
                        <?php

                            // Check rows exists.
                            if( have_rows('contact_details', $homepage_id) ):

                                // Loop through rows.
                                while( have_rows('contact_details', $homepage_id) ) : the_row();
                                ?>

                            <li>
                            <?php echo the_sub_field('icon')?>
                            <span>&nbsp;&nbsp;&nbsp;</span>
                            <?php echo the_sub_field('details') ?></li>
                            
                               

                                <?php
                            // End loop.
                             endwhile;
                            // No value.
                            else :
                                // Do something...
                            endif;
                        ?>
                    </ul>
                    <ul class="tags">
                        <li class="borderNone">Tags</li>
                        <li>
                            <?php 
                                $tags = get_tags();
                                print_r($tags);
                                foreach ( $tags as $tag ) :
                                $tag_link = get_tag_link( $tag->term_id );
                            ?>
                        
                            <a href="<?php echo $tag_link ?>"><?php echo $tag->name ?></a>

                        <?php endforeach; ?>
                        </li>
                    </ul>
                    <div class="subNewsletter">
                        <h4>Subscribe to newsletter</h4>
                        <form action="">
                            <input type="text" name="" id="" placeholder="Name"> <br>
                            <input type="text" name="" id="" placeholder="Email"> <br>
                            <input type="button" value="Subscribe">
                        </form>
                    </div>
                 </div> 
                 <div class="allRightsReserve text--center">
                    <ul>
                        <li><a class="blog" href="#">Blog</a></li>
                        <li>
                            <p>
                                <small>© Copyright Two Miles - All Rights Reserved</small>
                            </p>
                        </li>
                        <li>
                            <a class="btn bg--secondary" href="https://twomiles.net/">Go to Website</a>
                        </li>
                    </ul>
                    
                    
                 </div>
            </div>
        </footer>

        <script>

            const toggleMenu = document.querySelector('.toggle__menu');
            const headerNav = document.querySelector('.nav');
            const bgDim = document.querySelector('.bgDim');
            

            toggleMenu.addEventListener('click', ()=>{
                toggleMenu.classList.toggle('open');
                headerNav.classList.toggle('open');
                bgDim.classList.toggle('open');
            });


            const search = document.querySelector('.search');
            const searchField = document.querySelector('.searchField');

            search.addEventListener('click', ()=>{
               search.classList.toggle('open');
               searchField.classList.toggle('open');
            });


        </script>
    </body>
</html>
<!-- footer ends here -->