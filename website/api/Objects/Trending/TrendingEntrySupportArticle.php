<?php

namespace Destiny2\Api\Objects\Trending;

/**
 * TrendingEntrySupportArticle
 */
class TrendingEntrySupportArticle
{

    const NAME = 'Trending.TrendingEntrySupportArticle';

    const TYPE = 'object';

    public $article = [
        '$ref' => '#/components/schemas/Content.ContentItemPublicContract',
    ];


}

