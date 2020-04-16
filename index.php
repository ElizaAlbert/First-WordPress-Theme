<!-- HÄMTAR HEADERN -->
<?php get_header();?>


<main>
    <!-- THE LOOP -->
		<?php
			while(have_posts()){
			the_post();
?>


<section class="hero" style="background-image: url('<?php echo get_field('bakgrundsbild')['url']; //skriver ut bakgrundsbilden i hero:n?>')">

<div class="container">
    <div class="row">
       <div class="text">
        <h1><?php the_title();?></h1>
        <p><?php the_content(); //skriver ut the content från redigeringssidan ?></p>
    </div>
 </div>
</div>
</section>
<section class="testimonial black">
<div class="container">
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3 text-center">
            <h2><?php echo get_field('sub_sub_title'); //hämtar en underfält med en titel ?></h2>
        </div>
    </div>
</div>
</section>
<section class="columns text-center">
<div class="container">
    <div class="row top">
        <div class="col-xs-12">
            <h2><?php echo get_field('vi_ar_bra_pa');?></h2>
        </div>
    </div>
    <div class="row bottom">
        <div class="col-xs-4">
            <i class="fa <?php echo get_field('html5_icon');?>"></i>
            <h3><?php echo get_field('html5');?></h3>
            <p><?php echo get_field('html5_text');?></p>
        </div>
        <div class="col-xs-4">
            <i class="fa <?php echo get_field('css3_icon');?>"></i>
            <h3><?php echo get_field('css3');?></h3>
            <p><?php echo get_field('css3_text');?></p>
        </div>
        <div class="col-xs-4">
            <i class="fa <?php echo get_field('javascript_icon');?>"></i>
            <h3><?php echo get_field('javascript')?></h3>
            <p><?php echo get_field('javascript_text')?></p>
        </div>
    </div>
</div>
</section>
<section class="slideshow" data-autoplay="3000" data-singleitem="true">
<div class="slide red no-image">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 text-center">
                <i class="fa fa-wordpress"></i>
            </div>
            <div class="col-xs-6">
                <h2><?php echo get_field('slideshow_titel_framsida')?></h2>
                <p><?php echo get_field('slideshow_text_1_framsida')?></p>
            </div>
        </div>
    </div>
</div>
<div class="slide black no-image">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <h2><?php echo get_field('slideshow_titel_framsida')?></h2>
                <p><?php echo get_field('slideshow_text_2_framsida')?></p>
            </div>
            <div class="col-xs-6 text-center">
                <img src="<?php echo get_field('slideshow_picture')['url'];?>" />
            </div>
        </div>
    </div>
</div>
</section>
<section class="columns text-center">
<div class="container">
    <div class="row top">
        <div class="col-xs-12">
            <h2><?php echo get_field('citat_titel')?></h2>
        </div>
    </div>
    <div class="row bottom">
        <div class="col-xs-5 col-xs-offset-1">
            <blockquote>
                <p><?php echo get_field('citat_text_1')?></p>							
            </blockquote>
        </div>
        <div class="col-xs-5">
            <blockquote>
                <p><?php echo get_field('citat_text_2')?></p>							
            </blockquote>
        </div>
    </div>
</div>
</section>
</main>
<!-- AVSLUTANDE PHP TAG -->
            <?php } ?>

<!-- HÄMTAR FOOTERN -->
<?php get_footer()?>