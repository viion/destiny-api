<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyItemInventoryBlockDefinition
 */
class Definitions.DestinyItemInventoryBlockDefinition
{

    const NAME = 'Destiny.Definitions.DestinyItemInventoryBlockDefinition';

    const TYPE = 'object';

    public $stackUniqueLabel = [
        'type' => 'string',
        'description' => 'If this string is populated, you can\'t have more than one stack with this label in a given inventory. Note that this is different from the equipping block\'s unique label, which is used for equipping uniqueness.',
    ];

    public $maxStackSize = [
        'type' => 'integer',
        'description' => 'The maximum quantity of this item that can exist in a stack.',
        'format' => 'int32',
    ];

    public $bucketTypeHash = [
        'type' => 'integer',
        'description' => 'The hash identifier for the DestinyInventoryBucketDefinition to which this item belongs. I should have named this "bucketHash", but too many things refer to it now. Sigh.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryBucketDefinition',
        ],
    ];

    public $recoveryBucketTypeHash = [
        'type' => 'integer',
        'description' => 'If the item is picked up by the lost loot queue, this is the hash identifier for the DestinyInventoryBucketDefinition into which it will be placed. Again, I should have named this recoveryBucketHash instead.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryBucketDefinition',
        ],
    ];

    public $tierTypeHash = [
        'type' => 'integer',
        'description' => 'The hash identifier for the Tier Type of the item, use to look up its DestinyItemTierTypeDefinition if you need to show localized data for the item\'s tier.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Items.DestinyItemTierTypeDefinition',
        ],
    ];

    public $isInstanceItem = [
        'type' => 'boolean',
        'description' => 'If TRUE, this item is instanced. Otherwise, it is a generic item that merely has a quantity in a stack (like Glimmer).',
    ];

    public $tierTypeName = [
        'type' => 'string',
        'description' => 'The localized name of the tier type, which is a useful shortcut so you don\'t have to look up the definition every time. However, it\'s mostly a holdover from days before we had a DestinyItemTierTypeDefinition to refer to.',
    ];

    public $tierType = [
        'type' => 'integer',
        'description' => 'The enumeration matching the tier type of the item to known values, again for convenience sake.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.TierType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $expirationTooltip = [
        'type' => 'string',
        'description' => 'The tooltip message to show, if any, when the item expires.',
    ];

    public $expiredInActivityMessage = [
        'type' => 'string',
        'description' => 'If the item expires while playing in an activity, we show a different message.',
    ];

    public $expiredInOrbitMessage = [
        'type' => 'string',
        'description' => 'If the item expires in orbit, we show a... more different message. ("Consummate V\'s, consummate!")',
    ];

    public $suppressExpirationWhenObjectivesComplete = [
        'type' => 'boolean',
    ];


}

