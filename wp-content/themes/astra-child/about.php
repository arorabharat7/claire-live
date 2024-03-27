<?php

/**Template Name: About Us Template
 * 
 */

get_header(); ?>

<?php
//sdjfyyusdgfsdfsd
$hero_banner_section_image = get_field('hero_banner_section_image');
$hero_banner_section_heading = get_field('hero_banner_section_heading');
$hero_banner_section_description = get_field('hero_banner_section_description');
?>
<section class="hero about">
    <div class="relative before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.15)]">
        <?php if (!empty($hero_banner_section_image)) : ?>
            <img class="w-full md:h-64 h-56 object-cover" src="<?php echo $hero_banner_section_image['url']; ?>" width="<?php echo $hero_banner_section_image['width']; ?>" height="<?php echo $hero_banner_section_image['height']; ?>" alt="<?php echo $hero_banner_section_image['alt']; ?>">
        <?php endif; ?>

        <div class="absolute text-center top-2/4 left-2/4 transform-middle break-keep lg:w-[70%] md:w-[90%] w-[95%]">
            <h1 class="xl:text-5xl md:text-5xl sm:text-4xl text-3xl text-white ">
                <?php echo $hero_banner_section_heading; ?></h1>
            <p class="lg:text-xl md:text-lg text-sm text-white font-medium lg:pt-8 pt-5 ">
                <?php echo $hero_banner_section_description; ?></p>
        </div>

    </div>
</section>

<?php
//sdjfyyusdgfsdfsd
$about_us_section_main_heading = get_field('about_us_section_main_heading');
$about_us_section_all_details = get_field('about_us_section_all_details');

?>
<section class="about_us_new lg:py-100 md:py-60 py-10">
    <div class="container m-auto">
        <h2 class="lg:text-4xl md:text-3xl  text-2xl font-michroma text-black relative text-center uppercase after:content-[''] after:absolute after:w-24 after:h-[1px] after:bottom-0 lg:pb-6 pb-3 after:left-[50%] after:translate-x-[-50%] after:bg-black">
            <?php echo $about_us_section_main_heading; ?></h2>
        <p class="lg:text-xl text-lg  text-black font-bold text-center mt-5">
            <?php echo $about_us_section_all_details; ?> </p>

    </div>
</section>

<?php
$how_we_work_main_heading = get_field('how_we_work_main_heading');
$how_we_work_sub_heading = get_field('how_we_work_sub_heading');

$how_we_work_first_column_image = get_field('how_we_work_first_column_image');
$how_we_work_first_column_heading = get_field('how_we_work_first_column_heading');
$how_we_work_first_column_description = get_field('how_we_work_first_column_description');

$how_we_work_second_column_image = get_field('how_we_work_second_column_image');
$how_we_work_second_column_heading = get_field('how_we_work_second_column_heading');
$how_we_work_second_column_description = get_field('how_we_work_second_column_description');

$how_we_work_three_column_image = get_field('how_we_work_three_column_image');
$how_we_work_three_column_heading = get_field('how_we_work_three_column_heading');
$how_we_work_three_column_description = get_field('how_we_work_three_column_description');

$how_we_work_four_column_image = get_field('how_we_work_four_column_image');
$how_we_work_four_column_heading = get_field('how_we_work_four_column_heading');
$how_we_work_four_column_description = get_field('how_we_work_four_column_description');

$how_we_work_five_column_image = get_field('how_we_work_five_column_image');
$how_we_work_five_column_heading = get_field('how_we_work_five_column_heading');
$how_we_work_five_column_description = get_field('how_we_work_five_column_description');

$how_we_work_six_column_image = get_field('how_we_work_six_column_image');
$how_we_work_six_column_heading = get_field('how_we_work_six_column_heading');
$how_we_work_six_column_description = get_field('how_we_work_six_column_description');

