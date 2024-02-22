<?php
/**

 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); 

$post_id = get_the_ID();

// Get the URL of the featured image with full size
$image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'full');
?>



<section class="hero">
    <div
        class="relative before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.15)]">
        <?php if (!empty($image_url)) : ?>
        <img class="w-full lg:h-[27rem] md:h-64 h-56 object-cover" src="<?php echo $image_url[0]; ?>"
            width="<?php echo $hero_banner_section_image['width']; ?>"
            height="<?php echo $hero_banner_section_image['height']; ?>"
            alt="<?php echo $hero_banner_section_image['alt']; ?>">
        <?php endif; ?>
        <h1
            class="absolute text-center xl:text-6xl md:text-5xl sm:text-4xl text-3xl  top-2/4 left-2/4 text-white transform-middle break-keep w-full">
            <?php echo the_title(); ?></h1>
    </div>
</section>


<?php
$our_services_section_main_heading = get_field('our_services_section_main_heading');
?>
<section class="services lg:pt-24 md:pt-12 pt-6">
    <div class="container m-auto">

        <div class="lg:grid lg:grid-cols-12 lg:gap-x-10 sm:p-8 p-3 border border-[#030303] items-center">
            <div class="xl:col-span-8 lg:col-span-7 ">
                <div class="swiper claire-service-full xl:!pb-24 !pb-24 overflow-hidden">
                    <div class="swiper-wrapper">
                        <?php if (have_rows('our_services_section_slider_details')) :

                            // Loop through rows.
                            while (have_rows('our_services_section_slider_details')) : the_row();

                                // Load sub field value.
                                $our_services_section_slider_details_main_images = get_sub_field('our_services_section_slider_details_main_images');
                        ?>
                        <div class="swiper-slide">
                            <img src="<?php echo $our_services_section_slider_details_main_images['url']; ?>"
                                width="801" height="580"
                                alt="<?php echo $our_services_section_slider_details_main_images['alt']; ?>"
                                class="w-full">
                        </div>
                        <?php

                            endwhile;
                        endif; ?>

                    </div>
                    <div class="swiper-pagination sm:!left-1/3 !left-[17.33%] lg:!top-auto sm:!top-[97%] !top-[82%]">
                    </div>
                    <div
                        class="text-xl font-michroma swiper-button-next xl:!right-[5%] xl:!top-[97.6%] lg:!right-[0%] lg:!top-[96.5%] md:!right-[2%] md:!top-[99%] sm:!right-[0%] !right-[0%] sm:!top-[99%] !top-[85%]">
                        <i class="fa-solid fa-arrow-right-long text-black"></i>
                    </div>
                    <div
                        class="text-xl swiper-button-prev xl:!left-[71%] xl:!top-[97.6%] lg:!left-[67%] lg:!top-[96.5%] md:!left-[69%] md:!top-[99%] sm:!left-[66%] sm:!top-[99%] !left-[35%] !top-[85%]">
                        <i class="fa-solid fa-arrow-left-long text-black"></i>
                    </div>

                </div>

                <div thumbsSlider=""
                    class="swiper claire-service-small xl:!pb-9 lg:!pb-8 !pb-0   lg:mt-[-10rem] md:mt-[-9.5rem] sm:mt-[-8rem] mt-[-9rem] w-[96%] m-auto">
                    <div class="swiper-wrapper ">
                        <?php if (have_rows('our_services_section_small_slider_details')) :

                            // Loop through rows.
                            while (have_rows('our_services_section_small_slider_details')) : the_row();

                                // Load sub field value.
                                $our_services_section_small_slider_details_images = get_sub_field('our_services_section_small_slider_details_images');
                        ?>
                        <div class="swiper-slide">
                            <img src="<?php echo $our_services_section_small_slider_details_images['url']; ?>"
                                width="141" height="100"
                                alt="<?php echo $our_services_section_small_slider_details_images['alt']; ?>"
                                class="w-full  cursor-pointer">
                        </div>
                        <?php

                            endwhile;
                        endif; ?>

                    </div>

                </div>
            </div>
            <div class="xl:col-span-4 lg:col-span-5 ">
                <?php
                $our_services_text_section_main_heading = get_field('our_services_text_section_main_heading');
                $our_services_text_section_description = get_field('our_services_text_section_description');
                $our_services_text_section_btn_url = get_field('our_services_text_section_btn_url');
                $our_services_text_section_btn_text = get_field('our_services_text_section_btn_text');
                ?>
                <h3
                    class="lg:text-2xl lg:pt-0 md:pt-12 pt-10 text-xl uppercase font-michroma text-black text-right border-b pb-5">
                    <?php echo  $our_services_text_section_main_heading; ?></h3>

                <p class="lg:text-17 md:text-base text-sm  text-light-grey my-5 text-right">
                    <?php echo  $our_services_text_section_description; ?></p>



                <div class="flex justify-end items-center">
                    <button
                        class="group rounded-none hover:bg-white transition-all btn-arrow bg-black py-3 lg:px-9 px-5 border border-black"><a
                            href="<?php echo  $our_services_text_section_btn_url; ?>"
                            class="group-hover:brightness-[0] group-hover:text-black lg:text-17 md:text-base text-sm  bg-no-repeat bg-right pr-7 font-michroma text-white brightness-[10]">
                            <?php echo  $our_services_text_section_btn_text; ?>
                        </a></button>

                </div>


            </div>
        </div>
    </div>
</section>


<?php $all_projects_section_sub_heading = get_field('all_projects_section_sub_heading'); ?>
<section class="projects lg:py-12 md:py-10 py-6">
    <div class="container m-auto">
        <h2
            class="text-right lg:mb-20 md:mb-12 mb-10 text-17 font-michroma text-[#030303] relative pr-6 uppercase after:content-[''] after:absolute after:w-52 after:h-[1px] md:after:bottom-[-20px] after:bottom-[-10px] after:right-6 after:bg-[#030303]">
            ALL PROJECTS</h2>
      <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper claire-project ">
      <h2 class="lg:text-4xl md:text-3xl  text-2xl font-michroma text-black relative text-center uppercase after:content-[''] after:absolute after:w-24 after:h-[1px] after:bottom-0 lg:pb-6 pb-3 after:left-[50%] after:translate-x-[-50%] after:bg-black">
            SIMILAR PROJECTS</h2>
        <?php echo do_shortcode('[portfolio_category_posts]'); ?>

    </div> 
    </div>
</section>

<?php get_footer('two'); ?>