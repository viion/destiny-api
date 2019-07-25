<?php

namespace Destiny2\Api\Enums\Community;

/**
 * CommunityStatusSort
 */
class CommunityStatusSort
{

    const NAME = 'Community.CommunityStatusSort';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '3',
    ];

    const ENUMS = [
        'Viewers' => '0',
        'Trending' => '1',
        'OverallViewers' => '2',
        'Followers' => '3',
    ];


}

