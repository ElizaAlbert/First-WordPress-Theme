<?php /* Template Name: Kontakt */ ?>


<?php get_header();?>


		<main>
			<section class="hero small" style="background-image: url('<?php echo get_field('bakgrundsbilden_kontaktsida')['url']; ?>');">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 column">
							<div class="text">
								<h1>Kontakt</h1>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="standard">
				<div class="container">
					<div class="row">
						<div class="col-xs-6">
										  
		<?php
			while(have_posts()){
			the_post();
			the_post_thumbnail();
			 ?>
    
							<h2>Kontakta oss</h2>
						
							<form>
	<?php the_content()?>
							</form>
			<?php }?>
						</div>
						<div class="col-xs-6">
							<h2>Våra kontaktuppgifter</h2>
							<p>
								The Company<br />
								Gatgatan 1<br />
								123 45 Någonstans
							</p>
							<p>
								Tel: 0123456789<br />
								E-post: <a href="">info@thecompany.com</a>
							</p>
						</div>
					</div>
				</div>
			</section>
		</main>

<?php get_footer()?>