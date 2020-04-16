<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Labb 2</title>
<link href="<?php echo get_template_directory_uri(); //infogar fontawesome ?>/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); //infogar bootstrap ?>/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); //Hämtar CSS reglerna ?>">

<?php wp_head(); //Hämtar stylesheets & script ?>
</head>
<!-- VISAR CLASS PÅ BODY ELEMENT -->
<body <?php body_class(); //hämtar klass på body elementet ?>>

<div id="wrap">
<header id="header">
<div class="container">
    <div class="row">
        <div class="col-xs-8 col-sm-6">
            <a class="logo" href="index.html">
<?php 
$banan = false;

if(is_home()){ // is_home är endast true om man är inne på bloggsidan
$banan = 47;
} 
while(have_rows('logga', $banan)){ //Om fältet har rader, skrivs fältet ut
                the_row(); //Drar av en rad för varje gång den kör så det inte loopas föralltid?> 

        <?php 
            if(get_row_layout() == 'bildlogga'){ //Hämtar en specifik layout ?>
            <img src="<?php echo get_sub_field('bild')['url']; //Hämtar ett underfält ?>" />
        <?php } ?>
           
           <?php if(get_row_layout() == 'textlogga'){
                echo get_sub_field('text');
                }
             }?>

</div>
<div class="col-sm-6 hidden-xs">
            
<!-- Start -->
<?php  wp_nav_menu( array(  //Visar en navigeringsmeny
 'theme_location' => 'huvudmeny',
 'menu_class' => 'menu'
                )); ?>
<!-- Slut -->

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
					<div class="col-xs-8">
						<ul class="breadcrumbs">
							<li>Du är här: </li>
							<li>
								<?php
									if(is_home()){ 
										echo single_post_title(); //Hämtar titeln på specifik inlägg

									}
									else {
										 echo get_the_title(); //Hämtar titel
								} ?>
							</li>
						</ul>
					</div>
					<div class="col-xs-4">
					<ul class="social">
							<li>
                <a href="<?php echo get_field('facebook') //lägger till en länk till facebook ikonen ?>">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo get_field('twitter')?>">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo get_field('instagram')?>">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo get_field('linkedin')?>">
                    <i class="fa fa-linkedin"></i>
                </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>


