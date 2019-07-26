<?php

namespace Destiny2\Api\Objects\Interpolation\InterpolationPointFloat;

/**
 * InterpolationPointFloat
 *
 * No description
 */
class InterpolationPointFloat
{

    const TYPE = 'object';

    public $value = [
        'type' => 'number',
        'format' => 'float',
    ];

    public $weight = [
        'type' => 'number',
        'format' => 'float',
    ];


}

