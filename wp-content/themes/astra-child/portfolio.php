<?php

/**Template Name: Portfolio Template
 * 
 */

get_header(); ?>


<section class="hero">
    <div class="relative before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.15)]">

        <img class="w-full  md:h-64 h-56 object-cover" src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2024/02/claire_curtain-video.webp">

        <h1 class="absolute text-center xl:text-5xl md:text-5xl sm:text-4xl text-3xl  top-3/4 left-2/4 text-white transform-middle break-keep w-full">
            Portfolio
        </h1>
    </div>
</section>


<section id="portfolio-box" class="protofolio-box pt-10 md:pb-16 pb-10">
    <div class="container m-auto">
        <div class="overflow-auto">

            <div class="flex gap-0 justify-center mb-2 width-full">
                <?php
                $portfolio_categories = get_terms(array(
                    'taxonomy' => 'portfolio_category', // Replace 'portfolio_category' with the actual taxonomy slug
                    'hide_empty' => false, // Set to true if you only want to retrieve categories with posts assigned to them
                ));

                usort($portfolio_categories, function($a, $b) {
                    // Define the custom order of categories
                    $custom_order = array('all-categories', 'hotels', 'restaurants', 'spa-resorts','residential' ,'others');
                
                    // Get the index of category in the custom order array
                    $index_a = array_search($a->slug, $custom_order);
                    $index_b = array_search($b->slug, $custom_order);
                
                    // Compare the indexes
                    return $index_a - $index_b;
                });

                if (!empty($portfolio_categories) && !is_wp_error($portfolio_categories)) {

                    // Loop through each category
                    foreach ($portfolio_categories as $category) {
                        // Output the category name and link

                ?>
                        <button data-category="<?php echo esc_html($category->slug); ?>" class="relative rounded-none tab_btns  btn p-2.5 border text-sm w-44 hover:bg-black hover:text-white transition-all hover:font-bold uppercase border-black"
                         id="<?php echo esc_html($category->slug); ?>"><?php echo esc_html($category->name); ?>
                         <div class="overlay-loader" style="display:none"></div></button>
                <?php
                    }
                } else {
                    // If there are no categories
                    echo '<p>No portfolio categories found.</p>';
                }
                ?>


            </div>
        </div>

        <div class="lg:pt-10 md:pt-8 sm:pt-6 pt-2">
            <div id="parent" class=" grid grid-cols-12 gap-5 pt-4 portfolio-items">



            </div>
            <div class="text-center md:pt-8 pt-6">
                <button id="loadMoreBtn" class="relative py-3 rounded-none uppercase font-michroma md:px-9 group hover:bg-black transition-all px-4 border border-i-primary lg:mt-2.5 mt-1.5">
                    Load More </button>
                <?php


                ?>

            </div>



        </div>







</section>






<?php get_footer('two'); ?>