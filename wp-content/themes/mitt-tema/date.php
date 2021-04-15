<?php
get_header();
?>



            <div id="primary" class="col-xs-12 col-md-9">
                <h2> Arkiv:<?php
                wp_get_archives(array(
                    'format' => 'h2'
                ));?></h2>
                        <?php
                            while(have_posts()){
                                the_post(); ?>
                                <article>
                                <?php the_post_thumbnail();?>
                                <h2 class="title">
                                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
								</h2>
                            
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
                        
						</div>
						<?php
                        get_sidebar();
                        ?>
	
<?php
get_footer();
?>