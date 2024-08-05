<?php

/**
 * Twenty Twelve functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, @link https://developer.wordpress.org/plugins/
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

// Set up the content width value based on the theme's design and stylesheet.
if (!isset($content_width)) {
	$content_width = 625;
}

/**
 * Twenty Twelve setup.
 *
 * Sets up theme defaults and registers the various WordPress features that
 * Twenty Twelve supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add a Visual Editor stylesheet.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links,
 *  custom background, and post formats.
 * @uses register_nav_menu() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_setup()
{
	/*
	 * Makes Twenty Twelve available for translation.
	 *
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentytwelve
	 * If you're building a theme based on Twenty Twelve, use a find and replace
	 * to change 'twentytwelve' to the name of your theme in all the template files.
	 *
	 * Manual loading of text domain is not required after the introduction of
	 * just in time translation loading in WordPress version 4.6.
	 *
	 * @ticket 58318
	 */
	if (version_compare($GLOBALS['wp_version'], '4.6', '<')) {
		load_theme_textdomain('twentytwelve');
	}

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Load regular editor styles into the new block-based editor.
	add_theme_support('editor-styles');

	// Load default block styles.
	add_theme_support('wp-block-styles');

	// Add support for responsive embeds.
	add_theme_support('responsive-embeds');

	// Add support for custom color scheme.
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => __('Blue', 'twentytwelve'),
				'slug'  => 'blue',
				'color' => '#21759b',
			),
			array(
				'name'  => __('Dark Gray', 'twentytwelve'),
				'slug'  => 'dark-gray',
				'color' => '#444',
			),
			array(
				'name'  => __('Medium Gray', 'twentytwelve'),
				'slug'  => 'medium-gray',
				'color' => '#9f9f9f',
			),
			array(
				'name'  => __('Light Gray', 'twentytwelve'),
				'slug'  => 'light-gray',
				'color' => '#e6e6e6',
			),
			array(
				'name'  => __('White', 'twentytwelve'),
				'slug'  => 'white',
				'color' => '#fff',
			),
		)
	);

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support('automatic-feed-links');

	// This theme supports a variety of post formats.
	add_theme_support('post-formats', array('aside', 'image', 'link', 'quote', 'status'));

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu('primary', __('Primary Menu', 'twentytwelve'));

	/*
	 * This theme supports custom background color and image,
	 * and here we also set up the default background color.
	 */
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'e6e6e6',
		)
	);

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(624, 9999); // Unlimited height, soft crop.

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'twentytwelve_setup');

/**
 * Add support for a custom header image.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Add block patterns.
 */
require get_template_directory() . '/inc/block-patterns.php';

if (!function_exists('twentytwelve_get_font_url')) :
	/**
	 * Return the font stylesheet URL if available.
	 *
	 * The use of Open Sans by default is localized. For languages that use
	 * characters not supported by the font, the font can be disabled.
	 *
	 * @since Twenty Twelve 1.2
	 * @since Twenty Twelve 3.9 Replaced Google URL with self-hosted font.
	 *
	 * @return string Font stylesheet or empty string if disabled.
	 */
	function twentytwelve_get_font_url()
	{
		$font_url = '';

		/*
		* translators: If there are characters in your language that are not supported
		* by Open Sans, translate this to 'off'. Do not translate into your own language.
		*/
		if ('off' !== _x('on', 'Open Sans font: on or off', 'twentytwelve')) {
			$font_url = get_template_directory_uri() . '/fonts/font-open-sans.css';
		}

		return $font_url;
	}
endif;

/**
 * Enqueue scripts and styles for front end.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_scripts_styles()
{
	global $wp_styles;

	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	// Adds JavaScript for handling the navigation menu hide-and-show behavior.
	wp_enqueue_script(
		'twentytwelve-navigation',
		get_template_directory_uri() . '/js/navigation.js',
		array('jquery'),
		'20141205',
		array(
			'in_footer' => false, // Because involves header.
			'strategy'  => 'defer',
		)
	);

	$font_url = twentytwelve_get_font_url();
	if (!empty($font_url)) {
		$font_version = (0 === strpos((string) twentytwelve_get_font_url(), get_template_directory_uri() . '/')) ? '20230328' : null;
		wp_enqueue_style('twentytwelve-fonts', esc_url_raw($font_url), array(), $font_version);
	}

	// Loads our main stylesheet.
	wp_enqueue_style('twentytwelve-style', get_stylesheet_uri(), array(), '20240716');

	// Theme block stylesheet.
	wp_enqueue_style('twentytwelve-block-style', get_template_directory_uri() . '/css/blocks.css', array('twentytwelve-style'), '20240603');

	// Loads the Internet Explorer specific stylesheet.
	wp_enqueue_style('twentytwelve-ie', get_template_directory_uri() . '/css/ie.css', array('twentytwelve-style'), '20150214');
	$wp_styles->add_data('twentytwelve-ie', 'conditional', 'lt IE 9');
}
add_action('wp_enqueue_scripts', 'twentytwelve_scripts_styles');

/**
 * Enqueue styles for the block-based editor.
 *
 * @since Twenty Twelve 2.6
 */
