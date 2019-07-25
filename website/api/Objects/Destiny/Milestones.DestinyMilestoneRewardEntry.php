<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Milestones.DestinyMilestoneRewardEntry
 */
class Milestones.DestinyMilestoneRewardEntry
{

    const NAME = 'Destiny.Milestones.DestinyMilestoneRewardEntry';

    const TYPE = 'object';

    public $rewardEntryHash = [
        'type' => 'integer',
        'description' => 'The identifier for the reward entry in question. It is important to look up the related DestinyMilestoneRewardEntryDefinition to get the static details about the reward, which you can do by looking up the milestone\'s DestinyMilestoneDefinition and examining the DestinyMilestoneDefinition.rewards[rewardCategoryHash].rewardEntries[rewardEntryHash] data.',
        'format' => 'uint32',
    ];

    public $earned = [
        'type' => 'boolean',
        'description' => 'If TRUE, the player has earned this reward.',
    ];

    public $redeemed = [
        'type' => 'boolean',
        'description' => 'If TRUE, the player has redeemed/picked up/obtained this reward. Feel free to alias this to "gotTheShinyBauble" in your own codebase.',
    ];


}

