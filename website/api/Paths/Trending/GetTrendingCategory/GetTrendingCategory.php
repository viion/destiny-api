<?php

namespace Destiny2\Api\Paths\Trending\GetTrendingCategory;

/**
 * GetTrendingCategory
 *
 * Returns paginated lists of trending items for a category.
 */
class GetTrendingCategory
{

    const SUMMARY = 'Trending.GetTrendingCategory';

    const URI = '/Trending/Categories/{categoryId}/{pageNumber}/';

    const METHOD = 'GET';

    const TAGS = [
        'Trending',
    ];

    const OPERATION_ID = 'Trending.GetTrendingCategory';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/SearchResultOfTrendingEntry',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

