<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Milestones.DestinyMilestoneDefinition
 */
class Definitions.Milestones.DestinyMilestoneDefinition
{

    const NAME = 'Destiny.Definitions.Milestones.DestinyMilestoneDefinition';

    const TYPE = 'object';

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
    ];

    public $image = [
        'type' => 'string',
        'description' => 'A custom image someone made just for the milestone. Isn\'t that special?',
    ];

    public $milestoneType = [
        'type' => 'integer',
        'description' => 'An enumeration listing one of the possible types of milestones. Check out the DestinyMilestoneType enum for more info!',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Milestones.DestinyMilestoneType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $recruitable = [
        'type' => 'boolean',
        'description' => 'If True, then the Milestone has been integrated with BNet\'s recruiting feature.',
    ];

    public $friendlyName = [
        'type' => 'string',
        'description' => 'If the milestone has a friendly identifier for association with other features - such as Recruiting - that identifier can be found here. This is "friendly" in that it looks better in a URL than whatever the identifier for the Milestone actually is.',
    ];

    public $showInExplorer = [
        'type' => 'boolean',
        'description' => 'If TRUE, this entry should be returned in the list of milestones for the "Explore Destiny" (i.e. new BNet homepage) features of Bungie.net (as long as the underlying event is active) Note that this is a property specifically used by BNet and the companion app for the "Live Events" feature of the front page/welcome view: it\'s not a reflection of what you see in-game.',
    ];

    public $showInMilestones = [
        'type' => 'boolean',
        'description' => 'Determines whether we\'ll show this Milestone in the user\'s personal Milestones list.',
    ];

    public $explorePrioritizesActivityImage = [
        'type' => 'boolean',
        'description' => 'If TRUE, "Explore Destiny" (the front page of BNet and the companion app) prioritize using the activity image over any overriding Quest or Milestone image provided. This unfortunate hack is brought to you by Trials of The Nine.',
    ];

    public $hasPredictableDates = [
        'type' => 'boolean',
        'description' => 'A shortcut for clients - and the server - to understand whether we can predict the start and end dates for this event. In practice, there are multiple ways that an event could have predictable date ranges, but not all events will be able to be predicted via any mechanism (for instance, events that are manually triggered on and off)',
    ];

    public $quests = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Milestones.DestinyMilestoneQuestDefinition',
        ],
        'description' => 'The full set of possible Quests that give the overview of the Milestone event/activity in question. Only one of these can be active at a time for a given Conceptual Milestone, but many of them may be "available" for the user to choose from. (for instance, with Milestones you can choose from the three available Quests, but only one can be active at a time) Keyed by the quest item.
As of Forsaken (~September 2018), Quest-style Milestones are being removed for many types of activities. There will likely be further revisions to the Milestone concept in the future.',
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];

    public $rewards = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Milestones.DestinyMilestoneRewardCategoryDefinition',
        ],
        'description' => 'If this milestone can provide rewards, this will define the categories into which the individual reward entries are placed.
This is keyed by the Category\'s hash, which is only guaranteed to be unique within a given Milestone.',
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];

    public $vendorsDisplayTitle = [
        'type' => 'string',
        'description' => 'If you\'re going to show Vendors for the Milestone, you can use this as a localized "header" for the section where you show that vendor data. It\'ll provide a more context-relevant clue about what the vendor\'s role is in the Milestone.',
    ];

    public $vendors = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Milestones.DestinyMilestoneVendorDefinition',
        ],
        'description' => 'Sometimes, milestones will have rewards provided by Vendors. This definition gives the information needed to understand which vendors are relevant, the order in which they should be returned if order matters, and the conditions under which the Vendor is relevant to the user.',
    ];

    public $values = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Milestones.DestinyMilestoneValueDefinition',
        ],
        'description' => 'Sometimes, milestones will have arbitrary values associated with them that are of interest to us or to third party developers. This is the collection of those values\' definitions, keyed by the identifier of the value and providing useful definition information such as localizable names and descriptions for the value.',
        'x-dictionary-key' => [
            'type' => 'string',
        ],
    ];

    public $isInGameMilestone = [
        'type' => 'boolean',
        'description' => 'Some milestones are explicit objectives that you can see and interact with in the game. Some milestones are more conceptual, built by BNet to help advise you on activities and events that happen in-game but that aren\'t explicitly shown in game as Milestones. If this is TRUE, you can see this as a milestone in the game. If this is FALSE, it\'s an event or activity you can participate in, but you won\'t see it as a Milestone in the game\'s UI.',
    ];

    public $activities = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Milestones.DestinyMilestoneChallengeActivityDefinition',
        ],
        'description' => 'A Milestone can now be represented by one or more activities directly (without a backing Quest), and that activity can have many challenges, modifiers, and related to it.',
    ];

    public $defaultOrder = [
        'type' => 'integer',
        'format' => 'int32',
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

