<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly. ajay 
}

?>


<?php
$page_id = get_the_ID();
$excluded_ids = array(341, 469, 471, 473, 479, 477, 474);
if (!in_array($page_id, $excluded_ids)) {  ?>
	<section class="our-results lg:py-100 md:py-60 py-10">
		<div class="container m-auto">
			<?php
			$our_results_section_main_heading = get_field('our_results_section_main_heading', 'option');
			?>
			<h2 class="lg:text-4xl md:text-3xl  text-2xl font-michroma text-black relative text-center uppercase after:content-[''] after:absolute after:w-24 after:h-[1px] after:bottom-0 lg:pb-6 pb-3 after:left-[50%] after:translate-x-[-50%] after:bg-black">
				<?php echo $our_results_section_main_heading; ?></h2>


			<div class="md:flex grid grid-cols-12 lg:gap-0 gap-5 items-center justify-between bg-bg-grey lg:py-16 md:py-10 py-5 lg:px-10 md:px-5 px-3 lg:mt-10 md:mt-8 mt-6">
				<?php if (have_rows('our_results_section_all_details', 'option')) :

					// Loop through rows.
					while (have_rows('our_results_section_all_details', 'option')) : the_row();

						// Load sub field value.
						$our_results_section_all_details_heading = get_sub_field('our_results_section_all_details_heading');
						$our_results_section_all_details_description = get_sub_field('our_results_section_all_details_description');

				?>
						<div class="col-span-6">
							<h3 class="lg:text-4xl md:text-3xl  text-2xl font-michroma text-white"><?php echo $our_results_section_all_details_heading; ?></h3>
							<p class="lg:text-xl text-lg font-bold text-white uppercase lg:mt-3 mt-1"><?php echo $our_results_section_all_details_description; ?></p>
						</div>
				<?php

					endwhile;
				endif; ?>


			</div>


		</div>
	</section>
<?php } ?>

