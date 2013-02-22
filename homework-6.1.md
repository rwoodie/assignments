```php
<?php
$avatar_defaults = array(
    'mystery' => __('Mystery Man'),
	'blank' => __('Blank'),
	'gravatar_default' => __('Gravatar Logo'),
	'identicon' => __('Identicon (Generated)'),
	'wavatar' => __('Wavatar (Generated)'),
	'monsterid' => __('MonsterID (Generated)'),
	'retro' => __('Retro (Generated)')
); //This is an array and the type is a list
//The indexes in the list are lines 4-10

$avatar_defaults = apply_filters('avatar_defaults', $avatar_defaults);
$default = get_option('avatar_default');
if ( empty($default) )
	$default = 'mystery';
$size = 32;
$avatar_list = '';
foreach ( $avatar_defaults as $default_key => $default_name ) 
// line 20 is an example of a foreach
{
	$selected = ($default == $default_key) ? 'checked="checked" ' : '';
	$avatar_list .= "\n\t<label><input type='radio' name='avatar_default' id='avatar_{$default_key}' value='" . esc_attr($default_key) . "' {$selected}/> ";

	$avatar = get_avatar( $user_email, $size, $default_key );
	$avatar_list .= preg_replace("/src='(.+?)'/", "src='\$1&amp;forcedefault=1'", $avatar);

	$avatar_list .= ' ' . $default_name . '</label>';
	$avatar_list .= '<br />';
}
echo apply_filters('default_avatar_select', $avatar_list);
?>
```

```php
$post_fields = array( 'menu-item-db-id', 'menu-item-object-id', 'menu-item-object', 'menu-item-parent-id', 'menu-item-position', 'menu-item-type', 'menu-item-title', 'menu-item-url', 'menu-item-description', 'menu-item-attr-title', 'menu-item-target', 'menu-item-classes', 'menu-item-xfn' );
    			wp_defer_term_counting(true);
				// Loop through all the menu items' POST variables
				if ( ! empty( $_POST['menu-item-db-id'] ) ) {
					foreach( (array) $_POST['menu-item-db-id'] as $_key => $k )
                    
```
* Line 37 is an example of an array
* The indexes in the list are strings in line 37. 'menu-item-db-id', 'menu-item-object-id', 'menu-item-object', 'menu-item-parent-id', 'menu-item-position', 'menu-item-type',


```php
class i18nSchema extends CakeSchema 

{

// @codingStandardsIgnoreEnd

    public $name = 'i18n';

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $i18n = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'locale' => array('type' => 'string', 'null' => false, 'length' => 6, 'key' => 'index'),
		'model' => array('type' => 'string', 'null' => false, 'key' => 'index'),
		'foreign_key' => array('type' => 'integer', 'null' => false, 'length' => 10, 'key' => 'index'),
		'field' => array('type' => 'string', 'null' => false, 'key' => 'index'),
		'content' => array('type' => 'text', 'null' => true, 'default' => null),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'locale' => array('column' => 'locale', 'unique' => 0), 'model' => array('column' => 'model', 'unique' => 0), 'row_id' => array('column' => 'foreign_key', 'unique' => 0), 'field' => array('column' => 'field', 'unique' => 0))
	);

}
// this is an example of an arry
line 65 - 71 are indexes in the list. The indexes are strings as they have been identified as single quotes.
```

```php
Configure::write('Dispatcher.filters', array(
    'AssetDispatcher',
    'CacheDispatcher'
)); // Here's an array that is using strings in the list

/**
 * Configures default file logging options
 */
App::uses('CakeLog', 'Log');
CakeLog::config('debug', array(
	'engine' => 'FileLog',
	'types' => array('notice', 'info', 'debug'),
	'file' => 'debug',
)); // Another array that is using strings in the list
CakeLog::config('error', array(
	'engine' => 'FileLog',
	'types' => array('warning', 'error', 'critical', 'alert', 'emergency'),
	'file' => 'error',
));
```