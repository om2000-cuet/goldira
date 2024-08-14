<?php
/*
Template Name: Home New
*/
?>
<?php get_header(); ?>

<?php
if (wp_is_mobile()) {
?>


	<style>
		a[href="https://goldiracompaniescompared.com/doug-young"],
		a[href="https://goldiracompaniescompared.com/doug-young"] * {
			color: #a4bdf2 !important;
		}

		.dimg p {
			margin-bottom: 12px;
			margin-top: 12px !important;
			line-height: 23px;
		}

		p#caption-attachment-23242 {
			padding: 0 0 15px;
			margin-top: 0;
			/* font-size: 80%; */
			font-style: italic;
			font-weight: 400;
			line-height: inherit;
			text-align: center;
			color: white;
			line-height: 29px;
		}

		.dimg {
			display: flex;
			flex-direction: column;
		}

		.img {
			margin-top: -21px;
		}

		.dcn {}

		p#caption-attachment-23242 {
			margin-bottom: 0px !IMPORTANT;
			font-size: 18px;
		}

		.img img {
			height: auto !IMPORTANT;
			width: 112px;
			display: block;
			margin-left: auto !important;
			margin-right: auto !IMPORTANT;
			float: none !important;
			margin-bottom: 12px;
		}

		.heading-font,
		h2 {
			text-align: center !important;
			display: block;
			position: relative;
			float: none !important;
			font-size: 23px !important;
			text-transform: uppercase !important;
		}

		.cont {
			display: block;
			position: relative;
			width: 91% !important;
			margin-left: auto;
			margin-right: auto;
			overflow: hidden;
			float: none !IMPORTANT;
		}

		.cont .rightfour img,
		.cont .leftone img {
			max-width: 100% !important;
		}

		.toprow .left,
		.toprow .right {
			width: 48% !important;
			float: left !important;
			clear: none !important;
		}


		.bottomrow .left,
		.bottomrow .right {
			width: 48% !important;
			float: left !important;
			clear: none !important;
		}

		.bottomrow .left,
		.toprow .left {
			margin-right: 2% !important;
		}

		.rightfour img {
			max-height: 96px !important;
			width: 100% !important;

		}

		.rightfour h2 a {
			height: 50px !important;
			display: block;
		}

		h2.review.heading-font {
			font-size: 23px !important;
			text-transform: uppercase !important;
		}

		.leftone h2,
		.leftone h2 a {
			font-size: 13px !important;
		}

		.rightfour h2 {
			font-size: 15px;
		}

		.cont h2,
		.cont h2 a {
			text-transform: normal !important;
			text-align: center !important;
			font-weight: normal;
		}

		.cont h3,
		.cont h3 a {
			text-transform: normal !important;
			text-align: center !important;
			font-size: 16px;
			font-weight: normal;
		}

		.leftoneh3,
		.leftoneh3 a {}

		h3 {
			font-weight: bold;
		}

		.cont a {
			display: -webkit-box;
			overflow: hidden;
			-webkit-line-clamp: 3;
			-webkit-box-orient: vertical;
		}

		.arrow {
			clear: both;
			display: block;
			text-align: center;
			margin-bottom: 13px;
			font-size: 17px;
			padding: 12px;
		}

		.cont.three .rightfour img {
			max-height: 100% !important;
		}

		.cont h3,
		.cont h3 a,
		.cont h2,
		.cont h2 a {
			color: #00003c !important;
		}

		.cont h3:hover,
		.cont h3 a:hover {
			color: #448700 !important;
		}

		.divflex {
			display: flex;
			flex-direction: column;
		}
	</style>

	<?php
	$section1_title = get_option('homepage_title_1');
	$section2_title = get_option('homepage_title_2');
	$section3_title = get_option('homepage_title_3');
	$section4_title = get_option('homepage_title_4');
	$section5_title = get_option('homepage_title_5');
	$section6_title = get_option('homepage_title_6');
	$section7_title = get_option('homepage_title_7');
	$section8_title = get_option('homepage_title_8');
	$section9_title = get_option('homepage_title_9');
	$section10_title = get_option('homepage_title_10');
	$section11_title = get_option('homepage_title_11');
	$section12_title = get_option('homepage_title_12');
	$section13_title = get_option('homepage_title_13');
	$section14_title = get_option('homepage_title_14');




	$order1 = get_option('homepage_order_1');
	$order2 = get_option('homepage_order_2');
	$order3 = get_option('homepage_order_3');
	$order4 = get_option('homepage_order_4');
	$order5 = get_option('homepage_order_5');
	$order6 = get_option('homepage_order_6');
	$order7 = get_option('homepage_order_7');
	$order8 = get_option('homepage_order_8');
	$order9 = get_option('homepage_order_9');
	$order10 = get_option('homepage_order_10');
	$order11 = get_option('homepage_order_11');
	$order12 = get_option('homepage_order_12');
	$order13 = get_option('homepage_order_13');
	$order14 = get_option('homepage_order_14');




	$openUrls = [];

	for ($i = 1; $i <= 14; $i++) {
		$hlink = get_option('homepage_link_' . $i);
		$openUrls[$i] = ($hlink === "Same") ? '' : 'target="_blank"';
	}
	// echo "dd".$openUrls[2];



	?>


	<?php if (have_posts()) {
		the_post(); ?>
		<div id="content">
			<div class="post-content">

				<div class="post-page-head-area bauhaus">
					<h1 class="post-title heading-font"><?php the_title(); ?></h1>
				</div>

				<div class="divflex">

					<div class="frow" style="order:<?php echo $order1; ?>">
						<h2 class="review heading-font"><?php echo $section1_title; ?> </h2>



						<div class="cont">
							<div class="leftone">
								<?php



								$featured_image_url = get_field('left_big_image');

								// Get the title
								$page_title = get_field('left_big_title');
								// Get the permalink (URL) of the page
								$page_permalink = get_field('left_big_title_link');

								if ($featured_image_url) {
									echo '<a href="' . $page_permalink . '" ' . $openUrls[1] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
								}
								echo '<h3><a href="' . esc_url($page_permalink) . '" ' . $openUrls[1] . ' >' . esc_html($page_title) . '</a></h3>';
								?>
							</div>

							<div class="rightfour">

								<div class="toprow">
									<div class="left">
										<?php


										$featured_image_url = get_field('right_image_1');

										// Get the title
										$page_title = get_field('right_title1');



										$page_permalink = get_field('right_title1_link');

										// Check if the featured image exists
										if ($featured_image_url) {
											echo '<a href="' . $page_permalink . '" ' . $openUrls[1] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
										}

										// Display the title with a link to the page
										echo '<h3><a href="' . esc_url($page_permalink) . '" ' . $openUrls[1] . '>' . esc_html($page_title) . '</a></h3>';
										?>
									</div>
									<div class="right">
										<?php


										$featured_image_url = get_field('right_image_2');

										// Get the title
										$page_title = get_field('right_title2');

										// Get the permalink (URL) of the page
										$page_permalink = get_field('right_title2_link');

										// Check if the featured image exists
										if ($featured_image_url) {
											echo '<a href="' . $page_permalink . '" ' . $openUrls[1] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
										}

										// Display the title with a link to the page
										echo '<h3><a href="' . esc_url($page_permalink) . '" ' . $openUrls[1] . '>' . esc_html($page_title) . '</a></h3>';
										?>

									</div>





								</div>

								<div class="bottomrow">

									<div class="left">
										<?php


										$featured_image_url = get_field('right_image_3');

										// Get the title
										$page_title = get_field('right_title3');

										$page_permalink = get_field('right_title3_link');

										// Check if the featured image exists
										if ($featured_image_url) {
											echo '<a href="' . $page_permalink . '" ' . $openUrls[1] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
										}

										// Display the title with a link to the page
										echo '<h3><a href="' . esc_url($page_permalink) . '" ' . $openUrls[1] . '>' . esc_html($page_title) . '</a></h3>';
										?>
									</div>
									<div class="right">
										<?php



										$featured_image_url = get_field('right_image_4');

										// Get the title
										$page_title = get_field('right_title4');


										$page_permalink = get_field('right_title4_link');

										// Check if the featured image exists
										if ($featured_image_url) {
											echo '<a href="' . $page_permalink . '" ' . $openUrls[1] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
										}

										// Display the title with a link to the page
										echo '<h3><a href="' . esc_url($page_permalink) . '" ' . $openUrls[1] . '>' . esc_html($page_title) . '</a></h3>';
										?>
									</div>

								</div>

							</div>
							<?php
							$more_link = get_field('more_link');
							?>
							<div class="arrow"><a href="<?php echo $more_link; ?>"> More </a></div>

						</div>

					</div>









					<?php
					/********* Start GOLD IRA COMPANIES EVALUATION **********/
					?>
					<div class="frow" style="order:<?php echo $order2; ?>">
						<h2 style="text-transform: uppercase !important;" class="heading-font"><?php echo $section2_title; ?></h2>

						<div class="cont three">
							<div class="leftone">
								<?php



								$featured_image_url = get_field('ge_right_image_1');

								// Get the title
								$page_title = get_field('ge_right_title1');
								// Get the permalink (URL) of the page
								$page_permalink = get_field('ge_right_title1_link');

								if ($featured_image_url) {
									echo '<a href="' . $page_permalink . '" ' . $openUrls[2] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
								}
								echo '<h3><a href="' . esc_url($page_permalink) . '" ' . $openUrls[2] . '>' . esc_html($page_title) . '</a></h3>';
								?>
							</div>
							<div class="middle">

								<?php



								$featured_image_url = get_field('ge_right_image_2');

								// Get the title
								$page_title = get_field('ge_right_title2');
								// Get the permalink (URL) of the page
								$page_permalink = get_field('ge_right_title2_link');

								if ($featured_image_url) {
									echo '<a href="' . $page_permalink . '" ' . $openUrls[2] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
								}
								echo '<h3><a href="' . esc_url($page_permalink) . '" ' . $openUrls[2] . '>' . esc_html($page_title) . '</a></h3>';
								?>

							</div>
							<div class="rightfour">


								<?php



								$featured_image_url = get_field('ge_right_image_3');

								// Get the title
								$page_title = get_field('ge_right_title3');
								// Get the permalink (URL) of the page
								$page_permalink = get_field('ge_right_title3_link');

								if ($featured_image_url) {
									echo '<a href="' . $page_permalink . '" ' . $openUrls[2] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
								}
								echo '<h3><a href="' . esc_url($page_permalink) . '" ' . $openUrls[2] . '>' . esc_html($page_title) . '</a></h3>';
								?>

							</div>


							<?php
							$more_link = get_field('morege');
							?>
							<div class="arrow"><a href="<?php echo $more_link; ?>"> More<i class="fa-solid fa-chevron-right" style="display:none;"></i></a></div>


						</div>

					</div>


					<?php
					/********* End of GOLD IRA COMPANIES EVALUATION **********/
					?>








					<?php
					/***********************/
					?>
					<div class="frow" style="order:<?php echo $order3; ?>">
						<h2 class="review heading-font"><?php echo $section3_title; ?></h2>



						<div class="cont ln">
							<div class="leftone">
								<?php



								$featured_image_url = get_field('g_left_big_image');

								// Get the title
								$page_title = get_field('g_left_big_title');
								// Get the permalink (URL) of the page
								$page_permalink = get_field('g_left_big_title_link');

								if ($featured_image_url) {
									echo '<a href="' . $page_permalink . '" ' . $openUrls[3] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
								}
								echo '<h3><a href="' . esc_url($page_permalink) . '"' . $openUrls[3] . '>' . esc_html($page_title) . '</a></h3>';
								?>
							</div>

							<div class="rightfour">

								<div class="toprow">
									<div class="left">
										<?php


										$featured_image_url = get_field('g_right_image_1');

										// Get the title
										$page_title = get_field('g_right_title1');



										$page_permalink = get_field('g_right_title1_link');

										// Check if the featured image exists
										if ($featured_image_url) {
											echo '<a href="' . $page_permalink . '" ' . $openUrls[3] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
										}

										// Display the title with a link to the page
										echo '<h3><a href="' . esc_url($page_permalink) . '" ' . $openUrls[3] . '>' . esc_html($page_title) . '</a></h3>';
										?>
									</div>
									<div class="right">
										<?php


										$featured_image_url = get_field('g_right_image_2');

										// Get the title
										$page_title = get_field('g_right_title2');

										// Get the permalink (URL) of the page
										$page_permalink = get_field('g_right_title2_link');

										// Check if the featured image exists
										if ($featured_image_url) {
											echo '<a href="' . $page_permalink . '" ' . $openUrls[3] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
										}

										// Display the title with a link to the page
										echo '<h3><a href="' . esc_url($page_permalink) . '" ' . $openUrls[3] . '>' . esc_html($page_title) . '</a></h3>';
										?>

									</div>





								</div>

								<div class="bottomrow">

									<div class="left">
										<?php


										$featured_image_url = get_field('g_right_image_3');

										// Get the title
										$page_title = get_field('g_right_title3');

										$page_permalink = get_field('g_right_title3_link');

										// Check if the featured image exists
										if ($featured_image_url) {
											echo '<a href="' . $page_permalink . '" ' . $openUrls[3] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
										}

										// Display the title with a link to the page
										echo '<h3><a href="' . esc_url($page_permalink) . '" ' . $openUrls[3] . '>' . esc_html($page_title) . '</a></h3>';
										?>
									</div>
									<div class="right">
										<?php



										$featured_image_url = get_field('g_right_image_4');

										// Get the title
										$page_title = get_field('g_right_title4');


										$page_permalink = get_field('g_right_title4_link');

										// Check if the featured image exists
										if ($featured_image_url) {
											echo '<a href="' . $page_permalink . '"' . $openUrls[3] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
										}

										// Display the title with a link to the page
										echo '<h3><a href="' . esc_url($page_permalink) . '" ' . $openUrls[3] . '>' . esc_html($page_title) . '</a></h3>';
										?>
									</div>

								</div>

							</div>
							<?php
							$more_link = get_field('morehh');
							?>
							<div class="arrow"><a href="<?php echo $more_link; ?>"> More </a></div>

						</div>
					</div>

					<?php
					/************************/
					?>



					<?php
					/********* Start Gold IRA Information - Editors Pick **********/
					?>

					<style>
						.cont.three img {}

						.middle h2 {
							font-size: 16px;
						}

						.cont.three img {
							max-width: 80% !important;
							display: block;
							margin-left: auto !important;
							margin-right: auto !important;
						}
					</style>
					<div class="frow" style="order:<?php echo $order4; ?>">
						<h2 style="text-transform: uppercase !important;" class="heading-font"><?php echo $section4_title; ?></h2>

						<div class="cont three">
							<div class="leftone">
								<?php



								$featured_image_url = get_field('e_right_image_1');

								// Get the title
								$page_title = get_field('e_right_title1');
								// Get the permalink (URL) of the page
								$page_permalink = get_field('e_right_title1_link');

								if ($featured_image_url) {
									echo '<a href="' . $page_permalink . '" ' . $openUrls[4] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
								}
								echo '<h3  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[4] . '>' . esc_html($page_title) . '</a></h3>';
								?>
							</div>
							<div class="middle">

								<?php



								$featured_image_url = get_field('e_right_image_2');

								// Get the title
								$page_title = get_field('e_right_title2');
								// Get the permalink (URL) of the page
								$page_permalink = get_field('e_right_title2_link');

								if ($featured_image_url) {
									echo '<a href="' . $page_permalink . '" ' . $openUrls[4] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
								}
								echo '<h3  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[4] . '>' . esc_html($page_title) . '</a></h3>';
								?>

							</div>
							<div class="rightfour">


								<?php



								$featured_image_url = get_field('e_right_image_3');

								// Get the title
								$page_title = get_field('e_right_title3');
								// Get the permalink (URL) of the page
								$page_permalink = get_field('e_right_title3_link');

								if ($featured_image_url) {
									echo '<a href="' . $page_permalink . '"' . $openUrls[4] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
								}
								echo '<h3  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[4] . '>' . esc_html($page_title) . '</a></h3>';
								?>

							</div>


							<?php
							$more_link = get_field('moregg');
							?>
							<div class="arrow"><a href="<?php echo $more_link; ?>"> More<i class="fa-solid fa-chevron-right" style="display:none;"></i></a></div>


						</div>

					</div>


					<?php
					/********* End of Gold IRA Information - Editors Pick **********/
					?>



					<?php
					/********* Start Gold IRA COMPANIES BULLETIN : Mission **********/
					?>
					<style>
						.bulletincon {
							border-radius: 0.75rem;
							background: #4759b2;
							padding: 30px;
							color: white;
							font-size: 16px;
						}
					</style>
					<div class="frow" style="order:<?php echo $order5; ?>">
						<h2 style="text-transform: uppercase !important;"><?php echo $section5_title; ?></h2>

						<div class="cont bulletin">

							<div class="bulletincon">
								<?php



								$bulletin = get_field('enter_bulletin');

								echo '<p  class="leftoneh"> ' . $bulletin . '</a></p>';
								?>
							</div>

						</div>

					</div>


					<?php
					/********* End of Gold IRA COMPANIES BULLETIN : Mission **********/
					?>














					<?php
					/********* Start 	Gold Investing Information -Editor's pick **********/
					?>
					<div class="frow" style="order:<?php echo $order6; ?>">
						<h2 style="text-transform: uppercase !important;"><?php echo $section6_title; ?></h2>

						<div class="cont three">
							<div class="leftone">
								<?php



								$featured_image_url = get_field('f_right_image_1');

								// Get the title
								$page_title = get_field('f_right_title1');
								// Get the permalink (URL) of the page
								$page_permalink = get_field('f_right_title1_link');

								if ($featured_image_url) {
									echo '<a href="' . $page_permalink . '" ' . $openUrls[6] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
								}
								echo '<h3  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[6] . '>' . esc_html($page_title) . '</a></h3>';
								?>
							</div>
							<div class="middle">

								<?php



								$featured_image_url = get_field('f_right_image_2');

								// Get the title
								$page_title = get_field('f_right_title2');
								// Get the permalink (URL) of the page
								$page_permalink = get_field('f_right_title2_link');

								if ($featured_image_url) {
									echo '<a href="' . $page_permalink . '" ' . $openUrls[6] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
								}
								echo '<h3  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[6] . ' >' . esc_html($page_title) . '</a></h3>';
								?>

							</div>
							<div class="rightfour">


								<?php



								$featured_image_url = get_field('f_right_image_3');

								// Get the title
								$page_title = get_field('f_right_title3');
								// Get the permalink (URL) of the page
								$page_permalink = get_field('f_right_title3_link');

								if ($featured_image_url) {
									echo '<a href="' . $page_permalink . '" ' . $openUrls[6] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
								}
								echo '<h3  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[6] . ' >' . esc_html($page_title) . '</a></h3>';
								?>

							</div>


							<?php
							$more_link = get_field('f_more_link');
							?>
							<div class="arrow"><a href="<?php echo $more_link; ?>"> More<i class="fa-solid fa-chevron-right" style="display:none;"></i></a></div>


						</div>
					</div>



					<?php
					/********* End of 	Gold Investing Information -Editor's pick **********/
					?>



					<?php
					/********* #6 Latest Gold News **********/
					?>

					<div class="frow" style="order:<?php echo $order7; ?>">

						<h2 style="text-transform: uppercase !important;"> <?php echo $section7_title; ?> </h2>

						<div class="cont">

							<div class="goldnews">
								<rssapp-wall id="tNh5ILadAW5TE6NM"></rssapp-wall>
								<script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
							</div>

						</div>

					</div>


					<?php
					/********* End of Latest Gold News  **********/
					?>











					<?php
					/********* #7 Start 	Silver Investing Information - Editor's Pick **********/
					?>
					<div class="frow" style="order:<?php echo $order8; ?>">
						<h2 style="text-transform: uppercase !important;"><?php echo $section8_title; ?></h2>

						<div class="cont three">
							<div class="leftone">
								<?php



								$featured_image_url = get_field('s_right_image_1');

								// Get the title
								$page_title = get_field('s_right_title1');
								// Get the permalink (URL) of the page
								$page_permalink = get_field('s_right_title1_link');

								if ($featured_image_url) {
									echo '<a href="' . $page_permalink . '" ' . $openUrls[8] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
								}
								echo '<h3  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[8] . ' >' . esc_html($page_title) . '</a></h3>';
								?>
							</div>
							<div class="middle">

								<?php



								$featured_image_url = get_field('s_right_image_2');

								// Get the title
								$page_title = get_field('s_right_title2');
								// Get the permalink (URL) of the page
								$page_permalink = get_field('s_right_title2_link');

								if ($featured_image_url) {
									echo '<a href="' . $page_permalink . '"' . $openUrls[8] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
								}
								echo '<h3  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[8] . ' >' . esc_html($page_title) . '</a></h3>';
								?>

							</div>
							<div class="rightfour">


								<?php



								$featured_image_url = get_field('s_right_image_3');

								// Get the title
								$page_title = get_field('s_right_title3');
								// Get the permalink (URL) of the page
								$page_permalink = get_field('s_right_title3_link');

								if ($featured_image_url) {
									echo '<a href="' . $page_permalink . '" ' . $openUrls[8] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
								}
								echo '<h3  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[8] . ' >' . esc_html($page_title) . '</a></h3>';
								?>

							</div>


							<?php
							$more_link = get_field('moress');
							?>
							<div class="arrow"><a href="<?php echo $more_link; ?>"> More<i class="fa-solid fa-chevron-right" style="display:none;"></i></a></div>


						</div>

					</div>


					<?php
					/********* End of 	Silver Investing Information - Editor's Pick**********/
					?>


					<?php
					/********* #8 Latest Silver News **********/
					?>
					<div class="frow" style="order:<?php echo $order9; ?>">
						<h2 style="text-transform: uppercase !important;"> <?php echo $section9_title; ?></h2>

						<div class="cont">

							<div class="goldnews">
								<rssapp-wall id="t6u7BSvtgCysrvjq"></rssapp-wall>
								<script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
							</div>

						</div>

					</div>


					<?php
					/********* End of Latest Silver News  **********/
					?>





					<?php
					/********* #9 Retirement Information - Editor's Pick**********/
					?>
					<div class="frow" style="order:<?php echo $order10; ?>">
						<h2 style="text-transform: uppercase !important;"><?php echo $section10_title; ?></h2>

						<div class="cont three">
							<div class="leftone">
								<?php



								$featured_image_url = get_field('r_right_image_1');

								// Get the title
								$page_title = get_field('r_right_title1');
								// Get the permalink (URL) of the page
								$page_permalink = get_field('r_right_title1_link');

								if ($featured_image_url) {
									echo '<a href="' . $page_permalink . '" ' . $openUrls[10] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
								}
								echo '<h3  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[10] . ' >' . esc_html($page_title) . '</a></h3>';
								?>
							</div>
							<div class="middle">

								<?php



								$featured_image_url = get_field('r_right_image_2');

								// Get the title
								$page_title = get_field('r_right_title2');
								// Get the permalink (URL) of the page
								$page_permalink = get_field('r_right_title2_link');

								if ($featured_image_url) {
									echo '<a href="' . $page_permalink . '" ' . $openUrls[10] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
								}
								echo '<h3  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[10] . ' >' . esc_html($page_title) . '</a></h3>';
								?>

							</div>
							<div class="rightfour">


								<?php



								$featured_image_url = get_field('r_right_image_3');

								// Get the title
								$page_title = get_field('r_right_title3');
								// Get the permalink (URL) of the page
								$page_permalink = get_field('r_right_title3_link');

								if ($featured_image_url) {
									echo '<a href="' . $page_permalink . '" ' . $openUrls[10] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
								}
								echo '<h3  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[10] . ' >' . esc_html($page_title) . '</a></h3>';
								?>

							</div>


							<?php
							$more_link = get_field('morerr');
							?>
							<div class="arrow"><a href="<?php echo $more_link; ?>"> More<i class="fa-solid fa-chevron-right" style="display:none;"></i></a></div>


						</div>

					</div>


					<?php
					/********* End of 	Retirement Information - Editor's Pick **********/
					?>









					<?php
					/********* #10 Start of Latest Retirement Bulletins **********/
					?>
					<div class="frow" style="order:<?php echo $order11; ?>">
						<h2 style="text-transform: uppercase !important;"><?php echo $section11_title; ?></h2>

						<div class="cont ln">
							<style>
								.cont.ln .rightfour h3 a {
									height: 80px;
								}
							</style>
							<div class="leftone">
								<?php



								$featured_image_url = get_field('rb_left_big_image');

								// Get the title
								$page_title = get_field('rb_left_big_title');
								// Get the permalink (URL) of the page
								$page_permalink = get_field('rb_left_big_title_link');

								if ($featured_image_url) {
									echo '<a href="' . $page_permalink . '" ' . $openUrls[11] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
								}
								echo '<h3  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[11] . ' >' . esc_html($page_title) . '</a></h3>';
								?>
							</div>

							<div class="rightfour">

								<div class="toprow">
									<div class="left">
										<?php


										$featured_image_url = get_field('rb_right_image_1');

										// Get the title
										$page_title = get_field('rb_right_title1');



										$page_permalink = get_field('rb_right_title1_link');

										// Check if the featured image exists
										if ($featured_image_url) {
											echo '<a href="' . $page_permalink . '" ' . $openUrls[11] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
										}

										// Display the title with a link to the page
										echo '<h3><a href="' . esc_url($page_permalink) . '" ' . $openUrls[11] . ' >' . esc_html($page_title) . '</a></h3>';
										?>
									</div>
									<div class="right">
										<?php


										$featured_image_url = get_field('rb_right_image_2');

										// Get the title
										$page_title = get_field('rb_right_title2');

										// Get the permalink (URL) of the page
										$page_permalink = get_field('rb_right_title2_link');

										// Check if the featured image exists
										if ($featured_image_url) {
											echo '<a href="' . $page_permalink . '" ' . $openUrls[11] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
										}

										// Display the title with a link to the page
										echo '<h3><a href="' . esc_url($page_permalink) . '" ' . $openUrls[11] . ' >' . esc_html($page_title) . '</a></h3>';
										?>

									</div>





								</div>

								<div class="bottomrow">

									<div class="left">
										<?php


										$featured_image_url = get_field('rb_right_image_3');

										// Get the title
										$page_title = get_field('rb_right_title3');

										$page_permalink = get_field('rb_right_title3_link');

										// Check if the featured image exists
										if ($featured_image_url) {
											echo '<a href="' . $page_permalink . '" ' . $openUrls[11] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
										}

										// Display the title with a link to the page
										echo '<h3><a href="' . esc_url($page_permalink) . '" ' . $openUrls[11] . ' >' . esc_html($page_title) . '</a></h3>';
										?>
									</div>
									<div class="right">
										<?php



										$featured_image_url = get_field('rb_right_image_4');

										// Get the title
										$page_title = get_field('rb_right_title4');


										$page_permalink = get_field('rb_right_title4_link');

										// Check if the featured image exists
										if ($featured_image_url) {
											echo '<a href="' . $page_permalink . '" ' . $openUrls[11] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
										}

										// Display the title with a link to the page
										echo '<h3><a href="' . esc_url($page_permalink) . '" ' . $openUrls[11] . ' >' . esc_html($page_title) . '</a></h3>';
										?>
									</div>

								</div>

							</div>


							<?php
							$more_link = get_field('morerb');
							?>
							<div class="arrow"><a href="<?php echo $more_link; ?>"> More<i class="fa-solid fa-chevron-right" style="display:none;"></i></a></div>


						</div>
					</div>
					<?php
					/*********#10 End of Latest Retirement Bulletins **********/
					?>





					<?php
					/********* #11 Latest Retirement Planning News **********/
					?>
					<div class="frow" style="order:<?php echo $order12; ?>">
						<h2 style="text-transform: uppercase !important;"> <?php echo $section12_title; ?> </h2>

						<div class="cont">

							<div class="goldnews">
								<rssapp-wall id="tyQjY8W1meIGeWv8"></rssapp-wall>
								<script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
							</div>

						</div>
					</div>



					<?php
					/********* End of Latest Retirement Planning News  **********/
					?>




					<?php
					/********* #12 Start of Latest Economic / Financial Bulletins **********/
					?>
					<div class="frow" style="order:<?php echo $order13; ?>">
						<h2 style="text-transform: uppercase !important;"><?php echo $section13_title; ?></h2>

						<div class="cont ln">

							<div class="leftone">
								<?php



								$featured_image_url = get_field('ef_left_big_image');

								// Get the title
								$page_title = get_field('ef_left_big_title');
								// Get the permalink (URL) of the page
								$page_permalink = get_field('ef_left_big_title_link');

								if ($featured_image_url) {
									echo '<a href="' . $page_permalink . '" ' . $openUrls[13] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
								}
								echo '<h3  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[13] . '>' . esc_html($page_title) . '</a></h3>';
								?>
							</div>

							<div class="rightfour">

								<div class="toprow">
									<div class="left">
										<?php


										$featured_image_url = get_field('ef_right_image_1');

										// Get the title
										$page_title = get_field('ef_right_title1');



										$page_permalink = get_field('ef_right_title1_link');

										// Check if the featured image exists
										if ($featured_image_url) {
											echo '<a href="' . $page_permalink . '" ' . $openUrls[13] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
										}

										// Display the title with a link to the page
										echo '<h3><a href="' . esc_url($page_permalink) . '" ' . $openUrls[13] . ' >' . esc_html($page_title) . '</a></h3>';
										?>
									</div>
									<div class="right">
										<?php


										$featured_image_url = get_field('ef_right_image_2');

										// Get the title
										$page_title = get_field('ef_right_title2');

										// Get the permalink (URL) of the page
										$page_permalink = get_field('ef_right_title2_link');

										// Check if the featured image exists
										if ($featured_image_url) {
											echo '<a href="' . $page_permalink . '" ' . $openUrls[13] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
										}

										// Display the title with a link to the page
										echo '<h3><a href="' . esc_url($page_permalink) . '" ' . $openUrls[13] . ' >' . esc_html($page_title) . '</a></h3>';
										?>

									</div>





								</div>

								<div class="bottomrow">

									<div class="left">
										<?php


										$featured_image_url = get_field('ef_right_image_3');

										// Get the title
										$page_title = get_field('ef_right_title3');

										$page_permalink = get_field('ef_right_title3_link');

										// Check if the featured image exists
										if ($featured_image_url) {
											echo '<a href="' . $page_permalink . '" ' . $openUrls[13] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
										}

										// Display the title with a link to the page
										echo '<h3><a href="' . esc_url($page_permalink) . '" ' . $openUrls[13] . ' >' . esc_html($page_title) . '</a></h3>';
										?>
									</div>
									<div class="right">
										<?php



										$featured_image_url = get_field('ef_right_image_4');

										// Get the title
										$page_title = get_field('ef_right_title4');


										$page_permalink = get_field('ef_right_title4_link');

										// Check if the featured image exists
										if ($featured_image_url) {
											echo '<a href="' . $page_permalink . '" ' . $openUrls[13] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
										}

										// Display the title with a link to the page
										echo '<h3><a href="' . esc_url($page_permalink) . '" ' . $openUrls[13] . ' >' . esc_html($page_title) . '</a></h3>';
										?>
									</div>

								</div>

							</div>


							<?php
							$more_link = get_field('moreef');
							?>
							<div class="arrow"><a href="<?php echo $more_link; ?>"> More<i class="fa-solid fa-chevron-right" style="display:none;"></i></a></div>


						</div>
					</div>
					<?php
					/*********#12 End of Latest Retirement Bulletins **********/
					?>


					<?php
					/********* #13 Latest World Financial News **********/
					?>
					<div class="frow" style="order:<?php echo $order14; ?>">
						<h2 style="text-transform: uppercase !important;"> <?php echo $section14_title; ?> </h2>

						<div class="cont">

							<div class="goldnews">
								<rssapp-wall id="tH21wEaii5UVnEm7"></rssapp-wall>
								<script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
							</div>

						</div>
					</div>



					<?php
					/********* End of Latest World Financial News  **********/
					?>




				</div>



			</div>
		</div>
	<?php } ?>






	<?php
    ?>
		
    <div class="social-icons-follow bz mobile">
		
		<div class="follow" style="
    position: relative;
    top: 19px;
