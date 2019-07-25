<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyFactionDefinition
 */
class Definitions.DestinyFactionDefinition
{

    const NAME = 'Destiny.Definitions.DestinyFactionDefinition';

    const TYPE = 'object';

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
    ];

    public $progressionHash = [
        'type' => 'integer',
        'description' => 'The hash identifier for the DestinyProgressionDefinition that indicates the character\'s relationship with this faction in terms of experience and levels.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyProgressionDefinition',
        ],
    ];

    public $tokenValues = [
        'type' => 'object',
        'additionalProperties' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'The faction token item hashes, and their respective progression values.',
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];

    public $rewardItemHash = [
        'type' => 'integer',
        'description' => 'The faction reward item hash, usually an engram.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $rewardVendorHash = [
        'type' => 'integer',
        'description' => 'The faction reward vendor hash, used for faction engram previews.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorDefinition',
        ],
    ];

    public $vendors = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyFactionVendorDefinition',
        ],
        'description' => 'List of vendors that are associated with this faction. The last vendor that passes the unlock flag checks is the one that should be shown.',
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