$how_we_work_seven_column_image = get_field('how_we_work_seven_column_image');
$how_we_work_seven_column_heading = get_field('how_we_work_seven_column_heading');
$how_we_work_seven_column_description = get_field('how_we_work_seven_column_description');
?>
<section class="work-description lg:py-100 md:py-60 py-10">
    <div class="container m-auto">

        <h2 class="lg:text-4xl md:text-3xl  text-2xl font-michroma text-black relative text-center uppercase after:content-[''] after:absolute after:w-24 after:h-[1px] after:bottom-0 lg:pb-6 pb-3 after:left-[50%] after:translate-x-[-50%] after:bg-black">
            <?php echo $how_we_work_main_heading; ?></h2>
        <p class="lg:text-xl text-lg  text-black font-bold text-center mt-5"><?php echo $how_we_work_sub_heading; ?></p>



        <div class="grid grid-cols-12 gap-5 lg:my-8 md:my-6 my-4">

            <div class="md:col-span-8 col-span-12">
                <div class="group relative hover:before:content-[''] hover:before:absolute hover:before:h-full hover:before:w-full hover:before:left-0 hover:before:top-0 hover:before:bg-[rgb(0,0,0,0.8)]  overflow-hidden before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.15)]">
                    <img src="<?php echo $how_we_work_first_column_image['url']; ?>" width="<?php echo $how_we_work_first_column_image['width']; ?>" height="<?php echo $how_we_work_first_column_image['height']; ?>" alt="<?php echo $how_we_work_first_column_image['alt']; ?>" class="w-full lg:h-[386px] md:h-[300px] h-[290px] object-cover">
                    <div class="absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 lg:w-10/12 w-11/12 text-center duration-300 h-9 lg:group-hover:h-1/2  group-hover:h-3/5 overflow-hidden">
                        <h3 class="lg:text-2xl text-xl text-white font-michroma uppercase  lg:mb-7 mb-2">
                            <?php echo $how_we_work_first_column_heading; ?></h3>
                        <p class="lg:text-17 text-sm text-white font-bold">
                            <?php echo $how_we_work_first_column_description; ?></p>
                    </div>
                </div>
            </div>



            <div class="md:col-span-4 col-span-12">
                <div class="group relative hover:before:content-[''] hover:before:absolute hover:before:h-full hover:before:w-full hover:before:left-0 hover:before:top-0 hover:before:bg-[rgb(0,0,0,0.8)]   overflow-hidden before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.15)]">
                    <img src="<?php echo $how_we_work_second_column_image['url']; ?>" width="<?php echo $how_we_work_second_column_image['width']; ?>" height="<?php echo $how_we_work_second_column_image['height']; ?>" alt="<?php echo $how_we_work_second_column_image['alt']; ?>" class="w-full lg:h-[386px] md:h-[300px] h-[250px] object-cover">
                    <div class="absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 lg:w-10/12 w-11/12 text-center  duration-300 h-9 lg:group-hover:h-1/2  group-hover:h-3/5 overflow-hidden">
                        <h3 class="lg:text-2xl text-xl text-white font-michroma uppercase  lg:mb-7 mb-2">
                            <?php echo $how_we_work_second_column_heading; ?></h3>
                        <p class="lg:text-17 text-sm text-white font-bold">
                            <?php echo $how_we_work_second_column_description; ?></p>
                    </div>
                </div>
            </div>



            <div class="md:col-span-4 col-span-12">
                <div class="group relative hover:before:content-[''] hover:before:absolute hover:before:h-full hover:before:w-full hover:before:left-0 hover:before:top-0 hover:before:bg-[rgb(0,0,0,0.8)]  overflow-hidden before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.15)]">
                    <img src="<?php echo $how_we_work_three_column_image['url']; ?>" width="<?php echo $how_we_work_three_column_image['width']; ?>" height="<?php echo $how_we_work_three_column_image['height']; ?>" alt="<?php echo $how_we_work_three_column_image['alt']; ?>" class="w-full lg:h-[310px] md:h-[250px] h-[250px] object-cover">
                    <div class="absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 lg:w-10/12 w-11/12 text-center duration-300 h-9 lg:group-hover:h-1/2  group-hover:h-3/5 overflow-hidden">
                        <h3 class="lg:text-2xl text-xl text-white font-michroma uppercase  lg:mb-7 mb-2">
                            <?php echo $how_we_work_three_column_heading; ?></h3>
                        <p class="lg:text-17 text-sm text-white font-bold ">
                            <?php echo $how_we_work_three_column_description; ?></p>
                    </div>
                </div>
            </div>



            <div class="md:col-span-4 col-span-12">
                <div class="group relative hover:before:content-[''] hover:before:absolute hover:before:h-full hover:before:w-full hover:before:left-0 hover:before:top-0 hover:before:bg-[rgb(0,0,0,0.8)]   overflow-hidden before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.15)]">
                    <img src="<?php echo $how_we_work_four_column_image['url']; ?>" width="<?php echo $how_we_work_four_column_image['width']; ?>" height="<?php echo $how_we_work_four_column_image['height']; ?>" alt="<?php echo $how_we_work_four_column_image['alt']; ?>" class="w-full lg:h-[310px] md:h-[250px] h-[250px] object-cover">
                    <div class="absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 lg:w-10/12 w-11/12 text-center duration-300 h-9 lg:group-hover:h-1/2  group-hover:h-3/5 overflow-hidden">
                        <h3 class="lg:text-2xl text-xl text-white font-michroma uppercase  lg:mb-7 mb-2">
                            <?php echo $how_we_work_four_column_heading; ?></h3>
                        <p class="lg:text-17 text-sm text-white font-bold">
                            <?php echo $how_we_work_four_column_description; ?></p>
                    </div>
                </div>
            </div>



            <div class="md:col-span-4 col-span-12">
                <div class="group relative hover:before:content-[''] hover:before:absolute hover:before:h-full hover:before:w-full hover:before:left-0 hover:before:top-0 hover:before:bg-[rgb(0,0,0,0.8)]   overflow-hidden before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.15)]">
                    <img src="<?php echo $how_we_work_five_column_image['url']; ?>" width="<?php echo $how_we_work_five_column_image['width']; ?>" height="<?php echo $how_we_work_five_column_image['height']; ?>" alt="<?php echo $how_we_work_five_column_image['alt']; ?>" class="w-full lg:h-[310px] md:h-[250px] h-[250px] object-cover">
                    <div class="absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 lg:w-10/12 w-11/12 text-center duration-300 h-9 lg:group-hover:h-1/2  group-hover:h-3/5 overflow-hidden">
                        <h3 class="lg:text-2xl text-xl text-white font-michroma uppercase  lg:mb-7 mb-2">
                            <?php echo $how_we_work_five_column_heading; ?></h3>
                        <p class="lg:text-17 text-sm text-white font-bold ">
                            <?php echo $how_we_work_five_column_description; ?></p>
                    </div>
                </div>
            </div>



            <div class="md:col-span-4 col-span-12">
                <div class="group relative hover:before:content-[''] hover:before:absolute hover:before:h-full hover:before:w-full hover:before:left-0 hover:before:top-0 hover:before:bg-[rgb(0,0,0,0.8)]   overflow-hidden before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.15)]">
                    <img src="<?php echo $how_we_work_six_column_image['url']; ?>" width="<?php echo $how_we_work_six_column_image['width']; ?>" height="<?php echo $how_we_work_six_column_image['height']; ?>" alt="<?php echo $how_we_work_six_column_image['alt']; ?>" class="w-full lg:h-[386px] md:h-[300px] h-[250px] object-cover">
                    <div class="absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 lg:w-10/12 w-11/12 text-center duration-300 h-9 lg:group-hover:h-1/2  group-hover:h-3/5 overflow-hidden">
                        <h3 class="lg:text-2xl text-xl text-white font-michroma uppercase  lg:mb-7 mb-2">
                            <?php echo $how_we_work_six_column_heading; ?></h3>
                        <p class="lg:text-17 text-sm text-white font-bold">
                            <?php echo $how_we_work_six_column_description; ?></p>
                    </div>
                </div>
            </div>


            <div class="md:col-span-8 col-span-12">
                <div class="group relative hover:before:content-[''] hover:before:absolute hover:before:h-full hover:before:w-full hover:before:left-0 hover:before:top-0 hover:before:bg-[rgb(0,0,0,0.8)]   overflow-hidden before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.15)]">
                    <img src="<?php echo $how_we_work_seven_column_image['url']; ?>" width="<?php echo $how_we_work_seven_column_image['width']; ?>" height="<?php echo $how_we_work_seven_column_image['height']; ?>" alt="<?php echo $how_we_work_seven_column_image['alt']; ?>" class="w-full lg:h-[386px] md:h-[300px] h-[290px] object-cover">
                    <div class="absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 lg:w-10/12 w-11/12 text-center duration-300 h-9 lg:group-hover:h-1/2  group-hover:h-3/5 overflow-hidden">
                        <h3 class="lg:text-2xl text-xl text-white font-michroma uppercase  lg:mb-7 mb-2">ARCH
                            <?php echo $how_we_work_seven_column_heading; ?></h3>
                        <p class="lg:text-17 text-sm text-white font-bold">
                            <?php echo $how_we_work_seven_column_description; ?></p>
                    </div>
                </div>
            </div>

        </div>

        <div class="flex items-center gap-2 justify-center">
            <?php

            $how_we_work_help_btn_text  = get_field('how_we_work_help_btn_text');
            $how_we_work_help_btn_url  = get_field('how_we_work_help_btn_url');
            $how_we_work_contact_btn_text  = get_field('how_we_work_contact_btn_text');
            $how_we_work_contact_btn_url  = get_field('how_we_work_contact_btn_url');

            ?>
            <button class="py-3 md:px-9 group hover:bg-black rounded-none transition-all px-4 border border-i-primary lg:mt-2.5 mt-1.5"><a href=" <?php echo $how_we_work_help_btn_url; ?>" class="group-hover:brightness-[10] group-hover:text-white md:text-17 text-sm bg-no-repeat bg-right font-michroma ">
                    <?php echo $how_we_work_help_btn_text; ?> </a></button>
            <button class="btn-arrow group hover:bg-white rounded-none transition-all border border-i-primary py-3 md:px-9 px-4  bg-black lg:mt-2.5 mt-1.5"><a href=" <?php echo $how_we_work_contact_btn_url; ?>" class="group-hover:brightness-[0] group-hover:text-black md:text-17 text-sm bg-no-repeat bg-right brightness-[10] pr-7 font-michroma text-white">
                    <?php echo $how_we_work_contact_btn_text; ?>
                </a></button>
        </div>
    </div>
