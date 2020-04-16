<?php //* Template Name: exempelsida */ ?>

<?php get_header();?>
		<main>
			<section class="hero" style="background-image: url('<?php echo get_field('hero_bilden')['url']; ?>')">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 column">
							<div class="text">
								<?php
                            while(have_posts()){  //Medans det finns poster kvar
						    the_post();           //Skriver ut utvald post
                        ?>

                        <h1><?php the_title();?></h1>
                        <p><?php the_content(); ?></p>

                        <?php } ?>
							</div>
						</div>
					</div>
				</div>
			</section>









			<section class="standard">
				<div class="container">
					<div class="row">
						<div class="col-xs-6">
							<img src="<?php echo get_field('office_bilden')['url']; //skriver ut fältet med bilden?>" />
						</div>
						<div class="col-xs-6">
							<h2><?php echo get_field('office_titel')?></h2>
							<p><?php echo get_field('office_text_1')?></p>
							<p><?php echo get_field('office_text_2')?></p>
						</div>
					</div>
				</div>
			</section>









			<section class="testimonial red">
				<div class="container">
					<div class="row">

        <?php while(have_rows('forsta_flexibla')){
              the_row();
        ?>     
						<div class="col-xs-6 col-xs-offset-2">
							<h2><?php echo get_sub_field('red_banner')?></h2>
						</div>
						<div class="col-xs-2 text-right">
							<a href="" class="btn btn-default"><?php echo get_sub_field('red_banner_button')?></a>
                        </div>
                             <?php } ?>
					</div>
				</div>
            </section>









			<section class="slideshow" data-autoplay="2000" data-singleitem="false" data-items="3">
                        <?php while(have_rows('andra_flexibla_slideshow')){ //medan gruppfältet andra_flexibla_slideshow har rader så skrivs det ut något
              the_row(); //drar bort en rad så det inte blir oändligt med loop
        ?>  
				<div class="slide" style="background-image: url('<?php echo get_sub_field('bild_1')['url'];?>');">
                </div>
                        <?php } ?>
            </section>








			
			<section class="columns black text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2>Vi är bra på</h2>
						</div>
					</div>
					<div class="row bottom">
                                           <?php while(have_rows('tredje_flexibla_icons')){
              the_row();
        ?>  
						<div class="col-xs-3">
							<i class="fa fa-<?php echo get_sub_field('icon_icon')?>"></i>
							<h3><?php echo get_sub_field('icon_titel');?></h3>
							<p><?php echo get_sub_field('icon_text');?></p>
						</div>
                              <?php }?>
					</div>
                </div>
                                      
			</section>








			<section class="testimonial">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-3 text-center">
							<h2>Lorem ipsum dolor sit amet.</h2>
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
				<div class="slide no-image" style="background-image: url(<?php echo get_field('bild_slideshow'); ?> );">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h2><?php echo get_field('bild_rubrik')?></h2>
								<p><?php echo get_field('bild_text_1')?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="slide black no-image">
					<div class="container">
						<div class="row">
							<div class="col-xs-6">
								<h2><?php echo get_field('spotify_rubrik')?></h2>
								<p><?php echo get_field('wordpress_text')?></p>
							</div>
							<div class="col-xs-6 text-center">
								<i class="fa fa-spotify"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="slide" style="background-image: url('<?php echo get_field('paris_slideshow')['url'];?>');">
				</div>
			</section>







	
			<section class="columns text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php echo get_field('vi_gillar_')?></h2>
						</div>
					</div>
					<div class="row bottom">
						<div class="col-xs-6">
							<i class="fa fa-<?php echo get_field('wordpress_icon')?>"></i>
							<h3><?php echo get_field('wordpress_icon_rubrik')?></h3>
							<p><?php echo get_field('wordpress_icon_text')?></p>
						</div>
						<div class="col-xs-6">
							<i class="fa fa-<?php echo get_field('drupal_icon_')?>"></i>
							<h3><?php echo get_field('drupal_icon_rubrik')?></h3>
							<p><?php echo get_field('drupal_icon_text')?></p>
						</div>
					</div>
				</div>
			</section>
		</main>

<?php get_footer()?>
