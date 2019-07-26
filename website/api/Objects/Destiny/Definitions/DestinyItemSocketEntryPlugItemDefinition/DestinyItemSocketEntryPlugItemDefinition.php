<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyItemSocketEntryPlugItemDefinition;

/**
 * DestinyItemSocketEntryPlugItemDefinition
 *
 * The definition of a known, reusable plug that can be applied to a socket.
 */
class DestinyItemSocketEntryPlugItemDefinition
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

