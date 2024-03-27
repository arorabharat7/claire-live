<?php

/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define('CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0');

/**
 * Enqueue styles
 */


function clair_enqueue_scripts()
{
    // Enqueue the script 'pgu' with its dependencies
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1', 'all');
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '6.5.1', 'all');
    wp_enqueue_style('tailwind_font', 'https://fonts.googleapis.com/css2?family=Michroma&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', array(), null, 'all');
    wp_enqueue_style('tailwind_output', get_stylesheet_directory_uri() . '/tailwind_output.css', array(), null, 'all');

    // Enqueue the jQuery script
    wp_enqueue_script('jquery-min', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', true);

    // Enqueue the Swiper script with jQuery as dependency
    wp_enqueue_script('swiper-min', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), '6.5.1', true);

    // Enqueue your custom scripts
    wp_enqueue_script('pgu', get_stylesheet_directory_uri() . '/assets/js/custome.js', array('jquery'), null, true);

    // Localize the scripts 'pgu' and 'pgua' with the ajaxurl parameter

    wp_localize_script('pgu', 'pguajax', array('ajaxurl' => admin_url('admin-ajax.php')));
}

add_action('wp_enqueue_scripts', 'clair_enqueue_scripts');









// Created Option Pages 
if (function_exists('acf_add_options_page')) {
    $option_page = acf_add_options_page(array(
        'page_title'    => 'Footer Options',
        'menu_title'    => 'Footer Options',
        'menu_slug'     => 'footer_options',
        'capability'    => 'edit_posts',
        'redirect'  => false
    ));

    // new-code

    acf_add_options_page(array(
        'page_title'    => 'Header Settings',
        'menu_title'    => 'Header Settings',
        'menu_slug'     => 'header_settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_page(array(
        'page_title'    => 'Global Settings',
        'menu_title'    => 'Global Settings',
        'menu_slug'     => 'global_settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}



function portfolio_category_posts_shortcode()
{
    $args = array(
        'post_type' => 'portfolio', // Custom post type name
        'posts_per_page' => -1, // Retrieve all posts
    );

    // The Query
    $portfolio_query = new WP_Query($args);

?>
    <div class="swiper-wrapper lg:mb-16 mb-10">
        <?php
        // Get the portfolio category ID
        if ($portfolio_query->have_posts()) {
            while ($portfolio_query->have_posts()) {
                $portfolio_query->the_post();
                // Get post featured image
                $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                // Get post title
                $post_title = get_the_title();
                // Get post URL
                $post_url = get_permalink();

                // Start the loop

        ?>

                <a class="swiper-slide" href="<?php echo get_permalink(); ?>">
                    <div class=" relative">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php
                            $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                            $image_dimensions = ' height: 210px;';
                            echo '<img class="w-full object-cover" style="' . $image_dimensions . '" src="' . $featured_image_url . '" alt="' . $post_title  . '" />';
                            ?>
                        <?php endif; ?>
                        <div class="absolute left-4 bottom-6">
                            <h3 class="lg:text-17 text-sm font-michroma text-white uppercase"><?php the_title(); ?> </h3>
                        </div>
                    </div>
                </a>

        <?php
            }
            wp_reset_postdata(); // Restore global post data
        } else {
            echo '<p>No posts found.</p>';
        }

        ?>
    </div>
    <!-- <div class="swiper-button-next !right-16 xl:!top-28 lg:!top-24 md:!top-20 sm:!top-24 !top-12"><img class="max-w-max sm:block hidden" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/claire_project-right-arrow.svg" alt=""></div>
    <div class="swiper-button-prev !left-16 xl:!top-28 lg:!top-24 md:!top-20 sm:!top-24 !top-12"><img class="max-w-max sm:block hidden" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/claire_project-left-arrow.svg" alt=""></div> -->
    <div class="swiper-pagination "></div>
<?php }
// Register shortcode
add_shortcode('portfolio_category_posts', 'portfolio_category_posts_shortcode');






// Register Custom Post Type
function create_portfolio_cpt()
{
    $labels = array(
        'name'                  => _x('Portfolio', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Portfolio', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Portfolio', 'text_domain'),
        'name_admin_bar'        => __('Portfolio', 'text_domain'),
        'archives'              => __('Portfolio Archives', 'text_domain'),
        'attributes'            => __('Portfolio Attributes', 'text_domain'),
        'parent_item_colon'     => __('Parent Portfolio:', 'text_domain'),
        'all_items'             => __('All Portfolio', 'text_domain'),
        'add_new_item'          => __('Add New Portfolio', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'new_item'              => __('New Portfolio', 'text_domain'),
        'edit_item'             => __('Edit Portfolio', 'text_domain'),
        'update_item'           => __('Update Portfolio', 'text_domain'),
        'view_item'             => __('View Portfolio', 'text_domain'),
        'view_items'            => __('View Portfolio', 'text_domain'),
        'search_items'          => __('Search Portfolio', 'text_domain'),
        'not_found'             => __('Not found', 'text_domain'),
        'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
        'featured_image'        => __('Featured Image', 'text_domain'),
        'set_featured_image'    => __('Set featured image', 'text_domain'),
        'remove_featured_image' => __('Remove featured image', 'text_domain'),
        'use_featured_image'    => __('Use as featured image', 'text_domain'),
        'insert_into_item'      => __('Insert into portfolio', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this portfolio', 'text_domain'),
        'items_list'            => __('Portfolio list', 'text_domain'),
        'items_list_navigation' => __('Portfolio list navigation', 'text_domain'),
        'filter_items_list'     => __('Filter portfolio list', 'text_domain'),
    );
    $args = array(
        'label'                 => __('Portfolio', 'text_domain'),
        'description'           => __('Post Type Description', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes'),
        'taxonomies'            => array('portfolio_category'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-portfolio', // You can change the icon
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'portfolio'), // You can change the slug
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type('portfolio', $args);
}
add_action('init', 'create_portfolio_cpt', 0);

// Register Custom Taxonomy
function create_portfolio_category_taxonomy()
{
    $labels = array(
        'name'                       => _x('Portfolio Categories', 'Taxonomy General Name', 'text_domain'),
        'singular_name'              => _x('Portfolio Category', 'Taxonomy Singular Name', 'text_domain'),
        'menu_name'                  => __('Portfolio Category', 'text_domain'),
        'all_items'                  => __('All Portfolio Categories', 'text_domain'),
        'parent_item'                => __('Parent Portfolio Category', 'text_domain'),
        'parent_item_colon'          => __('Parent Portfolio Category:', 'text_domain'),
        'new_item_name'              => __('New Portfolio Category Name', 'text_domain'),
        'add_new_item'               => __('Add New Portfolio Category', 'text_domain'),
        'edit_item'                  => __('Edit Portfolio Category', 'text_domain'),
        'update_item'                => __('Update Portfolio Category', 'text_domain'),
        'view_item'                  => __('View Portfolio Category', 'text_domain'),
        'separate_items_with_commas' => __('Separate Portfolio Categories with commas', 'text_domain'),
        'add_or_remove_items'        => __('Add or remove Portfolio Categories', 'text_domain'),
        'choose_from_most_used'      => __('Choose from the most used', 'text_domain'),
        'popular_items'              => __('Popular Portfolio Categories', 'text_domain'),
        'search_items'               => __('Search Portfolio Categories', 'text_domain'),
        'not_found'                  => __('Not Found', 'text_domain'),
        'no_terms'                   => __('No Portfolio Categories', 'text_domain'),
        'items_list'                 => __('Portfolio Categories list', 'text_domain'),
        'items_list_navigation'      => __('Portfolio Categories list navigation', 'text_domain'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'                    => array('slug' => 'portfolio-category'), // You can change the slug
    );
    register_taxonomy('portfolio_category', array('portfolio'), $args);
}
add_action('init', 'create_portfolio_category_taxonomy', 0);







function fetch_portfolio_posts()
{
    ob_start();
?>
    <?php
    $category = $_POST['category'];
    $page = $_POST['page'];
    $args = array(
        'post_type' => 'portfolio',
        'posts_per_page' => 9, // Adjust the number of posts per page as needed
        'paged' => $page,
        'tax_query' => array(
            array(
                'taxonomy' => 'portfolio_category', // Replace with your custom category taxonomy
                'field'    => 'slug',
                'terms'    => $category,
            ),
        ),
    );

    $query = new WP_Query($args);

    // Check if there are any posts
    if ($query->have_posts()) {
        // Start the loop
        $i = 1;
        while ($query->have_posts()) {
            $query->the_post();
            $post_url = get_permalink();
            $post_categories = get_the_terms(get_the_ID(), 'portfolio_category'); // Get the categories for the current post
            //echo $i;
    ?>

            <?php if ($i == 1 || $i == 6 || $i == 7 || $i == 12 || $i == 13) {
                $column_span = 6;
            } else {
                $column_span = 3;
            }
            ?>
            <div class="total_counts lg:!col-span-<?php echo  $column_span; ?> sm:col-span-6 col-span-12 box <?php
                                                                                                                if ($post_categories && !is_wp_error($post_categories)) {
                                                                                                                    $category_names = array();
                                                                                                                    foreach ($post_categories as $category) {
                                                                                                                        $category_names[] = $category->name;
                                                                                                                    }
                                                                                                                    echo  implode(' ', $category_names);
                                                                                                                }

                                                                                                                ?>">
                <div class="swiper claire-portfolio relative">
                    <div class="swiper-wrapper ">
                        <?php
                        // Check if the ACF function exists (to avoid errors if ACF is not installed/activated)

                        // Get the gallery field data for the current post
                        $gallery_images = get_field('portfolio_gallery_details');
                        if ($gallery_images) {

                            // Loop through each image in the gallery
                            foreach ($gallery_images as $image) { ?>
                                <div class="swiper-slide ">
                                    <a href="<?php echo esc_url($post_url) ?>">
                                        <div class="!relative overflow-hidden before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-gradient-to-b before:from-[rgb(0,0,0,0)] before:to-[rgb(0,0,0,0.31)]">
                                            <img src="<?php echo esc_url($image['url']) ?>" alt="<?php echo esc_attr($image['alt']) ?>" class="lg:!h-[352px] md:!h-[260px] h-[240px] object-cover w-full">
                                            <a href="<?php echo esc_url($post_url) ?>">
                                                <h2 class="text-white  md:text-lg text-base font-michroma absolute left-7 bottom-16 uppercase">
                                                    <?php the_title(); ?></h2>
                                            </a>
                                        </div>
                                    </a>
                                </div>
                        <?php   }
                        } else {
                            // Output a message if the gallery is empty
                            echo '<p>No images found.</p>';
                        }


                        ?>
                    </div>

                    <div class="swiper-pagination !text-left !left-7 !bottom-8 !w-3/4"></div>
                    <!-- <a class="absolute right-7 bottom-8 z-20 inline-block" href="<?php //echo esc_url($post_url) 
                                                                                        ?>">
                                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/claire_portfolio-Arrow.svg" width="25" height="23" alt="portfolio-Arrow"> 
                                </a> -->

                </div>
            </div>




<?php $i++;
        }
        $posts_html = ob_get_clean(); // Get the output buffer contents and clean (end) the buffer
        $total_posts = $query->found_posts;
        // Send response as JSON
        wp_send_json_success(array(
            'posts_html' => $posts_html, // HTML content of the posts
            'total_posts' => $total_posts // Total number of posts
        ));
        // Restore global post data
        wp_reset_postdata();
    } else {
        // If no posts are found
        wp_send_json_error('No more posts to load.');
    }
    // $html = ob_get_clean(); // Get the output buffer contents and clean (end) the buffer

    // echo json_encode(array()); // Send the HTML in the AJAX response as JSON

    wp_die();
}
add_action('wp_ajax_fetch_portfolio_posts', 'fetch_portfolio_posts');
add_action('wp_ajax_nopriv_fetch_portfolio_posts', 'fetch_portfolio_posts');
