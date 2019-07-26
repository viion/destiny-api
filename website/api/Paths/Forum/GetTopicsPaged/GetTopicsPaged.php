<?php

namespace Destiny2\Api\Paths\Forum\GetTopicsPaged;

/**
 * GetTopicsPaged
 *
 * Get topics from any forum.
 */
class GetTopicsPaged
{

    const SUMMARY = 'Forum.GetTopicsPaged';

    const URI = '/Forum/GetTopicsPaged/{page}/{pageSize}/{group}/{sort}/{quickDate}/{categoryFilter}/';

    const METHOD = 'GET';

    const TAGS = [
        'Forum',
    ];

    const OPERATION_ID = 'Forum.GetTopicsPaged';

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

