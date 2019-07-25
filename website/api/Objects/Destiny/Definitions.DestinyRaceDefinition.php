<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyRaceDefinition
 */
class Definitions.DestinyRaceDefinition
{

    const NAME = 'Destiny.Definitions.DestinyRaceDefinition';

    const TYPE = 'object';

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
    ];

    public $raceType = [
        'type' => 'integer',
        'description' => 'An enumeration defining the existing, known Races/Species for player characters. This value will be the enum value matching this definition.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyRace',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $genderedRaceNames = [
        'type' => 'object',
        'additionalProperties' => [
            'type' => 'string',
        ],
        'description' => 'A localized string referring to the singular form of the Race\'s name when referred to in gendered form. Keyed by the DestinyGender.',
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'int32',
            'x-enum-reference' => [
                '$ref' => '#/components/schemas/Destiny.DestinyGender',
            ],
            'x-enum-is-bitmask' => false,
        ],
    ];

    public $genderedRaceNamesByGenderHash = [
        'type' => 'object',
        'additionalProperties' => [
            'type' => 'string',
        ],
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyGenderDefinition',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];

    public $hash = [
        'type' => 'integer',
        'description' => 'The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.
When entities refer to each other in Destiny content, it is this hash that they are referring to.',
        'format' => 'uint32',
    ];

    public $index = [
        'type' => 'integer',
        'description' => 'The index of the entity as it was found in the investment tables.',
        'format' => 'int32',
    ];

    public $redacted = [
        'type' => 'boolean',
        'description' => 'If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry!',
    ];


}