</section>



<section class="our-team overflow-hidden">
    <?php $our_people_main_heading = get_field('our_people_main_heading'); ?>
    <h2 class="lg:text-4xl md:text-3xl  text-2xl font-michroma text-black relative text-center uppercase after:content-[''] after:absolute after:w-24 after:h-[1px] after:bottom-0 lg:pb-6 pb-3 after:left-[50%] after:translate-x-[-50%] after:bg-black">
        <?php echo $our_people_main_heading; ?></h2>
    <div class=" lg:mt-12 md:mt-10 mt-6">
        <div class="swiper claire_team ">
            <div class="swiper-wrapper lg:mb-16 md:mb-14 mb-10">
                <?php if (have_rows('our_people_all_details')) :

                    // Loop through rows.
                    while (have_rows('our_people_all_details')) : the_row();

                        // Load sub field value.
                        $our_people_all_details_image = get_sub_field('our_people_all_details_image');
                        $our_people_name = get_sub_field('our_people_name');
                        $our_people_designation = get_sub_field('our_people_designation');
                        $our_people_description = get_sub_field('our_people_description');
                ?>
                        <div class="swiper-slide relative">
                            <img src="<?php echo $our_people_all_details_image['url']; ?>" width="<?php echo $our_people_all_details_image['width']; ?>" height="<?php echo $our_people_all_details_image['height']; ?>" alt="<?php echo $our_people_all_details_image['alt']; ?>">
                            <div class="absolute left-5 bottom-5">
                                <h3 class="lg:text-xl font-michroma text-white uppercase"><?php echo $our_people_name; ?>
                                </h3>
                                <span class="lg:text-17 font-semibold text-[#B1B1B1] lg:my-3 my-1 block"><?php echo $our_people_designation; ?></span>
                                <p class="lg:text-17 font-semibold text-[#B1B1B1] italic">
                                    <?php echo $our_people_description; ?></p>
                            </div>
                        </div>
                <?php

                    endwhile;
                endif; ?>




            </div>

            <div class="swiper-pagination  m-auto"></div>
        </div>
    </div>




