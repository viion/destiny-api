<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyItemCategoryDefinition
 */
class Definitions.DestinyItemCategoryDefinition
{

    const NAME = 'Destiny.Definitions.DestinyItemCategoryDefinition';

    const TYPE = 'object';

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
    ];

    public $visible = [
        'type' => 'boolean',
        'description' => 'If True, this category should be visible in UI. Sometimes we make categories that we don\'t think are interesting externally. It\'s up to you if you want to skip on showing them.',
    ];

    public $deprecated = [
        'type' => 'boolean',
        'description' => 'If True, this category has been deprecated: it may have no items left, or there may be only legacy items that remain in it which are no longer relevant to the game.',
    ];

    public $shortTitle = [
        'type' => 'string',
        'description' => 'A shortened version of the title. The reason why we have this is because the Armory in German had titles that were too long to display in our UI, so these were localized abbreviated versions of those categories. The property still exists today, even though the Armory doesn\'t exist for D2... yet.',
    ];

    public $itemTypeRegex = [
        'type' => 'string',
        'description' => 'The janky regular expression we used against the item type to try and discern whether the item belongs to this category.',
    ];

    public $plugCategoryIdentifier = [
        'type' => 'string',
        'description' => 'If the item is a plug, this is the identifier we expect to find associated with it if it is in this category.',
    ];

    public $itemTypeRegexNot = [
        'type' => 'string',
        'description' => 'If the item type matches this janky regex, it does *not* belong to this category.',
    ];

    public $originBucketIdentifier = [
        'type' => 'string',
        'description' => 'If the item belongs to this bucket, it does belong to this category.',
    ];

    public $grantDestinyItemType = [
        'type' => 'integer',
        'description' => 'If an item belongs to this category, it will also receive this item type. This is now how DestinyItemType is populated for items: it used to be an even jankier process, but that\'s a story that requires more alcohol.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyItemType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $grantDestinySubType = [
        'type' => 'integer',
        'description' => 'If an item belongs to this category, it will also receive this subtype enum value.
I know what you\'re thinking - what if it belongs to multiple categories that provide sub-types?
The last one processed wins, as is the case with all of these "grant" enums. Now you can see one reason why we moved away from these enums... but they\'re so convenient when they work, aren\'t they?',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyItemSubType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $grantDestinyClass = [
        'type' => 'integer',
        'description' => 'If an item belongs to this category, it will also get this class restriction enum value.
See the other "grant"-prefixed properties on this definition for my color commentary.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyClass',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $groupedCategoryHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'If this category is a "parent" category of other categories, those children will have their hashes listed in rendering order here, and can be looked up using these hashes against DestinyItemCategoryDefinition.
In this way, you can build up a visual hierarchy of item categories. That\'s what we did, and you can do it too. I believe in you. Yes, you, Carl.
(I hope someone named Carl reads this someday)',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyItemCategoryDefinition',
        ],
    ];

    public $parentCategoryHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'All item category hashes of "parent" categories: categories that contain this as a child through the hierarchy of groupedCategoryHashes. It\'s a bit redundant, but having this child-centric list speeds up some calculations.',
    ];

    public $groupCategoryOnly = [
        'type' => 'boolean',
        'description' => 'If true, this category is only used for grouping, and should not be evaluated with its own checks. Rather, the item only has this category if it has one of its child categories.',
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

