<?php
/**
 * Template part for the 8-Image Grid (2 Columns x 4 Rows)
 */
?>

<section class="brand-grid-section section-padding">
    <div class="container">
        <div class="pixel-image-grid">
            <?php 
            $grid_images = [
                'PLAN-07.webp', 
                'PLAN-08.webp', 
                'PLAN-09.webp', 
                'PLAN-10.webp', 
                'PLAN-11.webp', 
                'PLAN-12.webp', 
                'PLAN-13.webp', 
                'PLAN-14.webp', 
            ];

            foreach ( $grid_images as $img_name ) : ?>
                <div class="grid-card">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/' . $img_name ); ?>" alt="Brand Showcase">
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>