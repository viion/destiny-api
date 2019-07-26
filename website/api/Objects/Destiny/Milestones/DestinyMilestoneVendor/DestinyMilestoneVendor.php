<?php

namespace Destiny2\Api\Objects\Destiny\Milestones\DestinyMilestoneVendor;

/**
 * DestinyMilestoneVendor
 *
 * If a Milestone has one or more Vendors that are relevant to it, this will
 * contain information about that vendor that you can choose to show.
 */
class DestinyMilestoneVendor
{

    const TYPE = 'object';

    public $vendorHash = [
        'type' => 'integer',
        'description' => 'The hash identifier of the Vendor related to this Milestone. You can show useful things from this, such as thier Faction icon or whatever you might care about.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorDefinition',
        ],
    ];

    public $previewItemHash = [
        'type' => 'integer',
        'description' => 'If this vendor is featuring a specific item for this event, this will be the hash identifier of that item. I\'m taking bets now on how long we go before this needs to be a list or some other, more complex representation instead and I deprecate this too. I\'m going to go with 5 months. Calling it now, 2017-09-14 at 9:46pm PST.',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];


}

