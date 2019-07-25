<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Milestones.DestinyMilestoneRewardEntryDefinition
 */
class Definitions.Milestones.DestinyMilestoneRewardEntryDefinition
{

    const NAME = 'Destiny.Definitions.Milestones.DestinyMilestoneRewardEntryDefinition';

    const TYPE = 'object';

    public $rewardEntryHash = [
        'type' => 'integer',
        'description' => 'The identifier for this reward entry. Runtime data will refer to reward entries by this hash. Only guaranteed unique within the specific Milestone.',
        'format' => 'uint32',
    ];

    public $rewardEntryIdentifier = [
        'type' => 'string',
        'description' => 'The string identifier, if you care about it. Only guaranteed unique within the specific Milestone.',
    ];

    public $items = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.DestinyItemQuantity',
        ],
        'description' => 'The items you will get as rewards, and how much of it you\'ll get.',
    ];

    public $vendorHash = [
        'type' => 'integer',
        'description' => 'If this reward is redeemed at a Vendor, this is the hash of the Vendor to go to in order to redeem the reward. Use this hash to look up the DestinyVendorDefinition.',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorDefinition',
        ],
    ];

    public $displayProperties = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
            ],
        ],
        'description' => 'For us to bother returning this info, we should be able to return some kind of information about why these rewards are grouped together. This is ideally that information. Look at how confident I am that this will always remain true.',
    ];

    public $order = [
        'type' => 'integer',
        'description' => 'If you want to follow BNet\'s ordering of these rewards, use this number within a given category to order the rewards. Yeah, I know. I feel dirty too.',
        'format' => 'int32',
    ];


}

