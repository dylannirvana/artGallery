<?php
/******************************************************************************************************
 * Deregister parent styles and scripts and re-register it from child 
******************************************************************************************************/
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );
    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

    // Get the theme data
    $the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'popper-scripts', get_stylesheet_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
}


/******************************************************************************************************
 * Setup Child Theme's textdomain.
 * Declare textdomain for this child theme.
 * Translations can be filed in the /languages/ directory.
******************************************************************************************************/
function my_child_theme_setup() {
    load_child_theme_textdomain( 'core-understrap', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'my_child_theme_setup' );


/******************************************************************************************************
 * Filter the except length to 200 characters.
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
******************************************************************************************************/
function wpdocs_custom_excerpt_length( $length ) {
    return 200;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


/******************************************************************************************************
 * Prints HTML with meta information for the current post-date/time and author.
******************************************************************************************************/
function understrap_posted_on() {
    //echo '<div class="avatar-meta">';
    //echo '<a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">';
    //echo get_avatar( get_the_author_meta( 'ID' ), 32 );
    //echo '</a></div>';

    echo '<div class="posted-on-meta">';
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
    if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
    }

    $time_string = sprintf( $time_string,
        esc_attr( get_the_date( 'c' ) ),
        esc_html( get_the_date() ),
        esc_attr( get_the_modified_date( 'c' ) ),
        esc_html( get_the_modified_date() )
    );

    $posted_on = sprintf(
        esc_html_x( 'Posted on %s', 'post date', 'core-understrap' ),
        '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
    );

    $byline = sprintf(
        esc_html_x( 'by %s', 'post author', 'core-understrap' ),
        '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
    );

    echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span><br/>';

}
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function understrap_entry_footer() {
    // Hide category and tag text for pages.
        // Hide category and tag text for pages.
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space after the comma */
        $categories_list = get_the_category_list( __( ', ', 'core-understrap' ) );
        if ( $categories_list && understrap_categorized_blog() ) {
            printf( '<span class="cat-links">' . __( 'Category: %1$s', 'core-understrap' ) . '</span><br/>', $categories_list );
        }

        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list( '', __( ', ', 'core-understrap' ) );
        if ( $tags_list ) {
            printf( '<span class="tags-links">' . __( 'Tagged %1$s', 'core-understrap' ) . '</span><br/>', $tags_list );
        }
    }

    if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
        echo '<span class="comments-link">';
        comments_popup_link( __( 'Leave a comment', 'core-understrap' ), __( '1 Comment', 'core-understrap' ), __( '% Comments', 'core-understrap' ) );
        echo '</span><br/>';
    }

        edit_post_link(
        sprintf(
            /* translators: %s: Name of current post */
            esc_html__( 'Edit %s', 'core-understrap' ),
            the_title( '<span class="screen-reader-text">"', '"</span>', false )
        ),
        '<span class="edit-link">',
        '</span>'
    );
        echo '</div>';

}
/******************************************************************************************************
* Overwriting the parent themes post_nav function
******************************************************************************************************/
    function understrap_post_nav() {
        // Don't print empty markup if there's nowhere to navigate.
        $previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
        $next     = get_adjacent_post( false, '', false );

        if ( ! $next && ! $previous ) {
            return;
        }
        ?>

                <nav class="navigation post-navigation">
                    <h2 class="sr-only"><?php _e( 'Post navigation', 'core-understrap' ); ?></h2>
                    <div class="nav-links">
                        <?php

                            if ( get_previous_post_link() ) {
                                previous_post_link( '<span class="nav-previous float-left">%link</span>', _x( '<i class="fa fa-angle-left"></i>&nbsp;%title', 'Previous post link', 'core-understrap' ) );
                            }
                            if ( get_next_post_link() ) {
                                next_post_link( '<span class="nav-next float-right">%link</span>',     _x( '%title&nbsp;<i class="fa fa-angle-right"></i>', 'Next post link', 'core-understrap' ) );
                            }
                        ?>
                    </div><!-- .nav-links -->
                </nav><!-- .navigation -->
        <?php
    }

/******************************************************************************************************
* Adds a custom read more link to all excerpts, manually or automatically generated
* @param string $post_excerpt Posts's excerpt.
* @return string
******************************************************************************************************/
    function understrap_all_excerpts_get_more_link( $post_excerpt ) {
        return $post_excerpt . ' [...]<p><a class="btn btn-lg btn-secondary understrap-read-more-link" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Read More...',
        'core-understrap' ) . '</a></p>';
    }


