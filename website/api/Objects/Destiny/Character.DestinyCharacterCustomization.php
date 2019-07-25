<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Character.DestinyCharacterCustomization
 */
class Character.DestinyCharacterCustomization
{

    const NAME = 'Destiny.Character.DestinyCharacterCustomization';

    const TYPE = 'object';

    public $personality = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $face = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $skinColor = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $lipColor = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $eyeColor = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $hairColors = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];

    public $featureColors = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];

    public $decalColor = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $wearHelmet = [
        'type' => 'boolean',
    ];

    public $hairIndex = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $featureIndex = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $decalIndex = [
        'type' => 'integer',
        'format' => 'int32',
    ];


}

