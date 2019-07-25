<?php

namespace Destiny2\Api\Paths\Trending;

/**
 * GetTrendingCategories
 *
 * Returns trending items for Bungie.net, collapsed into the first page of items
 * per category. For pagination within a category, call GetTrendingCategory.
 */
class GetTrendingCategories
{

    const NAME = 'Trending.GetTrendingCategories';

    const URI = '/Trending/Categories/';

    const METHOD = 'GET';

    const TAGS = [
        'Trending',
    ];

    const OPERATION_ID = 'Trending.GetTrendingCategories';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/Trending.TrendingCategories',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

