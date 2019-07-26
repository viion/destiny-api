<?php

namespace Destiny2\Api\Objects\Trending\TrendingEntryDestinyActivity;

/**
 * TrendingEntryDestinyActivity
 *
 * No description
 */
class TrendingEntryDestinyActivity
{

    const TYPE = 'object';

    public $activityHash = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $status = [
        '$ref' => '#/components/schemas/Destiny.Activities.DestinyPublicActivityStatus',
    ];


}

