# Homework 2.1 - Ever wonder what all these signs say?

For Homework 1.1, you found a nice project on Github, forked it into your own account, and cloned it into your Cloud 9 IDE account. For this assignment, pick one or more PHP files from your project (you DID pick a PHP project, didn't you?) and identify some of the following items of PHP grammar and vocabulary that we talked about in class, including but not limited to:

* Variables: `$name`
* Constants: `E_USER_WARNING`, `MY_AWESOME_CONSTANT`
* Arithmetic operators: addition (+), subtraction (-)
* Functions: `array_slice()`, `do_something_amazing()`

When you find one, identify the file and line number in this file, below the instrcutions per the example below. Try to make the indentation match the original file (yes, copy and paste), even if that means there's NO indentation. Crazy PHPers.

You don't have to identify EVERYTHING in a given line or even in a single file, but you may get extra points if you're thorough or make a survey of more than one file... And you might get docked if you make too much work for me. I at least want to see about 50 lines of code.

When you're done editing this file, save it, commit it, and push it to your "assignments" repo, called "origin". You remember how to push, right?

## Your work should look like this...

`path/to/file.php:3`
```php
    if ( MY_AWESOME_CONSTANT )
    // Constant: MY_AWESOME_CONSTANT
```

`path/to/file.php:42`
```php
    $name = do_something_amazing() + 1;
    // Variable: $name
    // Function: do_something_amazing()
    // Literal: 1 (integer)
```

## Now get to it!

`rwoodie/cakephp/app/Schema/sessions.php`
```class SessionsSchema extends CakeSchema {

    public $name = 'Sessions';
    // Variable: public $name
    // Function: 'Sessions'

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $cake_sessions = array(
		'id' => array('type' => 'string', 'null' => false, 'key' => 'primary'),
		'data' => array('type' => 'text', 'null' => true, 'default' => null),
		'expires' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

}
```

`rwoodie/cakephp/lib/Cake/Cache/Engine/CacheEngine.php`
```/**
 * Generates a safe key for use with cache engine storage engines.
 *
 * @param string $key the key passed over
 * @return mixed string $key or false
 */
    public function key($key) {
		if (empty($key)) {
			return false;
		}
    //if 
    //Condition: (empty($key))
    //Statement: return false
		$prefix = '';
		if (!empty($this->_groupPrefix)) {
			$prefix = vsprintf($this->_groupPrefix, $this->groups());
		}

		$key = preg_replace('/[\s]+/', '_', strtolower(trim(str_replace(array(DS, '/', '.'), '_', strval($key)))));
		return $prefix . $key;
	}
```

`rwoodie/cakephp/lib/Config/unicode/casefolding/routes.php`
```foreach ($prefixes as $prefix) {
    $params = array('prefix' => $prefix, $prefix => true);
	$indexParams = $params + array('action' => 'index');
	Router::connect("/{$prefix}/:controller", $indexParams);
	Router::connect("/{$prefix}/:controller/:action/*", $params);
}
Router::connect('/:controller', array('action' => 'index'));
Router::connect('/:controller/:action/*');

$namedConfig = Router::namedConfig();
    // Variable: $namedConfig
    // Function: Router::namedConfig()
if ($namedConfig['rules'] === false) {
	Router::connectNamed(true);
    // if statement
    // Condition: ($namedConfig['rules'] === false)
    // Statement: Router::connectNamed(true)
    // Boolean: true
}
```
