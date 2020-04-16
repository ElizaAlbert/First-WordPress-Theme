<?php /* Template name: Om oss */ ?>

<?php get_header()?>


	<main>
			<section class="standard">
				<div class="container">
					<div class="row">
						<div class="col-xs-6">
							<h1><?php echo get_field('pusselbitar_rubrik')?></h1>
							<p><?php echo get_field('pusselbitar_text_1')?></p>
							<p><?php echo get_field('pusselbitar_text_2')?></p>
						</div>
						<div class="col-xs-6">
							<img src="<?php echo get_field('pusselbitar_bilden')['url']; ?>" />
						</div>
					</div>
				</div>
			</section>
			<section class="testimonial black">
				<div class="container">
					<div class="row">

                       <?php while(have_rows('banner')){
              the_row();
        ?>  
						<div class="col-xs-6 col-xs-offset-2">
							<h2><?php echo get_sub_field('black_banner')?></h2>
						</div>
						<div class="col-xs-2 text-right">
							<a href="" class="btn btn-default"><?php echo get_sub_field('black_banner_button')?></a>
                       </div>
                    </div>
                        <?php } ?>
				</div>
			</section>
			<section class="slideshow" data-autoplay="5000" data-singleitem="false" data-items="2">
                <?php while(have_rows('om_oss_sliden')){
          the_row();?>
                
				<div class="slide" style="background-image: url('<?php echo get_sub_field('bildernaa')['url'];?>');">
				</div>
                <?php } ?>
			</section>
			<section class="columns red text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php echo get_field('vart_team')?></h2>
						</div>
					</div>
					<div class="row bottom">
                         <?php while(have_rows('om_oss_flex_icons')){
              the_row();
        ?>  
						<div class="col-xs-3">
							<img src="<?php echo get_sub_field('om_oss_icon')['url'];?>">
							<h3><?php echo get_sub_field('om_oss_icon_titel');?></h3>
							<p><?php echo get_sub_field('om_oss_titel_text');?></p>
							<a href="" class="btn btn-default"><?php echo get_sub_field('om_oss_icon_button')?></a>
						</div>
					  <?php }?>
					</div>
				</div>
			</section>
			<section class="columns text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php echo get_field('second_title')?></h2>
						</div>
					</div>
					<div class="row bottom">
                         <?php while(have_rows('bast_pa_icons')){
              the_row();
        ?>  
						<div class="col-xs-4">
							<i class="fa fa-<?php echo get_sub_field('ikonerna_icon')?>"></i>
							<h3><?php echo get_sub_field('ikon_titel');?></h3>
							<p><?php echo get_sub_field('ikon_text');?></p>
						</div>
                         <?php }?>
					</div>
				</div>
			</section>
			<section class="columns red text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php echo get_field('sagt_om_oss')?></h2>
						</div>
					</div>
					<div class="row bottom">
						<div class="col-xs-5 col-xs-offset-1">
							<blockquote>
								<p><?php echo get_field('sagt_om_oss_text_1')?></p>							
							</blockquote>
						</div>
						<div class="col-xs-5">
							<blockquote>
								<p><?php echo get_field('sagt_om_oss_text_2')?></p>							
							</blockquote>
						</div>
					</div>
				</div>
			</section>
		</main>

<?php get_footer()?>