<?php get_header()?>

<main>
<section class="standard">
<div class="container">
<div class="row">
<div id="primary" class="col-xs-12 col-md-9">
<h1><?php single_post_title()?></h1>
<?php
while(have_posts()){
the_post();
the_post_thumbnail(); ?>
<article>
<img src="<?php echo get_field('bildfalt1')['url']; //hämtar ett fält med en specifik bild ?>" />
<img src="<?php echo get_field('bildfalt2')['url']; //hämtar ett fält med en specifik bild?>" />
<img src="<?php echo get_field('bildfalt3')['url']; //hämtar ett fält med en specifik bild?>" />
<h2 class="title">
    <a href=""><?php the_title()?></a>
</h2>
<ul class="meta">
    <li>
        <i class="fa fa-calendar"></i><?php the_date()//hämtar datumet?>
    </li>
    <li>
        <i class="fa fa-user"></i> <a href="forfattare.html"> <?php echo the_author_posts_link(); //visar författaren och gör namnet till en länk  ?></a>
    </li>
    <li>
        <i class="fa fa-tag"></i> <?php get_category_link($cat);?><?php the_category(', ') //hämtar kategorier från archive.php ?>
    </li>
</ul>
<p><?php the_excerpt(); //Gör texterna på inläggen till summaries ?></p>
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
<?php get_sidebar() ?>
</div>
</div>
</section>
</main>

<?php get_footer();?>

