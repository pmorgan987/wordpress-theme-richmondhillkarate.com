<?php get_header(); ?>
<section id="main-section"> <!-- Start main-section section -->

<!-- <h1 class="tagline">Instructors</h1> -->

<?php
$instructor = new WP_Query( array( 'post_type' => 'instructors', 'posts_per_page' => 10, 'orderby' => 'menu_order', 'order' => 'ASC' ) );
?>
<?php while ( $instructor->have_posts() ) : $instructor->the_post(); ?>

    <div class="row instructorRow">
        <div class="col-md-9">
            <div class="instructorName mb-2 d-block d-xl-inline"><?php the_title(); ?></div>
            <div class="instructorRank d-inline"><?php echo get_post_meta($post->ID, 'Instructor Rank', true); ?></div>
            <div class="instructorTitle d-inline"><?php echo get_post_meta($post->ID, 'Instructor Title', true); ?></div>
            <div class="instructorContent"><?php the_content(); ?></div>
        </div>
        <div class="col-md-3">
            <?php the_post_thumbnail('home-slider-img',['class'=>'img-fluid']); ?>
        </div>
    </div>

<?php endwhile; ?>

</section>
<?php get_footer(); ?>