">As seen on :</div>		
  <div class="social-icons__icons">
	  <?php
	  if(is_page(16338) ){?>
	  
     
  <a class="slink" href="https://markets.businessinsider.com/news/stocks/gold-ira-retirement-investing-2024-goldco-augusta-comparison-guide-launched-1033143000">
	<img src="https://goldiracompaniescompared.com/wp-content/uploads/2024/05/business-insider-logo.png" alt="augusta precious metals reviews">
  </a>
  <a class="slink" href="https://www.benzinga.com/pressreleases/24/03/37602969/gold-ira-retirement-investing-2024-goldco-augusta-comparison-guide-launched">
  <img src="https://goldiracompaniescompared.com/wp-content/uploads/2024/05/bz-logo-star-wars-day.gif" style="position: relative;top: -9px;"  alt="augusta precious metals reviews">
  </a>
 
 
  <a class="slink" href="https://www.theglobeandmail.com/investing/markets/markets-news/Plentisoft/25463710/2024-top-gold-ira-companies-for-first-time-investors-retirement-guide-launched/">
   <img src="https://goldiracompaniescompared.com/wp-content/uploads/2024/05/the-globe-and-mail-coupons-1.png" style="max-width: 180px;position: relative;top: -3px;"  alt="augusta precious metals reviews">
  </a>
 
  <a class="slink" href="https://www.barchart.com/story/news/25463707/2024-top-gold-ira-companies-for-first-time-investors-retirement-guide-launched">
<img src="https://goldiracompaniescompared.com/wp-content/uploads/2024/05/barchart-logo.png" style="position: relative;top: -3px;"  alt="augusta precious metals reviews">
  </a>
 
  <a class="slink" href="https://medium.com/@jim.garner78/why-you-need-precious-metals-as-part-of-a-diversified-investment-portfolio-902086c5a370">
   <img src="https://goldiracompaniescompared.com/wp-content/uploads/2024/05/medium-1.png" style="width: 125px;max-width: 125px;"  alt="augusta precious metals reviews"></a><a class="slink" href="https://apnews.com/press-release/marketersmedia/houston-augusta-c4d7184e991ac0779da2d31f0828e6f2">
   <img src="https://goldiracompaniescompared.com/wp-content/uploads/2024/05/aplogo.jpg"  alt="augusta precious metals reviews">
  </a>
 
	  
	  
	  
   <?php } else{?>
	  
	  
	  
	    <a class="slink" href="https://markets.businessinsider.com/news/stocks/gold-ira-retirement-investing-2024-goldco-augusta-comparison-guide-launched-1033143000">
	<img src="https://goldiracompaniescompared.com/wp-content/uploads/2024/05/business-insider-logo.png">
  </a>
  <a class="slink" href="https://www.benzinga.com/pressreleases/24/03/37602969/gold-ira-retirement-investing-2024-goldco-augusta-comparison-guide-launched">
  <img src="https://goldiracompaniescompared.com/wp-content/uploads/2024/05/bz-logo-star-wars-day.gif" style="position: relative;top: -9px;">
  </a>
 
 
  <a class="slink" href="https://www.theglobeandmail.com/investing/markets/markets-news/Plentisoft/25463710/2024-top-gold-ira-companies-for-first-time-investors-retirement-guide-launched/">
   <img src="https://goldiracompaniescompared.com/wp-content/uploads/2024/05/the-globe-and-mail-coupons-1.png" style="max-width: 180px;position: relative;top: -3px;">
  </a>
 
  <a class="slink" href="https://www.barchart.com/story/news/25463707/2024-top-gold-ira-companies-for-first-time-investors-retirement-guide-launched">
<img src="https://goldiracompaniescompared.com/wp-content/uploads/2024/05/barchart-logo.png" style="position: relative;top: -3px;">
  </a>
 
  <a class="slink" href="https://medium.com/@jim.garner78/why-you-need-precious-metals-as-part-of-a-diversified-investment-portfolio-902086c5a370">
   <img src="https://goldiracompaniescompared.com/wp-content/uploads/2024/05/medium-1.png" style="width: 125px;max-width: 125px;"></a><a class="slink" href="https://apnews.com/press-release/marketersmedia/houston-augusta-c4d7184e991ac0779da2d31f0828e6f2">
   <img src="https://goldiracompaniescompared.com/wp-content/uploads/2024/05/aplogo.jpg">
  </a>
	  
	  
	 <?php }?> 

 
 
