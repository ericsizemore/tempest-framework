<?php

declare(strict_types=1);

namespace Tests\Tempest\Unit\Container\Fixtures;

use Tempest\Container\InitializedBy;

#[InitializedBy(ContainerObjectDInitializer::class)]
class ContainerObjectD
{
    public function __construct(public string $prop)
    {
    }
}