<?php

namespace Destiny2\Api\Paths\Forum\GetTopicForContent;

/**
 * GetTopicForContent
 *
 * Gets the post Id for the given content item's comments, if it exists.
 */
class GetTopicForContent
{

    const SUMMARY = 'Forum.GetTopicForContent';

    const URI = '/Forum/GetTopicForContent/{contentId}/';

    const METHOD = 'GET';

    const TAGS = [
        'Forum',
    ];

    const OPERATION_ID = 'Forum.GetTopicForContent';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/int64',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}

