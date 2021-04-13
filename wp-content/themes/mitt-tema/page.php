
<?php
get_header();
?>

						<div class="col-xs-12">
							<div class="hero">
								<?php the_post_thumbnail();?>
								<div class="text">
                                <?php
                                    while(have_posts()){
                                        the_post();?>
                                    <h1>
                                        <?php the_title();?>
                                    </h1>
                                    <p><?php the_content();?>
                                    </p>
                                    <?php } ?>
									<!-- <h1>Hej och välkommen!</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.</p> -->
								</div>
							</div>
						</div>

<?php
get_footer();
?>
		