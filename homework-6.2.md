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
* Line 4 is a while statement
* If line 4 is true, it does line 10 and loops back to line 4
* If line 4 is false, it goes to line 12 and executes line 14