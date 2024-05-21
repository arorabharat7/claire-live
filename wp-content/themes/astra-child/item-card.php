<?php

/**Template Name: Item Card Template
 * 
 */

get_header(); ?>


<section class="about-us lg:py-100 md:py-60 py-10">
    <div class="container m-auto">



        <div class="grid grid-cols-12 lg:gap-0 md:gap-10 gap-5 items-center">

            <?php
            $about_us_section_main_heading = get_field('about_us_section_main_heading');
            $about_us_section_sub_heading = get_field('about_us_section_sub_heading');
            $about_us_section_all_details = get_field('about_us_section_all_details');
            $about_us_section_main_image = get_field('about_us_section_main_image');
            ?>


            <div class="lg:col-span-6 col-span-12 lg:ml-0 lg:mr-0 md:mx-5 mx-3">
                <img src="<?php echo $about_us_section_main_image['url']; ?>" width="<?php echo $about_us_section_main_image['width']; ?>" height="<?php echo $about_us_section_main_image['height']; ?>" alt="<?php echo $about_us_section_main_image['alt']; ?>" class="w-full">
            </div>


            <div class="lg:col-span-6 col-span-12">

                <div class="border border-black lg:ml-0 lg:mr-0 md:mx-5 mx-3 lg:p-10 md:p-7 p-4 lg:border-l-0">
                    <h3 class="lg:text-2xl md:text-xl text-lg uppercase font-michroma text-black ">
                        <?php echo $about_us_section_sub_heading; ?></h3>

                    <p class="lg:text-17 md:text-base text-sm text-light-grey md:my-5 my-3"><?php echo $about_us_section_all_details; ?></p>

                    <button class=" group hover:bg-white transition-all rounded-none btn-arrow bg-black py-3 lg:px-9 px-5 border border-black">
                        <a href="https://dmprojects.xyz/vijay/claire/#other-services-sec" class="group-hover:brightness-[0] group-hover:text-black lg:text-17 md:text-base text-sm  bg-no-repeat bg-right pr-7 font-michroma text-white brightness-[10]">
                            OTHER SERVICES </a></button>


                </div>


            </div>


        </div>


    </div>


</section>

<?php get_footer('two'); ?>