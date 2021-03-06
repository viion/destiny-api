<?php

namespace Destiny2\Api\Enums\Destiny\Definitions\Milestones\DestinyMilestoneType;

/**
 * DestinyMilestoneType
 *
 * The type of milestone. Milestones can be Tutorials,
 * one-time/triggered/non-repeating but not necessarily tutorials, or Repeating
 * Milestones.
 */
class DestinyMilestoneType
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
        '4',
        '5',
    ];

    const ENUMS = [
        'Unknown' => '0',
        'Tutorial' => '1',
        'OneTime' => '2',
        'Weekly' => '3',
        'Daily' => '4',
        'Special' => '5',
    ];


}

