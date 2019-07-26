<?php

namespace Destiny2\Api\Objects\Destiny\Constants\DestinyEnvironmentLocationMapping;

/**
 * DestinyEnvironmentLocationMapping
 *
 * No description
 */
class DestinyEnvironmentLocationMapping
{

    const TYPE = 'object';

    public $locationHash = [
        'type' => 'integer',
        'description' => 'The location that is revealed on the director by this mapping.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyLocationDefinition',
        ],
    ];

    public $activationSource = [
        'type' => 'string',
        'description' => 'A hint that the UI uses to figure out how this location is activated by the player.',
    ];

    public $itemHash = [
        'type' => 'integer',
        'description' => 'If this is populated, it is the item that you must possess for this location to be active because of this mapping. (theoretically, a location can have multiple mappings, and some might require an item while others don\'t)',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $objectiveHash = [
        'type' => 'integer',
        'description' => 'If this is populated, this is an objective related to the location.',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyObjectiveDefinition',
        ],
    ];

    public $activityHash = [
        'type' => 'integer',
        'description' => 'If this is populated, this is the activity you have to be playing in order to see this location appear because of this mapping. (theoretically, a location can have multiple mappings, and some might require you to be in a specific activity when others don\'t)',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityDefinition',
        ],
    ];


}

