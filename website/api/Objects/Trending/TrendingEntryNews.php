<?php

namespace Destiny2\Api\Objects\Trending;

/**
 * TrendingEntryNews
 */
class TrendingEntryNews
{

    const NAME = 'Trending.TrendingEntryNews';

    const TYPE = 'object';

    public $article = [
        '$ref' => '#/components/schemas/Content.ContentItemPublicContract',
    ];


}

