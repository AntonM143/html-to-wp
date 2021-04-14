<?php
get_header();
?>

<?php?>

            <div id="primary" class="col-xs-12 col-md-9">
                <h2>Blogg</h2>
                        <?php
                            while(have_posts()){
                                the_post(); ?>
                                <article>
                                <?php the_post_thumbnail();?>
                                <?php the_title('<h2>', '</h2>');?>
                            
                            <ul class="meta">
                                <li >
                                    <i class="fa fa-calendar"></i> <?php
                                  echo get_the_date('l j F , Y');?>
                                </li>
                                <li>
                                    <i class="fa fa-user"></i><?php
                                    the_author_posts_link();?>
                                </li>
                                <li>
                                    <i class="fa fa-tag"></i> <?php
                                    the_category(', ');?>
                                </li>
                            </ul>
                            <p>
                                <?php the_content();?>
                            </p>
                        </article>
                            <?php }?>
                    <nav class="navigation pagination">
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a>
							</nav>
						</div>
						<?php
                        get_sidebar();
                        ?>
					</div>
				</div>
			</section>
		</main>
<?php
get_footer();
?>