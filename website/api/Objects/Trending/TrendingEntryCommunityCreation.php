<?php

namespace Destiny2\Api\Objects\Trending;

/**
 * TrendingEntryCommunityCreation
 */
class TrendingEntryCommunityCreation
{

    const NAME = 'Trending.TrendingEntryCommunityCreation';

    const TYPE = 'object';

    public $media = [
        'type' => 'string',
    ];

    public $title = [
        'type' => 'string',
    ];

    public $author = [
        'type' => 'string',
    ];

    public $authorMembershipId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $postId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $body = [
        'type' => 'string',
    ];

    public $upvotes = [
        'type' => 'integer',
        'format' => 'int32',
    ];


}