</section>





<section class="why-us lg:mt-10 mt-6 lg:py-100 md:py-60 py-10 bg-[#f6f6f6]">
    <div class="container m-auto">
        <?php
        $why_choose_us_section_main_heading = get_field('why_choose_us_section_main_heading');
        ?>
        <h2 class="lg:text-4xl md:text-3xl  text-2xl font-michroma text-black relative text-center uppercase after:content-[''] after:absolute after:w-24 after:h-[1px] after:bottom-0 lg:pb-6 pb-3 after:left-[50%] after:translate-x-[-50%] after:bg-black">
            <?php echo $why_choose_us_section_main_heading; ?></h2>

        <div class="grid grid-cols-12 lg:gap-x-14 lg:gap-y-16 gap-7 md:gap-y-10  lg:mt-16 md:mt-10 mt-6">
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

<section class="our-partners bg-dark-grey lg:py-12 md:py-10 py-6">
    <div class="container m-auto">
        <?php $our_partners_section_main_heading = get_field('our_partners_section_main_heading'); ?>
        <h2 class="lg:text-4xl md:text-3xl text-2xl font-michroma text-black relative text-center after:content-[''] after:absolute after:w-24 after:h-[1px] after:bottom-0 lg:pb-6 pb-3 after:left-[50%] after:translate-x-[-50%] after:bg-black">
            <?php echo $our_partners_section_main_heading; ?></h2>

        <div class="lg:mt-12 md:mt-10 mt-6">

            <div class=" grid grid-cols-10 lg:gap-0 gap-5 items-center justify-between lg:mb-8 mb-5">
                <?php if (have_rows('our_partners_section_details')) :
                    $i = 0;
                    // Loop through rows.
                    while (have_rows('our_partners_section_details')) : the_row();
                        if ($i == 5) { ?>
            </div>
            <div class=" grid grid-cols-10 lg:gap-0 gap-5 items-center justify-between lg:mb-8 mb-5">
            <?php  } elseif ($i == 10) { ?>
            </div>
            <div class=" grid grid-cols-10 lg:gap-0 gap-5 items-center justify-between lg:mb-8 mb-5 ">
            <?php    } elseif ($i == 15) { ?>
            </div>
            <div class=" grid grid-cols-10 lg:gap-0 gap-5 items-center justify-between lg:mb-8 mb-5 ">
            <?php    }
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
</section>







<?php get_footer(); ?>