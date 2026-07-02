<?php
/**
 * Enqueue scripts and styles.
 */

function alabali_scripts() {
    wp_enqueue_style( 'alabali-fonts', 'https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;700&display=swap', array(), null );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3' );
    wp_enqueue_style( 'alabali-style', get_stylesheet_uri(), array('bootstrap-css'), _S_VERSION );

        wp_enqueue_style( 
            'alabali-landing-custom', 
            get_template_directory_uri() . '/assets/css/landing-style.css', 
            array('bootstrap-css', 'alabali-style'), 
            time(), 
            'all' 
        );

    // --- Scripts ---
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.3', true );
    wp_enqueue_script( 'alabali-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

    wp_enqueue_script( 
        'alabali-landing-js', 
        get_template_directory_uri() . '/assets/js/landing-script.js', 
        array('jquery'), 
        _S_VERSION, 
        true 
    );
    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'alabali_scripts' );