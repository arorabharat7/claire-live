<?php

/**Template Name: Production Template
 * 
 */

get_header();

?>



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

        <div class="absolute text-center top-2/4 left-2/4 transform-middle break-keep lg:w-[98%] md:w-[90%] w-[95%]">
            <h1 class="xl:text-5xl md:text-5xl sm:text-4xl text-3xl text-white ">
                <?php echo $hero_banner_section_heading; ?></h1>
            <p class="lg:text-xl md:text-lg text-sm text-white font-medium lg:pt-8 pt-5 lg:w-[70%] m-auto"> <?php echo $hero_banner_section_description; ?></p>
        </div>

    </div>
</section>


<?php $common_production_services_section_main_heading = get_field('common_production_services_section_main_heading'); ?>
<section class="production-types lg:pt-100 md:pt-60 pt-10">
    <div class="container m-auto">

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
            ?>
                    <div class="lg:!col-span-4 sm:!col-span-6 col-span-12">
                        <div class="group relative overflow-hidden before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.15)] hover:before:content-[''] hover:before:absolute hover:before:h-full hover:before:w-full hover:before:left-0 hover:before:top-0 hover:before:bg-[rgb(0,0,0,0.8)] ">
                        <img src="<?php echo $common_production_services_section_all_details_image['url']; ?>" width="<?php echo $common_production_services_section_all_details_image['width']; ?>" height="<?php echo $common_production_services_section_all_details_image['height']; ?>" alt="<?php echo $common_production_services_section_all_details_image['alt']; ?>" class="w-full">
                            <div class="absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 lg:w-10/12 w-11/12 text-center duration-300 h-9 group-hover:h-3/4  overflow-hidden">
                                <h3 class="lg:text-2xl text-xl text-white font-michroma uppercase  lg:mb-7 mb-2">
                                <?php echo $common_production_services_section_all_details_heading; ?></h3>
                                <p class="lg:text-17 text-sm text-white font-bold "><?php echo $common_production_services_section_all_details_description; ?></p>

                                <button class="btn-arrow  py-3 lg:px-9 md:px-5 px-3 xl:mt-7 md:mt-5 mt-3 rounded-none border hover:border-white border-white">
                                    <a href="<?php echo $production_services_btn_url; ?>" class="lg:text-17 md:text-base text-sm text-white brightness-[10] bg-no-repeat bg-right pr-7 font-michroma">
                                    <?php echo $production_services_btn_text; ?></a></button>
                            </div>
                        </div>
                    </div>

            <?php

                endwhile;
            endif; ?>

        </div>

    </div>
</section>




<section class="production-advantage lg:my-12 my-10  lg:py-100 md:py-60 py-10 bg-[#f6f6f6]">
    <div class="container m-auto">
        <div class="lg:!w-2/3 md:!w-[82%] m-auto">
            <?php
            $why_choose_us_section_main_heading = get_field('why_choose_us_section_main_heading');
            ?>
            <h2 class="lg:text-4xl md:text-3xl  text-2xl font-michroma text-black relative text-center uppercase after:content-[''] after:absolute after:w-24 after:h-[1px] after:bottom-0 lg:pb-6 pb-3 after:left-[50%] after:translate-x-[-50%] after:bg-black lg:!leading-[3.5rem]">
                <?php echo $why_choose_us_section_main_heading; ?></h2>
        </div>
        <div class="grid grid-cols-12 lg:gap-x-10 lg:gap-y-16 md:gap-x-7 md:gap-y-10 gap-5 lg:mt-10 md:mt-8 mt-6">
            <?php if (have_rows('why_choose_us_section_all_details')) :

                // Loop through rows.
                while (have_rows('why_choose_us_section_all_details')) : the_row();

                    // Load sub field value.
                    $why_choose_us_section_all_details_image = get_sub_field('why_choose_us_section_all_details_image');
                    $why_choose_us_section_all_details_heading = get_sub_field('why_choose_us_section_all_details_heading');
                    $why_choose_us_section_all_details_description = get_sub_field('why_choose_us_section_all_details_description');
            ?>
                    <div class="lg:!col-span-3 sm:!col-span-6 !col-span-12">

                        <div class="text-center">
                            <img src="<?php echo $why_choose_us_section_all_details_image['url']; ?>" width="<?php echo $why_choose_us_section_all_details_image['width']; ?>" height="<?php echo $why_choose_us_section_all_details_image['height']; ?>" alt="<?php echo $why_choose_us_section_all_details_image['alt']; ?>" class="m-auto w-20 !h-[80px]">

                            <h3 class="lg:text-17 text-base font-michroma text-black uppercase lg:my-5 md:my-3 my-2">
                                <?php echo $why_choose_us_section_all_details_heading; ?></h3>

                            <p class="text-sm  text-light-grey font-bold"><?php echo $why_choose_us_section_all_details_description; ?> </p>
                        </div>

                    </div>
            <?php

                endwhile;
            endif; ?>



        </div>
    </div>
</section>

<?php get_footer('two'); ?>