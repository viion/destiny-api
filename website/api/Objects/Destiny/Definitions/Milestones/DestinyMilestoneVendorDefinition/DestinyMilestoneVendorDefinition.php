<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Milestones\DestinyMilestoneVendorDefinition;

/**
 * DestinyMilestoneVendorDefinition
 *
 * If the Milestone or a component has vendors whose inventories could/should be
 * displayed that are relevant to it, this will return the vendor in question. 
 * It also contains information we need to determine whether that vendor is
 * actually relevant at the moment, given the user's current state.
 */
class DestinyMilestoneVendorDefinition
{

    const TYPE = 'object';

    public $vendorHash = [
        'type' => 'integer',
        'description' => 'The hash of the vendor whose wares should be shown as associated with the Milestone.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorDefinition',
        ],
    ];


}

