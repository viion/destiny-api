<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Misc.DestinyColor
 */
class Misc.DestinyColor
{

    const NAME = 'Destiny.Misc.DestinyColor';

    const TYPE = 'object';

    public $red = [
        'type' => 'string',
        'format' => 'byte',
    ];

    public $green = [
        'type' => 'string',
        'format' => 'byte',
    ];

    public $blue = [
        'type' => 'string',
        'format' => 'byte',
    ];

    public $alpha = [
        'type' => 'string',
        'format' => 'byte',
    ];


}