function twentytwelve_block_editor_styles()
{
	// Block styles.
	wp_enqueue_style('twentytwelve-block-editor-style', get_template_directory_uri() . '/css/editor-blocks.css', array(), '20240506');
	// Add custom fonts.
	$font_version = (0 === strpos((string) twentytwelve_get_font_url(), get_template_directory_uri() . '/')) ? '20230328' : null;
	wp_enqueue_style('twentytwelve-fonts', twentytwelve_get_font_url(), array(), $font_version);
}
add_action('enqueue_block_editor_assets', 'twentytwelve_block_editor_styles');

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Twelve 2.2
 * @deprecated Twenty Twelve 3.9 Disabled filter because, by default, fonts are self-hosted.
 *
 * @param array   $urls          URLs to print for resource hints.
 * @param string  $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */
function twentytwelve_resource_hints($urls, $relation_type)
{
	if (wp_style_is('twentytwelve-fonts', 'queue') && 'preconnect' === $relation_type) {
		if (version_compare($GLOBALS['wp_version'], '4.7-alpha', '>=')) {
			$urls[] = array(
				'href' => 'https://fonts.gstatic.com',
				'crossorigin',
			);
		} else {
			$urls[] = 'https://fonts.gstatic.com';
		}
	}

	return $urls;
}
// add_filter( 'wp_resource_hints', 'twentytwelve_resource_hints', 10, 2 );

/**
 * Filter TinyMCE CSS path to include hosted fonts.
 *
 * Adds additional stylesheets to the TinyMCE editor if needed.
 *
 * @uses twentytwelve_get_font_url() To get the font stylesheet URL.
 *
 * @since Twenty Twelve 1.2
 *
 * @param string $mce_css CSS path to load in TinyMCE.
 * @return string Filtered CSS path.
 */
function twentytwelve_mce_css($mce_css)
{
	$font_url = twentytwelve_get_font_url();

	if (empty($font_url)) {
		return $mce_css;
	}

	if (!empty($mce_css)) {
		$mce_css .= ',';
	}

	$mce_css .= esc_url_raw(str_replace(',', '%2C', $font_url));

	return $mce_css;
}
add_filter('mce_css', 'twentytwelve_mce_css');

/**
 * Filter the page title.
 *
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @since Twenty Twelve 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string Filtered title.
 */
function twentytwelve_wp_title($title, $sep)
{
	global $paged, $page;

	if (is_feed()) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo('name', 'display');

	// Add the site description for the home/front page.
	$site_description = get_bloginfo('description', 'display');
	if ($site_description && (is_home() || is_front_page())) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if (($paged >= 2 || $page >= 2) && !is_404()) {
		/* translators: %s: Page number. */
		$title = "$title $sep " . sprintf(__('Page %s', 'twentytwelve'), max($paged, $page));
	}

	return $title;
}
add_filter('wp_title', 'twentytwelve_wp_title', 10, 2);

/**
 * Filter the page menu arguments.
 *
 * Makes our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_page_menu_args($args)
{
	if (!isset($args['show_home'])) {
		$args['show_home'] = true;
	}
	return $args;
}
add_filter('wp_page_menu_args', 'twentytwelve_page_menu_args');

/**
 * Register sidebars.
 *
 * Registers our main widget area and the front page widget areas.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_widgets_init()
{
	register_sidebar(
		array(
			'name'          => __('Main Sidebar', 'twentytwelve'),
			'id'            => 'sidebar-1',
			'description'   => __('Appears on posts and pages except the optional Front Page template, which has its own widgets', 'twentytwelve'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => __('Footer', 'twentytwelve'),
			'id'            => 'Footer',
			'description'   => __('Appears on posts and pages except the optional Front Page template, which has its own widgets', 'twentytwelve'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => __('First Front Page Widget Area', 'twentytwelve'),
			'id'            => 'sidebar-2',
			'description'   => __('Appears when using the optional Front Page template with a page set as Static Front Page', 'twentytwelve'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => __('Second Front Page Widget Area', 'twentytwelve'),
			'id'            => 'sidebar-3',
			'description'   => __('Appears when using the optional Front Page template with a page set as Static Front Page', 'twentytwelve'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action('widgets_init', 'twentytwelve_widgets_init');

if (!function_exists('wp_get_list_item_separator')) :
	/**
	 * Retrieves the list item separator based on the locale.
	 *
	 * Added for backward compatibility to support pre-6.0.0 WordPress versions.
	 *
	 * @since 6.0.0
	 */
	function wp_get_list_item_separator()
	{
		/* translators: Used between list items, there is a space after the comma. */
		return __(', ', 'twentytwelve');
	}
endif;

if (!function_exists('twentytwelve_content_nav')) :
	/**
	 * Displays navigation to next/previous pages when applicable.
	 *
	 * @since Twenty Twelve 1.0
	 */
	function twentytwelve_content_nav($html_id)
	{
		global $wp_query;

		if ($wp_query->max_num_pages > 1) : ?>
			<nav id="<?php echo esc_attr($html_id); ?>" class="navigation">
				<h3 class="assistive-text"><?php _e('Post navigation', 'twentytwelve'); ?></h3>
				<div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&larr;</span> Older posts', 'twentytwelve')); ?></div>
				<div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&rarr;</span>', 'twentytwelve')); ?></div>
			</nav><!-- .navigation -->
			<?php
		endif;
	}
