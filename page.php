<?php get_header(); ?>
<section id="main-section"> <!-- Start main-section section -->

<?php
if (have_posts()) :
    while(have_posts()) :
        the_post();
?>
    <h1 class="tagline"><?php the_title(); ?></h1>         
    <div>
        <?php the_content(); ?>
    </div>
<?php 
endwhile; endif;
?>

</section>
<?php get_footer(); ?>