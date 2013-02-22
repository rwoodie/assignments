```php

    		/* Start the Loop */
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			endwhile;

			twentytwelve_content_nav( 'nav-below' );

```
* Line 4 is a while loop
* If line 4 is true, it does line 10 and loops back to line 4
* If line 4 is false, it goes to line 12 and executes line 14

```php
<?php

$maxdeep = (int) apply_filters( 'thread_comments_depth_max', 10 );

$thread_comments_depth = '</label><label for="thread_comments_depth"><select name="thread_comments_depth" id="thread_comments_depth">';
for ( $i = 2; $i <= $maxdeep; $i++ ) 
{
    $thread_comments_depth .= "<option value='" . esc_attr($i) . "'";
	if ( get_option('thread_comments_depth') == $i ) $thread_comments_depth .= " selected='selected'";
	$thread_comments_depth .= ">$i</option>";
}
$thread_comments_depth .= '</select>';

printf( __('Enable threaded (nested) comments %s levels deep'), $thread_comments_depth );

?>
```
* Line 27 is a for loop
* $i = 2 is the Initialization. $i <= $maxdeep is the condition. $i++ is the exit
* Line 27 - If  $i = 2; $i <= $maxdeep; is true, do line 29 
* If line 30 is true, do line 31 and go back to line 27 to do $i++ and then test the condition $i <= $maxdeep; again
* If line 30 is false do line 33 and then line 35
* Line 30 is a guard clause

```php
$prefixes = Router::prefixes();

if ($plugins = CakePlugin::loaded()) 
{
    App::uses('PluginShortRoute', 'Routing/Route');
	foreach ($plugins as $key => $value) 
    {
		$plugins[$key] = Inflector::underscore($value);
	}
	$pluginPattern = implode('|', $plugins);
	$match = array('plugin' => $pluginPattern);
	$shortParams = array('routeClass' => 'PluginShortRoute', 'plugin' => $pluginPattern);

	foreach ($prefixes as $prefix) 
    {
		$params = array('prefix' => $prefix, $prefix => true);
		$indexParams = $params + array('action' => 'index');
		Router::connect("/{$prefix}/:plugin", $indexParams, $shortParams);
		Router::connect("/{$prefix}/:plugin/:controller", $indexParams, $match);
		Router::connect("/{$prefix}/:plugin/:controller/:action/*", $params, $match);
	}
	Router::connect('/:plugin', array('action' => 'index'), $shortParams);
	Router::connect('/:plugin/:controller', array('action' => 'index'), $match);
	Router::connect('/:plugin/:controller/:action/*', array(), $match);
}

```
* Line 52 is a foreach loop. It will loop through the array
* Line 60 is a foreach loop.



