<?php

namespace Destiny2\Api\Enums\Trending\TrendingEntryType;

/**
 * TrendingEntryType
 *
 * The known entity types that you can have returned from Trending.
 */
class TrendingEntryType
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
        '8',
        '9',
        '10',
        '11',
    ];

    const ENUMS = [
        'News' => '0',
        'DestinyItem' => '1',
        'DestinyActivity' => '2',
        'DestinyRitual' => '3',
        'SupportArticle' => '4',
        'Creation' => '5',
        'Stream' => '6',
        'Update' => '7',
        'Link' => '8',
        'ForumTag' => '9',
        'Container' => '10',
        'Release' => '11',
    ];


}

