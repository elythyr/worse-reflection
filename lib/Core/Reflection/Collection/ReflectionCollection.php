<?php

namespace Phpactor\WorseReflection\Core\Reflection\Collection;

use array;
use bool;
use Phpactor\WorseReflection\Core\ServiceLocator;
use Phpactor\WorseReflection\Bridge\TolerantParser\Reflection\Collection\AbstractReflectionCollection;
use Phpactor\WorseReflection\Core\SourceCode;

interface ReflectionClassCollection
{
    public function count();

    public function keys(): array;

    public function fromReflections(ServiceLocator $serviceLocator, array $reflections);

    public function empty(ServiceLocator $serviceLocator);

    public function merge(AbstractReflectionCollection $collection);

    public function get(string $name);

    public function first();

    public function last();

    public function has(string $name): bool;

    public function getIterator();

    public function offsetGet($name);

    public function offsetSet($name, $value);

    public function offsetUnset($name);

    public function offsetExists($name);

    public function fromSource(ServiceLocator $serviceLocator, SourceCode $source);

    public function concrete();
}