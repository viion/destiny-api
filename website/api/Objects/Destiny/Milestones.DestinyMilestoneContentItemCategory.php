<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Milestones.DestinyMilestoneContentItemCategory
 */
class Milestones.DestinyMilestoneContentItemCategory
{

    const NAME = 'Destiny.Milestones.DestinyMilestoneContentItemCategory';

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

