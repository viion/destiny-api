<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyNodeSocketReplaceResponse;

/**
 * DestinyNodeSocketReplaceResponse
 *
 * This is a bit of an odd duck. Apparently, if talent nodes steps have this data,
 * the game will go through on step activation and alter the first Socket it finds
 * on the item that has a type matching the given socket type, inserting the
 * indicated plug item.
 */
class DestinyNodeSocketReplaceResponse
{

    const TYPE = 'object';

    public $socketTypeHash = [
        'type' => 'integer',
        'description' => 'The hash identifier of the socket type to find amidst the item\'s sockets (the item to which this talent grid is attached). See DestinyInventoryItemDefinition.sockets.socketEntries to find the socket type of sockets on the item in question.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Sockets.DestinySocketTypeDefinition',
        ],
    ];

    public $plugItemHash = [
        'type' => 'integer',
        'description' => 'The hash identifier of the plug item that will be inserted into the socket found.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];


}

