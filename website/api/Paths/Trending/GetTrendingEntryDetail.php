<?php

namespace Destiny2\Api\Paths\Trending;

/**
 * GetTrendingEntryDetail
 *
 * Returns the detailed results for a specific trending entry. Note that trending
 * entries are uniquely identified by a combination of *both* the TrendingEntryType
 * *and* the identifier: the identifier alone is not guaranteed to be globally
 * unique.
 */
class GetTrendingEntryDetail
{

    const NAME = 'Trending.GetTrendingEntryDetail';

    const URI = '/Trending/Details/{trendingEntryType}/{identifier}/';

    const METHOD = 'GET';

    const TAGS = [
        'Trending',
    ];

    const OPERATION_ID = 'Trending.GetTrendingEntryDetail';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/Trending.TrendingDetail',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

