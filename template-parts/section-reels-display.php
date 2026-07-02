<?php
/**
 * Template part for displaying a Large Image and 3 Vertical Videos (Reels)
 */
?>

<section class="reels-display-section section-padding">
    <div class="reels-top-banner">
        <div class="container-fluid p-0">
            <div class="main-banner-wrapper">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/giiifff.webp' ); ?>" alt="Gift Presentation">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="reels-grid-wrapper">
        
            <div class="reel-video-item">
                <video autoplay loop muted playsinline>
                    <source src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Reel-3.mp4' ); ?>" type="video/mp4">
                </video>
            </div>
            <div class="reel-video-item">
                <video autoplay loop muted playsinline>
                    <source src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Reel-2.mp4' ); ?>" type="video/mp4">
                </video>
            </div>
            <div class="reel-video-item">
                <video autoplay loop muted playsinline>
                    <source src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Reel-4.mp4' ); ?>" type="video/mp4">
                </video>
            </div>

        </div>
    </div>
</section>