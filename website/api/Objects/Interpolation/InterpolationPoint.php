<?php

namespace Destiny2\Api\Objects\Interpolation;

/**
 * InterpolationPoint
 */
class InterpolationPoint
{

    const NAME = 'Interpolation.InterpolationPoint';

    const TYPE = 'object';

    public $value = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $weight = [
        'type' => 'integer',
        'format' => 'int32',
    ];


}

