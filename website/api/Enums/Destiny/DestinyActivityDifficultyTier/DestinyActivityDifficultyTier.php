<?php

namespace Destiny2\Api\Enums\Destiny\DestinyActivityDifficultyTier;

/**
 * DestinyActivityDifficultyTier
 *
 * An enumeration representing the potential difficulty levels of an activity.
 * Their names are... more qualitative than quantitative.
 */
class DestinyActivityDifficultyTier
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
        '6',
        '7',
    ];

    const ENUMS = [
        'Trivial' => '0',
        'Easy' => '1',
        'Normal' => '2',
        'Challenging' => '3',
        'Hard' => '4',
        'Brave' => '5',
        'AlmostImpossible' => '6',
        'Impossible' => '7',
    ];


}

