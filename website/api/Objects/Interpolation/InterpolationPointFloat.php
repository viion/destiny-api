<?php

namespace Destiny2\Api\Objects\Interpolation;

/**
 * InterpolationPointFloat
 */
class InterpolationPointFloat
{

    const NAME = 'Interpolation.InterpolationPointFloat';

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

