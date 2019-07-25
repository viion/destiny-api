<?php

namespace Destiny2\Api\Objects\Trending;

/**
 * TrendingDetail
 */
class TrendingDetail
{

    const NAME = 'Trending.TrendingDetail';

    const TYPE = 'object';

    public $identifier = [
        'type' => 'string',
    ];

    public $entityType = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Trending.TrendingEntryType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $news = [
        '$ref' => '#/components/schemas/Trending.TrendingEntryNews',
    ];

    public $support = [
        '$ref' => '#/components/schemas/Trending.TrendingEntrySupportArticle',
    ];

    public $destinyItem = [
        '$ref' => '#/components/schemas/Trending.TrendingEntryDestinyItem',
    ];

    public $destinyActivity = [
        '$ref' => '#/components/schemas/Trending.TrendingEntryDestinyActivity',
    ];

    public $destinyRitual = [
        '$ref' => '#/components/schemas/Trending.TrendingEntryDestinyRitual',
    ];

    public $creation = [
        '$ref' => '#/components/schemas/Trending.TrendingEntryCommunityCreation',
    ];

    public $stream = [
        '$ref' => '#/components/schemas/Trending.TrendingEntryCommunityStream',
    ];


}

