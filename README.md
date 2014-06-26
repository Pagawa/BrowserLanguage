BrowserLanguage
===========


Description
---------

BrowserLanguage is a PHP function to detect the browser language (via the HTTP Accept-Language format).


Quick Example
---------

```php
<?php

require 'Pagawa/BrowserLanguage/browserLanguage.php';

// For the example, the PHP header will be like this :
// $_SERVER['HTTP_ACCEPT_LANGUAGE'] = 'fr,fr-fr;q=0.8,en-us;q=0.5,en;q=0.3'

$browserLanguage = browserLanguage($_SERVER['HTTP_ACCEPT_LANGUAGE']);

print_r($browserLanguage);
```

This above example will output :

```php
Array
(
    [0] => Array
        (
            [primary] => fr
            [qvalue] => 1
        )

    [1] => Array
        (
            [primary] => fr
            [full] => fr-fr
            [qvalue] => 0.8
        )

    [2] => Array
        (
            [primary] => en
            [full] => en-us
            [qvalue] => 0.5
        )

    [3] => Array
        (
            [primary] => en
            [qvalue] => 0.3
        )
)
```


Requirements
---------

PHP 5 (>= 5.0.0)


Contributing
---------

All any issues or pull requests must be submitted through GitHub.

* To report an issue or a feature request, please use [GitHub Issues](https://github.com/Pagawa/BrowserLanguage/issues).
* To make a pull request, please create a new branch for each feature or issue.


ChangeLog
---------

* 2014-06-26 - First commit
