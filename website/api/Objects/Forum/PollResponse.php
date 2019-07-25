<?php

namespace Destiny2\Api\Objects\Forum;

/**
 * PollResponse
 */
class PollResponse
{

    const NAME = 'Forum.PollResponse';

    const TYPE = 'object';

    public $topicId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $results = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Forum.PollResult',
        ],
    ];

    public $totalVotes = [
        'type' => 'integer',
        'format' => 'int32',
    ];


}

