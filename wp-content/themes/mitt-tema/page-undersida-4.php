
<?php
get_header();
?>



                        <div class="col-xs-12 col-sm-8 col-md-6">   
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
                        <div class="col-xs-12 col-sm-4 col-md-6">
                            <?php the_post_thumbnail();?>
						</div>


<?php
get_footer();
?>