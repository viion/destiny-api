<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Milestones.DestinyMilestoneContent
 */
class Milestones.DestinyMilestoneContent
{

    const NAME = 'Destiny.Milestones.DestinyMilestoneContent';

    const TYPE = 'object';

    public $about = [
        'type' => 'string',
        'description' => 'The "About this Milestone" text from the Firehose.',
    ];

    public $status = [
        'type' => 'string',
        'description' => 'The Current Status of the Milestone, as driven by the Firehose.',
    ];

    public $tips = [
        'type' => 'array',
        'items' => [
            'type' => 'string',
        ],
        'description' => 'A list of tips, provided by the Firehose.',
    ];

    public $itemCategories = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Milestones.DestinyMilestoneContentItemCategory',
        ],
        'description' => 'If DPS has defined items related to this Milestone, they can categorize those items in the Firehose. That data will then be returned as item categories here.',
    ];


}

