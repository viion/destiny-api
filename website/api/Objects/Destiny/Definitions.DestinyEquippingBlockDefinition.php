<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyEquippingBlockDefinition
 */
class Definitions.DestinyEquippingBlockDefinition
{

    const NAME = 'Destiny.Definitions.DestinyEquippingBlockDefinition';

    const TYPE = 'object';

    public $gearsetItemHash = [
        'type' => 'integer',
        'description' => 'If the item is part of a gearset, this is a reference to that gearset item.',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $uniqueLabel = [
        'type' => 'string',
        'description' => 'If defined, this is the label used to check if the item has other items of matching types already equipped. 
For instance, when you aren\'t allowed to equip more than one Exotic Weapon, that\'s because all exotic weapons have identical uniqueLabels and the game checks the to-be-equipped item\'s uniqueLabel vs. all other already equipped items (other than the item in the slot that\'s about to be occupied).',
    ];

    public $uniqueLabelHash = [
        'type' => 'integer',
        'description' => 'The hash of that unique label. Does not point to a specific definition.',
        'format' => 'uint32',
    ];

    public $equipmentSlotTypeHash = [
        'type' => 'integer',
        'description' => 'An equipped item *must* be equipped in an Equipment Slot. This is the hash identifier of the DestinyEquipmentSlotDefinition into which it must be equipped.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyEquipmentSlotDefinition',
        ],
    ];

    public $attributes = [
        'type' => 'integer',
        'description' => 'These are custom attributes on the equippability of the item.
For now, this can only be "equip on acquire", which would mean that the item will be automatically equipped as soon as you pick it up.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.EquippingItemBlockAttributes',
        ],
        'x-enum-is-bitmask' => true,
    ];

    public $ammoType = [
        'type' => 'integer',
        'description' => 'Ammo type used by a weapon is no longer determined by the bucket in which it is contained. If the item has an ammo type - i.e. if it is a weapon - this will be the type of ammunition expected.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyAmmunitionType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $displayStrings = [
        'type' => 'array',
        'items' => [
            'type' => 'string',
        ],
        'description' => 'These are strings that represent the possible Game/Account/Character state failure conditions that can occur when trying to equip the item. They match up one-to-one with requiredUnlockExpressions.',
    ];


}

