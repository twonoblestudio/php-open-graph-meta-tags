# twonoblestudio/php-open-graph-meta-tags

A simple library to generate Open Graph HTML meta tags to publish for your own website.

Using this library you can easily generate standard Open Graph output for:

* Article
* Audio
* Book
* Image
* Music album
* Music playlist
* Music radio station
* Music song
* Produc
* Profile
* Video
* Video episode
* Video movie
* Video TV show
* Video other

For more information about Open Graph protocol visite [ogp.me](http://ogp.me).

## Requirements

* PHP 7.4+

## Installation

The most flexible installation method is using Composer: Simply create a composer.json file in the root of your project:
``` json
{
    "require": {
        "twonoblestudio/php-open-graph-meta-tags": "^1.0"
    }
}
```

Install composer and run install command:
``` bash
curl -s http://getcomposer.org/installer | php
php composer.phar install
``` 

Once installed, include vendor/autoload.php in your script.

``` php
require "vendor/autoload.php";
```

## Usage

### Basic usage

```
$context = new \TwoNobleStudio\OpenGraph\OpenGraphContext();
$context->setType('website');
$context->setTitle('Frontpage');
$context->setSiteName('Google');
$context->setDescription('Google search engine');
$context->setUrl('https://google.com/');

$properties = $context->getProperties();

echo $context->generateHtml($properties);
```

### Output Open Graph meta data

```
$properties = $context->getProperties();

echo $context->generateHtml($properties);
```

### Output Open Graph namespace

```
$properties = $context->getProperties();

echo $context->getNamespace($properties);
```

## Running tests

You can run the test suite by running `phpunit` from the command line.

## License

This library is licensed under the MIT license.
