<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Checklists.DestinyChecklistEntryDefinition
 */
class Definitions.Checklists.DestinyChecklistEntryDefinition
{

    const NAME = 'Destiny.Definitions.Checklists.DestinyChecklistEntryDefinition';

    const TYPE = 'object';

    public $hash = [
        'type' => 'integer',
        'description' => 'The identifier for this Checklist entry. Guaranteed unique only within this Checklist Definition, and not globally/for all checklists.',
        'format' => 'uint32',
    ];

    public $displayProperties = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
            ],
        ],
        'description' => 'Even if no other associations exist, we will give you *something* for display properties. In cases where we have no associated entities, it may be as simple as a numerical identifier.',
    ];

    public $destinationHash = [
        'type' => 'integer',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyDestinationDefinition',
        ],
    ];

    public $locationHash = [
        'type' => 'integer',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyLocationDefinition',
        ],
    ];

    public $bubbleHash = [
        'type' => 'integer',
        'description' => 'Note that a Bubble\'s hash doesn\'t uniquely identify a "top level" entity in Destiny. Only the combination of location and bubble can uniquely identify a place in the world of Destiny: so if bubbleHash is populated, locationHash must too be populated for it to have any meaning.
You can use this property if it is populated to look up the DestinyLocationDefinition\'s associated .locationReleases[].activityBubbleName property.',
        'format' => 'uint32',
        'nullable' => true,
    ];

    public $activityHash = [
        'type' => 'integer',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityDefinition',
        ],
    ];

    public $itemHash = [
        'type' => 'integer',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $vendorHash = [
        'type' => 'integer',
        'format' => 'uint32',
        'nullable' => true,
    ];

    public $vendorInteractionIndex = [
        'type' => 'integer',
        'format' => 'int32',
        'nullable' => true,
    ];

    public $scope = [
        'type' => 'integer',
        'description' => 'The scope at which this specific entry can be computed.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyScope',
        ],
        'x-enum-is-bitmask' => false,
    ];


}

