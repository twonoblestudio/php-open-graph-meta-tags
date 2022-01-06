<?php

declare(strict_types=1);

namespace TwoNobleStudio\OpenGraph\Test;

class OpenGraphContextTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @expectedException InvalidArgumentException
     */
    public function testNonExistingType()
    {
        $context = new \TwoNobleStudio\OpenGraph\OpenGraphContext();
        $context->setType('not_existing_type');
    }
}