endif;

if (!function_exists('twentytwelve_comment')) :
	/**
	 * Template for comments and pingbacks.
	 *
	 * To override this walker in a child theme without modifying the comments template
	 * simply create your own twentytwelve_comment(), and that function will be used instead.
	 *
	 * Used as a callback by wp_list_comments() for displaying the comments.
	 *
	 * @since Twenty Twelve 1.0
	 *
	 * @global WP_Post $post Global post object.
	 */
	function twentytwelve_comment($comment, $args, $depth)
	{
		$GLOBALS['comment'] = $comment;
		switch ($comment->comment_type):
			case 'pingback':
			case 'trackback':
				// Display trackbacks differently than normal comments.
			?>
				<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
					<p><?php _e('Pingback:', 'twentytwelve'); ?> <?php comment_author_link(); ?> <?php edit_comment_link(__('(Edit)', 'twentytwelve'), '<span class="edit-link">', '</span>'); ?></p>
				<?php
				break;
			default:
				// Proceed with normal comments.
				global $post;
				?>
				<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
					<article id="comment-<?php comment_ID(); ?>" class="comment">
						<header class="comment-meta comment-author vcard">
							<?php
							echo get_avatar($comment, 44);
							printf(
								'<cite><b class="fn">%1$s</b> %2$s</cite>',
								get_comment_author_link(),
								// If current post author is also comment author, make it known visually.
								($comment->user_id === $post->post_author) ? '<span>' . __('Post author', 'twentytwelve') . '</span>' : ''
							);
							printf(
								'<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
								esc_url(get_comment_link($comment->comment_ID)),
								get_comment_time('c'),
								/* translators: 1: Date, 2: Time. */
								sprintf(__('%1$s at %2$s', 'twentytwelve'), get_comment_date(), get_comment_time())
							);
							?>
						</header><!-- .comment-meta -->

						<?php
						$commenter = wp_get_current_commenter();
						if ($commenter['comment_author_email']) {
							$moderation_note = __('Your comment is awaiting moderation.', 'twentytwelve');
						} else {
							$moderation_note = __('Your comment is awaiting moderation. This is a preview; your comment will be visible after it has been approved.', 'twentytwelve');
						}
						?>

						<?php if ('0' === $comment->comment_approved) : ?>
							<p class="comment-awaiting-moderation"><?php echo $moderation_note; ?></p>
						<?php endif; ?>

						<section class="comment-content comment">
							<?php comment_text(); ?>
							<?php edit_comment_link(__('Edit', 'twentytwelve'), '<p class="edit-link">', '</p>'); ?>
						</section><!-- .comment-content -->

						<div class="reply">
							<?php
							comment_reply_link(
								array_merge(
									$args,
									array(
										'reply_text' => __('Reply', 'twentytwelve'),
										'after'      => ' <span>&darr;</span>',
										'depth'      => $depth,
										'max_depth'  => $args['max_depth'],
									)
								)
							);
							?>
						</div><!-- .reply -->
					</article><!-- #comment-## -->
		<?php
				break;
		endswitch; // End comment_type check.
	}
endif;

