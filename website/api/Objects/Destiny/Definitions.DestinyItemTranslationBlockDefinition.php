<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyItemTranslationBlockDefinition
 */
class Definitions.DestinyItemTranslationBlockDefinition
{

    const NAME = 'Destiny.Definitions.DestinyItemTranslationBlockDefinition';

    const TYPE = 'object';

    public $weaponPatternIdentifier = [
        'type' => 'string',
    ];

    public $weaponPatternHash = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $defaultDyes = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.DyeReference',
        ],
    ];

    public $lockedDyes = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.DyeReference',
        ],
    ];

    public $customDyes = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.DyeReference',
        ],
    ];

    public $arrangements = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyGearArtArrangementReference',
        ],
    ];

    public $hasGeometry = [
        'type' => 'boolean',
    ];


}