/******************************************************************************************************
* Initializes themes widgets and overwrites the parent theme function.
******************************************************************************************************/
if ( ! function_exists( 'understrap_widgets_init' ) ) {
    function understrap_widgets_init() {

        register_sidebar( array(
            'name'          => __( 'Sidebar', 'core-understrap' ),
            'id'            => 'left-sidebar',
            'description'   => 'Left sidebar widget area',
            'before_widget' => '<aside id="%1$s" class="widget widget-leftsidebar %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Hero Static', 'core-understrap' ),
            'id'            => 'statichero',
            'description'   => 'Static Hero widget. no slider functionallity',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );

        register_sidebar( array(
            'name'          => __( 'Off Canvas', 'core-understrap' ),
            'id'            => 'offcanvas',
            'description'   => 'Off Canvas widgets reveald after clicking the hamburger icon',
            'before_widget' => '<aside id="%1$s" class="widget widget-offcanvas wrapper-variable-md wrapper-no-padding-bottom %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer Left', 'core-understrap' ),
            'id'            => 'footerleft',
            'description'   => 'Widget area on the left below main content and above footer',
            'before_widget' => '<aside id="%1$s" class="widget  widget-footerleft wrapper-variable-md  %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer Right', 'core-understrap' ),
            'id'            => 'footerright',
            'description'   => 'Widget area on the right below main content and above footer',
            'before_widget' => '<aside id="%1$s" class="widget widget-footerright wrapper-variable-md %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );
    }
} // endif function_exists( 'understrap_widgets_init' ).
add_action( 'widgets_init', 'understrap_widgets_init' );


/******************************************************************************************************
* Remove page templates inherited from UnderStrap parent theme.
******************************************************************************************************/
add_filter( 'theme_page_templates', 'child_theme_remove_page_templates', 20, 3 );
function child_theme_remove_page_templates( $page_templates, $instance, $post ) {
    unset( $page_templates['page-templates/both-sidebarspage.php'] );
    unset( $page_templates['page-templates/left-sidebarpage.php'] );
    unset( $page_templates['page-templates/vertical-one-page.php'] );
    unset( $page_templates['page-templates/fullwidthpage.php'] );
    return $page_templates;
}

function first_paragraph($content){
    return preg_replace('/<p([^>]+)?>/', '<p$1 class="intro-content">', $content, 1);
}
add_filter('the_content', 'first_paragraph');


/******************************************************************************************************
* Adding related posts by author function
******************************************************************************************************/
function get_related_author_posts() {
    global $authordata, $post;

    $authors_posts = get_posts( array( 'author' => $authordata->ID, 'post__not_in' => array( $post->ID ), 'posts_per_page' => 5 ) );
    echo '<div class="author-info">';
    echo get_avatar( get_the_author_meta( 'ID' ), 52 );
    echo _e( '<h6>About the author</h6> ', 'core-understrap' );
    echo '<h4>';
    echo (the_author_meta('first_name')),' ',(the_author_meta('last_name')); 
    echo '</h4>';
    echo '<p>';
    echo nl2br(the_author_meta('description')); 
    echo '</p>';
    echo _e( '<span>More from ', 'core-understrap' );
    echo (the_author_meta('first_name')); 
    echo ':</span>';
    $output = '<ul class="author-infos-more-article">';
    foreach ( $authors_posts as $authors_post ) {
        $output .= '<li><a href="' . get_permalink( $authors_post->ID ) . '">' . apply_filters( 'the_title', $authors_post->post_title, $authors_post->ID ) . '</a></li>';
    }
    $output .= '</ul></div>';

    return $output;
}


/******************************************************************************************************
// Adding the footer menu
/******************************************************************************************************/
    register_nav_menus( array(
        'footer' => __( 'Footer Menu', 'core-understrap' ),
    ) );


/******************************************************************************************************
// Adding breadcrumb nav
/******************************************************************************************************/

function understrap_breadcrumb() {
    if (!is_home()) {
        echo '<div class="breadcrumb-nav"><a href="';
        echo get_option('home');
        echo '">';
        bloginfo('name'); // der Blogname als Startseite, ansonsten vlt. Home oder Startseite schreiben
        echo " » </a>";
        if (is_category() || is_single()) {
            the_category();
            if (is_single()) {
                echo " » ";
                the_title();
            }
        } elseif (is_page()) {
            echo the_title();
        }
        echo '</div>';
    }
}

