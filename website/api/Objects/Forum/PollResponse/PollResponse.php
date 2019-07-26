<?php

namespace Destiny2\Api\Objects\Forum\PollResponse;

/**
 * PollResponse
 *
 * No description
 */
class PollResponse
{

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

