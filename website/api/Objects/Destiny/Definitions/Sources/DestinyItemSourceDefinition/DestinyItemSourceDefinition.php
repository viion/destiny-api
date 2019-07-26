<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Sources\DestinyItemSourceDefinition;

/**
 * DestinyItemSourceDefinition
 *
 * Properties of a DestinyInventoryItemDefinition that store all of the information
 * we were able to discern about how the item spawns, and where you can find the
 * item.
 * Items will have many of these sources, one per level at which it spawns, to try
 * and give more granular data about where items spawn for specific level ranges.
 */
class DestinyItemSourceDefinition
{

    const TYPE = 'object';

    public $level = [
        'type' => 'integer',
        'description' => 'The level at which the item spawns. Essentially the Primary Key for this source data: there will be multiple of these source entries per item that has source data, grouped by the level at which the item spawns.',
        'format' => 'int32',
    ];

    public $minQuality = [
        'type' => 'integer',
        'description' => 'The minimum Quality at which the item spawns for this level. Examine DestinyInventoryItemDefinition for more information about what Quality means. Just don\'t ask Phaedrus about it, he\'ll never stop talking and you\'ll have to write a book about it.',
        'format' => 'int32',
    ];

    public $maxQuality = [
        'type' => 'integer',
        'description' => 'The maximum quality at which the item spawns for this level.',
        'format' => 'int32',
    ];

    public $minLevelRequired = [
        'type' => 'integer',
        'description' => 'The minimum Character Level required for equipping the item when the item spawns at the item level defined on this DestinyItemSourceDefinition, as far as we saw in our processing.',
        'format' => 'int32',
    ];

    public $maxLevelRequired = [
        'type' => 'integer',
        'description' => 'The maximum Character Level required for equipping the item when the item spawns at the item level defined on this DestinyItemSourceDefinition, as far as we saw in our processing.',
        'format' => 'int32',
    ];

    public $computedStats = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemStatDefinition',
        ],
        'description' => 'The stats computed for this level/quality range.',
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];

    public $sourceHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'The DestinyRewardSourceDefinitions found that can spawn the item at this level.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyRewardSourceDefinition',
        ],
    ];


}

