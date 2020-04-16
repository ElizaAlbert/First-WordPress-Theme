<?php //* Template Name: Undersida 5 */ ?>

<?php get_header();?>
    <main>
			<section class="hero small" style="background-image: url('<?php echo get_field('bakgrundsbild_undersida5')['url']; ?>')">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 column">
							<div class="text">
								<h1><?php echo get_field('undersida5_titel')?></h1>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="columns black text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
                            
							<h2><?php echo get_field('sektioner2_titel')?></h2>
						</div>
					</div>
					<div class="row bottom">
						<div class="col-xs-6">
							<i class="fa fa-<?php echo get_field('sektion2_html5_ikon')?>"></i>
							<h3><?php echo get_field('sektion2_html5_titel')?></h3>
							<p><?php echo get_field('sektion2_html5_text')?></p>
						</div>
						<div class="col-xs-6">
							<i class="fa fa-<?php echo get_field('sektion2_css_ikon')?>"></i>
							<h3><?php echo get_field('sektion2_css')?></h3>
							<p><?php echo get_field('sektion2_css_text')?></p>
						</div>
					</div>
				</div>
			</section>
			<section class="columns red text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php echo get_field('sektion3_titel')?></h2>
						</div>
					</div>
					<div class="row bottom">
						<div class="col-xs-4">
							<i class="fa fa-<?php echo get_field('sektion2_html5_ikon')?>"></i>
							<h3><?php echo get_field('sektion2_html5_titel')?></h3>
							<p><?php echo get_field('sektion2_html5_text')?></p>
						</div>
						<div class="col-xs-4">
							<i class="fa fa-<?php echo get_field('sektion2_css_ikon')?>"></i>
							<h3><?php echo get_field('sektion2_css')?></h3>
							<p><?php echo get_field('sektion2_css_text')?></p>
						</div>
						<div class="col-xs-4">
							<i class="fa fa-<?php echo get_field('sektion3_javascript_ikon')?>"></i>
							<h3><?php echo get_field('sektion3_javascript_titel')?>"></h3>
							<p><?php echo get_field('sektion3_javascript_text')?>"></p>
						</div>
					</div>
				</div>
			</section>
			<section class="columns text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2>Sektion med fyra puffar</h2>
						</div>
					</div>
					<div class="row bottom">
						<div class="col-xs-3">
							<i class="fa fa-<?php echo get_field('sektion2_html5_ikon')?>"></i>
							<h3><?php echo get_field('sektion2_html5_titel')?></h3>
							<p><?php echo get_field('sektion2_html5_text')?></p>
						</div>
						<div class="col-xs-3">
							<i class="fa fa-<?php echo get_field('sektion2_css_ikon')?>"></i>
							<h3><?php echo get_field('sektion2_css')?></h3>
							<p><?php echo get_field('sektion2_css_text')?></p>
						</div>
						<div class="col-xs-3">
							<i class="fa fa-<?php echo get_field('sektion3_javascript_ikon')?>"></i>
							<h3><?php echo get_field('sektion3_javascript_titel')?></h3>
							<p><?php echo get_field('sektion3_javascript_text')?></p>
						</div>
						<div class="col-xs-3">
							<i class="fa fa-<?php echo get_field('sektion3_responsive_ikon')?>"></i>
							<h3><?php echo get_field('sektion3_responsive_titel')?></h3>
							<p><?php echo get_field('sektion3_javascript_titel')?></p>
						</div>
					</div>
				</div>
			</section>
				<section class="slideshow" data-autoplay="3000" data-singleitem="true">
				<div class="slide" style="background-image: url('<?php echo get_field('washington_slideshow')['url'];?>');">
                </div>
           
				<div class="slide red no-image">
					<div class="container">
						<div class="row">
							<div class="col-xs-6 text-center">
								<i class="fa fa-wordpress"></i>
							</div>
							<div class="col-xs-6">
								<h2><?php echo get_field('wordpress_rubrik')?></h2>
								<p><?php echo get_field('wordpress_text')?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="slide no-image" style="background-image: url('<?php echo get_field('bild_slideshow'); ?> );">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h2><?php echo get_field('bild_rubrik')?></h2>
								<p><?php echo get_field('bild_text_1')?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="slide" style="background-image: url('<?php echo get_field('paris_slideshow')['url'];?>');">
					<div class="container">
						<div class="row">
							<div class="col-xs-6">
								
							</div>
						</div>
					</div>
				</div>
				<div class="slide" style="background-image: url('<?php echo get_field('paris_slideshow')['url'];?>');">
                </div>
</div>
			</section>
			<section class="slideshow" data-autoplay="5000" data-singleitem="false" data-items="2">
				<div class="slide" style="background-image: url('<?php echo get_field('washington_slideshow')['url'];?>');">
				</div>
				<div class="slide" style="background-image: url('<?php echo get_field('bilden_pa_folgen')['url']; ?>');">
				</div>
				<div class="slide" style="background-image: url('<?php echo get_field('paris_slideshow')['url'];?>');">
				</div>
			</section>
        </main>
        
<?php get_footer()?>