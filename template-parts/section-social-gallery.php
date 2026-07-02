<?php
/**
 * Template part for Social Gallery 
 */
?>

<section class="social-gallery-section">
    <div class="container">
        <div class="gallery-top-row">
            <div class="gallery-item">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Post-4.webp' ); ?>" alt="Social Post Left">
            </div>
            <div class="gallery-item video-item">
                <video autoplay loop muted playsinline class="gallery-video">
                    <source src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-reel-1.mp4' ); ?>" type="video/mp4">
                </video>
            </div>
            <div class="gallery-item">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Post-5.webp' ); ?>" alt="Social Post Right">
            </div>

        </div>
    </div>
    <div class="gallery-bottom-hero">
        <div class="container-fluid p-0">
             <div class="large-image-wrapper p-0">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Post-6.webp' ); ?>" alt="Delivery Moment Large">
             </div>
        </div>
    </div>
</section>