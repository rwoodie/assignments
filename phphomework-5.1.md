```php
// get_post_status() will get the parent status for attachments.
$status = get_post_status($post);

$status_obj = get_post_status_object($status);

if ( !comments_open($comment_post_ID) ) 
{
    do_action('comment_closed', $comment_post_ID);
	wp_die( __('Sorry, comments are closed for this item.') );
} 
// If comments are not open, perform the action 'comment closed.
// also show the message 'Sorry, comments are closed for this item.
// If comments are open, perform action of pre comment on post

elseif ( 'trash' == $status ) 

{
	do_action('comment_on_trash', $comment_post_ID);
	exit;
}
// If trash is equal to your status, do action of comment on trash
// Exit once done

elseif ( !$status_obj->public && !$status_obj->private )

{
	do_action('comment_on_draft', $comment_post_ID);
	exit;
}
// If post status is not public and not private, do action of commenting on draft
// Exit once done

elseif ( post_password_required($comment_post_ID) )

{
	do_action('comment_on_password_protected', $comment_post_ID);
	exit;
} 
// If password is required, allow user to post on password protected post
// Exit once done

else 

{
	do_action('pre_comment_on_post', $comment_post_ID);
}
```

```php

/**
 * trackback_response() - Respond with error or success XML message
 *
 * @param int|bool $error Whether there was an error
 * @param string $error_message Error message if an error occurred
 */
function trackback_response($error = 0, $error_message = '') 
{
	header('Content-Type: text/xml; charset=' . get_option('blog_charset') );
	if ($error) 
    {
		echo '<?xml version="1.0" encoding="utf-8"?'.">\n";
		echo "<response>\n";
		echo "<error>1</error>\n";
		echo "<message>$error_message</message>\n";
		echo "</response>";
		die();
	} 
    
    else 
    
    {
		echo '<?xml version="1.0" encoding="utf-8"?'.">\n";
		echo "<response>\n";
		echo "<error>0</error>\n";
		echo "</response>";
	}
}
// If error, echo lines 63-67
// Then die
// Otherwise (else) echo lines 74-77

```

```php

$wp_list_table = _get_list_table('WP_Comments_List_Table');
$pagenum = $wp_list_table->get_pagenum();

$doaction = $wp_list_table->current_action();

if ( $doaction ) 
{
    check_admin_referer( 'bulk-comments' );
// When doaction is true, execute line 95
	
    if ( 'delete_all' == $doaction && !empty( $_REQUEST['pagegen_timestamp'] ) ) 
// When delete all is equal to doaction and not empty, execute lines 101-104    
    {
		$comment_status = $wpdb->escape( $_REQUEST['comment_status'] );
		$delete_time = $wpdb->escape( $_REQUEST['pagegen_timestamp'] );
		$comment_ids = $wpdb->get_col( "SELECT comment_ID FROM $wpdb->comments WHERE comment_approved = '$comment_status' AND '$delete_time' > comment_date_gmt" );
		$doaction = 'delete';
	} 
    
    elseif ( isset( $_REQUEST['delete_comments'] ) ) 
// When set to delete comments, execute line 110 and 111    
    {
		$comment_ids = $_REQUEST['delete_comments'];
		$doaction = ( $_REQUEST['action'] != -1 ) ? $_REQUEST['action'] : $_REQUEST['action2'];
	} 
    
    elseif ( isset( $_REQUEST['ids'] ) ) 
// When set to ids, execute line 117   
    {
		$comment_ids = array_map( 'absint', explode( ',', $_REQUEST['ids'] ) );
	} 
    
    elseif ( wp_get_referer() ) 
//Get wp referer 
//and then exit
    {
		wp_safe_redirect( wp_get_referer() );
		exit;
    }

```

```php

// Register core Ajax calls.
if ( ! empty( $_GET['action'] ) && in_array( $_GET['action'], $core_actions_get ) )
    add_action( 'wp_ajax_' . $_GET['action'], 'wp_ajax_' . str_replace( '-', '_', $_GET['action'] ), 1 );
// here is an example of a guard clause. If line 133 is true, execute line 134. If false, die.

if ( ! empty( $_POST['action'] ) && in_array( $_POST['action'], $core_actions_post ) )
	add_action( 'wp_ajax_' . $_POST['action'], 'wp_ajax_' . str_replace( '-', '_', $_POST['action'] ), 1 );
// If line 137 is true, execute line 138. If false, die.

add_action( 'wp_ajax_nopriv_autosave', 'wp_ajax_nopriv_autosave', 1 );

if ( is_user_logged_in() )
	do_action( 'wp_ajax_' . $_REQUEST['action'] ); // Authenticated actions
// If line 143 is true, execute line 144
else
	do_action( 'wp_ajax_nopriv_' . $_REQUEST['action'] ); // Non-admin actions
// this else statement is related to the if statement on line 143

// Default status
die( '0' );

```