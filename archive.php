<?php get_header();?>


<main>
<section>
<div class="container">
<div class="row">
<div id="primary" class="col-xs-12 col-md-9">
<!-- DEN HÄR FUNKTIONEN HÄMTAR DEN SPECIFIKA KATEGORIN OCH SKRIVER UT DEN BASERAD PÅ VILKEN KATEGORI MAN ÄR INNE OCH KOLLAR PÅ-->
			  <h1><?php $cat = single_cat_title(); echo $cat[0]->cat_name; ?></h1>
<!-- HÄMTAR NAMNET PÅ FÖRFATTAREN SOM EN TITEL-->
			  <h1><?php the_author(); ?></h1>
			  
		<?php
			while(have_posts()){
			the_post();
			the_post_thumbnail();
			 ?>
    
	<article>
<!-- HÄMTAR BILDERNA FÖR INLÄGGEN PÅ BLOGGEN, OCH NÄR MAN KLICKAR PÅ INLÄGGET, ALLIHOPP -->
		<img src="<?php echo get_field('bildfalt1')['url']; ?>" />
<img src="<?php echo get_field('bildfalt2')['url']; ?>" />
<img src="<?php echo get_field('bildfalt3')['url']; ?>" />

		<h2 class="title">
<!-- DEN HÄR HÄMTAR EN PERMALINK OCH TITLARNA -->
<a href="<?php the_permalink();?>"><?php the_title();?></a>
		</h2>
		<ul class="meta">
			<li>
<!-- HÄMTAR DATUM -->
				<i class="fa fa-calendar"></i><?php the_date()?>
			</li>
			<li>
<!-- HÄMTAR FÖRFATTARE -->
				<i class="fa fa-user"></i><?php echo the_author_posts_link(); ?>
			</li>
			<li>
<!-- HÄMTAR KATEGORIN -->
				<i class="fa fa-tag"></i> <?php get_category_link($cat);?> <?php the_category(', ')?>
			</li>
		</ul>
<!-- FÖRKORTAR INLÄGGSTEXTEN -->
		<p><?php the_excerpt();?></p>
	</article>
			<?php } ?>

<nav class="navigation pagination">
		<h2 class="screen-reader-text">Inläggsnavigering</h2>
<!-- SKRIVER UT 'FÖREGÅENDE' OCH 'NÄSTA' PÅ SIDOKNAPPARNA -->
		<a class="prev page-numbers" <?php posts_nav_link( $sep = '|', $prelabel = 'Föregående', $nxtlabel = 'Föregående' ); ?></a>
		<span class="page-numbers current">1</span>
		<a class="page-numbers" href="">2</a>
<!-- SKRIVER UT 'FÖREGÅENDE' OCH 'NÄSTA' PÅ SIDOKNAPPARNA -->	
		<a class="next page-numbers" banan <?php posts_nav_link( $sep = '|', $prelabel = 'Nästa', $nxtlabel = 'Nästa' ); ?> </a>
    </nav>
    
    
</div>
<aside id="secondary" class="col-xs-12 col-md-3">
	<div id="sidebar">
		<ul>
			<li>
				<form id="searchform" class="searchform">
					<div>
						<label class="screen-reader-text">Sök efter:</label>
						<input type="text" />
						<input type="submit" value="Sök" />
					</div>
				</form>
			</li>
		</ul>
		<ul role="navigation">
			<li class="pagenav">
				<h2>Sidor</h2>
				<ul>
					<li class="page_item current_page_item">
						<a href="">Blogg</a>
					</li>
					<li class="page_item">
						<a href="">Exempelsida</a>
					</li>
					<li class="page_item">
						<a href="">Kontakt</a>
					</li>
					<li class="page_item page_item_has_children">
						<a href="">Om mig</a>
						<ul class="children">
							<li class="page_item">
								<a href="">Intressen</a>
							</li>
							<li class="page_item page_item_has_children">
								<a href="">Portfolio</a>
								<ul class="children">
									<li class="page_item">
										<a href="">Projekt 1</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="page_item">
						<a href="">Startsida</a>
					</li>
				</ul>
			</li>
			<li>
				<h2>Arkiv</h2>
				<ul>
					<li>
						<a href="arkiv.html">oktober 2016</a>
					</li>
				</ul>
			</li>
			<li class="categories">
				<h2>Kategorier</h2>
				<ul>
					<li class="cat-item">
						<a href="">Natur</a> (1)
					</li>
					<li class="cat-item">
						<a href="">Okategoriserade</a> (3)
		
					</li>
				</ul>
			</li>
		</ul>
	</div>
</aside>
</div>
</div>
</section>
</main>

<?php get_footer();?>


