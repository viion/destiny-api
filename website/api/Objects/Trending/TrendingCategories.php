<?php

namespace Destiny2\Api\Objects\Trending;

/**
 * TrendingCategories
 */
class TrendingCategories
{

    const NAME = 'Trending.TrendingCategories';

    const TYPE = 'object';

    public $categories = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Trending.TrendingCategory',
        ],
    ];


}

