<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyStatDefinition
 */
class Definitions.DestinyStatDefinition
{

    const NAME = 'Destiny.Definitions.DestinyStatDefinition';

    const TYPE = 'object';

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
    ];

    public $aggregationType = [
        'type' => 'integer',
        'description' => 'Stats can exist on a character or an item, and they may potentially be aggregated in different ways. The DestinyStatAggregationType enum value indicates the way that this stat is being aggregated.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyStatAggregationType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $hasComputedBlock = [
        'type' => 'boolean',
        'description' => 'True if the stat is computed rather than being delivered as a raw value on items.
For instance, the Light stat in Destiny 1 was a computed stat.',
    ];

    public $statCategory = [
        'type' => 'integer',
        'description' => 'The category of the stat, according to the game.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyStatCategory',
        ],
        'x-enum-is-bitmask' => false,
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

