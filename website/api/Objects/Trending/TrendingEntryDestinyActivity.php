<?php

namespace Destiny2\Api\Objects\Trending;

/**
 * TrendingEntryDestinyActivity
 */
class TrendingEntryDestinyActivity
{

    const NAME = 'Trending.TrendingEntryDestinyActivity';

    const TYPE = 'object';

    public $activityHash = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $status = [
        '$ref' => '#/components/schemas/Destiny.Activities.DestinyPublicActivityStatus',
    ];


}

