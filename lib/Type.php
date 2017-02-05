<?php

namespace DTL\WorseReflection;

use DTL\WorseReflection\ClassName;

class Type
{
    const TYPE_STRING = 'string';
    const TYPE_INT = 'int';
    const TYPE_FLOAT = 'float';
    const TYPE_CLASS = 'class';

    private $type;
    private $className;

    public static function unknown()
    {
        return new self();
    }

    public static function string()
    {
        return self::create(self::TYPE_STRING);
    }

    public static function int()
    {
        return self::create(self::TYPE_INT);
    }

    public static function float()
    {
        return self::create(self::TYPE_FLOAT);
    }

    public static function class(ClassName $className)
    {
        $instance = new self();
        $instance->type = self::TYPE_CLASS;
        $instance->className = $className;

        return $instance;
    }

    public function __toString()
    {
        return $this->type ?: '<unknown>';
    }

    private static function create($type)
    {
        $instance = new self();
        $instance->type = $type;

        return $instance;
    }
}