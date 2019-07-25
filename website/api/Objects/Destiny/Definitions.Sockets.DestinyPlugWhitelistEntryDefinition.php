<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Sockets.DestinyPlugWhitelistEntryDefinition
 */
class Definitions.Sockets.DestinyPlugWhitelistEntryDefinition
{

    const NAME = 'Destiny.Definitions.Sockets.DestinyPlugWhitelistEntryDefinition';

    const TYPE = 'object';

    public $categoryHash = [
        'type' => 'integer',
        'description' => 'The hash identifier of the Plug Category to compare against the plug item\'s plug.plugCategoryHash.
Note that this does NOT relate to any Definition in itself, it is only used for comparison purposes.',
        'format' => 'uint32',
    ];

    public $categoryIdentifier = [
        'type' => 'string',
        'description' => 'The string identifier for the category, which is here mostly for debug purposes.',
    ];

    public $reinitializationPossiblePlugHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'The list of all plug items (DestinyInventoryItemDefinition) that the socket may randomly be populated with when reinitialized.
Which ones you should actually show are determined by the plug being inserted into the socket, and the socket’s type.
When you inspect the plug that could go into a Masterwork Socket, look up the socket type of the socket being inspected and find the DestinySocketTypeDefinition.
Then, look at the Plugs that can fit in that socket. Find the Whitelist in the DestinySocketTypeDefinition that matches the plug item’s categoryhash.
That whitelist entry will potentially have a new “reinitializationPossiblePlugHashes” property.If it does, that means we know what it will roll if you try to insert this plug into this socket.',
    ];


}

