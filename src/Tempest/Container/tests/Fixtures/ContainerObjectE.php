<?php

declare(strict_types=1);

namespace Tempest\Container\Tests\Fixtures;

class ContainerObjectE
{
    public function __construct(public string $id = 'default')
    {
    }
}