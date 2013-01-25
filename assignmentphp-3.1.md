```php
public function display() {
    	$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
            
		}
```

* Space between 5 and 6 to see distinction between the variable being declared and the if statement
* The if statements appear to be repetitive.
* Changing the block format for readability

```php
        $page = $subpage = $title_for_layout = null;
		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));
		$this->render(implode('/', $path));
	}
```
