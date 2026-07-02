<?php
/**
 * Template part for displaying Brand Video and 3-Image Grid
 */
?>

<section class="brand-media-section">
    <div class="container">
        <div class="brand-video-box">
            <video autoplay loop muted playsinline class="custom-brand-video">
                <source src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Fff.mp4' ); ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="brand-images-grid">
            <div class="grid-image-item">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/PLAN-04.webp' ); ?>" alt="Brand Moment 1">
            </div>
            <div class="grid-image-item">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/PLAN-02.webp' ); ?>" alt="Brand Moment 2">
            </div>
            <div class="grid-image-item">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/PLAN-03.webp' ); ?>" alt="Brand Moment 3">
            </div>

        </div>

    </div>
</section>