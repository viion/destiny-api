<?php

namespace Destiny2\Api\Trending;

/**
 * Returns paginated lists of trending items for a category.
 */
class GetTrendingCategory
{
    const NAME           = 'Trending.GetTrendingCategory';
    const URI            = '/Trending/Categories/{categoryId}/{pageNumber}/';
    const METHOD         = 'GET';
    const TAGS           = 'Trending';
    const OPERATION_ID   = 'Trending.GetTrendingCategory';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/SearchResultOfTrendingEntry'
    ];

    public static function build()
    {

    }
}
