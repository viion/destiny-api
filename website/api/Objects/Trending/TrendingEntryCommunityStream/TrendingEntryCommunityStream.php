<?php

namespace Destiny2\Api\Objects\Trending\TrendingEntryCommunityStream;

/**
 * TrendingEntryCommunityStream
 *
 * No description
 */
class TrendingEntryCommunityStream
{

    const TYPE = 'object';

    public $image = [
        'type' => 'string',
    ];

    public $title = [
        'type' => 'string',
    ];

    public $partnershipIdentifier = [
        'type' => 'string',
    ];

    public $partnershipType = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Partnerships.PartnershipType',
        ],
        'x-enum-is-bitmask' => false,
    ];


}

