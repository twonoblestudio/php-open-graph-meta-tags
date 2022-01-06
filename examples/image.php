<?php

declare(strict_types=1);

require '../vendor/autoload.php';

$context = new \TwoNobleStudio\OpenGraph\OpenGraphContext();
$context->setType('website');
$context->setTitle('Frontpage');
$context->setSiteName('Google');
$context->setDescription('Google search engine');
$context->setUrl('https://google.com/');

$image = new \TwoNobleStudio\OpenGraph\ContextType\Image();
$image->setImage('https://google.com/images/logo.png');
$image->setSecureUrl('https://google.com/images/logo.png');
$image->setWidth(1024);
$image->setHeight(768);
$image->setType('image/png');
$image->setAlt('Google logo');
$context->addImage($image);

$properties = $context->getProperties();

echo $context->generateHtml($properties);
