<?php

namespace Destiny2\Api\Objects\Trending\TrendingEntrySupportArticle;

/**
 * TrendingEntrySupportArticle
 *
 * No description
 */
class TrendingEntrySupportArticle
{

    const TYPE = 'object';

    public $article = [
        '$ref' => '#/components/schemas/Content.ContentItemPublicContract',
    ];


}

