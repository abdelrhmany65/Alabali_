<?php 
/**
 * Template Name: Landing Pixel Perfect
 */
get_header(); ?>

<main class="landing-main-content">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-container">
            <?php 
            $hero_img_path = get_template_directory_uri() . '/assets/images/Group-4617.webp'; 
            ?>
            <img src="<?php echo esc_url($hero_img_path); ?>" alt="Portal Gift Box" class="hero-bg-image">
        </div>
    </section>

<?php get_template_part( 'template-parts/section-overview' ); ?>
<?php get_template_part( 'template-parts/section-brand-media' ); ?>
<?php get_template_part( 'template-parts/section-strategy' ); ?>
<?php get_template_part( 'template-parts/section-social-gallery' ); ?>
<?php get_template_part( 'template-parts/section-image-grid' ); ?>
<?php get_template_part( 'template-parts/section-reels-display' ); ?>


</main>




<?php get_footer(); ?>