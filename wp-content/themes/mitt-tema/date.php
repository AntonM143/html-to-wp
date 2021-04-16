<?php
    /* Hämtar och skriver ut det jag har i header.php */
    get_header();
?>
    <div id="primary" class="col-xs-12 col-md-9">
        <h1><?php 
                /* Hämtar  och skriver ut aktuell titel på akriv*/
                wp_get_archives(array(
                    'format' => 'h2'));
            ?>
        </h1>
            <?php
                /* Wp loopen, kollar om de finns post och så länge de finns kör och ta minus 1 */
                while(have_posts()){
                the_post(); ?>
                <article>
                    <?php 
                        /* Hämtar thumbnail bilden samt skriver ut  */
                        the_post_thumbnail();
                    ?>
                    <h2 class="title">
                        <a href="
                            <?php 
                                /* Hämtar permalinken */
                                the_permalink();
                            ?>
                        ">
                            <?php 
                                /* Hämtar titel samt skriver ut */
                                the_title();
                            ?>
                        </a>
                    </h2>
                    <ul class="meta">
                        <li >
                            <i class="fa fa-calendar"></i> 
                            <?php
                                /* Hämtar samt skriver ut datum, och formaterar */
                                echo get_the_date('l j F , Y');
                            ?>
                        </li>
                        <li>
                            <i class="fa fa-user"></i>
                            <?php
                                /* Hämtar författarens namn samt gör det till en länk */
                                the_author_posts_link();
                            ?>
                        </li>
                        <li>
                            <i class="fa fa-tag"></i> 
                            <?php
                                /* Hämtar den aktuella Kategorin samt gör det till länk */
                                the_category(', ');
                            ?>
                        </li>
                    </ul>
                    <p>
                        <?php 
                            /* Hämtar och skriver ut "the content" */
                            the_content();
                        ?>
                    </p>
                </article>
            <?php }
            ?>
    </div>
<?php
    /* Hämtar och skriver ut det jag har i sidebar.php */
    get_sidebar();
?>
<?php
    /* Hämtar och skriver ut det jag har i footer.php */
    get_footer();
?>