<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Milestones.DestinyMilestoneQuestRewardsDefinition
 */
class Definitions.Milestones.DestinyMilestoneQuestRewardsDefinition
{

    const NAME = 'Destiny.Definitions.Milestones.DestinyMilestoneQuestRewardsDefinition';

    const TYPE = 'object';

    public $items = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Milestones.DestinyMilestoneQuestRewardItem',
        ],
        'description' => 'The items that represent your reward for completing the quest.
Be warned, these could be "dummy" items: items that are only used to render a good-looking in-game tooltip, but aren\'t the actual items themselves.
For instance, when experience is given there\'s often a dummy item representing "experience", with quantity being the amount of experience you got. We don\'t have a programmatic association between those and whatever Progression is actually getting that experience... yet.',
    ];


}

