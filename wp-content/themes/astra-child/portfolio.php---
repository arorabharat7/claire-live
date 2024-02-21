<?php

/**Template Name: Portfolio Template
 * 
 */

get_header(); ?>


<?php
$hero_banner_section_image = get_field('hero_banner_section_image');
$hero_banner_section_heading = get_field('hero_banner_section_heading');
$hero_banner_section_description = get_field('hero_banner_section_description');
?>
<section class="hero">
  <div class="relative before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.15)]">
    <?php if (!empty($hero_banner_section_image)) : ?>
      <img class="w-full lg:h-[27rem] md:h-64 h-56 object-cover" src="<?php echo $hero_banner_section_image['url']; ?>" width="<?php echo $hero_banner_section_image['width']; ?>" height="<?php echo $hero_banner_section_image['height']; ?>" alt="<?php echo $hero_banner_section_image['alt']; ?>">
    <?php endif; ?>
    <h1 class="absolute text-center xl:text-5xl md:text-5xl sm:text-4xl text-3xl  top-3/4 left-2/4 text-white transform-middle break-keep w-full">
      <?php echo $hero_banner_section_heading; ?>
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

                if (!empty($portfolio_categories) && !is_wp_error($portfolio_categories)) {

                    // Loop through each category
                    foreach ($portfolio_categories as $category) {
                        // Output the category name and link

                ?>
                        <button data-category="<?php echo esc_html($category->slug); ?>" class="relative rounded-none tab_btns  btn p-2.5 border text-sm w-44 hover:bg-black hover:text-white transition-all hover:font-bold uppercase border-black" id="<?php echo esc_html($category->slug); ?>"><?php echo esc_html($category->name); ?><div class="overlay-loader" style="display:none"></div></button>
                <?php
                    }
                } else {
                    // If there are no categories
                    echo '<p>No portfolio categories found.</p>';
                }
                ?>


            </div>
        </div>

        <div  class="lg:pt-10 md:pt-8 sm:pt-6 pt-2">
            <div id="parent" class=" grid grid-cols-12 gap-5 pt-4 portfolio-items">
             
          

    </div>
    <div class="text-center  md:pt-12 pt-8">
      <button id="loadMoreBtn"  class="py-3 md:px-9 rounded-none uppercase font-michroma  group hover:bg-black transition-all px-4 border border-i-primary lg:mt-2.5 mt-1.5">
        Load More </button>
    <?php
              

                ?>

            </div>

            

        </div>







</section>






<?php get_footer('two'); ?>