if (!function_exists('twentytwelve_entry_meta')) :
	/**
	 * Set up post entry meta.
	 *
	 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
	 *
	 * Create your own twentytwelve_entry_meta() to override in a child theme.
	 *
	 * @since Twenty Twelve 1.0
	 */
	function twentytwelve_entry_meta()
	{
		$categories_list = get_the_category_list(wp_get_list_item_separator());

		$tags_list = get_the_tag_list('', wp_get_list_item_separator());

		$date = sprintf(
			'<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
			esc_url(get_permalink()),
			esc_attr(get_the_time()),
			esc_attr(get_the_date('c')),
			esc_html(get_the_date())
		);

		$author = sprintf(
			'<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
			esc_url(get_author_posts_url(get_the_author_meta('ID'))),
			/* translators: %s: Author display name. */
			esc_attr(sprintf(__('View all posts by %s', 'twentytwelve'), get_the_author())),
			get_the_author()
		);

		if ($tags_list && !is_wp_error($tags_list)) {
			/* translators: 1: Category name, 2: Tag name, 3: Date, 4: Author display name. */
			$utility_text = __('This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'twentytwelve');
		} elseif ($categories_list) {
			/* translators: 1: Category name, 3: Date, 4: Author display name. */
			$utility_text = __('This entry was posted in %1$s on %3$s<span class="by-author"> by %4$s</span>.', 'twentytwelve');
		} else {
			/* translators: 3: Date, 4: Author display name. */
			$utility_text = __('This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'twentytwelve');
		}

		printf(
			$utility_text,
			$categories_list,
			$tags_list,
			$date,
			$author
		);
	}
endif;

/**
 * Extend the default WordPress body classes.
 *
 * Extends the default WordPress body class to denote:
 * 1. Using a full-width layout, when no active widgets in the sidebar
 *    or full-width template.
 * 2. Front Page template: thumbnail in use and number of sidebars for
 *    widget areas.
 * 3. White or empty background color to change the layout and spacing.
 * 4. Custom fonts enabled.
 * 5. Single or multiple authors.
 *
 * @since Twenty Twelve 1.0
 *
 * @param array $classes Existing class values.
 * @return array Filtered class values.
 */
function twentytwelve_body_class($classes)
{
	$background_color = get_background_color();
	$background_image = get_background_image();

	if (!is_active_sidebar('sidebar-1') || is_page_template('page-templates/full-width.php')) {
		$classes[] = 'full-width';
	}

	if (is_page_template('page-templates/front-page.php')) {
		$classes[] = 'template-front-page';
		if (has_post_thumbnail()) {
			$classes[] = 'has-post-thumbnail';
		}
		if (is_active_sidebar('sidebar-2') && is_active_sidebar('sidebar-3')) {
			$classes[] = 'two-sidebars';
		}
	}

	if (empty($background_image)) {
		if (empty($background_color)) {
			$classes[] = 'custom-background-empty';
		} elseif (in_array($background_color, array('fff', 'ffffff'), true)) {
			$classes[] = 'custom-background-white';
		}
	}

	// Enable custom font class only if the font CSS is queued to load.
	if (wp_style_is('twentytwelve-fonts', 'queue')) {
		$classes[] = 'custom-font-enabled';
	}

	if (!is_multi_author()) {
		$classes[] = 'single-author';
	}

	return $classes;
}
add_filter('body_class', 'twentytwelve_body_class');

/**
 * Adjust content width in certain contexts.
 *
 * Adjusts content_width value for full-width and single image attachment
 * templates, and when there are no active widgets in the sidebar.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_content_width()
{
	if (is_page_template('page-templates/full-width.php') || is_attachment() || !is_active_sidebar('sidebar-1')) {
		global $content_width;
		$content_width = 960;
	}
}
add_action('template_redirect', 'twentytwelve_content_width');

/**
 * Register postMessage support.
 *
 * Add postMessage support for site title and description for the Customizer.
 *
 * @since Twenty Twelve 1.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function twentytwelve_customize_register($wp_customize)
{
	$wp_customize->get_setting('blogname')->transport         = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

	if (isset($wp_customize->selective_refresh)) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'            => '.site-title > a',
				'container_inclusive' => false,
				'render_callback'     => 'twentytwelve_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'            => '.site-description',
				'container_inclusive' => false,
				'render_callback'     => 'twentytwelve_customize_partial_blogdescription',
			)
		);
	}
}
add_action('customize_register', 'twentytwelve_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Twenty Twelve 2.0
 *
 * @see twentytwelve_customize_register()
 *
 * @return void
 */
function twentytwelve_customize_partial_blogname()
{
	bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Twenty Twelve 2.0
 *
 * @see twentytwelve_customize_register()
 *
 * @return void
 */
function twentytwelve_customize_partial_blogdescription()
{
	bloginfo('description');
}

/**
 * Enqueue JavaScript postMessage handlers for the Customizer.
 *
 * Binds JS handlers to make the Customizer preview reload changes asynchronously.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_customize_preview_js()
{
	wp_enqueue_script('twentytwelve-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array('customize-preview'), '20200516', array('in_footer' => true));
}
add_action('customize_preview_init', 'twentytwelve_customize_preview_js');

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Twenty Twelve 2.4
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function twentytwelve_widget_tag_cloud_args($args)
{
	$args['largest']  = 22;
	$args['smallest'] = 8;
	$args['unit']     = 'pt';
	$args['format']   = 'list';

	return $args;
}
add_filter('widget_tag_cloud_args', 'twentytwelve_widget_tag_cloud_args');

if (!function_exists('wp_body_open')) :
	/**
	 * Fire the wp_body_open action.
	 *
	 * Added for backward compatibility to support pre-5.2.0 WordPress versions.
	 *
	 * @since Twenty Twelve 3.0
	 */
	function wp_body_open()
	{
		/**
		 * Triggered after the opening <body> tag.
		 *
		 * @since Twenty Twelve 3.0
		 */
		do_action('wp_body_open');
	}
endif;

/***** customizer  logo ***/
/*
function goldira_logo($wp_customize){
	$wp_customize->add_section('goldira_theme_logo_section',array(
	'title'=> __('Logo','goldira'),
	'description' => 'Upload logo for your theme',	
		
	));
	 $wp_customize->add_setting('goldira_theme_logo',array(
	 'default'=>'',
	 ));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'goldira_theme_logo',array(
	'label' => __('Logo','goldira'),
	'section' => 'goldira_theme_logo_section',
	'settings' => 'goldira_theme_logo'	,
	
	)  ) );
}
add_action("customize_register","goldira_logo");
*/
/**** menu page ***/
// Function to add the admin menu
function goldira_admin_menu()
{
	add_menu_page(
		'GoldIRA Theme Options',
		'GoldIRA Theme Options',
		'manage_options',
		'theme-options',
		'goldira_theme_options_page',
		'',
		99
	);
	add_submenu_page(
		'theme-options',
		'Blog Settings',
		'Blog Settings',
		'manage_options',
		'blog-settings',
		'goldira_blog_settings_page'
	);
	add_submenu_page(
		'theme-options',
		'Footer Settings',
		'Footer Settings',
		'manage_options',
		'footer-settings',
		'goldira_footer_settings_page'
	);
	add_submenu_page(
		'theme-options',
		'Post Settings',
		'Post Settings',
		'manage_options',
		'post-settings',
		'goldira_post_settings_page'
	);

	add_submenu_page(
		'theme-options',
		'Sidebar Settings',
		'Sidebar Settings',
		'manage_options',
		'sidebar-settings',
		'goldira_sidebar_settings_page'
	);
}

// Function to render the Footer Settings page
function goldira_footer_settings_page()
{
		?>
		<div class="wrap">
			<h1><?php _e('Footer Settings', 'goldira'); ?></h1>
			<form method="post" action="options.php">
				<?php
				settings_fields('goldira_footer_settings_group');
				do_settings_sections('goldira-footer-section');
				submit_button();
				?>
			</form>
		</div>
	<?php
}

/**** Blog Section */
function goldira_blog_settings_page()
{
	?>
		<div class="wrap">
			<h1><?php _e('Blog Settings', 'goldira'); ?></h1>
			<form method="post" action="options.php">
				<?php
				settings_fields('goldira_blog_settings_group');
				do_settings_sections('goldira-blog-section');
				submit_button();
				?>
			</form>
		</div>
	<?php }

add_action('admin_init', 'goldira_blog_settings_page_opc');

function goldira_blog_settings_page_opc()
{
	register_setting('goldira_blog_settings_group', 'goldira_blog_settings');

	add_settings_section(
		'goldira_blog_settings_section',
		__('Blog Settings', 'goldira'),
		'goldira_blog_settings_section_cb',
		'goldira-blog-section',
	);

	add_settings_field(
		'goldira_blog_text_font_color',
		__('Blog text font color', 'goldira'),
		'goldira_blog_text_font_color_cb',
		'goldira-blog-section', 
		'goldira_blog_settings_section'
	);
	add_settings_field(
		'goldira_blog_font',
		__('Post content and Sidebar Font', 'goldira'),
		'goldira_blog_font_cb',
		'goldira-blog-section',
		'goldira_blog_settings_section'
	);
	add_settings_field(
		'goldira_blog_font_size',
		__('Blog Font Size', 'goldira'),
		'goldira_blog_font_size_cb',
		'goldira-blog-section',
		'goldira_blog_settings_section'
	);
}
function goldira_blog_settings_section_cb()
{
	echo '<p>' . __('Set your Blog text and other settings below:', 'goldira') . '</p>';
}
function goldira_blog_text_font_color_cb(){
	$options = get_option('goldira_blog_settings');
	echo '<input name="goldira_blog_settings[goldira_blog_text_font_color]" id="flex_page_backgroundcolor" class="color-field" value="' . esc_attr($options['goldira_blog_text_font_color'] ?? '') . '" style="width: 80px;" />';

}
function goldira_blog_font_size_cb() {
    $options = get_option('goldira_blog_settings');
    $font_size = $options['goldira_blog_font_size'] ?? '16';

    echo '<input name="goldira_blog_settings[goldira_blog_font_size]" id="flex_sidebar_tfontsize" type="text" value="' . esc_attr($font_size) . '" style="width: 80px;" />';
    echo '<p class="description">' . __('Select the size (in pixels) of the title font in your top sidebar boxes', 'goldira') . '</p>';
}
function goldira_blog_font_cb() {
    $options = get_option('goldira_blog_settings');
    $selected_font = $options['goldira_blog_font'] ?? 'Arial';
    $fonts = array('Arial', 'Georgia', 'Verdana', 'Trebuchet MS', 'Lucida Grande', 'Courier New', 'Impact', 'Comic Sans MS');

    echo '<select name="goldira_blog_settings[goldira_blog_font]" id="flex_sidebar_topfont">';
    foreach ($fonts as $font) {
        $selected = ($font == $selected_font) ? 'selected="selected"' : '';
        echo '<option value="' . esc_attr($font) . '" ' . $selected . '>' . esc_html($font) . '</option>';
    }
    echo '</select>';
    echo '<p class="description">' . __('Choose the font style for your top sidebar box titles', 'goldira') . '</p>';
}
function goldira_enqueue_google_font_blog() {
    $options = get_option('goldira_blog_settings');
    $selected_font = $options['goldira_blog_font'] ?? 'Arial';

    $google_fonts = array(
        'Arial' => 'Arial',
        'Georgia' => 'Georgia',
        'Verdana' => 'Verdana',
        'Trebuchet MS' => 'Trebuchet+MS',
        'Lucida Grande' => 'Lucida+Grande',
        'Courier New' => 'Courier+New',
        'Impact' => 'Impact',
        'Comic Sans MS' => 'Comic+Sans+MS'
    );

    if (isset($google_fonts[$selected_font])) {
        $font_url = 'https://fonts.googleapis.com/css2?family=' . $google_fonts[$selected_font] . ':wght@400;700&display=swap';
        wp_enqueue_style('goldira-google-font', $font_url, array(), null);
    }
}

add_action('wp_enqueue_scripts', 'goldira_enqueue_google_font_blog');
/** end */

/**** Sidebar section *****/

function goldira_sidebar_settings_page()
{
	?>
		<div class="wrap">
			<h1><?php _e('Sidebar Settings', 'goldira'); ?></h1>
			<form method="post" action="options.php">
				<?php
				settings_fields('goldira_sidebar_settings_group');
				do_settings_sections('goldira-sidebar-section');
				submit_button();
				?>
			</form>
		</div>
	<?php }

add_action('admin_init', 'goldira_sidebar_settings_page_opc');

function goldira_sidebar_settings_page_opc()
{
	register_setting('goldira_sidebar_settings_group', 'goldira_sidebar_settings');

	add_settings_section(
		'goldira_sidebar_settings_section',
		__('Sidebar Settings', 'goldira'),
		'goldira_sidebar_settings_section_cb',
		'goldira-sidebar-section',
	);

	add_settings_field(
		'goldira_sidebar_title_font_color',
		__('Sidebar title font color', 'goldira'),
		'goldira_sidebar_title_font_color_cb',
		'goldira-sidebar-section', 
		'goldira_sidebar_settings_section'
	);
	add_settings_field(
		'goldira_sidebar_title_background_color',
		__('Sidebar title background color', 'goldira'),
		'goldira_sidebar_title_background_color_cb',
		'goldira-sidebar-section', 
		'goldira_sidebar_settings_section'
	);
	add_settings_field(
		'goldira_sidebar_topfont',
		__('Top Sidebar Boxes Title Font', 'goldira'),
		'goldira_sidebar_topfont_cb',
		'goldira-sidebar-section',
		'goldira_sidebar_settings_section'
	);
	add_settings_field(
		'goldira_sidebar_topfont_size',
		__('Top Sidebar Boxes Title Font Size', 'goldira'),
		'goldira_sidebar_topfont_size_cb',
		'goldira-sidebar-section',
		'goldira_sidebar_settings_section'
	);
	add_settings_field(
		'goldira_sidebar_arrow',
		__('Show Arrow Next to Title?', 'goldira'),
		'goldira_sidebar_arrow_cb',
		'goldira-sidebar-section',
		'goldira_sidebar_settings_section'
	);
	add_settings_field(
		'goldira_sidebar_text_color',
		__('Sidebar Text Color', 'goldira'),
		'goldira_sidebar_text_color_cb',
		'goldira-sidebar-section',
		'goldira_sidebar_settings_section',
	);
	add_settings_field(
		'goldira_sidebar_border_color',
		__('Sidebar Border Color','goldira'), 
		'goldira_sidebar_border_color_cb',
		'goldira-sidebar-section', 
		'goldira_sidebar_settings_section',
		 
	);

	add_settings_field(
		'goldira_sidebar_link_color', 
		__('Sidebar Link Color','goldira'),
		'goldira_sidebar_link_color_cb', 
		'goldira-sidebar-section', 
		'goldira_sidebar_settings_section',
	);
add_settings_field(
	'goldira_sidebar_link_hover_color', 
	__('Sidebar link hover color', 'goldira'),
	'goldira_sidebar_link_hover_color_cb', 
	'goldira-sidebar-section', 
	'goldira_sidebar_settings_section',
);





}
function goldira_sidebar_title_background_color_cb(){
	$options = get_option('goldira_sidebar_settings');
	echo '<input name="goldira_sidebar_settings[goldira_sidebar_title_background_color]" id="flex_page_backgroundcolor" class="color-field" value="' . esc_attr($options['goldira_sidebar_title_background_color'] ?? '') . '" style="width: 80px;" />';

}
function goldira_sidebar_title_font_color_cb(){
	$options = get_option('goldira_sidebar_settings');
	echo '<input name="goldira_sidebar_settings[goldira_sidebar_title_font_color]" id="flex_page_backgroundcolor" class="color-field" value="' . esc_attr($options['goldira_sidebar_title_font_color'] ?? '') . '" style="width: 80px;" />';

}
function goldira_sidebar_arrow_cb() {
    $options = get_option('goldira_sidebar_settings');
    $selected_option = $options['goldira_sidebar_arrow'] ?? 'yes';
    $options_list = array('yes', 'no');

    echo '<select name="goldira_sidebar_settings[goldira_sidebar_arrow]" id="flex_sidebar_arrow">';
    foreach ($options_list as $option) {
        $selected = ($option == $selected_option) ? 'selected="selected"' : '';
        echo '<option value="' . esc_attr($option) . '" ' . $selected . '>' . esc_html($option) . '</option>';
    }
    echo '</select>';
    echo '<p class="description">' . __('Choose whether you want the down arrow next to your title', 'goldira') . '</p>';
}
function goldira_sidebar_topfont_size_cb() {
    $options = get_option('goldira_sidebar_settings');
    $font_size = $options['goldira_sidebar_topfont_size'] ?? '16';

    echo '<input name="goldira_sidebar_settings[goldira_sidebar_topfont_size]" id="flex_sidebar_tfontsize" type="text" value="' . esc_attr($font_size) . '" style="width: 80px;" />';
    echo '<p class="description">' . __('Select the size (in pixels) of the title font in your top sidebar boxes', 'goldira') . '</p>';
}

function goldira_sidebar_topfont_cb() {
    $options = get_option('goldira_sidebar_settings');
    $selected_font = $options['goldira_sidebar_topfont'] ?? 'Arial';
    $fonts = array('Arial', 'Georgia', 'Verdana', 'Trebuchet MS', 'Lucida Grande', 'Courier New', 'Impact', 'Comic Sans MS');

    echo '<select name="goldira_sidebar_settings[goldira_sidebar_topfont]" id="flex_sidebar_topfont">';
    foreach ($fonts as $font) {
        $selected = ($font == $selected_font) ? 'selected="selected"' : '';
        echo '<option value="' . esc_attr($font) . '" ' . $selected . '>' . esc_html($font) . '</option>';
    }
    echo '</select>';
    echo '<p class="description">' . __('Choose the font style for your top sidebar box titles', 'goldira') . '</p>';
}

function goldira_sidebar_settings_section_cb()
{
	echo '<p>' . __('Set your Sidebar background and other settings below:', 'goldira') . '</p>';
}
function goldira_sidebar_text_color_cb()
{
	$options = get_option('goldira_sidebar_settings');
	echo '<input name="goldira_sidebar_settings[goldira_sidebar_text_color]" id="flex_page_backgroundcolor" class="color-field" value="' . esc_attr($options['goldira_sidebar_text_color'] ?? '') . '" style="width: 80px;" />';
}
function goldira_sidebar_border_color_cb()
{
	$options = get_option('goldira_sidebar_settings');
	echo '<input name="goldira_sidebar_settings[goldira_sidebar_border_color]" id="flex_page_backgroundcolor" class="color-field" value="' . esc_attr($options['goldira_sidebar_border_color'] ?? '') . '" style="width: 80px;" />';
}

function goldira_sidebar_link_color_cb()
{
	$options = get_option('goldira_sidebar_settings');
	echo '<input name="goldira_sidebar_settings[goldira_sidebar_link_color]" id="flex_page_backgroundcolor" class="color-field" value="' . esc_attr($options['goldira_sidebar_link_color'] ?? '') . '" style="width: 80px;" />';
}
function goldira_sidebar_link_hover_color_cb()
{
	$options = get_option('goldira_sidebar_settings');
	echo '<input name="goldira_sidebar_settings[goldira_sidebar_link_hover_color]" id="flex_page_backgroundcolor" class="color-field" value="' . esc_attr($options['goldira_sidebar_link_hover_color'] ?? '') . '" style="width: 80px;" />';
}
/*** end */


/********Post section */

// Function to render the Footer Settings page
function goldira_post_settings_page()
{
	?>
		<div class="wrap">
			<h1><?php _e('Post Settings', 'goldira'); ?></h1>
			<form method="post" action="options.php">
				<?php
				settings_fields('goldira_post_settings_group');
				do_settings_sections('goldira-post-section');
				submit_button();
				?>
			</form>
		</div>
	<?php
}
function goldira_post_settings_page_opc()
{
	register_setting('goldira_post_settings_group', 'goldira_post_settings');
	add_settings_section(
		'goldira_post_setting_section',
		__('Post Settings Page', 'goldira'),
		'goldira_post_setting_section_cb',
		'goldira-post-section',
	);
	add_settings_field(
		'goldira_post_text_color',
		__('Post text color', 'goldira'),
		'goldira_post_text_color_cb',
		'goldira-post-section',
		'goldira_post_setting_section',
	);
	add_settings_field(
		'goldira_post_link_color',
		__('Post Link Color', 'goldira'),
		'goldira_post_link_color_cb',
		'goldira-post-section',
		'goldira_post_setting_section',

	);
	add_settings_field(
		'goldira_post_link_hover_color',
		__('Post Link hover Color', 'goldira'),
		'goldira_post_link_hover_color_cb',
		'goldira-post-section',
		'goldira_post_setting_section',
	);
}
function goldira_post_setting_section_cb()
{
	echo '<p>' . __('Set your Post background and other settings below:', 'goldira') . '</p>';
}
function goldira_post_text_color_cb()
{
	$options = get_option('goldira_post_settings');
	echo '<input name="goldira_post_settings[goldira_post_text_color]" id="flex_page_backgroundcolor" class="color-field" value="' . esc_attr($options['goldira_post_text_color'] ?? '') . '" style="width: 80px;" />';
}
function goldira_post_link_color_cb()
{
	$options = get_option('goldira_post_settings');
	echo '<input name="goldira_post_settings[goldira_post_link_color]" id="flex_page_backgroundcolor" class="color-field" value="' . esc_attr($options['goldira_post_link_color'] ?? '') . '" style="width: 80px;" />';
}
function goldira_post_link_hover_color_cb()
{
	$options = get_option('goldira_post_settings');
	echo '<input name="goldira_post_settings[goldira_post_link_hover_color]" id="flex_page_backgroundcolor" class="color-field" value="' . esc_attr($options['goldira_post_link_hover_color'] ?? '') . '" style="width: 80px;" />';
}
/**** end of post section */


// Function to register settings and add sections and fields
function goldira_footer_settings_page_opc()
{
	// Register Settings
	register_setting('goldira_footer_settings_group', 'goldira_footer_settings');

	// Add Settings Section 
	add_settings_section(
		'goldira_footer_setting_section',
		__('Footer Background ETC', 'goldira'),
		'goldira_footer_setting_section_cb',
		'goldira-footer-section'
	);

	// Add Settings Fields
	add_settings_field(
		'goldira_footer_background',
		__('Footer Background', 'goldira'),
		'goldira_footer_background_cb',
		'goldira-footer-section',
		'goldira_footer_setting_section'
	);
	add_settings_field(
		'goldira_footer_font_size',
		__('Footer Font Size', 'goldira'),
		'goldira_footer_font_size_cb',
		'goldira-footer-section',
		'goldira_footer_setting_section'
	);
	add_settings_field(
		'goldira_footer_text_color',
		__('Footer Text Color', 'goldira'),
		'goldira_footer_text_color_cb',
		'goldira-footer-section',
		'goldira_footer_setting_section'
	);


	add_settings_field(
		'goldira_footer_link_color',
		__('Footer link and widget title color:', 'goldira'),
		'goldira_footer_link_color_cb',
		'goldira-footer-section',
		'goldira_footer_setting_section'
	);
}

// Callback function for the settings section description
function goldira_footer_setting_section_cb()
{
	echo '<p>' . __('Set your footer background and other settings below:', 'goldira') . '</p>';
}

function goldira_footer_font_size_cb()
{
 
	$options = get_option('goldira_footer_settings');
    $font_size = $options['goldira_footer_font_size'] ?? '16';

    echo '<input name="goldira_footer_settings[goldira_footer_font_size]" id="flex_sidebar_tfontsize" type="text" value="' . esc_attr($font_size) . '" style="width: 80px;" />';
    echo '<p class="description">' . __('Select the size (in pixels) of the title font in your top sidebar boxes', 'goldira') . '</p>';


}


// Callback function for the footer background color field
function goldira_footer_background_cb()
{
	$options = get_option('goldira_footer_settings');
	echo '<input name="goldira_footer_settings[goldira_footer_background]" id="flex_page_backgroundcolor" class="color-field" value="' . esc_attr($options['goldira_footer_background'] ?? '') . '" style="width: 80px;" />';
}

// Callback function for the footer text color field
function goldira_footer_text_color_cb()
{
	$options = get_option('goldira_footer_settings');
	echo '<input name="goldira_footer_settings[goldira_footer_textcolor]" id="goldira_footer_textcolor" class="color-field" value="' . esc_attr($options['goldira_footer_textcolor'] ?? '') . '" style="width: 80px;" />';
}



// Callback function for the footer text color field
function goldira_footer_link_color_cb()
{
	$options = get_option('goldira_footer_settings');
	echo '<input name="goldira_footer_settings[goldira_footer_linkcolor]" id="goldira_footer_linkcolor" class="color-field" value="' . esc_attr($options['goldira_footer_linkcolor'] ?? '') . '" style="width: 80px;" />';
}

// Add actions to initialize the settings and add the menu
add_action('admin_menu', 'goldira_admin_menu');
add_action('admin_init', 'goldira_footer_settings_page_opc');
add_action('admin_init', 'goldira_post_settings_page_opc');


// Enqueue color picker script
function enqueue_color_picker($hook_suffix)
{
	wp_enqueue_style('wp-color-picker');
	wp_enqueue_script('wp-color-picker');
	wp_enqueue_script('custom-script-handle', get_template_directory_uri() . '/js/custom-script.js', array('wp-color-picker'), false, true);
}
add_action('admin_enqueue_scripts', 'enqueue_color_picker');
function goldira_enqueue_google_font() {
    $options = get_option('goldira_sidebar_settings');
    $selected_font = $options['goldira_sidebar_topfont'] ?? 'Arial';

    $google_fonts = array(
        'Arial' => 'Arial',
        'Georgia' => 'Georgia',
        'Verdana' => 'Verdana',
        'Trebuchet MS' => 'Trebuchet+MS',
        'Lucida Grande' => 'Lucida+Grande',
        'Courier New' => 'Courier+New',
        'Impact' => 'Impact',
        'Comic Sans MS' => 'Comic+Sans+MS'
    );

    if (isset($google_fonts[$selected_font])) {
        $font_url = 'https://fonts.googleapis.com/css2?family=' . $google_fonts[$selected_font] . ':wght@400;700&display=swap';
        wp_enqueue_style('goldira-google-font', $font_url, array(), null);
    }
}

add_action('wp_enqueue_scripts', 'goldira_enqueue_google_font');

function goldira_footer_menu(){
	register_nav_menu('goldira_footer_menu',__('Footer Menu','goldira'));
}
add_action('init','goldira_footer_menu');
