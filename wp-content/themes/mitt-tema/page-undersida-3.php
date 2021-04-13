
<?php
get_header();
?>



                        <div id="primary" class="col-xs-12"> 
                            <?php
                                    while(have_posts()){
                                        the_post();?>
                                    <h1>
                                        <?php the_title();?>
                                    </h1>
                                    <p><?php the_content();?>
                                    </p>
                                    <?php } ?>
						</div>



<?php
get_footer();
?>