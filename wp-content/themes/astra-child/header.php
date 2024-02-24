<?php

/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */



?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<?php wp_head(); ?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body <?php body_class(); ?>>

	<header class="bg-white sticky top-0 z-50 grid grid-cols-12 gap-0 ">

		<div class="bg-black w-full lg:col-span-1 sm:col-span-2 col-span-2 p-1 flex items-center justify-center">

			<nav class="navigation-menu">

				<button type="button" class="hamburger-menu" onclick="toggleMenuClicked()">
					<span class="material-icons" id="open-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/claire_humberger.svg" width="35" height="23" alt="claire_humberger"></span>
					<span class="material-icons hidden" id="close-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cliare_close-icon.svg" width="35" height="35" alt="claire_close"></span>
				</button>
				<div class="navigation-menu__labels bg-[rgb(246,246,246,0.9)] fixed invisible z-10 xl:top-[93px] lg:top-[93px] md:top-[80px] sm:top-[75px] top-[53px] left-0 h-auto md:p-8 p-6">
					<ul>
						<?php
						$menu = 'Dekstop-Responsive Menu';
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
							<li class="xl:pb-7 md:pb-5 pb-2 <?php if ($items[$i]->title ==  "PRODUCTION") { ?>lg:hidden <?php } ?> ">
								<a href="<?php echo $items[$i]->url; ?>" class=" xl:text-base   text-base font-medium uppercase "><?php echo $items[$i]->title; ?></a>
							</li>
						<?php } ?>


						<li>
							<?php if (have_rows('global_settings_contact_details', 'option')) :
								$i = 0;
								// Loop through rows.
								while (have_rows('global_settings_contact_details', 'option')) : the_row();

									// Load sub field value.
									$global_settings_contact_details_url = get_sub_field('global_settings_contact_details_url');
									$global_settings_contact_details_type_image = get_sub_field('global_settings_contact_details_type_image');
									$global_settings_contact_details_text = get_sub_field('global_settings_contact_details_text');


							?>
									<a href="<?php echo $global_settings_contact_details_url; ?>" class="xl:text-sm text-xs xl:pb-5 md:pb-3 pb-2 inline-block  uppercase font-michroma " ;>

										<img class="inline-block mr-2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/claire_whatsapp.svg" width="30" height="30" alt="claire_whatsapp">

										<?php echo $global_settings_contact_details_text; ?></a><br>
							<?php
									$i++;
								endwhile;
							endif; ?>
						</li>

					</ul>
				</div>
			</nav>
		</div>

		</div>

		<div id="offcanvas" class="flex items-center justify-between lg:col-span-11 sm:col-span-10 col-span-10 lg:py-1.5 sm:py-2 py-1 sm:pl-3 pl-2 sm:pr-0 pr-3 bg-white">

			<?php $logo_image = get_field('header_logo_image', 'option'); ?>
			<a href="<?php echo home_url('/'); ?>" class="navbar-brand md:pr-6 pr-4 "><img src="<?php echo $logo_image['url']; ?>" width="220" height="61" alt="claire-logo" class="xl:w-60 lg:w-40 sm:w-60 w-40"></a>

			<ul class="navbar lg:flex items-center 2xl:gap-12 xl:gap-6 lg:gap-3 hidden ml-auto">
				<?php
				$menu = 'Dekstop-Responsive Menu';
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
					<li class="relative">
						<a href="<?php echo $items[$i]->url; ?>" class=" 2xl:text-base xl:text-sm text-xs font-bold uppercase "><?php echo $items[$i]->title; ?></a>
					</li>
				<?php } ?>


				<li>
					<?php if (have_rows('global_settings_contact_details', 'option')) :
						$i = 0;
						// Loop through rows.
						while (have_rows('global_settings_contact_details', 'option')) : the_row();

							// Load sub field value.
							$global_settings_contact_details_url = get_sub_field('global_settings_contact_details_url');
							$global_settings_contact_details_type_image = get_sub_field('global_settings_contact_details_type_image');
							$global_settings_contact_details_text = get_sub_field('global_settings_contact_details_text');


					?>
							<a href="<?php echo $global_settings_contact_details_url; ?>" class="2xl:text-base text-xs  uppercase font-michroma " ;>
								<?php echo $global_settings_contact_details_text; ?></a><br>
					<?php
							$i++;
						endwhile;
					endif; ?>

				</li>
				<?php
				$header_settings_help_btn_text = get_field('header_settings_help_btn_text', 'option');
				$header_settings_help_btn_url = get_field('header_settings_help_btn_url', 'option');
				
				?>
				<li>
				<?php if (have_rows('global_settings_social_icons_repeater', 'option')) :
						$i = 0;
						// Loop through rows.
						while (have_rows('global_settings_social_icons_repeater', 'option')) : the_row();

							// Load sub field value.
							$global_settings_social_icons = get_sub_field('global_settings_social_icons_repeater_image_image');
							$global_settings_social_icons_url = get_sub_field('global_settings_social_icons_repeater_url');

					?>
					<a href="<?php echo $global_settings_social_icons_url; ?>">
				

					<?php if (!empty($global_settings_social_icons)) : ?>
										<img src="<?php echo $global_settings_social_icons['url']; ?>" width="30" height="30" alt="<?php echo $global_settings_social_icons['alt']; ?>"  class="2xl:mr-4 xl:mr-2 lg:mr-1 inline-block xl:w-6 lg:w-4 w-6" >
									<?php endif; ?>
				</a>
					<?php
							$i++;
						endwhile;
					endif; ?>
				</li>

				<li>
					<button id="openFormBtnnn openFormBtnn" class="btn-arrow group bg-[#008000] hover:bg-black transition-all rounded-none  xl:py-3 xl:px-5 lg:py-2 lg:px-3 border border-[#008000] lg:block hidden "><a href="javascript:void(0)" class="brightness-[10] group-hover:text-white xl:text-sm text-xs font-bold bg-no-repeat bg-right xl:pr-7 lg:pr-4 text-white"><?php echo $header_settings_help_btn_text; ?>
						</a></button>
				</li>


			</ul>


			<div class="ml-auto mr-3">
				<button id="openFormBtnnn openFormBtnn" class="btn-arrow group group bg-[#008000] hover:bg-black transition-all rounded-none sm:py-3 sm:px-6 py-2 px-3  border  border-[#008000] lg:hidden "><a href="javascript:void(0)" class="brightness-[10] group-hover:text-white sm:text-sm text-xs font-bold bg-no-repeat bg-right sm:pr-7 pr-5 text-white"><?php echo $header_settings_help_btn_text; ?>
					</a></button>
			</div>
		</div>

	</header>