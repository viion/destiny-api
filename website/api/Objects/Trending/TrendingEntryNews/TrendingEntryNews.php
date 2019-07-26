<?php

namespace Destiny2\Api\Objects\Trending\TrendingEntryNews;

/**
 * TrendingEntryNews
 *
 * No description
 */
class TrendingEntryNews
{

    const TYPE = 'object';

    public $article = [
        '$ref' => '#/components/schemas/Content.ContentItemPublicContract',
    ];


}

