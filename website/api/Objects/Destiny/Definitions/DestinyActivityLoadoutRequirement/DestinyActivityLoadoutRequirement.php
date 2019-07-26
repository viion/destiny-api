<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyActivityLoadoutRequirement;

/**
 * DestinyActivityLoadoutRequirement
 *
 * No description
 */
class DestinyActivityLoadoutRequirement
{

    const TYPE = 'object';

    public $equipmentSlotHash = [
        'type' => 'integer',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyEquipmentSlotDefinition',
        ],
    ];

    public $allowedEquippedItemHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $allowedWeaponSubTypes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'description' => 'This Enumeration further classifies items by more specific categorizations than DestinyItemType. The "Sub-Type" is where we classify and categorize items one step further in specificity: "Auto Rifle" instead of just "Weapon" for example, or "Vanguard Bounty" instead of merely "Bounty".
These sub-types are provided for historical compatibility with Destiny 1, but an ideal alternative is to use DestinyItemCategoryDefinitions and the DestinyItemDefinition.itemCategories property instead. Item Categories allow for arbitrary hierarchies of specificity, and for items to belong to multiple categories across multiple hierarchies simultaneously. For this enum, we pick a single type as a "best guess" fit.
NOTE: This is not all of the item types available, and some of these are holdovers from Destiny 1 that may or may not still exist.',
            'format' => 'int32',
            'x-enum-reference' => [
                '$ref' => '#/components/schemas/Destiny.DestinyItemSubType',
            ],
            'x-enum-is-bitmask' => false,
        ],
    ];


}

