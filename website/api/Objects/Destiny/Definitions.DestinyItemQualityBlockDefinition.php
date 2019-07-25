<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyItemQualityBlockDefinition
 */
class Definitions.DestinyItemQualityBlockDefinition
{

    const NAME = 'Destiny.Definitions.DestinyItemQualityBlockDefinition';

    const TYPE = 'object';

    public $itemLevels = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'int32',
        ],
        'description' => 'The "base" defined level of an item. This is a list because, in theory, each Expansion could define its own base level for an item.
In practice, not only was that never done in Destiny 1, but now this isn\'t even populated at all. When it\'s not populated, the level at which it spawns has to be inferred by Reward information, of which BNet receives an imperfect view and will only be reliable on instanced data as a result.',
    ];

    public $qualityLevel = [
        'type' => 'integer',
        'description' => 'qualityLevel is used in combination with the item\'s level to calculate stats like Attack and Defense. It plays a role in that calculation, but not nearly as large as itemLevel does.',
        'format' => 'int32',
    ];

    public $infusionCategoryName = [
        'type' => 'string',
        'description' => 'The string identifier for this item\'s "infusability", if any. 
Items that match the same infusionCategoryName are allowed to infuse with each other.
DEPRECATED: Items can now have multiple infusion categories. Please use infusionCategoryHashes instead.',
    ];

    public $infusionCategoryHash = [
        'type' => 'integer',
        'description' => 'The hash identifier for the infusion. It does not map to a Definition entity.
DEPRECATED: Items can now have multiple infusion categories. Please use infusionCategoryHashes instead.',
        'format' => 'uint32',
    ];

    public $infusionCategoryHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'If any one of these hashes matches any value in another item\'s infusionCategoryHashes, the two can infuse with each other.',
    ];

    public $progressionLevelRequirementHash = [
        'type' => 'integer',
        'description' => 'An item can refer to pre-set level requirements. They are defined in DestinyProgressionLevelRequirementDefinition, and you can use this hash to find the appropriate definition.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Progression.DestinyProgressionLevelRequirementDefinition',
        ],
    ];


}

