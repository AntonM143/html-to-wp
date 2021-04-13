<?php
get_header();
?>

<?php?>

            <div id="primary" class="col-xs-12 col-md-9">
            
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
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
										<?php
                                        get_search_form();
                                        ?>
									</li>
								</ul>
								<ul role="navigation">
									<li class="pagenav">
										<h2>Sidor</h2>
										
                                        <?php
                                            wp_nav_menu(array(
                                                'theme_location' => 'sidemenu'
                                            ))?>
											
											</li>
										<h2>Arkiv</h2>
                                        <li class="categories">
										<h2>Kategorier</h2>
                                        <?php
                                           $variable = wp_list_categories( array(
                                            'echo' => false,
                                            'show_count' => true,
                                            'depth' => 1,
                                            'title_li' => '<h2>' . __( 'Categories', 'textdomain' ) . '</h2>'
                                        ) );
                                         
                                        $variable = preg_replace( '~\((\d+)\)(?=\s*+<)~', '$1', $variable );
                                        echo $variable;
                                            ?>
                                       
									</li>
										</ul>
							</div>
						</aside>

<?php
get_footer();
?>