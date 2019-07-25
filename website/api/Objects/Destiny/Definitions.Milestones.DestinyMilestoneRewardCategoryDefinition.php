<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Milestones.DestinyMilestoneRewardCategoryDefinition
 */
class Definitions.Milestones.DestinyMilestoneRewardCategoryDefinition
{

    const NAME = 'Destiny.Definitions.Milestones.DestinyMilestoneRewardCategoryDefinition';

    const TYPE = 'object';

    public $categoryHash = [
        'type' => 'integer',
        'description' => 'Identifies the reward category. Only guaranteed unique within this specific component!',
        'format' => 'uint32',
    ];

    public $categoryIdentifier = [
        'type' => 'string',
        'description' => 'The string identifier for the category, if you want to use it for some end. Guaranteed unique within the specific component.',
    ];

    public $displayProperties = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
            ],
        ],
        'description' => 'Hopefully this is obvious by now.',
    ];

    public $rewardEntries = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Milestones.DestinyMilestoneRewardEntryDefinition',
        ],
        'description' => 'If this milestone can provide rewards, this will define the sets of rewards that can be earned, the conditions under which they can be acquired, internal data that we\'ll use at runtime to determine whether you\'ve already earned or redeemed this set of rewards, and the category that this reward should be placed under.',
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];

    public $order = [
        'type' => 'integer',
        'description' => 'If you want to use BNet\'s recommended order for rendering categories programmatically, use this value and compare it to other categories to determine the order in which they should be rendered. I don\'t feel great about putting this here, I won\'t lie.',
        'format' => 'int32',
    ];


}

