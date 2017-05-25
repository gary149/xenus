<?php

namespace Xenus\Document\Accessors;

trait CamelCaseAccessor
{
    /**
     * Transforms the given string into CamelCase
     *
     * @param  string $offset The string to transform
     *
     * @return string The string into CamelCase
     */
    public function getterIze($offset)
    {
        return 'get' . str_replace(' ', '', ucwords(strtr($offset, '_-', '  ')));
    }

    /**
     * Transforms the given string into CamelCase
     *
     * @param  string $offset The string to transform
     *
     * @return string The string into CamelCase
     */
    public function setterIze($offset)
    {
        return 'set' . str_replace(' ', '', ucwords(strtr($offset, '_-', '  ')));
    }
}
