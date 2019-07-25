<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyItemIntrinsicSocketEntryDefinition
 */
class Definitions.DestinyItemIntrinsicSocketEntryDefinition
{

    const NAME = 'Destiny.Definitions.DestinyItemIntrinsicSocketEntryDefinition';

    const TYPE = 'object';

    public $plugItemHash = [
        'type' => 'integer',
        'description' => 'Indicates the plug that is intrinsically inserted into this socket.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $socketTypeHash = [
        'type' => 'integer',
        'description' => 'Indicates the type of this intrinsic socket.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Sockets.DestinySocketTypeDefinition',
        ],
    ];

    public $defaultVisible = [
        'type' => 'boolean',
        'description' => 'If true, then this socket is visible in the item\'s "default" state. If you have an instance, you should always check the runtime state, as that can override this visibility setting: but if you\'re looking at the item on a conceptual level, this property can be useful for hiding data such as legacy sockets - which remain defined on items for infrastructure purposes, but can be confusing for users to see.',
    ];


}

