<?php

namespace Destiny2\Api\Objects\Community\CommunityLiveStatus;

/**
 * CommunityLiveStatus
 *
 * No description
 */
class CommunityLiveStatus
{

    const TYPE = 'object';

    public $dateStatusUpdated = [
        'type' => 'string',
        'format' => 'date-time',
    ];

    public $url = [
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

    public $thumbnail = [
        'type' => 'string',
    ];

    public $thumbnailSmall = [
        'type' => 'string',
    ];

    public $thumbnailLarge = [
        'type' => 'string',
    ];

    public $destinyCharacterId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $userInfo = [
        '$ref' => '#/components/schemas/User.UserInfoCard',
    ];

    public $currentActivityHash = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $dateLastPlayed = [
        'type' => 'string',
        'format' => 'date-time',
    ];

    public $dateStreamStarted = [
        'type' => 'string',
        'format' => 'date-time',
    ];

    public $locale = [
        'type' => 'string',
    ];

    public $currentViewers = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $followers = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $overallViewers = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $isFeatured = [
        'type' => 'boolean',
    ];

    public $title = [
        'type' => 'string',
    ];

    public $activityModeHash = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $dateFeatured = [
        'type' => 'string',
        'format' => 'date-time',
        'nullable' => true,
    ];

    public $trendingValue = [
        'type' => 'number',
        'format' => 'float',
    ];

    public $isSubscribable = [
        'type' => 'boolean',
    ];


}

