<?php

namespace Destiny2\Api\Objects\Destiny\Misc\DestinyColor;

/**
 * DestinyColor
 *
 * Represents a color whose RGBA values are all represented as values between 0 and
 * 255.
 */
class DestinyColor
{

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

