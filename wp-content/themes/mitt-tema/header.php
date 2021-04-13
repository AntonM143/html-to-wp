<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Labb 1 - Anton</title>
	<!-- <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery.js"></script> -->
    <?php
        wp_head();
        ?>
</head>
<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
                    
                    <?php
                   	$menuParameters = array(
						   'theme_location' => 'toStart',
						   'container'       => false,
						   'echo'            => false,
						   'items_wrap'      => '%3$s',
						   'depth'           => 0,
					   );
						   echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
					?>
					
					</div>
					<div class="col-sm-6 hidden-xs">
					<?php
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
                        wp_nav_menu(array(
							'theme_location' => 'headmenu', 'container' => false
						));
                        ?>
						
						
					</div>
				</div>
			</div>
		</nav>
		<main>
    <section>
    <div class="container">
        <div class="row">
		