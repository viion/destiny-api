<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * DestinyActivityDifficultyTier
 */
class DestinyActivityDifficultyTier
{

    const NAME = 'Destiny.DestinyActivityDifficultyTier';

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

