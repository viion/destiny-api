<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Milestones.DestinyMilestone
 */
class Milestones.DestinyMilestone
{

    const NAME = 'Destiny.Milestones.DestinyMilestone';

    const TYPE = 'object';

    public $milestoneHash = [
        'type' => 'integer',
        'description' => 'The unique identifier for the Milestone. Use it to look up the DestinyMilestoneDefinition, so you can combine the other data in this contract with static definition data.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Milestones.DestinyMilestoneDefinition',
        ],
    ];

    public $availableQuests = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Milestones.DestinyMilestoneQuest',
        ],
        'description' => 'Indicates what quests are available for this Milestone. Usually this will be only a single Quest, but some quests have multiple available that you can choose from at any given time. All possible quests for a milestone can be found in the DestinyMilestoneDefinition, but they must be combined with this Live data to determine which one(s) are actually active right now. It is possible for Milestones to not have any quests.',
    ];

    public $activities = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Milestones.DestinyMilestoneChallengeActivity',
        ],
        'description' => 'The currently active Activities in this milestone, when the Milestone is driven by Challenges.
Not all Milestones have Challenges, but when they do this will indicate the Activities and Challenges under those Activities related to this Milestone.',
    ];

    public $values = [
        'type' => 'object',
        'additionalProperties' => [
            'type' => 'number',
            'format' => 'float',
        ],
        'description' => 'Milestones may have arbitrary key/value pairs associated with them, for data that users will want to know about but that doesn\'t fit neatly into any of the common components such as Quests. A good example of this would be - if this existed in Destiny 1 - the number of wins you currently have on your Trials of Osiris ticket. Looking in the DestinyMilestoneDefinition, you can use the string identifier of this dictionary to look up more info about the value, including localized string content for displaying the value. The value in the dictionary is the floating point number. The definition will tell you how to format this number.',
        'x-dictionary-key' => [
            'type' => 'string',
        ],
    ];

    public $vendorHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'A milestone may have one or more active vendors that are "related" to it (that provide rewards, or that are the initiators of the Milestone). I already regret this, even as I\'m typing it. [I told you I\'d regret this] You see, sometimes a milestone may be directly correlated with a set of vendors that provide varying tiers of rewards. The player may not be able to interact with one or more of those vendors. This will return the hashes of the Vendors that the player *can* interact with, allowing you to show their current inventory as rewards or related items to the Milestone or its activities.
Before we even use it, it\'s already deprecated! How much of a bummer is that? We need more data.',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorDefinition',
        ],
    ];

    public $vendors = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Milestones.DestinyMilestoneVendor',
        ],
        'description' => 'Replaces vendorHashes, which I knew was going to be trouble the day it walked in the door. This will return not only what Vendors are active and relevant to the activity (in an implied order that you can choose to ignore), but also other data - for example, if the Vendor is featuring a specific item relevant to this event that you should show with them.',
    ];

    public $rewards = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Milestones.DestinyMilestoneRewardCategory',
        ],
        'description' => 'If the entity to which this component is attached has known active Rewards for the player, this will detail information about those rewards, keyed by the RewardEntry Hash. (See DestinyMilestoneDefinition for more information about Reward Entries) Note that these rewards are not for the Quests related to the Milestone. Think of these as "overview/checklist" rewards that may be provided for Milestones that may provide rewards for performing a variety of tasks that aren\'t under a specific Quest.',
    ];

    public $startDate = [
        'type' => 'string',
        'description' => 'If known, this is the date when the event last began or refreshed. It will only be populated for events with fixed and repeating start and end dates.',
        'format' => 'date-time',
        'nullable' => true,
    ];

    public $endDate = [
        'type' => 'string',
        'description' => 'If known, this is the date when the event will next end or repeat. It will only be populated for events with fixed and repeating start and end dates.',
        'format' => 'date-time',
        'nullable' => true,
    ];

    public $order = [
        'type' => 'integer',
        'description' => 'Used for ordering milestones in a display to match how we order them in BNet. May pull from static data, or possibly in the future from dynamic information.',
        'format' => 'int32',
    ];


}