</div>
</div>

      <div class="social-icons-follow  mobile">

        <div class="follow">Follow Us:</div>
        <div class="social-icons__icons">

          <a class="slink" href="https://www.facebook.com/goldiracompaniesbulletin">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style=" fill: #1877f2 !important;  width: 33px; top: 7px;  position: relative; "><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"></path>
            </svg> <span>Facebook</span>
          </a>
          <a class="slink" href="https://twitter.com/goldbulletin_">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="top: 7px;width: 33px;position: relative;"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path>
            </svg><span>x (Twitter)</span>
          </a>


          <a class="slink" href="https://www.instagram.com/goldiracompaniesbulletin">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style=" width: 29px; top: 7px; position: relative; fill: #C3861E;   margin-right: 4px; "><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
            </svg><span>Instagram</span>
          </a>

          <a class="slink" href="https://www.linkedin.com/company/goldiracompaniesbulletin">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="fill: #0a66c2 !IMPORTANT;width: 28px;position: relative;top: 7px;margin-right: 4px;"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"></path>
            </svg><span>LinkedIn</span>
          </a>

          <a class="slink" href="https://www.pinterest.com/goldiracompaniesbulletin/">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" style="top: 7px; fill: #e60023 !important; width: 33px; position: relative; margin-right: 4px; "><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3 .8-3.4 5-20.3 6.9-28.1 .6-2.5 .3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z"></path>
            </svg><span>Pinterest</span>
          </a>

 
        </div>
      </div>












