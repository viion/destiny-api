<?php

namespace Destiny2\Api\Objects\Destiny\Milestones\DestinyMilestoneContentItemCategory;

/**
 * DestinyMilestoneContentItemCategory
 *
 * Part of our dynamic, localized Milestone content is arbitrary categories of
 * items. These are built in our content management system, and thus aren't the
 * same as programmatically generated rewards.
 */
class DestinyMilestoneContentItemCategory
{

    const TYPE = 'object';

    public $title = [
        'type' => 'string',
    ];

    public $itemHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];


}

