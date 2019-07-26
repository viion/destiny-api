<?php

namespace Destiny2\Api\Objects\Trending\TrendingEntryDestinyRitual;

/**
 * TrendingEntryDestinyRitual
 *
 * No description
 */
class TrendingEntryDestinyRitual
{

    const TYPE = 'object';

    public $image = [
        'type' => 'string',
    ];

    public $icon = [
        'type' => 'string',
    ];

    public $title = [
        'type' => 'string',
    ];

    public $subtitle = [
        'type' => 'string',
    ];

    public $dateStart = [
        'type' => 'string',
        'format' => 'date-time',
        'nullable' => true,
    ];

    public $dateEnd = [
        'type' => 'string',
        'format' => 'date-time',
        'nullable' => true,
    ];

    public $milestoneDetails = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Milestones.DestinyPublicMilestone',
            ],
        ],
        'description' => 'A destiny event does not necessarily have a related Milestone, but if it does the details will be returned here.',
    ];

    public $eventContent = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Milestones.DestinyMilestoneContent',
            ],
        ],
        'description' => 'A destiny event will not necessarily have milestone "custom content", but if it does the details will be here.',
    ];


}

