<?php

namespace Destiny2\Api\Paths\Forum\GetCoreTopicsPaged;

/**
 * GetCoreTopicsPaged
 *
 * Gets a listing of all topics marked as part of the core group.
 */
class GetCoreTopicsPaged
{

    const SUMMARY = 'Forum.GetCoreTopicsPaged';

    const URI = '/Forum/GetCoreTopicsPaged/{page}/{sort}/{quickDate}/{categoryFilter}/';

    const METHOD = 'GET';

    const TAGS = [
        'Forum',
    ];

    const OPERATION_ID = 'Forum.GetCoreTopicsPaged';

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

