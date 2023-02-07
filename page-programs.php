<?php get_header(); ?>
<section id="main-section"> <!-- Start main-section section -->

<?php
$programs = new WP_Query( array( 'post_type' => 'programs', 'posts_per_page' => 10, 'orderby' => 'menu_order', 'order' => 'ASC' ) );
?>
<?php while ( $programs->have_posts() ) : $programs->the_post(); ?>

    <div class="row programRow">
        <div class="col-md-9">
            <div class="programName"><?php the_title(); ?></div>
            <div class="programContent"><?php the_content(); ?></div>
        </div>
        <div class="col-md-3">
            <?php the_post_thumbnail('home-slider-img',['class'=>'img-fluid']); ?>
        </div>
    </div>

<?php endwhile; ?>

</section>
<?php get_footer(); ?>