<?php

namespace Destiny2\Api\Objects\Destiny\Milestones\DestinyPublicMilestone;

/**
 * DestinyPublicMilestone
 *
 * Information about milestones, presented in a character state-agnostic manner.
 * Combine this data with DestinyMilestoneDefinition to get a full picture of the
 * milestone, which is basically a checklist of things to do in the game. Think of
 * this as GetPublicAdvisors 3.0, for those who used the Destiny 1 API.
 */
class DestinyPublicMilestone
{

    const TYPE = 'object';

    public $milestoneHash = [
        'type' => 'integer',
        'description' => 'The hash identifier for the milestone. Use it to look up the DestinyMilestoneDefinition for static data about the Milestone.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Milestones.DestinyMilestoneDefinition',
        ],
    ];

    public $availableQuests = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Milestones.DestinyPublicMilestoneQuest',
        ],
        'description' => 'A milestone not need have even a single quest, but if there are active quests they will be returned here.',
    ];

    public $activities = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Milestones.DestinyPublicMilestoneChallengeActivity',
        ],
    ];

    public $vendorHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'Sometimes milestones - or activities active in milestones - will have relevant vendors. These are the vendors that are currently relevant.
Deprecated, already, for the sake of the new "vendors" property that has more data. What was I thinking.',
    ];

    public $vendors = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Milestones.DestinyPublicMilestoneVendor',
        ],
        'description' => 'This is why we can\'t have nice things. This is the ordered list of vendors to be shown that relate to this milestone, potentially along with other interesting data.',
    ];

    public $startDate = [
        'type' => 'string',
        'description' => 'If known, this is the date when the Milestone started/became active.',
        'format' => 'date-time',
        'nullable' => true,
    ];

    public $endDate = [
        'type' => 'string',
        'description' => 'If known, this is the date when the Milestone will expire/recycle/end.',
        'format' => 'date-time',
        'nullable' => true,
    ];

    public $order = [
        'type' => 'integer',
        'description' => 'Used for ordering milestones in a display to match how we order them in BNet. May pull from static data, or possibly in the future from dynamic information.',
        'format' => 'int32',
    ];


}