<?php } else { ?>



	<?php
	$options = get_option('goldira_settings_page_settings');
    $blogWidth = $options['goldira_blog_width'] ?? '16';


	$fwpagewidth = $blogWidth  - 5;
	$fwcontentwidth = $blogWidth  - 10;
 
	?>


	<style>
		.postwrap p:empty,
		.postwrap h2:empty {
			display: none;
		}

		.wp-caption {
			border: 1px solid #ddd;
			text-align: center;
			background-color: #f3f3f3;
			padding-top: 4px;
			margin: 10px;
			-moz-border-radius: 3px;
			-khtml-border-radius: 3px;
			-webkit-border-radius: 3px;
		}

		.posthead h1,
		.posthead h2 {
			margin: 0px;
			text-align: left;
			padding: 15px 8px 15px 15px;
			background-color: #FFFFFF;
			font: bold 50px Lucida Grande;
			border-bottom: solid 0px #EEEEEE;
		}

		.postcontent h2 {
			font-family: Verdana, Helvetica, sans-serif;
			font-weight: bold;
			line-height: 27px;
		}

		.wp-caption p.wp-caption-text {

			font-size: 14px;
			color: black !IMPORTANT;
			font-weight: bold;
		}

		.bulletincon p.leftoneh {
			margin: 0px;
		}

		.dimg {
			display: flex;
		}

		.dimg .img {
			padding-right: 30px;
		}

		.dimg .img {

			padding-top: 14px;
		}

		.dimg .img img {
			margin-top: 0px !IMPORTANT;
			top: 0px;
			position: relative;
			width: 120px;
			margin-bottom: 10px;
		}

		.dcn {
			vertical-align: middle;
			padding-top: 14px;
		}

		.postcontent h2 {
			font-size: 25px;

		}

		.leftone h2,
		.leftone h2 a {
			font-size: 16px;
		}

		.cont .leftone {
			width: 49%;
			float: left;
			margin-right: 2%;
		}

		.cont .rightfour {
			width: 49%;
			float: left;
			clear: none !important;
		}

		.cont {
			display: inline-block;
			position: relative;
			width: 100% !important;
		}

		.cont .rightfour img,
		.cont .leftone img {
			max-width: 100% !important;
		}

		.toprow .left,
		.toprow .right {
			width: 48% !important;
			float: left !important;
			clear: none !important;
		}

		.toprow .left {
			margin-right: 2% !important;
		}

		.bottomrow .left,
		.bottomrow .right {
			width: 48% !important;
			float: left !important;
			clear: none !important;
		}

		.bottomrow .left {
			margin-right: 2% !important;
		}

		.rightfour h2 {
			font-size: 16px;
		}

		.rightfour img {
			max-height: 150px !important;
			width: 100% !important;

		}

		.cont h2,
		.cont h2 a {
			text-transform: normal !important;
			text-align: center !important;
			font-weight: normal;
		}

		.cont a {
			display: -webkit-box;
			overflow: hidden;
			-webkit-line-clamp: 3;
			-webkit-box-orient: vertical;
		}

		.post .cont h2,
		.post .cont h2 a {
			color: #00003c !important;
		}

		.post .cont h2:hover,
		.post .cont h2 a:hover {
			color: #448700 !important;
		}

		.divflex {
			display: flex;
			flex-direction: column;
		}
	</style>
	<style>
		.social-icons a {
			text-decoration: none;
			color: orange;
			margin-right: 12px;
			padding: 0px;
			font-size: 27px;
		}

		.social-icons-follow {
			display: flex;
			justify-content: center;
			margin-bottom: 15px;
		}

		.follow {
			position: relative;
			top: 10px;
			left: -8px;
			font-weight: bold;
			font-size: 17px;
		}

		/*
		  i.fab.fa-facebook {
    color: #1877f2 !important;
}
		  i.fa-brands.fa-x-twitter {
    color: black;
}
		  i.fab.fa-linkedin-in {
    color: #0a66c2;
}
		  i.fab.fa-pinterest {
    color: #e60023;
}
		    i.fab.fa-instagram {
    color: #c38615 !IMPORTANT;
}
		  */
		.social-icons__icons i {
			font-size: 33px;
			margin-right: 4px;
			position: relative;
			top: 3px;
		}

		.social-icons__icons a {
			margin-right: 12px;
		}

		.social-icons__icons span {
			color: black !important;
			font-size: 18px;
			position: relative;
			top: -1px
		}

		.social-icons__icons a {
			text-decoration: none !important;
		}

		.social-icons__icons img {
			max-width: 90px;
			max-height: 50px;
		}
	</style>


	<?php
	$section1_title = get_option('homepage_title_1');
	$section2_title = get_option('homepage_title_2');
	$section3_title = get_option('homepage_title_3');
	$section4_title = get_option('homepage_title_4');
	$section5_title = get_option('homepage_title_5');
	$section6_title = get_option('homepage_title_6');
	$section7_title = get_option('homepage_title_7');
	$section8_title = get_option('homepage_title_8');
	$section9_title = get_option('homepage_title_9');
	$section10_title = get_option('homepage_title_10');
	$section11_title = get_option('homepage_title_11');
	$section12_title = get_option('homepage_title_12');
	$section13_title = get_option('homepage_title_13');
	$section14_title = get_option('homepage_title_14');



	$order1 = get_option('homepage_order_1');
	$order2 = get_option('homepage_order_2');
	$order3 = get_option('homepage_order_3');
	$order4 = get_option('homepage_order_4');
	$order5 = get_option('homepage_order_5');
	$order6 = get_option('homepage_order_6');
	$order7 = get_option('homepage_order_7');
	$order8 = get_option('homepage_order_8');
	$order9 = get_option('homepage_order_9');
	$order10 = get_option('homepage_order_10');
	$order11 = get_option('homepage_order_11');
	$order12 = get_option('homepage_order_12');
	$order13 = get_option('homepage_order_13');
	$order14 = get_option('homepage_order_14');

	/*
$hlink1 = get_option('homepage_link_1');
$hlink2 = get_option('homepage_link_2');
$hlink3 = get_option('homepage_link_3');
$hlink4 = get_option('homepage_link_4');
$hlink5 = get_option('homepage_link_5');
$hlink6 = get_option('homepage_link_6');
$hlink7 = get_option('homepage_link_7');
$hlink8 = get_option('homepage_link_8');
$hlink9 = get_option('homepage_link_9');
$hlink10 = get_option('homepage_link_10');
$hlink11 = get_option('homepage_link_11');
$hlink12 = get_option('homepage_link_12');
$hlink13 = get_option('homepage_link_13');
$hlink14 = get_option('homepage_link_14');
*/

	$openUrls = [];

	for ($i = 1; $i <= 14; $i++) {
		$hlink = get_option('homepage_link_' . $i);
		$openUrls[$i] = ($hlink === "Same") ? '' : 'target="_blank"';
	}
	// echo "dd".$openUrls[2];


	?>




	<div id="content" style="width:<?php echo $fwpagewidth; ?>px;">

		<div class="postwrap" style="width:<?php echo $fwcontentwidth; ?>px;">




			<div class="social-icons-follow" style="margin-bottom: 23px;margin-top: 23px;">

				<div class="follow" style="
    position: relative;
    top: 19px;
">As seen on :</div>
				<div class="social-icons__icons">

					<a class="slink" href="https://markets.businessinsider.com/news/stocks/gold-ira-retirement-investing-2024-goldco-augusta-comparison-guide-launched-1033143000">
						<img src="https://goldiracompaniescompared.com/wp-content/uploads/2024/05/business-insider-logo.png" alt="Gold IRA Companies Bulletin">
					</a>
					<a class="slink" href="https://www.benzinga.com/pressreleases/24/03/37602969/gold-ira-retirement-investing-2024-goldco-augusta-comparison-guide-launched">
						<img src="https://goldiracompaniescompared.com/wp-content/uploads/2024/05/bz-logo-star-wars-day.gif" style="position: relative;top: -9px;" alt="Gold IRA Companies Bulletin">
					</a>


					<a class="slink" href="https://www.theglobeandmail.com/investing/markets/markets-news/Plentisoft/25463710/2024-top-gold-ira-companies-for-first-time-investors-retirement-guide-launched/">
						<img src="https://goldiracompaniescompared.com/wp-content/uploads/2024/05/the-globe-and-mail-coupons-1.png" style="max-width: 180px;position: relative;top: -5px;" alt="Gold IRA Companies Bulletin">
					</a>

					<a class="slink" href="https://www.barchart.com/story/news/25463707/2024-top-gold-ira-companies-for-first-time-investors-retirement-guide-launched">
						<img src="https://goldiracompaniescompared.com/wp-content/uploads/2024/05/barchart-logo.png" style="position: relative;top: -3px;" alt="Gold IRA Companies Bulletin">
					</a>

					<a class="slink" href="https://medium.com/@jim.garner78/why-you-need-precious-metals-as-part-of-a-diversified-investment-portfolio-902086c5a370">
						<img src="https://goldiracompaniescompared.com/wp-content/uploads/2024/05/medium-1.png" style="width: 125px;max-width: 125px;" alt="Gold IRA Companies Bulletin"></a><a class="slink" href="https://apnews.com/press-release/marketersmedia/houston-augusta-c4d7184e991ac0779da2d31f0828e6f2">
						<img src="https://goldiracompaniescompared.com/wp-content/uploads/2024/05/aplogo.jpg" alt="Gold IRA Companies Bulletin">
					</a>





				</div>
			</div>










			<div class="post">
				<div class="postcontent">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<div class="posthead">
								<h1><?php the_title(); ?></h1>
							</div>
							<div class="divflex">



								<div class="frow" style="order:<?php echo $order1; ?>">

									<h2 style="text-transform: uppercase !important;"> <?php echo $section1_title; ?></h2>




									<div class="cont">
										<div class="leftone">
											<?php



											$featured_image_url = get_field('left_big_image');

											// Get the title
											$page_title = get_field('left_big_title');
											// Get the permalink (URL) of the page
											$page_permalink = get_field('left_big_title_link');

											if ($featured_image_url) {
												echo '<a href="' . $page_permalink . '"' .  $openUrls[1] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
											}
											echo '<h2  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' .  $openUrls[1] . ' >' . esc_html($page_title) . '</a></h2>';






											?>
										</div>

										<div class="rightfour">

											<div class="toprow">
												<div class="left">
													<?php


													$featured_image_url = get_field('right_image_1');

													// Get the title
													$page_title = get_field('right_title1');



													$page_permalink = get_field('right_title1_link');

													// Check if the featured image exists
													if ($featured_image_url) {
														echo '<a href="' . $page_permalink . '"  ' . $openUrls[1] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
													}

													// Display the title with a link to the page
													echo '<h2><a href="' . esc_url($page_permalink) . '" ' . $openUrls[1]  . ' >' . esc_html($page_title) . '</a></h2>';
													?>
												</div>
												<div class="right">
													<?php


													$featured_image_url = get_field('right_image_2');

													// Get the title
													$page_title = get_field('right_title2');

													// Get the permalink (URL) of the page
													$page_permalink = get_field('right_title2_link');

													// Check if the featured image exists
													if ($featured_image_url) {
														echo '<a href="' . $page_permalink . '" ' . $openUrls[1] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
													}

													// Display the title with a link to the page
													echo '<h2><a href="' . esc_url($page_permalink) . '" ' . $openUrls[1] . ' >' . esc_html($page_title) . '</a></h2>';
													?>

												</div>





											</div>

											<div class="bottomrow">

												<div class="left">
													<?php


													$featured_image_url = get_field('right_image_3');

													// Get the title
													$page_title = get_field('right_title3');

													$page_permalink = get_field('right_title3_link');

													// Check if the featured image exists
													if ($featured_image_url) {
														echo '<a href="' . $page_permalink . '"  ' . $openUrls[1] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
													}

													// Display the title with a link to the page
													echo '<h2><a href="' . esc_url($page_permalink) . '" ' . $openUrls[1] . '>' . esc_html($page_title) . '</a></h2>';
													?>
												</div>
												<div class="right">
													<?php



													$featured_image_url = get_field('right_image_4');

													// Get the title
													$page_title = get_field('right_title4');


													$page_permalink = get_field('right_title4_link');

													// Check if the featured image exists
													if ($featured_image_url) {
														echo '<a href="' . $page_permalink . '"  ' . $openUrls[1] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
													}

													// Display the title with a link to the page
													echo '<h2><a href="' . esc_url($page_permalink) . '"  ' . $openUrls[1] . ' >' . esc_html($page_title) . '</a></h2>';
													?>
												</div>

											</div>

										</div>

										<style>
											.arrow {
												position: absolute;
												right: -6%;
												height: 100%;
												width: 50px;
												display: flex;
												/* justify-content: center; */
												align-items: center;
											}

											.arrow img {
												height: 100% !important;
												width: 100% !important;
											}

											.arrow a {
												/* text-decoration: none !important;*/
											}

											.arrow i {
												font-size: 100px;
												color: black;
											}
										</style>
										<?php
										$more_link = get_field('more_link');
										?>
										<div class="arrow"><a href="<?php echo $more_link; ?>"> More<i class="fa-solid fa-chevron-right" style="display:none;"></i></a></div>


									</div>

								</div>












								<?php
								/********* Start GOLD IRA COMPANIES EVALUATION **********/
								?>
								<div class="frow" style="order:<?php echo $order2; ?>">

									<h2 style="text-transform: uppercase !important;"><?php echo $section2_title; ?></h2>

									<div class="cont three">
										<div class="leftone">
											<?php



											$featured_image_url = get_field('ge_right_image_1');

											// Get the title
											$page_title = get_field('ge_right_title1');
											// Get the permalink (URL) of the page
											$page_permalink = get_field('ge_right_title1_link');

											if ($featured_image_url) {
												echo '<a href="' . $page_permalink . '"' . $openUrls[2] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
											}
											echo '<h2  class="leftoneh"><a href="' . esc_url($page_permalink) . '"   ' . $openUrls[2] . ' >' . esc_html($page_title) . '</a></h2>';
											?>
										</div>
										<div class="middle">

											<?php



											$featured_image_url = get_field('ge_right_image_2');

											// Get the title
											$page_title = get_field('ge_right_title2');
											// Get the permalink (URL) of the page
											$page_permalink = get_field('ge_right_title2_link');

											if ($featured_image_url) {
												echo '<a href="' . $page_permalink . '" ' . $openUrls[2] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
											}
											echo '<h2  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[2] . '>' . esc_html($page_title) . '</a></h2>';
											?>

										</div>
										<div class="rightfour">


											<?php



											$featured_image_url = get_field('ge_right_image_3');

											// Get the title
											$page_title = get_field('ge_right_title3');
											// Get the permalink (URL) of the page
											$page_permalink = get_field('ge_right_title3_link');

											if ($featured_image_url) {
												echo '<a href="' . $page_permalink . '"   ' . $openUrls[2] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
											}
											echo '<h2  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[2] . ' >' . esc_html($page_title) . '</a></h2>';
											?>

										</div>


										<?php
										$more_link = get_field('morege');
										?>
										<div class="arrow"><a href="<?php echo $more_link; ?>"> More<i class="fa-solid fa-chevron-right" style="display:none;"></i></a></div>


									</div>

								</div>











								<?php
								/********* End of GOLD IRA COMPANIES EVALUATION **********/
								?>


								<?php
								/********* Start of Latest Gold or Silver bulletins **********/
								?>
								<div class="frow" style="order:<?php echo $order3; ?>">

									<h2 style="text-transform: uppercase !important;"><?php echo $section3_title; ?></h2>

									<div class="cont">
										<div class="leftone">
											<?php



											$featured_image_url = get_field('g_left_big_image');

											// Get the title
											$page_title = get_field('g_left_big_title');
											// Get the permalink (URL) of the page
											$page_permalink = get_field('g_left_big_title_link');

											if ($featured_image_url) {
												echo '<a href="' . $page_permalink . '" ' . $openUrls[3] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
											}
											echo '<h2  class="leftoneh"><a href="' . esc_url($page_permalink) . '"   <?php echo $openUrls[3];?> ' . esc_html($page_title) . '</a></h2>';
											?>
										</div>

										<div class="rightfour">

											<div class="toprow">
												<div class="left">
													<?php


													$featured_image_url = get_field('g_right_image_1');

													// Get the title
													$page_title = get_field('g_right_title1');



													$page_permalink = get_field('g_right_title1_link');

													// Check if the featured image exists
													if ($featured_image_url) {
														echo '<a href="' . $page_permalink . '" ' . $openUrls[3] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
													}

													// Display the title with a link to the page
													echo '<h2><a href="' . esc_url($page_permalink) . '"  ' . $openUrls[3] . ' >' . esc_html($page_title) . '</a></h2>';
													?>
												</div>
												<div class="right">
													<?php


													$featured_image_url = get_field('g_right_image_2');

													// Get the title
													$page_title = get_field('g_right_title2');

													// Get the permalink (URL) of the page
													$page_permalink = get_field('g_right_title2_link');

													// Check if the featured image exists
													if ($featured_image_url) {
														echo '<a href="' . $page_permalink . '" ' . $openUrls[3] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
													}

													// Display the title with a link to the page
													echo '<h2><a href="' . esc_url($page_permalink) . '"  ' . $openUrls[3] . ' >' . esc_html($page_title) . '</a></h2>';
													?>

												</div>





											</div>

											<div class="bottomrow">

												<div class="left">
													<?php


													$featured_image_url = get_field('g_right_image_3');

													// Get the title
													$page_title = get_field('g_right_title3');

													$page_permalink = get_field('g_right_title3_link');

													// Check if the featured image exists
													if ($featured_image_url) {
														echo '<a href="' . $page_permalink . '"  ' . $openUrls[3] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
													}

													// Display the title with a link to the page
													echo '<h2><a href="' . esc_url($page_permalink) . '"  ' . $openUrls[3] . ' >' . esc_html($page_title) . '</a></h2>';
													?>
												</div>
												<div class="right">
													<?php



													$featured_image_url = get_field('g_right_image_4');

													// Get the title
													$page_title = get_field('g_right_title4');


													$page_permalink = get_field('g_right_title4_link');

													// Check if the featured image exists
													if ($featured_image_url) {
														echo '<a href="' . $page_permalink . '"  ' . $openUrls[3] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
													}

													// Display the title with a link to the page
													echo '<h2><a href="' . esc_url($page_permalink) . '" ' . $openUrls[3] . ' >' . esc_html($page_title) . '</a></h2>';
													?>
												</div>

											</div>

										</div>


										<?php
										$more_link = get_field('morehh');
										?>
										<div class="arrow"><a href="<?php echo $more_link; ?>"> More<i class="fa-solid fa-chevron-right" style="display:none;"></i></a></div>


									</div>
								</div>



								<?php
								/********* End of Latest Gold or Silver bulletins **********/
								?>



								<?php
								/********* Start Gold IRA Information - Editors Pick **********/
								?>
								<style>
									.cont.three .leftone,
									.cont.three .middle,
									.cont.three .rightfour {
										width: 30%;
										float: left;
									}

									.cont.three .leftone,
									.cont.three .middle {
										width: 30%;
										float: left;
										margin-right: 2%;
									}

									.cont.three {
										display: flex;
										justify-content: center;
									}

									.cont.three img {
										height: 100%;
										width: 100%;
										max-height: 150px;
										object-fit: contain;
									}

									.middle h2 {
										font-size: 16px;
									}
								</style>
								<div class="frow" style="order:<?php echo $order4; ?>">

									<h2 style="text-transform: uppercase !important;"><?php echo $section4_title; ?></h2>

									<div class="cont three">
										<div class="leftone">
											<?php



											$featured_image_url = get_field('e_right_image_1');

											// Get the title
											$page_title = get_field('e_right_title1');
											// Get the permalink (URL) of the page
											$page_permalink = get_field('e_right_title1_link');

											if ($featured_image_url) {
												echo '<a href="' . $page_permalink . '" ' . $openUrls[4] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
											}
											echo '<h2  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[4] . ' >' . esc_html($page_title) . '</a></h2>';
											?>
										</div>
										<div class="middle">

											<?php



											$featured_image_url = get_field('e_right_image_2');

											// Get the title
											$page_title = get_field('e_right_title2');
											// Get the permalink (URL) of the page
											$page_permalink = get_field('e_right_title2_link');

											if ($featured_image_url) {
												echo '<a href="' . $page_permalink . '" ' . $openUrls[4] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
											}
											echo '<h2  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[4] . '> ' . esc_html($page_title) . '</a></h2>';
											?>

										</div>
										<div class="rightfour">


											<?php



											$featured_image_url = get_field('e_right_image_3');

											// Get the title
											$page_title = get_field('e_right_title3');
											// Get the permalink (URL) of the page
											$page_permalink = get_field('e_right_title3_link');

											if ($featured_image_url) {
												echo '<a href="' . $page_permalink . '"  ' . $openUrls[4] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
											}
											echo '<h2  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[4] . ' >' . esc_html($page_title) . '</a></h2>';
											?>

										</div>


										<?php
										$more_link = get_field('moregg');
										?>
										<div class="arrow"><a href="<?php echo $more_link; ?>"> More<i class="fa-solid fa-chevron-right" style="display:none;"></i></a></div>


									</div>

								</div>


								<?php
								/********* End of Gold IRA Information - Editors Pick **********/
								?>









								<?php
								/********* Start Gold IRA COMPANIES BULLETIN : Mission **********/
								?>
								<style>
									.bulletincon {
										border-radius: 0.75rem;
										background: #4759b2;
										padding: 30px;
										color: white;
										font-size: 16px;
									}
								</style>


								<div class="frow pp" style="order:<?php echo $order5; ?>">

									<h2 style="text-transform: uppercase !important;"><?php echo $section5_title; ?></h2>

									<div class="cont bulletin">

										<div class="bulletincon">
											<?php



											$bulletin = get_field('enter_bulletin');

											echo '<p  class="leftoneh"> ' . $bulletin . '</a></p>';
											?>
										</div>

									</div>
								</div>



								<?php
								/********* End of Gold IRA COMPANIES BULLETIN : Mission **********/
								?>










								<?php
								/********* Start 	Gold Investing Information -Editor's pick **********/
								?>
								<div class="frow" style="order:<?php echo $order6; ?>">
									<h2 style="text-transform: uppercase !important;"><?php echo $section6_title; ?></h2>

									<div class="cont three">
										<div class="leftone">
											<?php



											$featured_image_url = get_field('f_right_image_1');

											// Get the title
											$page_title = get_field('f_right_title1');
											// Get the permalink (URL) of the page
											$page_permalink = get_field('f_right_title1_link');

											if ($featured_image_url) {
												echo '<a href="' . $page_permalink . '" ' . $openUrls[6] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
											}
											echo '<h2  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[6] . ' >' . esc_html($page_title) . '</a></h2>';
											?>
										</div>
										<div class="middle">

											<?php



											$featured_image_url = get_field('f_right_image_2');

											// Get the title
											$page_title = get_field('f_right_title2');
											// Get the permalink (URL) of the page
											$page_permalink = get_field('f_right_title2_link');

											if ($featured_image_url) {
												echo '<a href="' . $page_permalink . '" ' . $openUrls[6] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
											}
											echo '<h2  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[6] . '>' . esc_html($page_title) . '</a></h2>';
											?>

										</div>
										<div class="rightfour">


											<?php



											$featured_image_url = get_field('f_right_image_3');

											// Get the title
											$page_title = get_field('f_right_title3');
											// Get the permalink (URL) of the page
											$page_permalink = get_field('f_right_title3_link');

											if ($featured_image_url) {
												echo '<a href="' . $page_permalink . '"  ' . $openUrls[6] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
											}
											echo '<h2  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[6] . ' >' . esc_html($page_title) . '</a></h2>';
											?>

										</div>


										<?php
										$more_link = get_field('f_more_link');
										?>
										<div class="arrow"><a href="<?php echo $more_link; ?>"> More<i class="fa-solid fa-chevron-right" style="display:none;"></i></a></div>


									</div>
								</div>



								<?php
								/********* End of 	Gold Investing Information -Editor's pick **********/
								?>














								<?php
								/********* #6 Latest Gold News **********/
								?>
								<div class="frow" style="order:<?php echo $order7; ?>">

									<h2 style="text-transform: uppercase !important;"> <?php echo $section7_title; ?> </h2>

									<div class="cont">

										<div class="goldnews">
											<rssapp-wall id="tNh5ILadAW5TE6NM"></rssapp-wall>
											<script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
										</div>

									</div>
								</div>



								<?php
								/********* End of Latest Gold News  **********/
								?>









								<?php
								/********* #7 Silver Investing Information - Editor's Pick **********/
								?>
								<div class="frow" style="order:<?php echo $order8; ?>">

									<h2 style="text-transform: uppercase !important;"><?php echo $section8_title; ?></h2>

									<div class="cont three">
										<div class="leftone">
											<?php



											$featured_image_url = get_field('s_right_image_1');

											// Get the title
											$page_title = get_field('s_right_title1');
											// Get the permalink (URL) of the page
											$page_permalink = get_field('s_right_title1_link');

											if ($featured_image_url) {
												echo '<a href="' . $page_permalink . '"  ' . $openUrls[8] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
											}
											echo '<h2  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[8] . '> ' . esc_html($page_title) . '</a></h2>';
											?>
										</div>
										<div class="middle">

											<?php



											$featured_image_url = get_field('s_right_image_2');

											// Get the title
											$page_title = get_field('s_right_title2');
											// Get the permalink (URL) of the page
											$page_permalink = get_field('s_right_title2_link');

											if ($featured_image_url) {
												echo '<a href="' . $page_permalink . '" ' . $openUrls[8] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
											}
											echo '<h2  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[8] . ' >' . esc_html($page_title) . '</a></h2>';
											?>

										</div>
										<div class="rightfour">


											<?php



											$featured_image_url = get_field('s_right_image_3');

											// Get the title
											$page_title = get_field('s_right_title3');
											// Get the permalink (URL) of the page
											$page_permalink = get_field('s_right_title3_link');

											if ($featured_image_url) {
												echo '<a href="' . $page_permalink . '" ' . $openUrls[8] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
											}
											echo '<h2  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[8] . ' >' . esc_html($page_title) . '</a></h2>';
											?>

										</div>


										<?php
										$more_link = get_field('moress');
										?>
										<div class="arrow"><a href="<?php echo $more_link; ?>"> More<i class="fa-solid fa-chevron-right" style="display:none;"></i></a></div>


									</div>

								</div>


								<?php
								/********* End of 	Gold Investing Information -Editor's pick **********/
								?>













								<?php
								/********* #8 Latest Silver News **********/
								?>
								<div class="frow" style="order:<?php echo $order9; ?>">

									<h2 style="text-transform: uppercase !important;"> <?php echo $section9_title; ?> </h2>

									<div class="cont">

										<div class="goldnews">
											<rssapp-wall id="t6u7BSvtgCysrvjq"></rssapp-wall>
											<script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
										</div>

									</div>
								</div>



								<?php
								/********* End of Latest Silver News  **********/
								?>








								<?php
								/********* #9 Retirement Information - Editor's Pick**********/
								?>
								<div class="frow" style="order:<?php echo $order10; ?>">

									<h2 style="text-transform: uppercase !important;"><?php echo $section10_title; ?></h2>

									<div class="cont three">
										<div class="leftone">
											<?php



											$featured_image_url = get_field('r_right_image_1');

											// Get the title
											$page_title = get_field('r_right_title1');
											// Get the permalink (URL) of the page
											$page_permalink = get_field('r_right_title1_link');

											if ($featured_image_url) {
												echo '<a href="' . $page_permalink . '" ' . $openUrls[10] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
											}
											echo '<h2  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[10] . ' >' . esc_html($page_title) . '</a></h2>';
											?>
										</div>
										<div class="middle">

											<?php



											$featured_image_url = get_field('r_right_image_2');

											// Get the title
											$page_title = get_field('r_right_title2');
											// Get the permalink (URL) of the page
											$page_permalink = get_field('r_right_title2_link');

											if ($featured_image_url) {
												echo '<a href="' . $page_permalink . '"  ' . $openUrls[10] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
											}
											echo '<h2  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[10] . ' >' . esc_html($page_title) . '</a></h2>';
											?>

										</div>
										<div class="rightfour">


											<?php



											$featured_image_url = get_field('r_right_image_3');

											// Get the title
											$page_title = get_field('r_right_title3');
											// Get the permalink (URL) of the page
											$page_permalink = get_field('r_right_title3_link');

											if ($featured_image_url) {
												echo '<a href="' . $page_permalink . '" ' . $openUrls[10] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
											}
											echo '<h2  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[10] . ' >' . esc_html($page_title) . '</a></h2>';
											?>

										</div>


										<?php
										$more_link = get_field('morerr');
										?>
										<div class="arrow"><a href="<?php echo $more_link; ?>"> More<i class="fa-solid fa-chevron-right" style="display:none;"></i></a></div>


									</div>

								</div>


								<?php
								/********* End of 	Retirement Information - Editor's Pick **********/
								?>












								<?php
								/********* #10 Start of Latest Retirement Bulletins **********/
								?>
								<div class="frow" style="order:<?php echo $order11; ?>">

									<h2 style="text-transform: uppercase !important;"><?php echo $section11_title; ?></h2>

									<div class="cont">
										<div class="leftone">
											<?php



											$featured_image_url = get_field('rb_left_big_image');

											// Get the title
											$page_title = get_field('rb_left_big_title');
											// Get the permalink (URL) of the page
											$page_permalink = get_field('rb_left_big_title_link');

											if ($featured_image_url) {
												echo '<a href="' . $page_permalink . '" ' . $openUrls[11] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
											}
											echo '<h2  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[11] . '> ' . esc_html($page_title) . '</a></h2>';
											?>
										</div>

										<div class="rightfour">

											<div class="toprow">
												<div class="left">
													<?php


													$featured_image_url = get_field('rb_right_image_1');

													// Get the title
													$page_title = get_field('rb_right_title1');



													$page_permalink = get_field('rb_right_title1_link');

													// Check if the featured image exists
													if ($featured_image_url) {
														echo '<a href="' . $page_permalink . '" ' . $openUrls[11] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
													}

													// Display the title with a link to the page
													echo '<h2><a href="' . esc_url($page_permalink) . '" ' . $openUrls[11] . ' >' . esc_html($page_title) . '</a></h2>';
													?>
												</div>
												<div class="right">
													<?php


													$featured_image_url = get_field('rb_right_image_2');

													// Get the title
													$page_title = get_field('rb_right_title2');

													// Get the permalink (URL) of the page
													$page_permalink = get_field('rb_right_title2_link');

													// Check if the featured image exists
													if ($featured_image_url) {
														echo '<a href="' . $page_permalink . '" ' . $openUrls[11] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
													}

													// Display the title with a link to the page
													echo '<h2><a href="' . esc_url($page_permalink) . '" ' . $openUrls[11] . ' >' . esc_html($page_title) . '</a></h2>';
													?>

												</div>





											</div>

											<div class="bottomrow">

												<div class="left">
													<?php


													$featured_image_url = get_field('rb_right_image_3');

													// Get the title
													$page_title = get_field('rb_right_title3');

													$page_permalink = get_field('rb_right_title3_link');

													// Check if the featured image exists
													if ($featured_image_url) {
														echo '<a href="' . $page_permalink . '" ' . $openUrls[11] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
													}

													// Display the title with a link to the page
													echo '<h2><a href="' . esc_url($page_permalink) . '" ' . $openUrls[11] . ' >' . esc_html($page_title) . '</a></h2>';
													?>
												</div>
												<div class="right">
													<?php



													$featured_image_url = get_field('rb_right_image_4');

													// Get the title
													$page_title = get_field('rb_right_title4');


													$page_permalink = get_field('rb_right_title4_link');

													// Check if the featured image exists
													if ($featured_image_url) {
														echo '<a href="' . $page_permalink . '" ' . $openUrls[11] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
													}

													// Display the title with a link to the page
													echo '<h2><a href="' . esc_url($page_permalink) . '" ' . $openUrls[11] . ' >' . esc_html($page_title) . '</a></h2>';
													?>
												</div>

											</div>

										</div>


										<?php
										$more_link = get_field('morerb');
										?>
										<div class="arrow"><a href="<?php echo $more_link; ?>"> More<i class="fa-solid fa-chevron-right" style="display:none;"></i></a></div>


									</div>
								</div>
								<?php
								/********* End of Latest Retirement Bulletins **********/
								?>











								<?php
								/********* #11 Latest Retirement Planning News **********/
								?>
								<div class="frow" style="order:<?php echo $order12; ?>">

									<h2 style="text-transform: uppercase !important;"> <?php echo $section12_title; ?> </h2>

									<div class="cont">

										<div class="goldnews">
											<rssapp-wall id="tyQjY8W1meIGeWv8"></rssapp-wall>
											<script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
										</div>

									</div>


								</div>

								<?php
								/********* End of Latest Retirement Planning News  **********/
								?>







								<?php
								/*********#12 Start of Latest Economic / Financial Bulletins **********/
								?>
								<div class="frow" style="order:<?php echo $order13; ?>">

									<h2 style="text-transform: uppercase !important;"><?php echo $section13_title; ?></h2>

									<div class="cont">
										<div class="leftone">
											<?php



											$featured_image_url = get_field('ef_left_big_image');

											// Get the title
											$page_title = get_field('ef_left_big_title');
											// Get the permalink (URL) of the page
											$page_permalink = get_field('ef_left_big_title_link');

											if ($featured_image_url) {
												echo '<a href="' . $page_permalink . '"' . $openUrls[13] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
											}
											echo '<h2  class="leftoneh"><a href="' . esc_url($page_permalink) . '" ' . $openUrls[13] . ' >' . esc_html($page_title) . '</a></h2>';
											?>
										</div>

										<div class="rightfour">

											<div class="toprow">
												<div class="left">
													<?php


													$featured_image_url = get_field('ef_right_image_1');

													// Get the title
													$page_title = get_field('ef_right_title1');



													$page_permalink = get_field('ef_right_title1_link');

													// Check if the featured image exists
													if ($featured_image_url) {
														echo '<a href="' . $page_permalink . '"' . $openUrls[13] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
													}

													// Display the title with a link to the page
													echo '<h2><a href="' . esc_url($page_permalink) . '"' . $openUrls[13] . '>' . esc_html($page_title) . '</a></h2>';
													?>
												</div>
												<div class="right">
													<?php


													$featured_image_url = get_field('ef_right_image_2');

													// Get the title
													$page_title = get_field('ef_right_title2');

													// Get the permalink (URL) of the page
													$page_permalink = get_field('ef_right_title2_link');

													// Check if the featured image exists
													if ($featured_image_url) {
														echo '<a href="' . $page_permalink . '"' . $openUrls[13] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
													}

													// Display the title with a link to the page
													echo '<h2><a href="' . esc_url($page_permalink) . '" ' . $openUrls[13] . '>' . esc_html($page_title) . '</a></h2>';
													?>

												</div>





											</div>

											<div class="bottomrow">

												<div class="left">
													<?php


													$featured_image_url = get_field('ef_right_image_3');

													// Get the title
													$page_title = get_field('ef_right_title3');

													$page_permalink = get_field('ef_right_title3_link');

													// Check if the featured image exists
													if ($featured_image_url) {
														echo '<a href="' . $page_permalink . '"' . $openUrls[13] . ' ><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
													}

													// Display the title with a link to the page
													echo '<h2><a href="' . esc_url($page_permalink) . '" ' . $openUrls[13] . '>' . esc_html($page_title) . '</a></h2>';
													?>
												</div>
												<div class="right">
													<?php



													$featured_image_url = get_field('ef_right_image_4');

													// Get the title
													$page_title = get_field('ef_right_title4');


													$page_permalink = get_field('ef_right_title4_link');

													// Check if the featured image exists
													if ($featured_image_url) {
														echo '<a href="' . $page_permalink . '"' . $openUrls[13] . '><img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($page_title) . '" /></a>';
													}

													// Display the title with a link to the page
													echo '<h2><a href="' . esc_url($page_permalink) . '"' . $openUrls[13] . ' >' . esc_html($page_title) . '</a></h2>';
													?>
												</div>

											</div>

										</div>


										<?php
										$more_link = get_field('moreef');
										?>
										<div class="arrow"><a href="<?php echo $more_link; ?>"> More<i class="fa-solid fa-chevron-right" style="display:none;"></i></a></div>


									</div>
								</div>
								<?php
								/********* #12 End of Latest Economic / Financial Bulletins **********/
								?>



								<?php
								/********* #13 Latest World Financial News **********/
								?>
								<div class="frow" style="order:<?php echo $order14; ?>">

									<h2 style="text-transform: uppercase !important;"> <?php echo $section14_title; ?> </h2>

									<div class="cont">

										<div class="goldnews">
											<rssapp-wall id="tH21wEaii5UVnEm7"></rssapp-wall>
											<script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
										</div>

									</div>

								</div>

							</div>
							<?php
							/*********#13 End of Latest World Financial News  **********/
							?>



							<?php the_content("<p>__('Read the rest of this page')</p>"); ?>
							<?php edit_post_link(__('Edit'), '<p>', '</p>'); ?>
							<?php wp_link_pages('before=<div id="page-links"><p style="text-align:right"><strong>Pages:</strong>&after=</p></div>'); ?>
					<?php endwhile;
					endif; ?>

				</div>


















 

				<div class="social-icons-follow">

					<div class="follow">Follow Us:</div>
					<div class="social-icons__icons">

						<a class="slink" href="https://www.facebook.com/goldiracompaniesbulletin">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style=" fill: #1877f2 !important;  width: 33px; top: 7px;  position: relative; "><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
								<path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"></path>
							</svg> <span>Facebook</span>
						</a>
						<a class="slink" href="https://twitter.com/goldbulletin_">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="top: 7px;width: 33px;position: relative;"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
								<path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path>
							</svg><span>x (Twitter)</span>
						</a>


						<a class="slink" href="https://www.instagram.com/goldiracompaniesbulletin">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style=" width: 29px; top: 7px; position: relative; fill: #C3861E;   margin-right: 4px; "><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
								<path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
							</svg><span>Instagram</span>
						</a>

						<a class="slink" href="https://www.linkedin.com/company/goldiracompaniesbulletin">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="fill: #0a66c2 !IMPORTANT;width: 28px;position: relative;top: 7px;margin-right: 4px;"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
								<path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"></path>
							</svg><span>LinkedIn</span>
						</a>

						<a class="slink" href="https://www.pinterest.com/goldiracompaniesbulletin/">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" style="top: 7px; fill: #e60023 !important; width: 33px; position: relative; margin-right: 4px; "><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
								<path d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3 .8-3.4 5-20.3 6.9-28.1 .6-2.5 .3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z"></path>
							</svg><span>Pinterest</span>
						</a>





					</div>
				</div>

 





			</div>

		</div>
	</div>

<?php } ?>






<?php get_footer(); ?>