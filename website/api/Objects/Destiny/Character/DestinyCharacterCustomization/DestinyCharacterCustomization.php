<?php

namespace Destiny2\Api\Objects\Destiny\Character\DestinyCharacterCustomization;

/**
 * DestinyCharacterCustomization
 *
 * Raw data about the customization options chosen for a character's face and
 * appearance.
 * You can look up the relevant class/race/gender combo in
 * DestinyCharacterCustomizationOptionDefinition for the character, and then look
 * up these values within the CustomizationOptions found to pull some data about
 * their choices. Warning: not all of that data is meaningful. Some data has useful
 * icons. Others have nothing, and are only meant for 3D rendering purposes (which
 * we sadly do not expose yet)
 */
class DestinyCharacterCustomization
{

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

