<?php

namespace Destiny2\Api\Enums\Forum;

/**
 * ForumTopicsSortEnum
 */
class ForumTopicsSortEnum
{

    const NAME = 'Forum.ForumTopicsSortEnum';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'byte';

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
        'Default' => '0',
        'LastReplied' => '1',
        'MostReplied' => '2',
        'Popularity' => '3',
        'Controversiality' => '4',
        'Liked' => '5',
        'HighestRated' => '6',
        'MostUpvoted' => '7',
    ];


}

