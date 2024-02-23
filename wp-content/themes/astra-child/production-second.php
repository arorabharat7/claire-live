<?php

/**Template Name: Production Second Template
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
      <img class="w-full  md:h-64 h-56 object-cover" src="<?php echo $hero_banner_section_image['url']; ?>" width="<?php echo $hero_banner_section_image['width']; ?>" height="<?php echo $hero_banner_section_image['height']; ?>" alt="<?php echo $hero_banner_section_image['alt']; ?>">
    <?php endif; ?>

    <div class="absolute text-center top-2/4 left-2/4 transform-middle break-keep lg:w-[98%] md:w-[90%] w-[95%]">
      <h1 class="xl:text-5xl md:text-5xl sm:text-4xl text-3xl text-white ">
        <?php echo $hero_banner_section_heading; ?></h1>
      <p class="lg:text-xl md:text-lg text-sm text-white font-medium lg:pt-8 pt-5 lg:w-[70%] m-auto"><?php echo $hero_banner_section_description; ?></p>
    </div>

  </div>
</section>



<section class="services-production lg:py-100 md:py-60 py-10">
  <div class="container m-auto">


    <div class="lg:grid lg:grid-cols-12  items-center">



      <div class="xl:col-span-6 lg:col-span-6">
        <div class="swiper claire-production-full  xl:!pb-24 !pb-24 overflow-hidden">
          <div class="swiper-wrapper">
            <?php if (have_rows('production_manufacturing_first_sec_main_image')) :

              // Loop through rows.
              while (have_rows('production_manufacturing_first_sec_main_image')) : the_row();

                // Load sub field value.
                $production_manufacturing_first_sec_image = get_sub_field('production_manufacturing_first_sec_image');
                $tabs_id = get_sub_field('tabs_id');
            ?>
                <div class="swiper-slide">
                  <img src="<?php echo $production_manufacturing_first_sec_image['url']; ?>" width="801" height="580" alt="clair-service" class="w-full xl:h-[37rem] lg:h-[43rem] h-auto object-cover">
                </div>
            <?php

              endwhile;
            endif; ?>


          </div>


          <div class="swiper-pagination xl:!left-1/3 lg:!left-[29%] sm:!left-1/3 !left-[20%] sm:!top-auto !top-[87%]"></div>
          <div class="text-xl swiper-button-next xl:!right-[2%] xl:!top-[97.9%] lg:!right-[2%] lg:!top-[97.9%] md:!right-[3%] md:!top-[97.9%] sm:!right-[0%] !right-[0%] sm:!top-[97.6%] !top-[90%]">
            <i class="fa-solid fa-arrow-right-long text-black"></i>
          </div>
          <div class="text-xl  swiper-button-prev xl:!left-[69%] xl:!top-[97.9%] lg:!left-[60%] lg:!top-[97.9%] md:!left-[70%] md:!top-[97.9%] sm:!left-[67%] sm:!top-[97.6%] !left-[41%] !top-[90%]">
            <i class="fa-solid fa-arrow-left-long text-black"></i>
          </div>

        </div>

        <div thumbsSlider="" class="swiper claire-production-small xl:mt-[-10rem] lg:mt-[-8rem] md:mt-[-11.5rem] sm:mt-[-10rem] mt-[-9rem] w-[96%] m-auto">
          <div class="swiper-wrapper ">
            <?php if (have_rows('production_manufacturing_first_sec_small_image')) :

              // Loop through rows.
              while (have_rows('production_manufacturing_first_sec_small_image')) : the_row();

                // Load sub field value.
                $production_manufacturing_first_sec_small_img = get_sub_field('production_manufacturing_first_sec_small_img');

            ?>
                <div class="swiper-slide">

                  <img src="<?php echo $production_manufacturing_first_sec_small_img['url'] ?>" width="141" height="100" alt="clair-about-curtain" class="w-full  cursor-pointer">
                </div>
            <?php

              endwhile;
            endif; ?>




          </div>
        </div>
      </div>

      <?php
      $production_manufacturing_first_heading = get_field('production_manufacturing_first_sec_main_heading');
      $production_manufacturing_first_description = get_field('production_manufacturing_first_sec_description');
      ?>
      <div class="lg:col-span-6 col-span-12 lg:mt-0 sm:mt-16 mt-12">

        <div class="border border-black  lg:p-10 md:p-7 p-4 lg:border-l-0">
          <h3 class="lg:text-2xl md:text-xl text-lg uppercase font-michroma text-black text-right">
            <?php echo $production_manufacturing_first_heading ?>
          </h3>

          <?php echo $production_manufacturing_first_description ?>

          <div class="lg:mt-5 mt-3">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/claire_description-small-arrow.svg" width="71" height="15" alt="claire_description-small-arrow" class="md:mb-5 mb-3 rotate-180">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/claire_description-big-arrow.svg" width="141" height="16" alt="claire_description-big-arrow" class="rotate-180">
          </div>

        </div>


      </div>

    </div>

  </div>
</section>



<section class="services-production lg:py-10 md:py-6 py-3">
  <div class="container m-auto">


    <div class="lg:grid lg:grid-cols-12  items-center">

      <div class="xl:col-span-6 lg:col-span-6  lg:order-2">
        <div class="swiper claire-production-full-second xl:!pb-24 !pb-24 overflow-hidden">
          <div class="swiper-wrapper">

            <?php if (have_rows('production_manufacturing_second_sec_main_image_details')) :

              // Loop through rows.
              while (have_rows('production_manufacturing_second_sec_main_image_details')) : the_row();

                // Load sub field value.
                $production_manufacturing_second_sec_main_image = get_sub_field('production_manufacturing_second_sec_main_image');

            ?>
                <div class="swiper-slide">
                  <img src="<?php echo $production_manufacturing_second_sec_main_image['url']; ?>" width="801" height="580" alt="clair-service" class="w-full xl:h-[37rem] lg:h-[43rem] h-auto object-cover">
                </div>
            <?php

              endwhile;
            endif; ?>



          </div>


          <div class="swiper-pagination xl:!left-1/3 lg:!left-[29%] sm:!left-1/3 !left-[20%] sm:!top-auto !top-[87%]"></div>
          <div class="text-xl swiper-button-next xl:!right-[2%] xl:!top-[97.9%] lg:!right-[2%] lg:!top-[97.9%] md:!right-[3%] md:!top-[97.9%] sm:!right-[0%] !right-[0%] sm:!top-[97.6%] !top-[90%]">
            <i class="fa-solid fa-arrow-right-long text-black"></i>
          </div>
          <div class="text-xl  swiper-button-prev xl:!left-[69%] xl:!top-[97.9%] lg:!left-[60%] lg:!top-[97.9%] md:!left-[70%] md:!top-[97.9%] sm:!left-[67%] sm:!top-[97.6%] !left-[41%] !top-[90%]">
            <i class="fa-solid fa-arrow-left-long text-black"></i>
          </div>

        </div>

        <div thumbsSlider="" class="swiper claire-production-small-second xl:mt-[-10rem]   lg:mt-[-8rem] md:mt-[-11.5rem] sm:mt-[-10rem] mt-[-9rem] w-[96%] m-auto">
          <div class="swiper-wrapper ">

            <?php if (have_rows('production_manufacturing_second_sec_small_image_details')) :

              // Loop through rows.
              while (have_rows('production_manufacturing_second_sec_small_image_details')) : the_row();

                // Load sub field value.
                $production_manufacturing_second_sec_small_image = get_sub_field('production_manufacturing_second_sec_small_image');

            ?>
                <div class="swiper-slide">

                  <img src="<?php echo $production_manufacturing_second_sec_small_image['url'] ?>" width="141" height="100" alt="clair-about-curtain" class="w-full  cursor-pointer">
                </div>
            <?php

              endwhile;
            endif; ?>





          </div>
        </div>




      </div>
      <?php
      $production_manufacturing_first_heading = get_field('production_manufacturing_first_sec_main_heading');
      $production_manufacturing_first_description = get_field('production_manufacturing_first_sec_description');
      ?>
      <div class="xl:col-span-6 lg:col-span-6 lg:mt-0 sm:mt-16 mt-12 lg:order-1">

        <div class="border border-black lg:p-10 md:p-7 p-4 lg:border-r-0">
          <h3 class="lg:text-2xl md:text-xl text-lg uppercase font-michroma text-black ">ABOUT CURTAIN
            <?php echo $production_manufacturing_first_heading ?>
          </h3>

          <?php echo $production_manufacturing_first_description ?>

          <div class="lg:mt-5 mt-3">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/claire_description-small-arrow.svg" width="71" height="15" alt="claire_description-small-arrow" class="md:mb-5 mb-3 ">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/claire_description-big-arrow.svg" width="141" height="16" alt="claire_description-big-arrow">
          </div>

        </div>


      </div>







    </div>

  </div>
</section>




<?php $production_video_url_image = get_field('production_video_url_image');
$production_video_url = get_field('production_video_url');
?>


<?php if (!empty($production_video_url)) : ?>
  <section class="video lg:py-100 md:py-60 py-10">
    <div class="relative before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.29)]">
      <img class="w-full md:min-h-64 min-h-52 object-cover" src="<?php echo $production_video_url_image['url']; ?>" width="<?php echo $production_video_url_image['width']; ?>" height="<?php echo $production_video_url_image['height']; ?>" alt="<?php echo $production_video_url_image['alt']; ?>">



      <div class="absolute text-center top-2/4 left-2/4 transform-middle break-keep">
        <button id="openModalBtn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/claire_play-btn.svg" width="86" height="86" alt="play-btn" class="lg:w-[86px] md:w-[60px] w-[50px]"></button>
      </div>
      <div id="myModal" class="modal hidden fixed left-0 top-0 w-full h-full overflow-auto bg-black/[0.7] z-50">
        <div class="modal-content relative bg-white rounded-md shadow lg:w-1/2 md:w-3/4 w-11/12 md:px-7 md:py-7 px-4 py-6 mx-auto my-[10%] z-40">
          <span id="closeModalBtn" class="close text-black text-4xl font-medium cursor-pointer absolute right-2 top-3 leading-[0]">&times;</span>
          <video autoplay muted loop playsinline preload="metadata" class="w-full xl:h-[34rem] lg:h-[30rem] object-cover">
        <source src="<?php echo $production_video_url; ?>" type="video/mp4">
      </video>
        </div>
      </div>


  </section>
<?php endif; ?>

<section class="result">
  <div class="container m-auto">
    <h2 class="lg:text-4xl md:text-3xl  text-2xl font-michroma text-black relative text-center uppercase after:content-[''] after:absolute after:w-24 after:h-[1px] after:bottom-0 lg:pb-6 pb-3 after:left-[50%] after:translate-x-[-50%] after:bg-black">
      OUR RESULTS</h2>

    <div class="grid production_img grid-cols-12 gap-5 lg:my-16 md:my-10 my-6">
      <?php
      if (have_rows('our_results_all_details')) :
        $i = 1;

        // Loop through rows.
        while (have_rows('our_results_all_details')) :
          the_row();

          // Load sub field value.
          $our_results_main_image = get_sub_field('our_results_main_image');
          $our_results_small_image = get_sub_field('our_results_small_image');

      ?>
          <?php if ($i % 2 == 0) { ?>
            <div class="md:!col-span-4 sm:!col-span-6 col-span-12 repeater-item">
              <img src="<?php echo $our_results_small_image['url'] ?>" width="758" height="411" alt="curtain-result" class="w-full object-cover lg:h-[411px] md:h-[250px] h-[220px]">
            </div>

            <div class="md:!col-span-8 sm:!col-span-6 col-span-12 repeater-item">
              <img src="<?php echo $our_results_main_image['url'] ?>" width="502" height="411" alt="curtain-result" class="w-full object-cover lg:h-[411px] md:h-[250px] h-[220px]">
            </div>

          <?php } else { ?>
            <div class="md:!col-span-8 sm:!col-span-6 col-span-12 repeater-item">
              <img src="<?php echo $our_results_main_image['url'] ?>" width="758" height="411" alt="curtain-result" class="w-full object-cover lg:h-[411px] md:h-[250px] h-[220px]">
            </div>

            <div class="md:!col-span-4 sm:!col-span-6 col-span-12 repeater-item">
              <img src="<?php echo $our_results_small_image['url'] ?>" width="502" height="411" alt="curtain-result" class="w-full object-cover lg:h-[411px] md:h-[250px] h-[220px]">
            </div>
      <?php }
          $i++;
        endwhile;
      endif; ?>
    </div>

    <div class="flex justify-center items-center">
      <button id="loadMore-production" class="py-3 lg:px-9 md:px-5 px-3 border rounded-none border-i-primary group hover:bg-black transition-all lg:text-17 md:text-base text-sm bg-no-repeat bg-right  group-hover:text-white  font-michroma"> LOAD
        MORE</button>


    </div>

  </div>
</section>






<?php
$why_choose_us_section_main_heading = get_field('why_choose_us_section_main_heading');
?>
<section class="production-advantage lg:py-100 md:py-60 py-10 lg:my-10 my-6 bg-[#f6f6f6]">
  <div class="container m-auto">
    <div class="lg:!w-2/3 md:!w-[82%] m-auto">
      <h2 class="lg:text-4xl md:text-3xl  text-2xl font-michroma text-black relative text-center uppercase after:content-[''] after:absolute after:w-24 after:h-[1px] after:bottom-0 lg:pb-6 pb-3 after:left-[50%] after:translate-x-[-50%] after:bg-black lg:!leading-[3.5rem]">
        <?php echo $why_choose_us_section_main_heading; ?></h2>
    </div>
    <div class="grid grid-cols-12 lg:gap-x-10 lg:gap-y-16 md:gap-x-7 md:gap-y-10 gap-5 lg:mt-10 md:mt-8 mt-6" id="resultImages">
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

              <h3 class="lg:text-17 text-base font-michroma text-black uppercase lg:my-5 md:my-3 my-2"><?php echo $why_choose_us_section_all_details_heading; ?></h3>

              <p class="text-sm  text-light-grey font-bold"> <?php echo $why_choose_us_section_all_details_description; ?> </p>
            </div>

          </div>
      <?php

        endwhile;
      endif; ?>





    </div>
  </div>
</section>



<script>
  let openModalBtn = document.getElementById("openModalBtn");
  let modal = document.getElementById("myModal");
  let closeModalBtn = document.getElementById("closeModalBtn");

  openModalBtn.addEventListener("click", function() {
    modal.style.display = "block";
  });

  closeModalBtn.addEventListener("click", function() {
    modal.style.display = "none";
  });

  window.addEventListener("click", function(event) {
    if (event.target === modal) {
      modal.style.display = "none";
    }
  });
</script>

<script>
  jQuery(document).ready(function($) {
    var visibleItems = 4; // Number of initially visible items
    var itemsToShow = 2; // Number of items to show on each "Load More" click

    $('.production_img .repeater-item:gt(' + (visibleItems - 1) + ')').hide();

    $('#loadMore-production').on('click', function() {
      var $hiddenItems = $('.production_img .repeater-item:hidden');
      var numToShow = Math.min(itemsToShow, $hiddenItems.length);
      if (numToShow === 0) {
        $(this).hide();
      }
      $hiddenItems.slice(0, numToShow).slideDown();
      visibleItems += itemsToShow;
    });
  });
</script>


<?php get_footer(); ?>