<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Milestones.DestinyMilestoneQuestDefinition
 */
class Definitions.Milestones.DestinyMilestoneQuestDefinition
{

    const NAME = 'Destiny.Definitions.Milestones.DestinyMilestoneQuestDefinition';

    const TYPE = 'object';

    public $questItemHash = [
        'type' => 'integer',
        'description' => 'The item representing this Milestone quest. Use this hash to look up the DestinyInventoryItemDefinition for the quest to find its steps and human readable data.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $displayProperties = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
            ],
        ],
        'description' => 'The individual quests may have different definitions from the overall milestone: if there\'s a specific active quest, use these displayProperties instead of that of the overall DestinyMilestoneDefinition.',
    ];

    public $overrideImage = [
        'type' => 'string',
        'description' => 'If populated, this image can be shown instead of the generic milestone\'s image when this quest is live, or it can be used to show a background image for the quest itself that differs from that of the Activity or the Milestone.',
    ];

    public $questRewards = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Milestones.DestinyMilestoneQuestRewardsDefinition',
            ],
        ],
        'description' => 'The rewards you will get for completing this quest, as best as we could extract them from our data. Sometimes, it\'ll be a decent amount of data. Sometimes, it\'s going to be sucky. Sorry.',
    ];

    public $activities = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Milestones.DestinyMilestoneActivityDefinition',
        ],
        'description' => 'The full set of all possible "conceptual activities" that are related to this Milestone. Tiers or alternative modes of play within these conceptual activities will be defined as sub-entities. Keyed by the Conceptual Activity Hash. Use the key to look up DestinyActivityDefinition.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityDefinition',
        ],
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];

    public $destinationHash = [
        'type' => 'integer',
        'description' => 'Sometimes, a Milestone\'s quest is related to an entire Destination rather than a specific activity. In that situation, this will be the hash of that Destination. Hotspots are currently the only Milestones that expose this data, but that does not preclude this data from being returned for other Milestones in the future.',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyDestinationDefinition',
        ],
    ];


}

