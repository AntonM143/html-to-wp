
<?php
get_header();
?>


						<div id="primary" class="col-xs-12 col-md-9">
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
						<aside id="secondary" class="col-xs-12 col-md-3">
							<ul class="side-menu">
								<li>
                                
								<?php
                                            wp_nav_menu(array(
                                                'theme_location' => 'sidemenu',
                                                'container'       => false,
                                            ));
                                               
                                            ?>
								</li>
							</ul>
						</aside>
                        <div class="col-xs-12 col-sm-4 col-md-6">
                            <?php the_post_thumbnail();?>
						</div>

<?php
get_footer();
?>