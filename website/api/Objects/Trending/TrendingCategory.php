<?php

namespace Destiny2\Api\Objects\Trending;

/**
 * TrendingCategory
 */
class TrendingCategory
{

    const NAME = 'Trending.TrendingCategory';

    const TYPE = 'object';

    public $categoryName = [
        'type' => 'string',
    ];

    public $entries = [
        '$ref' => '#/components/schemas/SearchResultOfTrendingEntry',
    ];

    public $categoryId = [
        'type' => 'string',
    ];


}

