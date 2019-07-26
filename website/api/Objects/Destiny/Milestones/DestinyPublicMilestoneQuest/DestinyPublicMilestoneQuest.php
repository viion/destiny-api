<?php

namespace Destiny2\Api\Objects\Destiny\Milestones\DestinyPublicMilestoneQuest;

/**
 * DestinyPublicMilestoneQuest
 *
 * No description
 */
class DestinyPublicMilestoneQuest
{

    const TYPE = 'object';

    public $questItemHash = [
        'type' => 'integer',
        'description' => 'Quests are defined as Items in content. As such, this is the hash identifier of the DestinyInventoryItemDefinition that represents this quest. It will have pointers to all of the steps in the quest, and display information for the quest (title, description, icon etc) Individual steps will be referred to in the Quest item\'s DestinyInventoryItemDefinition.setData property, and themselves are Items with their own renderable data.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Milestones.DestinyMilestoneDefinition',
        ],
    ];

    public $activity = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Milestones.DestinyPublicMilestoneActivity',
            ],
        ],
        'description' => 'A milestone need not have an active activity, but if there is one it will be returned here, along with any variant and additional information.',
    ];

    public $challenges = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Milestones.DestinyPublicMilestoneChallenge',
        ],
        'description' => 'For the given quest there could be 0-to-Many challenges: mini quests that you can perform in the course of doing this quest, that may grant you rewards and benefits.',
    ];


}

