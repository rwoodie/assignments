/wp-content/themes/twentyeleven/functions.php:329-337
```php
/**
 * Sets the post excerpt length to 40 words.
 *
 * To override this length in a child theme, remove the filter and add your own
 * function tied to the excerpt_length filter hook.
 */
function twentyeleven_excerpt_length( $length ) 
{
    return 40;
}
```
* The name of the function is twentyeleven_excerpt_length
* The argument is $length
* The scope is line 10-12 on this page and line 35-37 in the original file
* The return function is line 11 on this page and line 336 in the original file
* The doc block for the function is lines 329-334 and defines what the function will do

/wp-content/themes/twentyeleven/functions.php:53-209
```php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * To override twentyeleven_setup() in a child theme, add your own twentyeleven_setup to your child theme's
 * functions.php file.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To style the visual editor.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links, custom headers
 *     and backgrounds, and post formats.
 * @uses register_nav_menus() To add support for navigation menus.
 * @uses register_default_headers() To register the default custom header images provided with the theme.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Twenty Eleven 1.0
 */
 
function twentyeleven_setup() 

{ // Lines 73 - 209 is the scope

	/* Make Twenty Eleven available for translation.
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Eleven, use a find and replace
	 * to change 'twentyeleven' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'twentyeleven', get_template_directory() . '/languages' );

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Load up our theme options page and related code.
	require( get_template_directory() . '/inc/theme-options.php' );

	// Grab Twenty Eleven's Ephemera widget.
	require( get_template_directory() . '/inc/widgets.php' );

	// Add default posts and comments RSS feed links to <head>.
	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'twentyeleven' ) );

	// Add support for a variety of post formats
	add_theme_support( 'post-formats', array( 'aside', 'link', 'gallery', 'status', 'quote', 'image' ) );

	$theme_options = twentyeleven_get_theme_options();
	if ( 'dark' == $theme_options['color_scheme'] )
		$default_background_color = '1d1d1d';
	else
		$default_background_color = 'e2e2e2';

```php

* The doc block for the function is lines 53-72 in the original file
* We have some params in the doc block with lines 63-69 that defines the functions
* Lines 73 - 209 in the original file is the scope. I did not copy all of the lines
* Line 73 in the original file is a function and the name of the function is twentyeleven_setup
* $theme_options is a variable inside the scope - Line 100 in original file
* $default_background_color is a variable inside the scope - Line 102 in the original file


/wp-content/themes/twentyeleven/functions.php: 474-505
```php
/**
 * Count the number of footer sidebars to enable dynamic classes for the footer
 */
function twentyeleven_footer_sidebar_class() 
{
    $count = 0;

	if ( is_active_sidebar( 'sidebar-3' ) )
		$count++;

	if ( is_active_sidebar( 'sidebar-4' ) )
		$count++;

	if ( is_active_sidebar( 'sidebar-5' ) )
		$count++;

	$class = '';

	switch ( $count ) 
    {
		case '1':
			$class = 'one';
			break;
		case '2':
			$class = 'two';
			break;
		case '3':
			$class = 'three';
			break;
	}

	if ( $class )
		echo 'class="' . $class . '"';
}
```
* The doc block for the function is between lines 474-476
* The name of the function is twentyeleven_footer_sidebar_class
* The scope of the function exists between 477-505
* The variable inside of the scope is $count
* I did not see any arguments for this function
* I did not see where the variable was used elsewhere in the code

/wp-content/themes/twentyeleven/functions.php: 596-612
/**
 * Adds two classes to the array of body classes.
 * The first is if the site has only had one author with published posts.
 * The second is if a singular post being displayed
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_body_classes( $classes ) 
{

    if ( function_exists( 'is_multi_author' ) && ! is_multi_author() )
		$classes[] = 'single-author';

	if ( is_singular() && ! is_home() && ! is_page_template( 'showcase.php' ) && ! is_page_template( 'sidebar-page.php' ) )
		$classes[] = 'singular';

	return $classes;
}
* The doc block for the funtion is on lines 596-602
* The param is @since Twenty Eleven 1.0
* The name of the function is twentyeleven_body_classes
* The argument is the variable $classes
* The return is on line 611 with return $classes
