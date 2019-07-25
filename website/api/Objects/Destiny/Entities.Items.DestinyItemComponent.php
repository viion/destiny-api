<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Entities.Items.DestinyItemComponent
 */
class Entities.Items.DestinyItemComponent
{

    const NAME = 'Destiny.Entities.Items.DestinyItemComponent';

    const TYPE = 'object';

    public $itemHash = [
        'type' => 'integer',
        'description' => 'The identifier for the item\'s definition, which is where most of the useful static information for the item can be found.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $itemInstanceId = [
        'type' => 'integer',
        'description' => 'If the item is instanced, it will have an instance ID. Lack of an instance ID implies that the item has no distinct local qualities aside from stack size.',
        'format' => 'int64',
        'nullable' => true,
    ];

    public $quantity = [
        'type' => 'integer',
        'description' => 'The quantity of the item in this stack. Note that Instanced items cannot stack. If an instanced item, this value will always be 1 (as the stack has exactly one item in it)',
        'format' => 'int32',
    ];

    public $bindStatus = [
        'type' => 'integer',
        'description' => 'If the item is bound to a location, it will be specified in this enum.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.ItemBindStatus',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $location = [
        'type' => 'integer',
        'description' => 'An easy reference for where the item is located. Redundant if you got the item from an Inventory, but useful when making detail calls on specific items.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.ItemLocation',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $bucketHash = [
        'type' => 'integer',
        'description' => 'The hash identifier for the specific inventory bucket in which the item is located.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryBucketDefinition',
        ],
    ];

    public $transferStatus = [
        'type' => 'integer',
        'description' => 'If there is a known error state that would cause this item to not be transferable, this Flags enum will indicate all of those error states. Otherwise, it will be 0 (CanTransfer).',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.TransferStatuses',
        ],
        'x-enum-is-bitmask' => true,
    ];

    public $lockable = [
        'type' => 'boolean',
        'description' => 'If the item can be locked, this will indicate that state.',
    ];

    public $state = [
        'type' => 'integer',
        'description' => 'A flags enumeration indicating the transient/custom states of the item that affect how it is rendered: whether it\'s tracked or locked for example, or whether it has a masterwork plug inserted.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.ItemState',
        ],
        'x-enum-is-bitmask' => true,
    ];

    public $overrideStyleItemHash = [
        'type' => 'integer',
        'description' => 'If populated, this is the hash of the item whose icon (and other secondary styles, but *not* the human readable strings) should override whatever icons/styles are on the item being sold.
If you don\'t do this, certain items whose styles are being overridden by socketed items - such as the "Recycle Shader" item - would show whatever their default icon/style is, and it wouldn\'t be pretty or look accurate.',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $expirationDate = [
        'type' => 'string',
        'description' => 'If the item can expire, this is the date at which it will/did expire.',
        'format' => 'date-time',
        'nullable' => true,
    ];

    public $isWrapper = [
        'type' => 'boolean',
        'description' => 'If this is true, the object is actually a "wrapper" of the object it\'s representing. This means that it\'s not the actual item itself, but rather an item that must be "opened" in game before you have and can use the item.
 Wrappers are an evolution of "bundles", which give an easy way to let you preview the contents of what you purchased while still letting you get a refund before you "open" it.',
    ];


}

