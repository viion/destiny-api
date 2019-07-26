<?php

namespace Destiny2\Api\Objects\Forum\PostResponse;

/**
 * PostResponse
 *
 * No description
 */
class PostResponse
{

    const TYPE = 'object';

    public $lastReplyTimestamp = [
        'type' => 'string',
        'format' => 'date-time',
    ];

    public $IsPinned = [
        'type' => 'boolean',
    ];

    public $urlMediaType = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Forum.ForumMediaType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $thumbnail = [
        'type' => 'string',
    ];

    public $popularity = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Forum.ForumPostPopularity',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $isActive = [
        'type' => 'boolean',
    ];

    public $isAnnouncement = [
        'type' => 'boolean',
    ];

    public $userRating = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $userHasRated = [
        'type' => 'boolean',
    ];

    public $userHasMutedPost = [
        'type' => 'boolean',
    ];

    public $latestReplyPostId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $latestReplyAuthorId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $ignoreStatus = [
        '$ref' => '#/components/schemas/Ignores.IgnoreResponse',
    ];

    public $locale = [
        'type' => 'string',
    ];


}

