<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyItemSocketEntryDefinition;

/**
 * DestinyItemSocketEntryDefinition
 *
 * The definition information for a specific socket on an item. This will determine
 * how the socket behaves in-game.
 */
class DestinyItemSocketEntryDefinition
{

    const TYPE = 'object';

    public $socketTypeHash = [
        'type' => 'integer',
        'description' => 'All sockets have a type, and this is the hash identifier for this particular type. Use it to look up the DestinySocketTypeDefinition: read there for more information on how socket types affect the behavior of the socket.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Sockets.DestinySocketTypeDefinition',
        ],
    ];

    public $singleInitialItemHash = [
        'type' => 'integer',
        'description' => 'If a valid hash, this is the hash identifier for the DestinyInventoryItemDefinition representing the Plug that will be initially inserted into the item on item creation. Otherwise, this Socket will either start without a plug inserted, or will have one randomly inserted.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $reusablePlugItems = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyItemSocketEntryPlugItemDefinition',
        ],
        'description' => 'This is a list of pre-determined plugs that can *always* be plugged into this socket, without the character having the plug in their inventory.
If this list is populated, you will not be allowed to plug an arbitrary item in the socket: you will only be able to choose from one of these reusable plugs.',
    ];

    public $preventInitializationOnVendorPurchase = [
        'type' => 'boolean',
        'description' => 'If this is true, then the socket will not be initialized with a plug if the item is purchased from a Vendor.
Remember that Vendors are much more than conceptual vendors: they include "Collection Kiosks" and other entities. See DestinyVendorDefinition for more information.',
    ];

    public $hidePerksInItemTooltip = [
        'type' => 'boolean',
        'description' => 'If this is true, the perks provided by this socket shouldn\'t be shown in the item\'s tooltip. This might be useful if it\'s providing a hidden bonus, or if the bonus is less important than other benefits on the item.',
    ];

    public $plugSources = [
        'type' => 'integer',
        'description' => 'Indicates where you should go to get plugs for this socket. This will affect how you populate your UI, as well as what plugs are valid for this socket. It\'s an alternative to having to check for the existence of certain properties (reusablePlugItems for example) to infer where plugs should come from.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.SocketPlugSources',
        ],
        'x-enum-is-bitmask' => true,
    ];

    public $reusablePlugSetHash = [
        'type' => 'integer',
        'description' => 'If this socket\'s plugs come from a reusable DestinyPlugSetDefinition, this is the identifier for that set. We added this concept to reduce some major duplication that\'s going to come from sockets as replacements for what was once implemented as large sets of items and kiosks (like Emotes).',
        'format' => 'uint32',
        'nullable' => true,
    ];

    public $randomizedPlugItems = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyItemSocketEntryPlugItemRandomizedDefinition',
        ],
        'description' => 'As of Forsaken, item sockets can have randomized plugs. If this is populated, the live data will return a subset of plugs from this list that are active and able to be inserted into the socket just like a reusable plug.',
    ];

    public $defaultVisible = [
        'type' => 'boolean',
        'description' => 'If true, then this socket is visible in the item\'s "default" state. If you have an instance, you should always check the runtime state, as that can override this visibility setting: but if you\'re looking at the item on a conceptual level, this property can be useful for hiding data such as legacy sockets - which remain defined on items for infrastructure purposes, but can be confusing for users to see.',
    ];


}

