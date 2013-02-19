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
foreach ( $avatar_defaults as $default_key => $default_name ) {
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