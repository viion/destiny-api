<?php

namespace Destiny2\Api\Objects\Destiny\Entities\Items\DestinyItemInstanceComponent;

/**
 * DestinyItemInstanceComponent
 *
 * If an item is "instanced", this will contain information about the item's
 * instance that doesn't fit easily into other components. One might say this is
 * the "essential" instance data for the item.
 * Items are instanced if they require information or state that can vary. For
 * instance, weapons are Instanced: they are given a unique identifier, uniquely
 * generated stats, and can have their properties altered. Non-instanced items have
 * none of these things: for instance, Glimmer has no unique properties aside from
 * how much of it you own.
 * You can tell from an item's definition whether it will be instanced or not by
 * looking at the DestinyInventoryItemDefinition's
 * definition.inventory.isInstanceItem property.
 */
class DestinyItemInstanceComponent
{

    const TYPE = 'object';

    public $damageType = [
        'type' => 'integer',
        'description' => 'If the item has a damage type, this is the item\'s current damage type.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DamageType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $damageTypeHash = [
        'type' => 'integer',
        'description' => 'The current damage type\'s hash, so you can look up localized info and icons for it.',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyDamageTypeDefinition',
        ],
    ];

    public $primaryStat = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.DestinyStat',
            ],
        ],
        'description' => 'The item stat that we consider to be "primary" for the item. For instance, this would be "Attack" for Weapons or "Defense" for armor.',
    ];

    public $itemLevel = [
        'type' => 'integer',
        'description' => 'The Item\'s "Level" has the most significant bearing on its stats, such as Light and Power.',
        'format' => 'int32',
    ];

    public $quality = [
        'type' => 'integer',
        'description' => 'The "Quality" of the item has a lesser - but still impactful - bearing on stats like Light and Power.',
        'format' => 'int32',
    ];

    public $isEquipped = [
        'type' => 'boolean',
        'description' => 'Is the item currently equipped on the given character?',
    ];

    public $canEquip = [
        'type' => 'boolean',
        'description' => 'If this is an equippable item, you can check it here. There are permanent as well as transitory reasons why an item might not be able to be equipped: check cannotEquipReason for details.',
    ];

    public $equipRequiredLevel = [
        'type' => 'integer',
        'description' => 'If the item cannot be equipped until you reach a certain level, that level will be reflected here.',
        'format' => 'int32',
    ];

    public $unlockHashesRequiredToEquip = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'Sometimes, there are limitations to equipping that are represented by character-level flags called "unlocks".
This is a list of flags that they need in order to equip the item that the character has not met. Use these to look up the descriptions to show in your UI by looking up the relevant DestinyUnlockDefinitions for the hashes.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyUnlockDefinition',
        ],
    ];

    public $cannotEquipReason = [
        'type' => 'integer',
        'description' => 'If you cannot equip the item, this is a flags enum that enumerates all of the reasons why you couldn\'t equip the item. You may need to refine your UI further by using unlockHashesRequiredToEquip and equipRequiredLevel.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.EquipFailureReason',
        ],
        'x-enum-is-bitmask' => true,
    ];


}

