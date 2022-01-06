<?php

declare(strict_types=1);

require '../vendor/autoload.php';

$context = new \TwoNobleStudio\OpenGraph\OpenGraphContext();
$context->setType('website');
$context->setTitle('Frontpage');
$context->setSiteName('Google');
$context->setDescription('Google search engine');
$context->setUrl('https://google.com/');

$properties = $context->getProperties();

echo $context->getNamespace($properties);
