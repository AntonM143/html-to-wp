<?php
    /* Hämtar och skriver ut det jag har i header.php */
    get_header();
?>
    <div id="primary" class="col-xs-12 col-md-9">
        <?php
         /* Wp loopen, kollar om de finns post och så länge de finns kör och ta minus 1 */
            while(have_posts()){
                the_post();
        ?>
            <h1>
                <?php 
                    /* Hämtar titel samt skriver ut */
                    the_title();
                ?>
            </h1>
            <p>
                <?php 
                        /* Hämtar och skriver ut "the content" */
                    the_content();
                ?>
            </p>
        <?php 
            } 
        ?>
    </div>
    <aside id="secondary" class="col-xs-12 col-md-3">
        <ul class="side-menu">
            <li>
                <?php
                /* Hämtar och skriver ut  meny  med namnet sideCategory samt tar bort diven som skapas som standard */
                    wp_nav_menu(array(
                        'theme_location' => 'sideCategory',
                        'container'       => false, )); 
                ?>
            </li>
        </ul>
    </aside>
    <div class="col-xs-12 col-sm-4 col-md-6">
        <?php 
        /* Hämtar thumbnail bilden samt skriver ut  */
        the_post_thumbnail();
        ?>
    </div>
<?php
    /* Hämtar och skriver ut det jag har i footer.php */
    get_footer();
?>