`src/wp-includes/class-pop3.php:19-55`
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
* Method: function POP3
* Arguments: $server = '', $timeout = ''