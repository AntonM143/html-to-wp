					<nav class="navigation pagination">
                        <?php
                        the_posts_pagination();
                        ?>
				    </nav>
			</div>
		</div>
	</section>
</main>
<footer id="footer">
			<div class="container">
				<div class="row top">
					
							
							<?php
							dynamic_sidebar('undersida-sidebar');
							
							/* wp_nav_menu(array(
								'theme_location' => 'footermenu',
								'container'  => false,
								'before' => '<p> E-post:',
								'after' => '</p>'
							   )); */
							?>
					
					
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<h4>Social media</h4>
						
						<?php
						wp_nav_menu(array(
							'theme_location' => 'social-menu',
							'container' => false,
							'menu_class' => 'social',
							'before' => '  '
						)) 
						?>
						
					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<p>Copyright &copy; Grupp X, 2016</p>
					</div>
				</div>
			</div>
           
		</footer>
    <?php
    wp_footer();
    ?>
	</div>
</body>
</html>