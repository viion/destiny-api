<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Milestones.DestinyMilestoneVendorDefinition
 */
class Definitions.Milestones.DestinyMilestoneVendorDefinition
{

    const NAME = 'Destiny.Definitions.Milestones.DestinyMilestoneVendorDefinition';

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

