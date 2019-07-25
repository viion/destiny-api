<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Entities.Items.DestinyItemStatsComponent
 */
class Entities.Items.DestinyItemStatsComponent
{

    const NAME = 'Destiny.Entities.Items.DestinyItemStatsComponent';

    const TYPE = 'object';

    public $stats = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.DestinyStat',
        ],
        'description' => 'If the item has stats that it provides (damage, defense, etc...), it will be given here.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyStatDefinition',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];


}

