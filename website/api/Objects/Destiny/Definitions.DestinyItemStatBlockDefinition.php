<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyItemStatBlockDefinition
 */
class Definitions.DestinyItemStatBlockDefinition
{

    const NAME = 'Destiny.Definitions.DestinyItemStatBlockDefinition';

    const TYPE = 'object';

    public $disablePrimaryStatDisplay = [
        'type' => 'boolean',
        'description' => 'If true, the game won\'t show the "primary" stat on this item when you inspect it.
NOTE: This is being manually mapped, because I happen to want it in a block that isn\'t going to directly create this derivative block.',
    ];

    public $statGroupHash = [
        'type' => 'integer',
        'description' => 'If the item\'s stats are meant to be modified by a DestinyStatGroupDefinition, this will be the identifier for that definition.
If you are using live data or precomputed stats data on the DestinyInventoryItemDefinition.stats.stats property, you don\'t have to worry about statGroupHash and how it alters stats: the already altered stats are provided to you. But if you want to see how the sausage gets made, or perform computations yourself, this is valuable information.',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyStatGroupDefinition',
        ],
    ];

    public $stats = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemStatDefinition',
        ],
        'description' => 'If you are looking for precomputed values for the stats on a weapon, this is where they are stored. Technically these are the "Display" stat values. Please see DestinyStatsDefinition for what Display Stat Values means, it\'s a very long story... but essentially these are the closest values BNet can get to the item stats that you see in-game.
These stats are keyed by the DestinyStatDefinition\'s hash identifier for the stat that\'s found on the item.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyStatDefinition',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];

    public $hasDisplayableStats = [
        'type' => 'boolean',
        'description' => 'A quick and lazy way to determine whether any stat other than the "primary" stat is actually visible on the item. Items often have stats that we return in case people find them useful, but they\'re not part of the "Stat Group" and thus we wouldn\'t display them in our UI. If this is False, then we\'re not going to display any of these stats other than the primary one.',
    ];

    public $primaryBaseStatHash = [
        'type' => 'integer',
        'description' => 'This stat is determined to be the "primary" stat, and can be looked up in the stats or any other stat collection related to the item.
Use this hash to look up the stat\'s value using DestinyInventoryItemDefinition.stats.stats, and the renderable data for the primary stat in the related DestinyStatDefinition.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyStatDefinition',
        ],
    ];


}

