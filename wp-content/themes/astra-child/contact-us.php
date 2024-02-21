<?php

/**Template Name: Contact Us Template
 * 
 */

get_header(); ?>


<section class="about-us xl:pt-100 xl:pb-6 lg:pt-16 lg:pb-6 md:pt-60 md:pb-4 pt-10 pb-4">

    <div class="container m-auto">

        <?php if (have_rows('contact_all_details')) :

            // Loop through rows.
            while (have_rows('contact_all_details')) : the_row();

                // Load sub field value.
                $contact_main_heading = get_sub_field('contact_main_heading');
                $contact_address = get_sub_field('contact_address');
                $contact_us_main_image = get_sub_field('contact_us_main_image');

        ?>

                <div class="grid grid-cols-12 lg:mb-16 md:mb-10 mb-6 lg:gap-0 lg:gap-y-16 md:gap-8 gap-5 items-center">


                    <div class="lg:col-span-6 col-span-12 ">

                        <div class="border border-black/20 lg:p-10 md:p-7 p-4 lg:border-r-0">
                            <h3 class="lg:text-2xl md:text-xl text-lg uppercase font-michroma text-black ">
                                <?php echo $contact_main_heading; ?></h3>

                            <p class="lg:xl md:text-lg text-base text-black md:my-5 my-2"><?php echo $contact_address; ?></p>


                            <ul class="xl:!w-[65%] lg:!w-[85%] md:!w-[50%]">
                                <?php if (have_rows('contact_us_all_details')) :

                                    // Loop through rows.
                                    while (have_rows('contact_us_all_details')) : the_row();

                                        // Load sub field value.
                                        $contact_type_name = get_sub_field('contact_us_all_details_contact_type_name');
                                        $contact_type_link = get_sub_field('contact_us_all_details_contact_type_link');
                                        $contact_type_text = get_sub_field('contact_us_all_details_contact_type_text');
                                        $contact_type_image = get_sub_field('contact_us_all_details_contact_type_image');

                                ?>
                                        <li class="lg:text-xl md:text-lg  text-base text-black font-bold flex items-center border-t border-black/20 md:py-4 py-3">
                                            <?php echo $contact_type_name; ?> <a href=" <?php echo $contact_type_link; ?>" class="lg:text-17 md:text-base text-sm text-black font-michroma md:ml-4 ml-2 flex items-center md:gap-4 gap-2">
                                                <?php echo $contact_type_text; ?>
                                                <?php if (!empty($contact_type_image)) : ?>
                                                    <img src="<?php echo $contact_type_image['url']; ?>" width="<?php echo $contact_type_image['width']; ?>" height="<?php echo $contact_type_image['height']; ?>" alt="<?php echo $contact_type_image['alt']; ?>" class="md:h-auto h-[26px]">
                                                <?php endif; ?>
                                            </a></li>

                                <?php

                                    endwhile;
                                endif; ?>
                            </ul>


                            <ul class="flex lg:gap-6 gap-4 lg:mt-6 mt-4">
                                <?php if (have_rows('global_settings_social_icons_repeater', 'option')) :
                                    $i = 0;
                                    // Loop through rows.
                                    while (have_rows('global_settings_social_icons_repeater', 'option')) : the_row();

                                        // Load sub field value.
                                        $global_settings_social_icons = get_sub_field('global_settings_social_icons_repeater_image_image');
                                        $global_settings_social_icons_url = get_sub_field('global_settings_social_icons_repeater_url');

                                ?>
                                        <li><a href="<?php echo $global_settings_social_icons_url; ?>">
                                                <?php if (!empty($global_settings_social_icons)) : ?>
                                                    <img src="<?php echo $global_settings_social_icons['url']; ?>" width="30" height="30" alt="<?php echo $global_settings_social_icons['alt']; ?>" class="md:h-auto h-[26px]">
                                                <?php endif; ?>
                                            </a></li>
                                <?php
                                        $i++;
                                    endwhile;
                                endif; ?>
                            </ul>

                        </div>


                    </div>

                    <div class="lg:col-span-6 col-span-12">
                        <div class="relative">
                            <!-- <img src="<?php echo $contact_us_main_image['url']; ?>" width="<?php echo $contact_us_main_image['width']; ?>" height="<?php echo $contact_us_main_image['height']; ?>" alt="<?php echo $contact_us_main_image['alt']; ?>" class="w-full xl:h-auto lg:h-[revert-layer]">
                            <img class="absolute top-1/2 left-1/2 transform-middle md:w-auto w-14" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/claire_map-icon.svg" width="103" height="132" alt="claire_map-icon"> -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2989.922260455141!2d2.2672224752101764!3d41.46260139132777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4ba56fcca8931%3A0xc789c72b5850409c!2sPtge.%20Pare%20Claret%2C%2008390%2C%20Barcelona%2C%20Spain!5e0!3m2!1sen!2sin!4v1708068800886!5m2!1sen!2sin" class="w-full xl:h-[600px] lg:h-[550px] md:h-[400px] h-96" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

        <?php

            endwhile;
        endif; ?>


    </div>


    </div>



</section>

<?php get_footer('two'); ?>