<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyEquipmentSlotDefinition;

/**
 * DestinyEquipmentSlotDefinition
 *
 * Characters can not only have Inventory buckets (containers of items that are
 * generally matched by their type or functionality), they can also have Equipment
 * Slots.
 * The Equipment Slot is an indicator that the related bucket can have instanced
 * items equipped on the character. For instance, the Primary Weapon bucket has an
 * Equipment Slot that determines whether you can equip primary weapons, and holds
 * the association between its slot and the inventory bucket from which it can have
 * items equipped.
 * An Equipment Slot must have a related Inventory Bucket, but not all inventory
 * buckets must have Equipment Slots.
 */
class DestinyEquipmentSlotDefinition
{

    const TYPE = 'object';

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
    ];

    public $equipmentCategoryHash = [
        'type' => 'integer',
        'description' => 'These technically point to "Equipment Category Definitions". But don\'t get excited. There\'s nothing of significant value in those definitions, so I didn\'t bother to expose them. You can use the hash here to group equipment slots by common functionality, which serves the same purpose as if we had the Equipment Category definitions exposed.',
        'format' => 'uint32',
    ];

    public $bucketTypeHash = [
        'type' => 'integer',
        'description' => 'The inventory bucket that owns this equipment slot.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryBucketDefinition',
        ],
    ];

    public $applyCustomArtDyes = [
        'type' => 'boolean',
        'description' => 'If True, equipped items should have their custom art dyes applied when rendering the item. Otherwise, custom art dyes on an item should be ignored if the item is equipped in this slot.',
    ];

    public $artDyeChannels = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyArtDyeReference',
        ],
        'description' => 'The Art Dye Channels that apply to this equipment slot.',
    ];

    public $hash = [
        'type' => 'integer',
        'description' => 'The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.
When entities refer to each other in Destiny content, it is this hash that they are referring to.',
        'format' => 'uint32',
    ];

    public $index = [
        'type' => 'integer',
        'description' => 'The index of the entity as it was found in the investment tables.',
        'format' => 'int32',
    ];

    public $redacted = [
        'type' => 'boolean',
        'description' => 'If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry!',
    ];


}

