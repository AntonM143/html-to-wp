<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Labb 1 - Anton</title>
    <?php
	/* skriver ut script och/eller data inanan close tag av head */
        wp_head();
    ?>
</head>
<body>
	<div id="wrap">
		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href="
							<?=
							/* Hämtar bloginfo url som href och sen bloginfo name som text */
								get_bloginfo("url");
							?>
						"> 
							<?=
								get_bloginfo("name");
							?>
						</a>
					
					</div>
					<div class="col-sm-6 hidden-xs">
						<?php
						 /* en sök bar/formulär */
							get_search_form();
						?>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>
		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
                        <?php
						/* Hämtar och skriver ut  meny  med namnet headmenu samt tar bort diven som skapas som standard */
							wp_nav_menu(array(
								'theme_location' => 'headmenu',
								'container' => " " ));
                        ?>
					</div>
				</div>
			</div>
		</nav>
	<main>
	<section>
    	<div class="container">
        	<div class="row">
		