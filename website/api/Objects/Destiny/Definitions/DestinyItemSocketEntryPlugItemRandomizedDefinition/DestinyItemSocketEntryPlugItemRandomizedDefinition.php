<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyItemSocketEntryPlugItemRandomizedDefinition;

/**
 * DestinyItemSocketEntryPlugItemRandomizedDefinition
 *
 * No description
 */
class DestinyItemSocketEntryPlugItemRandomizedDefinition
{

    const TYPE = 'object';

    public $plugItemHash = [
        'type' => 'integer',
        'description' => 'The hash identifier of a DestinyInventoryItemDefinition representing the plug that can be inserted.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];


}

