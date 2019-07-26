<?php

namespace Destiny2\Api\Objects\Destiny\Milestones\DestinyMilestoneContent;

/**
 * DestinyMilestoneContent
 *
 * Represents localized, extended content related to Milestones. This is
 * intentionally returned by a separate endpoint and not with Character-level
 * Milestone data because we do not put localized data into standard Destiny
 * responses, both for brevity of response and for caching purposes. If you really
 * need this data, hit the Milestone Content endpoint.
 */
class DestinyMilestoneContent
{

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

