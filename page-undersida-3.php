<?php get_header()?>


		<main>
			<section class="standard">
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12">

                        
        		<?php
			while(have_posts()){
			the_post();
            the_post_thumbnail(); ?>
            
							<h1><?php the_title()?></h1>
                            <p><?php the_content()?></p>
            <?php }?>
						</div>
					</div>
				</div>
			</section>
        </main>
        
<?php get_footer()?>