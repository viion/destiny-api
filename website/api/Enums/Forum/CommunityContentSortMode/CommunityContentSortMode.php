<?php

namespace Destiny2\Api\Enums\Forum\CommunityContentSortMode;

/**
 * CommunityContentSortMode
 *
 * No description
 */
class CommunityContentSortMode
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'byte';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
    ];

    const ENUMS = [
        'Trending' => '0',
        'Latest' => '1',
        'HighestRated' => '2',
    ];


}

