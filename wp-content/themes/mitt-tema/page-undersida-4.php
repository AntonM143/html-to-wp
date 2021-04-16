
<?php
/* Hämtar och skriver ut det jag har i header.php */
    get_header();
?>
    <div class="col-xs-12 col-sm-8 col-md-6">   
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