<?php

namespace Destiny2\Api\Objects\Forum;

/**
 * PollResult
 */
class PollResult
{

    const NAME = 'Forum.PollResult';

    const TYPE = 'object';

    public $answerText = [
        'type' => 'string',
    ];

    public $answerSlot = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $lastVoteDate = [
        'type' => 'string',
        'format' => 'date-time',
    ];

    public $votes = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $requestingUserVoted = [
        'type' => 'boolean',
    ];


}