<?php
$current_page_id = get_the_ID();
$page_id_string = 'page-id-' . $current_page_id;
if ($page_id_string != 'page-id-17') { ?>

	<section class="contact-us mb-[-150px] relative">
		<div class="container m-auto">

			<div class="bg-bg-grey md:pt-5 pt-5 pb-5 lg:px-10 md:px-5 px-3">
				<?php
				$call_to_action_section_main_heading = get_field('call_to_action_section_main_heading', 'option');
				$call_to_action_section_description = get_field('call_to_action_section_description', 'option');
				$call_to_action_section_whatsapp_text = get_field('call_to_action_section_whatsapp_text', 'option');
				$call_to_action_section_whatsapp_number_link = get_field('call_to_action_section_whatsapp_number_link', 'option');
				$call_to_action_section_image = get_field('call_to_action_section_image', 'option');
				?>

				<h2 class="lg:text-4xl md:text-3xl  text-2xl font-michroma text-white relative text-center uppercase after:content-[''] after:absolute after:w-24 after:h-[1px] after:bottom-0 lg:pb-6 pb-3 after:left-[50%] after:translate-x-[-50%] after:bg-white">
					<?php echo $call_to_action_section_main_heading; ?></h2>


				<p class="lg:text-17 md:text-base text-sm text-white font-bold lg:w-[69%] text-center m-auto lg:mt-4 mt-3">
					<?php echo $call_to_action_section_description; ?></p>

				<div id="contact-form">
				<?php echo do_shortcode('[contact-form-7 id="34372bb" title="Contact form 1"]'); ?>
					<!-- <div class="grid grid-cols-12 items-center lg:gap-12 md:gap-7 gap-5 lg:mt-14 md:mt-10 mt-6 lg:mb-11 mb-7">
						<?php //echo do_shortcode('[contact-form-7 id="34372bb" title="Contact form 1"]'); 
						?>
						<div class="lg:col-span-3 md:col-span-12 col-span-12">
							<input type="text" placeholder="Name" class="md:text-17 text-sm font-bold pb-3 text-i-grey border-b border-i-grey !bg-transparent placeholder:text-i-grey w-full focus-visible:outline-0">
						</div>

						<div class="lg:col-span-3 md:col-span-12 col-span-12">
							<input type="number" placeholder="Telephone" class="md:text-17 text-sm font-bold pb-3 text-i-grey border-b border-i-grey !bg-transparent placeholder:text-i-grey w-full focus-visible:outline-0">
						</div>


						<div class="lg:col-span-3 md:col-span-12 col-span-12">
							<input type="email" placeholder="E-mail" class="md:text-17 text-sm font-bold pb-3 text-i-grey border-b border-i-grey !bg-transparent placeholder:text-i-grey w-full focus-visible:outline-0">
						</div>

						<div class="lg:col-span-3 col-span-6">
							<button class="btn-arrow bg-white py-3 w-full rounded-none"><a href="#" class="md:text-17 text-sm bg-no-repeat bg-right pr-7  font-michroma uppercase">Send </a></button>
						</div>
					</div> -->
				</div>

				<h3><a href="<?php echo $call_to_action_section_whatsapp_number_link; ?>" class="text-17 font-michroma uppercase text-white flex items-center justify-center gap-4 hover:text-white">
						<?php echo $call_to_action_section_whatsapp_text; ?>
						<img src="<?php echo $call_to_action_section_image['url']; ?>" width="<?php echo $call_to_action_section_image['width']; ?>" height="<?php echo $call_to_action_section_image['height']; ?>" alt="<?php echo $call_to_action_section_image['alt']; ?>"></a>
				</h3>
			</div>


		</div>
	</section>

<?php } else { ?>


	<section class="contact-us lg:pb-100 md:pb-60 pb-10 relative">
		<div class="container m-auto">

			<div class="bg-bg-grey md:pt-5 pt-5 pb-5 lg:px-10 md:px-5 px-3">
				<?php
				$call_to_action_section_main_heading = get_field('call_to_action_section_main_heading', 'option');
				$call_to_action_section_description = get_field('call_to_action_section_description', 'option');
				$call_to_action_section_whatsapp_text = get_field('call_to_action_section_whatsapp_text', 'option');
				$call_to_action_section_whatsapp_number_link = get_field('call_to_action_section_whatsapp_number_link', 'option');
				$call_to_action_section_image = get_field('call_to_action_section_image', 'option');
				?>

				<h2 class="lg:text-4xl md:text-3xl  text-2xl font-michroma text-white relative text-center uppercase after:content-[''] after:absolute after:w-24 after:h-[1px] after:bottom-0 lg:pb-6 pb-3 after:left-[50%] after:translate-x-[-50%] after:bg-white">
					<?php echo $call_to_action_section_main_heading; ?></h2>


				<p class="lg:text-17 md:text-base text-sm text-white font-bold lg:w-[69%] text-center m-auto lg:mt-4 mt-3">
					<?php echo $call_to_action_section_description; ?></p>

				<div id="contact-form">
					<?php echo do_shortcode('[contact-form-7 id="34372bb" title="Contact form 1"]'); ?>
					<!-- <div class="grid grid-cols-12 items-center lg:gap-12 md:gap-7 gap-5 lg:mt-14 md:mt-10 mt-6 lg:mb-11 mb-7">
						<?php //echo do_shortcode('[contact-form-7 id="34372bb" title="Contact form 1"]'); 
						?>
						<div class="lg:col-span-3 md:col-span-12 col-span-12">
							<input type="text" placeholder="Name" class="md:text-17 text-sm font-bold pb-3 text-i-grey border-b border-i-grey !bg-transparent placeholder:text-i-grey w-full focus-visible:outline-0">
						</div>

						<div class="lg:col-span-3 md:col-span-12 col-span-12">
							<input type="number" placeholder="Telephone" class="md:text-17 text-sm font-bold pb-3 text-i-grey border-b border-i-grey !bg-transparent placeholder:text-i-grey w-full focus-visible:outline-0">
						</div>


						<div class="lg:col-span-3 md:col-span-12 col-span-12">
							<input type="email" placeholder="E-mail" class="md:text-17 text-sm font-bold pb-3 text-i-grey border-b border-i-grey !bg-transparent placeholder:text-i-grey w-full focus-visible:outline-0">
						</div>

						<div class="lg:col-span-3 col-span-6">
							<button class="btn-arrow bg-white py-3 w-full rounded-none"><a href="#" class="md:text-17 text-sm bg-no-repeat bg-right pr-7  font-michroma uppercase">Send </a></button>
						</div>
					</div> -->
				</div>

				<h3><a href="<?php echo $call_to_action_section_whatsapp_number_link; ?>" class="text-17 font-michroma uppercase text-white flex items-center justify-center gap-4 hover:text-white">
						<?php echo $call_to_action_section_whatsapp_text; ?>
						<img src="<?php echo $call_to_action_section_image['url']; ?>" width="<?php echo $call_to_action_section_image['width']; ?>" height="<?php echo $call_to_action_section_image['height']; ?>" alt="<?php echo $call_to_action_section_image['alt']; ?>"></a>
				</h3>
			</div>


		</div>
	</section>

<?php  }
$current_page_id = get_the_ID();
$page_id_string = 'page-id-' . $current_page_id;
if ($page_id_string != 'page-id-17') { ?>
	<section class="our-partners bg-dark-grey lg:py-100 md:py-60 py-10">
		<div class="container m-auto">
			<div class="mt-[150px]">
				<?php $our_partners_section_main_heading = get_field('our_partners_section_main_heading', 'option'); ?>
				<h2 class="lg:text-4xl md:text-3xl text-2xl font-michroma text-black relative text-center after:content-[''] after:absolute after:w-24 after:h-[1px] after:bottom-0 lg:pb-6 pb-3 after:left-[50%] after:translate-x-[-50%] after:bg-black">
					<?php echo $our_partners_section_main_heading; ?></h2>
			</div>


			<div class="lg:mt-10 md:mt-8 mt-6">

				<div class="grid grid-cols-10 lg:gap-0 gap-5 items-center justify-between lg:mb-8 mb-5">
					<?php if (have_rows('our_partners_section_details', 'option')) :
						$i = 0;
						// Loop through rows.
						while (have_rows('our_partners_section_details', 'option')) : the_row();
							if ($i == 5) { ?>
				</div>
				<div class="grid grid-cols-10 lg:gap-0 gap-5 items-center justify-between lg:mb-8 mb-5">
				<?php  } elseif ($i == 10) { ?>
				</div>
				<div class="grid grid-cols-10 lg:gap-0 gap-5 items-center justify-between lg:mb-8 mb-5 ">
				<?php	} elseif ($i == 15) { ?>
				</div>
				<div class="grid grid-cols-10 lg:gap-0 gap-5 items-center justify-between lg:mb-8 mb-5 ">
				<?php	}
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
<?php } ?>

