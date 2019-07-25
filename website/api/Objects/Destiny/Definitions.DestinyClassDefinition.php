<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyClassDefinition
 */
class Definitions.DestinyClassDefinition
{

    const NAME = 'Destiny.Definitions.DestinyClassDefinition';

    const TYPE = 'object';

    public $classType = [
        'type' => 'integer',
        'description' => 'In Destiny 1, we added a convenience Enumeration for referring to classes. We\'ve kept it, though mostly for posterity. This is the enum value for this definition\'s class.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyClass',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
    ];

    public $genderedClassNames = [
        'type' => 'object',
        'additionalProperties' => [
            'type' => 'string',
        ],
        'description' => 'A localized string referring to the singular form of the Class\'s name when referred to in gendered form. Keyed by the DestinyGender.',
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'int32',
            'x-enum-reference' => [
                '$ref' => '#/components/schemas/Destiny.DestinyGender',
            ],
            'x-enum-is-bitmask' => false,
        ],
    ];

    public $genderedClassNamesByGenderHash = [
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

    public $mentorVendorHash = [
        'type' => 'integer',
        'description' => 'Mentors don\'t really mean anything anymore. Don\'t expect this to be populated.',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorDefinition',
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

