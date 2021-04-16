				<nav class="navigation pagination">
					<?php
					/* skriver ut sido navigeringen som man ofta har längst ner, nästa sida, föregående sida */
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
				/* Skriver ut footern med id om-oss-footer */
					dynamic_sidebar('om-oss-footer');
				?>
				<?php
				/* Skriver ut footern med id kontakt-footer */
					dynamic_sidebar('kontakt-footer');
				?>
				<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
					<h4>Social media</h4>
						<?php
						/* skriver ut meny med id social-menu samt tar in en lista med olika argument */
							wp_nav_menu(array(
								'theme_location' => 'social-menu',
								'container' => false,
								'menu_class' => 'social',
								'before' => '  ' )) 
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
		/* skriver ut script och/eller data inanan close tag av body */
    		wp_footer();
    	?>
	</div>
</body>
</html>