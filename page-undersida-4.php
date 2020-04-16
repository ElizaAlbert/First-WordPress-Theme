<?php get_header()?>


		<main>
			<section class="standard">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6">
                              <?php
                                    while(have_posts()){
                                    the_post();
                                    ?>
							<h1><?php the_title()?></h1>
							<p><?php the_content()?></p>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-6">
							<img src="<?php echo get_field('bilden_pa_killen')['url']; ?>')">
						</div>
					</div>
				</div>
			</section>
        </main>
                                    <?php } ?>
<?php get_footer()?>