<footer class=" bg-dark-grey  border-t border-i-grey md:pb-4 pb-3 sm:overflow-auto overflow-hidden">
	<div class="container m-auto">

		<div class="grid grid-cols-12 xl:gap-20 lg:gap-10 gap-8 py-5">


			<div class="lg:col-span-4 md:col-span-6 col-span-12">
				<?php $footer_logo = get_field('footer_logo', 'option'); ?>
				<a href="<?php echo home_url('/'); ?>"><img src="<?php echo $footer_logo['url']; ?>" width="286" height="204" alt="claire_footer-logo"></a>
			</div>

			<div class="lg:col-span-2 md:col-span-6 col-span-6 mt-2">
				<h2 class="lg:text-17 text-base text-black uppercase mb-5">Menu</h2>

				<ul class="flex flex-col lg:gap-6 gap-4">
					<?php
					$menu = 'Footer Menu';
					$args = array(
						'order' => 'DESC',
						'orderby' => 'menu_order',
						'post_type' => 'nav_menu_item',
						'post_status' => 'publish',
						'output' => ARRAY_A,
						'output_key' => 'menu_order',
						'nopaging' => true,
						'update_post_term_cache' => false
					);
					$items = wp_get_nav_menu_items($menu, $args);
					//echo "<pre>"; print_r($items); echo "</pre>";

					global $wp_query;
					$pagename = $wp_query->queried_object->post_title;

					?>
					<?php for ($i = 0; $i < count($items); $i++) { ?>
						<li><a href="<?php echo $items[$i]->url; ?>" class="text-17 text-black uppercase"><?php echo $items[$i]->title; ?></a></li>

					<?php } ?>

					<!-- <li><a href="#" class="text-17 text-black uppercase">about us</a></li>
					<li><a href="#" class="text-17 text-black uppercase">contact us</a></li> -->
				</ul>
			</div>

			<div class="lg:col-span-3 md:col-span-6 col-span-6 mt-2">
				<h2 class="lg:text-17 text-base text-black uppercase mb-5">social</h2>

				<ul class="flex lg:gap-6 md:gap-4 gap-2">
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


			<div class="lg:col-span-3 md:col-span-6 col-span-12 mt-2">
				<h2 class="lg:text-17 text-base text-black uppercase mb-5">contacts</h2>

				<ul class="flex flex-col lg:gap-5 gap-3">
					<?php if (have_rows('global_settings_contact_details', 'option')) :
						$i = 0;
						// Loop through rows.
						while (have_rows('global_settings_contact_details', 'option')) : the_row();

							// Load sub field value.
							$global_settings_contact_details_url = get_sub_field('global_settings_contact_details_url');
							$global_settings_contact_details_type_image = get_sub_field('global_settings_contact_details_type_image');
							$global_settings_contact_details_text = get_sub_field('global_settings_contact_details_text');


					?>
							<li><a href="<?php echo $global_settings_contact_details_url; ?>" class="lg:text-17 text-sm text-black uppercase font-michroma flex items-center lg:gap-2.5 gap-1">

									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/claire_footer_whatsapp.svg" width="30" height="30" alt="claire_footer_whatsapp" class="md:h-auto h-[26px]">

									<?php echo $global_settings_contact_details_text; ?></a></li>
					<?php
							$i++;
						endwhile;
					endif; ?>

					<?php
					$footer_settings_consult_btn_text = get_field('footer_settings_consult_btn_text', 'option');
					$footer_settings_consult_btn_url = get_field('footer_settings_consult_btn_url', 'option');
					$footer_settings_copyright_text = get_field('footer_settings_copyright_text', 'option');

					?>
					<li><button class="group hover:bg-black transition-all btn-arrow rounded-none  py-3 px-9 border border-i-primary lg:mt-2.5 mt-1.5">
							<a href="<?php echo $footer_settings_consult_btn_url; ?>" class="group-hover:brightness-[10] group-hover:text-white text-17 font-bold bg-no-repeat bg-right pr-7"><?php echo $footer_settings_consult_btn_text; ?> </a></button></li>
				</ul>
			</div>

		</div>

		<p class="text-i-grey text-sm text-center"><?php echo $footer_settings_copyright_text; ?></p>
	</div>

</footer>

<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/custome.js"></script>


</body>

</html>