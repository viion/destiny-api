<?php

namespace Destiny2\Api\Objects\Trending\TrendingCategories;

/**
 * TrendingCategories
 *
 * No description
 */
class TrendingCategories
{

    const TYPE = 'object';

    public $categories = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Trending.TrendingCategory',
        ],
    ];


}

