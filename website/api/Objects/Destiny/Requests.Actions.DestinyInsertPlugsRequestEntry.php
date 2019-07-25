<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Requests.Actions.DestinyInsertPlugsRequestEntry
 */
class Requests.Actions.DestinyInsertPlugsRequestEntry
{

    const NAME = 'Destiny.Requests.Actions.DestinyInsertPlugsRequestEntry';

    const TYPE = 'object';

    public $socketIndex = [
        'type' => 'integer',
        'description' => 'The index into the socket array, which identifies the specific socket being operated on. We also need to know the socketArrayType in order to uniquely identify the socket.
Don\'t point to or try to insert a plug into an infusion socket. It won\'t work.',
        'format' => 'int32',
    ];

    public $socketArrayType = [
        'type' => 'integer',
        'description' => 'This property, combined with the socketIndex, tells us which socket we are referring to (since operations can be performed on both Intrinsic and "default" sockets, and they occupy different arrays in the Inventory Item Definition). I know, I know. Don\'t give me that look.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.Requests.Actions.DestinySocketArrayType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $plugItemHash = [
        'type' => 'integer',
        'description' => 'Plugs are never instanced (except in infusion). So with the hash alone, we should be able to: 1) Infer whether the player actually needs to have the item, or if it\'s a reusable plug 2) Perform any operation needed to use the Plug, including removing the plug item and running reward sheets.',
        'format' => 'uint32',
    ];


}

