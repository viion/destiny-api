<?php

namespace Destiny2\Api\Paths\Forum\GetPoll;

/**
 * GetPoll
 *
 * Gets the specified forum poll.
 */
class GetPoll
{

    const SUMMARY = 'Forum.GetPoll';

    const URI = '/Forum/Poll/{topicId}/';

    const METHOD = 'GET';

    const TAGS = [
        'Forum',
    ];

    const OPERATION_ID = 'Forum.GetPoll';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/Forum.PostSearchResponse',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

