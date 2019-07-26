<?php

namespace Destiny2\Api\Paths\Forum\GetPostAndParent;

/**
 * GetPostAndParent
 *
 * Returns the post specified and its immediate parent.
 */
class GetPostAndParent
{

    const SUMMARY = 'Forum.GetPostAndParent';

    const URI = '/Forum/GetPostAndParent/{childPostId}/';

    const METHOD = 'GET';

    const TAGS = [
        'Forum',
    ];

    const OPERATION_ID = 'Forum.GetPostAndParent';

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

