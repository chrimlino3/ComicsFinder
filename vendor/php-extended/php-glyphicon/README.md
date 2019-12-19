# php-glyphicon
A library to insert more easily glyphicons to your php templates

## Installation

The installation of this library is made via composer.
Download `composer.phar` from [their website](https://getcomposer.org/download/).
Then add to your composer.json :

```json
	"require": {
		...
		"php-extended/php-glyphicon": "^1.0",
		...
	}
```

IMPORTANT NOTE : This library does not provide any font for the glyphicons.
You must find them yourself and add them to your html pages by yourself. 
[Bootstrap 3](http://getbootstrap.com/components/#glyphicons) provides such
icons you can add to your html pages. 

## Basic Usage

This library is only intended to reduce typing when creating templates. In 
such php templates, you can use :

```php

use PhpExtended\Glyphicon\Glyphicon as G;

echo G::EURO;	// echoes 'euro'
echo G::EURO();	// echoes '<span class="glyphicon glyphicon-euro" aria-hidden="true"></span>'

echo G::make(G::EURO);	// equivalent to G::EURO()

```

## License

MIT (See [license file](LICENSE)).
