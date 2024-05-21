<?php

/**Template Name: Homepage Template
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>


<?php
$hero_banner_video = get_field('hero_banner_video');
$hero_banner_section_image = get_field('hero_banner_section_image');
$hero_banner_section_heading = get_field('hero_banner_section_heading');
$hero_banner_section_description = get_field('hero_banner_section_description');
?>
<section class="hero">
    <!-- before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.4)] -->
    <div class="relative ">
        <?php if (!empty($hero_banner_video)) { ?>
            <video autoplay muted loop playsinline preload="metadata" class="w-full xl:h-[34rem] lg:h-[30rem] object-cover">
                <source src="<?php echo $hero_banner_video; ?>" type="video/mp4">
            </video>
        <?php } else { ?>
            <img class="w-full min-h-64 object-cover" src="<?php echo $hero_banner_section_image['url']; ?>" width="<?php echo $hero_banner_section_image['width']; ?>" height="<?php echo $hero_banner_section_image['height']; ?>" alt="<?php echo $hero_banner_section_image['alt']; ?>">
        <?php } ?>
        <h1 class="absolute text-center xl:text-5xl uppercase md:text-5xl sm:text-4xl text-3xl  top-2/4 left-2/4 text-white transform-middle break-keep w-full">
            <?php echo $hero_banner_section_heading; ?></h1>
    </div>
</section>


<?php
$our_services_section_main_heading = get_field('our_services_section_main_heading');
?>
<section  class="services lg:pt-16 md:pt-10 pt-6">
    <div class="container m-auto">

        <div class="lg:grid lg:grid-cols-12 lg:gap-x-10 sm:p-8 p-3 border border-[#030303] items-center">
            <div class="xl:col-span-8 lg:col-span-7 ">
                <div class="swiper claire-service-full xl:!pb-24 !pb-24 overflow-hidden">
                    <div class="swiper-wrapper">
                        <?php if (have_rows('our_services_section_slider_details')) :

                            // Loop through rows.
                            while (have_rows('our_services_section_slider_details')) : the_row();
                            $image_dimensions = 'width: 790px; height: 535px;';
                                // Load sub field value.
                                $our_services_section_slider_details_main_images = get_sub_field('our_services_section_slider_details_main_images');
                        ?>
                         <?php if(!empty($our_services_section_slider_details_main_images)){ ?>
                                <div class="swiper-slide">
                                    <img style="<?php echo $image_dimensions; ?>"  src="<?php echo $our_services_section_slider_details_main_images['url']; ?>" width="801" height="580" alt="<?php echo $our_services_section_slider_details_main_images['alt']; ?>" class="w-full services-responsive object-cover">
                                </div>
                        <?php }

                            endwhile;
                        endif; ?>

                    </div>
                    <div class="swiper-pagination sm:!left-1/3 !left-[17.33%] lg:!top-auto sm:!top-[97%] !top-[82%]"></div>
                    <div class="text-xl font-michroma swiper-button-next xl:!right-[5%] xl:!top-[97.6%] lg:!right-[0%] lg:!top-[96.5%] md:!right-[2%] md:!top-[99%] sm:!right-[0%] !right-[0%] sm:!top-[99%] !top-[85%]">
                        <i class="fa-solid fa-arrow-right-long text-black"></i>
                    </div>
                    <div class="text-xl swiper-button-prev xl:!left-[71%] xl:!top-[97.6%] lg:!left-[67%] lg:!top-[96.5%] md:!left-[69%] md:!top-[99%] sm:!left-[66%] sm:!top-[99%] !left-[35%] !top-[85%]">
                        <i class="fa-solid fa-arrow-left-long text-black"></i>
                    </div>

                </div>

                <div thumbsSlider="" class="swiper claire-service-small xl:!pb-6 lg:!pb-6 !pb-0   lg:mt-[-10rem] md:mt-[-9.5rem] sm:mt-[-8rem] mt-[-9rem] w-[96%] m-auto">
                    <div class="swiper-wrapper ">
                        <?php if (have_rows('our_services_section_small_slider_details')) :

                            // Loop through rows.
                            while (have_rows('our_services_section_small_slider_details')) : the_row();
                            $image_dimensions = 'width: 140px; height: 100px;';
                                // Load sub field value.
                                $our_services_section_small_slider_details_images = get_sub_field('our_services_section_small_slider_details_images');
                        ?>
                        <?php if(!empty($our_services_section_small_slider_details_images)){ ?>
                                <div class="swiper-slide">
                                    <img style="<?php echo $image_dimensions; ?>" src="<?php echo $our_services_section_small_slider_details_images['url']; ?>" width="141" height="100" alt="<?php echo $our_services_section_small_slider_details_images['alt']; ?>" class="w-full  cursor-pointer services-responsive-small object-cover">
                                </div>
                        <?php }

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
                $our_services_text_section_main_heading_url = get_field('our_services_text_section_main_heading_url');
                ?>
                <a href="<?php echo $our_services_text_section_main_heading_url; ?>"><h3 class="lg:text-2xl lg:pt-0 md:pt-12 pt-10 text-xl uppercase font-michroma text-black text-right border-b border-solid border-[#cfcfcf] pb-5">
                    <?php echo  $our_services_text_section_main_heading; ?></h3></a>
                
                    <?php echo  $our_services_text_section_description; ?>
                <div class="flex justify-end items-center">
                    <button class="openFormBtn group hover:bg-white transition-all rounded-none btn-arrow bg-black py-3 lg:px-9 px-5 border border-black">
                        <a href=" javascript:void(0)" class="group-hover:brightness-[0] group-hover:text-black lg:text-17 md:text-base text-sm  bg-no-repeat bg-right pr-7 font-michroma text-white brightness-[10]">
                            <?php echo  $our_services_text_section_btn_text; ?>
                        </a></button>

                </div>


            </div>
        </div>
    </div>
</section>

<?php
$all_projects_section_sub_heading = get_field('all_projects_section_sub_heading');
$all_projects_section_main_heading = get_field('all_projects_section_main_heading');
?>

<?php $all_projects_section_sub_heading = get_field('all_projects_section_sub_heading'); ?>
<section class="projects lg:py-12 md:py-10 py-6">
    
        <a href="<?php echo home_url(); ?>/portfolio/"><h2
            class="text-right lg:mb-20 md:mb-12 mb-10 text-17 font-michroma text-[#030303] relative pr-6 uppercase after:content-[''] after:absolute after:w-52 after:h-[1px] md:after:bottom-[-20px] after:bottom-[-10px] after:right-6 after:bg-[#030303]">
            ALL PROJECTS</h2></a>
      <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper claire-project ">
   
        <?php echo do_shortcode('[portfolio_category_posts]'); ?>

    
    </div>
</section>



<section class="our-partners bg-dark-grey lg:py-12 md:py-10 py-6">
    <div class="container m-auto">



        <div class="grid grid-cols-10 lg:gap-0 gap-5 items-center justify-between lg:mb-8 mb-5">
            <?php if (have_rows('our_partners_section_details')) :
                $i = 0;
                // Loop through rows.
                while (have_rows('our_partners_section_details')) : the_row();
                    if ($i == 5) { ?>
        </div>
        <div class="grid grid-cols-10 lg:gap-0 gap-5 items-center justify-between ">
        <?php  }
                    // Load sub field value.
                    $our_partners_section_images = get_sub_field('our_partners_section_images');
        ?>
        <div class="md:col-span-2 col-span-5">
            <img src="<?php echo $our_partners_section_images['url']; ?>" width="<?php echo $our_partners_section_images['width']; ?>" height="<?php echo $our_partners_section_images['height']; ?>" alt="<?php echo $our_partners_section_images['alt']; ?>" class="m-auto">
        </div>
<?php
                    $i++;
                endwhile;
            endif; ?>


        </div>

    </div>
</section>


<section id="other-services-sec" class="work-description lg:py-100 md:py-60 py-10">
    <div class="container m-auto">
        <?php $common_production_services_section_main_heading = get_field('common_production_services_section_main_heading'); ?>
        <h2 class="lg:text-4xl md:text-3xl  text-2xl font-michroma text-black relative text-center uppercase after:content-[''] after:absolute after:w-24 after:h-[1px] after:bottom-0 lg:pb-6 pb-3 after:left-[50%] after:translate-x-[-50%] after:bg-black">
            <?php echo $common_production_services_section_main_heading; ?></h2>
        <div class="grid grid-cols-12 gap-5 lg:mt-12 md:mt-8 mt-5">
            <?php if (have_rows('common_production_services_section_all_details')) :

                // Loop through rows.
                while (have_rows('common_production_services_section_all_details')) : the_row();

                    // Load sub field value.
                    $common_production_services_section_all_details_image = get_sub_field('common_production_services_section_all_details_image');
                    $common_production_services_section_all_details_heading = get_sub_field('common_production_services_section_all_details_heading');
                    $common_production_services_section_all_details_description = get_sub_field('common_production_services_section_all_details_description');
                    $production_services_btn_url = get_sub_field('common_production_services_section_all_details_btn_url');
                    
                    $production_services_btn_text = get_sub_field('common_production_services_section_all_details_btn_text');
                    $description = substr($common_production_services_section_all_details_description, 0, 175);
            ?>

                    <div class="lg:!col-span-4 sm:!col-span-6 col-span-12">
                        <a href="<?php echo $production_services_btn_url; ?>">
                            <div class="main_box group relative hover:before:content-[''] hover:before:absolute hover:before:h-full hover:before:w-full hover:before:left-0 hover:before:top-0 hover:before:bg-[rgb(0,0,0,0.6)]  overflow-hidden before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.15)]">
                                <img src="<?php echo $common_production_services_section_all_details_image['url']; ?>" width="<?php echo $common_production_services_section_all_details_image['width']; ?>" height="<?php echo $common_production_services_section_all_details_image['height']; ?>" alt="<?php echo $common_production_services_section_all_details_image['alt']; ?>" class="w-full">
                               
                                <div class="main_heading absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4  text-center ">
                                    <h3 class="lg:text-2xl text-xl text-white font-michroma uppercase  ">
                                        <?php echo $common_production_services_section_all_details_heading; ?></h3>
                                   
                                </div>

                                <div class="alternate_heading absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 lg:w-10/12 w-11/12 text-center duration-300 h-9 group-hover:h-3/5  overflow-hidden">
                                    <h3 class="lg:text-2xl text-xl text-white font-michroma uppercase  lg:mb-7 mb-2">
                                        <?php echo $common_production_services_section_all_details_heading; ?></h3>
                                    <p class="lg:text-17 text-sm text-white  "><?php echo $description; ?></p>
                                </div>
                            </div>
                        </a>
                    </div>

            <?php

                endwhile;
            endif; ?>






        </div>

    </div>
</section>


<section class="why-us lg:py-12 md:py-8 py-6 bg-[#f6f6f6]">
    <div class="container m-auto">
        <?php
        $why_choose_us_section_main_heading = get_field('why_choose_us_section_main_heading');
        ?>
        <h2 class="lg:text-4xl md:text-3xl  text-2xl font-michroma text-black relative text-center uppercase after:content-[''] after:absolute after:w-24 after:h-[1px] after:bottom-0 lg:pb-6 pb-3 after:left-[50%] after:translate-x-[-50%] after:bg-black">
            <?php echo $why_choose_us_section_main_heading; ?></h2>

        <div class="grid grid-cols-12 lg:gap-x-14 lg:gap-y-16 gap-7 md:gap-y-10  lg:mt-10 md:mt-8 mt-6">
            <?php if (have_rows('why_choose_us_section_all_details')) :

                // Loop through rows.
                while (have_rows('why_choose_us_section_all_details')) : the_row();

                    // Load sub field value.
                    $why_choose_us_section_all_details_image = get_sub_field('why_choose_us_section_all_details_image');
                    $why_choose_us_section_all_details_heading = get_sub_field('why_choose_us_section_all_details_heading');
                    $why_choose_us_section_all_details_description = get_sub_field('why_choose_us_section_all_details_description');
            ?>
                    <div class="lg:col-span-3 md:col-span-6 col-span-12">

                        <div class="text-center">
                            <img src="<?php echo $why_choose_us_section_all_details_image['url']; ?>" width="<?php echo $why_choose_us_section_all_details_image['width']; ?>" height="<?php echo $why_choose_us_section_all_details_image['height']; ?>" alt="<?php echo $why_choose_us_section_all_details_image['alt']; ?>" class="m-auto w-[80px] !h-[80px]">

                            <h3 class="lg:text-17 text-base font-michroma text-black uppercase lg:my-5 md:my-3 my-2">
                                <?php echo $why_choose_us_section_all_details_heading; ?></h3>

                            <p class="text-sm  text-light-grey">
                                <?php echo $why_choose_us_section_all_details_description; ?> </p>
                        </div>

                    </div>
            <?php

                endwhile;
            endif; ?>



        </div>
    </div>
</section>








<?php get_footer(); ?>