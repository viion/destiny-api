<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Milestones.DestinyMilestoneRewardCategory
 */
class Milestones.DestinyMilestoneRewardCategory
{

    const NAME = 'Destiny.Milestones.DestinyMilestoneRewardCategory';

    const TYPE = 'object';

    public $rewardCategoryHash = [
        'type' => 'integer',
        'description' => 'Look up the relevant DestinyMilestoneDefinition, and then use rewardCategoryHash to look up the category info in DestinyMilestoneDefinition.rewards.',
        'format' => 'uint32',
    ];

    public $entries = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Milestones.DestinyMilestoneRewardEntry',
        ],
        'description' => 'The individual reward entries for this category, and their status.',
    ];


}

