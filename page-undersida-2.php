<?php get_header()?>

<main>
<section class="standard">
<div class="container">
    <div class="row">
        <div id="primary" class="col-xs-12 col-md-9 col-md-push-3">

        		<?php
			while(have_posts()){
			the_post();
            the_post_thumbnail(); ?>
            
            <h1><?php the_title()?></h1>
            <p><?php the_content()?></p>
        </div>
        <aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
    <ul class="side-menu">
			<?php  wp_nav_menu( array(
	'theme_location'    => "meny2",
	'menu_class' => 'side-menu'
) );
 ?>

            </ul>
        </aside>
    </div>
</div>
</section>
</main>
            <?php } ?>
<?php get_footer()?>