<?php

namespace Destiny2\Api\Objects\Trending\TrendingCategory;

/**
 * TrendingCategory
 *
 * No description
 */
class TrendingCategory
{

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

