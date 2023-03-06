<?php get_header(); ?>

<section id="main-section"> <!-- Start main-section section -->

    <h1 class="tagline">Martial Arts Training in Richmond Hill, GA</h1>

    <?php 
    $feature = new WP_Query(
        array(
            'post_type' => 'home_slideshow',
            'posts_per_page' => 10,
            'order' => 'ASC',
            'orderby' => 'menu_order' 
        )
    ); 
    ?>

    <!-- Home Page Carousel Slider Start -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval=10000>
        <div class="carousel-inner">

    <?php $setactive = 1; ?>
    <?php while ( $feature->have_posts() ) : $feature->the_post(); ?>
        <div class="carousel-item<?php if($setactive) { ?> active<?php } ?>">
        <?php 
            $content = get_the_content();
        ?>
            <div class="row homepage-slider">
            <?php
            if ($content != '') {
            ?>
                <div class="col-lg-7">
                    <h2><?php the_title(); ?></h2>
                    <?php 
                        echo $content;
                    ?>
                </div>
                <?php if (has_post_thumbnail()): ?>
                <div class="col-lg-5 text-center">
                    <img src="<?php the_post_thumbnail_url('home-slider-img'); ?>" class="img-fluid" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                </div>
                <?php endif; ?>
                <?php
                } else {
                ?>
                <?php if (has_post_thumbnail()): ?>
                <div class="col-lg-12 text-center">
                    <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                </div>
                <?php endif; ?>
                <?php
                }
                ?>
            </div>
        </div>
        <?php $setactive = 0; ?>
    <?php endwhile; ?>

    <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a> -->
    </div>
    <!-- Home Page Carousel Slider End -->
</section>

<!-- FEATURED PROGRAMS SECTION START -->
<section id="featured_programs" class="pb-5">
    <h1>Featured Program</h1>
		
	<h2>Taekwondo</h2>
    <h3>Ages 6+</h3>

    <p>Develop speed, power and flexibility while learning the discipline of Taekwondo - the most popular martial art in the world today.</p>

    <p>Taekwondo targets fitness, improves cardio conditioning and flexibility, relieves stress and teaches you the true art and skill of technical kicking and self-defense.</p>

    <p>The motor skill development learned/gained through Taekwondo provides children with a unique advantage and head start in other athletic activities, as they grow older.  Their balance and physical abilities are significantly improved and much finer tuned when compared to other children in their age group.</p>
	
	<div class="buttons">
			<a class="btn btn-lg btn-outline-light" href="https://www.mystudio.academy/t/?=8334636862/2880/994//1580999315" role="button">Free Trial</a>
			<a class="btn btn-lg btn-outline-light" href="https://www.mystudio.academy/m/?=8334636862/2880/4663//1550175391" role="button">Enroll Now</a>
	</div>
</section>
<!-- FEATURED PROGRAMS SECTION END -->

<?php get_footer(); ?>