<?php

namespace Destiny2\Api\Objects\Content;

/**
 * CommentSummary
 */
class CommentSummary
{

    const NAME = 'Content.CommentSummary';

    const TYPE = 'object';

    public $topicId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $commentCount = [
        'type' => 'integer',
        'format' => 'int32',
    ];


}

