<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyItemSocketCategoryDefinition
 */
class Definitions.DestinyItemSocketCategoryDefinition
{

    const NAME = 'Destiny.Definitions.DestinyItemSocketCategoryDefinition';

    const TYPE = 'object';

    public $socketCategoryHash = [
        'type' => 'integer',
        'description' => 'The hash for the Socket Category: a quick way to go get the header display information for the category. Use it to look up DestinySocketCategoryDefinition info.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Sockets.DestinySocketCategoryDefinition',
        ],
    ];

    public $socketIndexes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'int32',
        ],
        'description' => 'Use these indexes to look up the sockets in the "sockets.socketEntries" property on the item definition. These are the indexes under the category, in game-rendered order.',
    ];


}

