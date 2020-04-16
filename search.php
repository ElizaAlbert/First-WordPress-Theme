<?php get_header();?>

<main>
<section>
<div class="container">
<div class="row">
    <div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
<!-- VISAR DET MAN SÖKTE PÅ -->
        <h1>Sökresultat för: <?php the_search_query();?></h1>
        <div class="searchform-wrap">
            <?php
			while(have_posts()){
			the_post();
			the_post_thumbnail(); ?>
	<article>
<!-- HÄMTAR BILDERNA FÖR INLÄGGEN PÅ BLOGGEN, OCH NÄR MAN KLICKAR PÅ INLÄGGET, ALLIHOPP -->
		<img src="<?php echo get_field('bildfalt')['url']; ?>" />

		<h2 class="title">
<a href="<?php the_permalink();?>"><?php the_title();?></a>
		</h2>
		<ul class="meta">
			<li>
<!-- HÄMTAR DATUM -->
				<i class="fa fa-calendar"></i><?php the_date()?>
			</li>
			<li>
<!-- HÄMTAR FÖRFATTARE OCH DENS POSTER-->
				<i class="fa fa-user"></i>
 <?php echo the_author_posts_link(); ?>
			</li>
			<li>
<!-- HÄMTAR KATEGORINS LÄNKAR -->
				<i class="fa fa-tag"></i> <?php get_category_link($cat);?><?php the_category(', ')?>
			</li>
		</ul>
<!-- FÖRKORTAR INLÄGGSTEXTEN -->
		<p><?php the_excerpt();?></p>
	</article>
            <?php } ?>
            <nav class="navigation pagination">
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a>
							</nav>
						</div>
					</div>
				</div>
			</section>
		</main>
<?php get_footer();?>