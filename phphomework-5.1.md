```php
// get_post_status() will get the parent status for attachments.
$status = get_post_status($post);

$status_obj = get_post_status_object($status);

if ( !comments_open($comment_post_ID) ) 
{
    do_action('comment_closed', $comment_post_ID);
	wp_die( __('Sorry, comments are closed for this item.') );
} 
* If comments are not open, perform the action 'comment closed.
* also show the message 'Sorry, comments are closed for this item.
* If comments are open, perform action of pre comment on post

elseif ( 'trash' == $status ) 

{
	do_action('comment_on_trash', $comment_post_ID);
	exit;
}
* If trash is equal to your status, do action of comment on trash
* Exit once done

elseif ( !$status_obj->public && !$status_obj->private )

{
	do_action('comment_on_draft', $comment_post_ID);
	exit;
}
*If post status is not public and not private, do action of commenting on draft
* Exit once done

elseif ( post_password_required($comment_post_ID) )

{
	do_action('comment_on_password_protected', $comment_post_ID);
	exit;
} 
*If password is required, allow user to post on password protected post
* Exit once done

else 

{
	do_action('pre_comment_on_post', $comment_post_ID);
}
```