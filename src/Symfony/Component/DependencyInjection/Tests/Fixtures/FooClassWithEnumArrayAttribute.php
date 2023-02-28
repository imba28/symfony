<?php

namespace Symfony\Component\DependencyInjection\Tests\Fixtures;

class FooClassWithEnumArrayAttribute
{
    private array $bar;

    public function __construct(array $bar)
    {
        $this->bar = $bar;
    }

    public function getBar(): array
    {
        return $this->bar;
    }
}
