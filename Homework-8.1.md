`src/wordpress/wp-includes/class-pop3.php:19-55`
```php
class POP3 {
    var $ERROR      = '';       //  Error string.

    var $TIMEOUT    = 60;       //  Default timeout before giving up on a
                                //  network operation.

    var $COUNT      = -1;       //  Mailbox msg count

    var $BUFFER     = 512;      //  Socket buffer for socket fgets() calls.
                                //  Per RFC 1939 the returned line a POP3
                                //  server can send is 512 bytes.

    var $FP         = '';       //  The connection to the server's
                                //  file descriptor

    var $MAILSERVER = '';       // Set this to hard code the server name

    var $DEBUG      = FALSE;    // set to true to echo pop3
                                // commands and responses to error_log
                                // this WILL log passwords!

    var $BANNER     = '';       //  Holds the banner returned by the
                                //  pop server - used for apop()

    var $ALLOWAPOP  = FALSE;    //  Allow or disallow apop()
                                //  This must be set to true
                                //  manually

    function POP3 ( $server = '', $timeout = '' ) {
        settype($this->BUFFER,"integer");
        if( !empty($server) ) {
            // Do not allow programs to alter MAILSERVER
            // if it is already specified. They can get around
            // this if they -really- want to, so don't count on it.
            if(empty($this->MAILSERVER))
                $this->MAILSERVER = $server;
        }
```
* Class name: POP3
* Properties: The properties are public as they are using "var" in front. var $ERROR, var $TIMEOUT, var $FP, var $BANNER
* Method: POP3
* Arguments: $server = '', $timeout = ''


`src/wordpress/wp-includes/class-feed.php:6-16`
```php
class WP_Feed_Cache extends SimplePie_Cache {
    /**
	 * Create a new SimplePie_Cache object
	 *
	 * @static
	 * @access public
	 */
	function create($location, $filename, $extension) {
		return new WP_Feed_Cache_Transient($location, $filename, $extension);
	}
}
```
* Class name: WP_Feed_Cache
* Method: create
* arguments: $location, $filename, $extension
* return: new instance of WP_Feed_Cache_Transient


`src/wordpress/wp-includes/class-feed.php:18-27`
```php
class WP_Feed_Cache_Transient {
    var $name;
	var $mod_name;
	var $lifetime = 43200; //Default lifetime in cache of 12 hours

	function __construct($location, $filename, $extension) {
		$this->name = 'feed_' . $filename;
		$this->mod_name = 'feed_mod_' . $filename;
		$this->lifetime = apply_filters('wp_feed_cache_transient_lifetime', $this->lifetime, $filename);
	}
```
* Class name: WP_Feed_Cache_Transient
* Public properties: var $name, var $mod_name, var $lifetime
* Method: __construct
* arguments: $location, $filename, $extension


`src/wordpress/wp-includes/class-wp-editor.php:11-28`
```php
final class _WP_Editors {
    public static $mce_locale;

	private static $mce_settings = array();
	private static $qt_settings = array();
	private static $plugins = array();
	private static $qt_buttons = array();
	private static $ext_plugins;
	private static $baseurl;
	private static $first_init;
	private static $this_tinymce = false;
	private static $this_quicktags = false;
	private static $has_tinymce = false;
	private static $has_quicktags = false;
	private static $has_medialib = false;
	private static $editor_buttons_css = true;

	private function __construct() {}
```
* Class name: _WP_Editors 
* Public property: $mce_locale
* Private properties: Line 14-26
* Method: __construct
* There are no arguments associated with the "__construct" method


`src/wordpress/wp-includes/class-wp-editor.php:154-166`
```php
    public static function editor_settings($editor_id, $set) {
		global $editor_styles;
		$first_run = false;

		if ( empty(self::$first_init) ) {
			if ( is_admin() ) {
				add_action( 'admin_print_footer_scripts', array( __CLASS__, 'editor_js'), 50 );
				add_action( 'admin_footer', array( __CLASS__, 'enqueue_scripts'), 1 );
			} else {
				add_action( 'wp_print_footer_scripts', array( __CLASS__, 'editor_js'), 50 );
				add_action( 'wp_footer', array( __CLASS__, 'enqueue_scripts'), 1 );
			}
		}
```
* Method: editor_settings
* Arguments: $editor_id, $set
* Public property: I think $first_run is a public property as it is not labeled private or protected

`src/wordpress/wp-includes/class-wp-embed.php:9-33`
```php
class WP_Embed {
    var $handlers = array();
	var $post_ID;
	var $usecache = true;
	var $linkifunknown = true;

	/**
	 * Constructor
	 */
	function __construct() {
		// Hack to get the [embed] shortcode to run before wpautop()
		add_filter( 'the_content', array( $this, 'run_shortcode' ), 8 );

		// Shortcode placeholder for strip_shortcodes()
		add_shortcode( 'embed', '__return_false' );

		// Attempts to embed all URLs in a post
		add_filter( 'the_content', array( $this, 'autoembed' ), 8 );

		// When a post is saved, invalidate the oEmbed cache
		add_action( 'pre_post_update', array( $this, 'delete_oembed_caches' ) );

		// After a post is saved, cache oEmbed items via AJAX
		add_action( 'edit_form_advanced', array( $this, 'maybe_run_ajax_cache' ) );
	}
```
* Class name: WP_Embed
* Public properties: var $handlers, var $post_ID, var $usecache, var $linkifunknown
* Method: __construct
* No arguments associated with this method


`src/wordpress/wp-admin/includes/class-pclzip.php:190-222`
```php
  class PclZip
  {
    // ----- Filename of the zip file
    var $zipname = '';

    // ----- File descriptor of the zip file
    var $zip_fd = 0;

    // ----- Internal error handling
    var $error_code = 1;
    var $error_string = '';

    // ----- Current status of the magic_quotes_runtime
    // This value store the php configuration for magic_quotes
    // The class can then disable the magic_quotes and reset it after
    var $magic_quotes_status;

  // --------------------------------------------------------------------------------
  // Function : PclZip()
  // Description :
  //   Creates a PclZip object and set the name of the associated Zip archive
  //   filename.
  //   Note that no real action is taken, if the archive does not exist it is not
  //   created. Use create() for that.
  // --------------------------------------------------------------------------------
  function PclZip($p_zipname)
  {

    // ----- Tests the zlib
    if (!function_exists('gzopen'))
    {
      die('Abort '.basename(__FILE__).' : Missing zlib extensions');
    }
```
* Class name: PclZip
* Public property: $zipname, $zip_fd, $error_code, $error_string
* Method: PclZip
* Argument: $p_zipname